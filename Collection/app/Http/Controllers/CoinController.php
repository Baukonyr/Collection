<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Coin;
//use Storage;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
				$user = Auth::id();
				//dd($user);
				
				//$array = Coin::where('user_id', $user)->get();
				
				$array = Coin::where('user_id', $user)->with(['cost' => function($query){
					$query->where('status', 1);
				}])->get();
				

				if(count($array) > 0){
					$array_coin = $array;
				}else{
					$array_coin = null;
				}
				
				//dd($array_coin);
				
				return view('Backend.Coin.Coin')->with('array_coin', $array_coin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('backend.Coin.CoinCreate');
    }
		
		/**
		* Show coin details
		*
		*
		*/
		public function details($id){
			
			$coin = Coin::findOrFail($id);
			$coin->cost;
			
			foreach($coin->cost as $cost){
				if($cost->status === 1){
					$coin->presentValue = $cost->costs;
				}
			}
			
			$coin->image = '/storage' . Storage::url($coin->picture);
			//dd($coin);
			return view('Backend.Coin.CoinDeteils')->with('coin', $coin);
			
		}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
				//dd($request);
				$cost['costs'] = $request->cost;
				$cost['status'] = 1;
				
				$data = $request->array;
				
				if($request->file('photo') !== Null){
					
					$file = $request->file('photo');
					
					$fileName = Auth::id() . '.' . $data['name'] . '-' .date('Y-m-d-H-i-s') . '.' . 'jpeg';
					
					Storage::disk('public')->putFileAs('/storage',$file, $fileName);
					
					$data['picture'] = $fileName;
					
				}else{
					$data['picture'] = 'Фото нет';
				}
				
				$data['user_id'] = Auth::id();
				
				
				if(!isset($data['defects'])){
					$data['defects'] = 0;
					$data['description_defects'] = 0;
				}else{
					$data['defects'] = 1;
				}
				
				if(!isset($data['restoration'])){
					$data['restoration'] = 0;
					$data['description_restoration'] = 0;
				}else{
					$data['restoration'] = 1;
				}
				
				$coin = new Coin;
				
				$coin->fill($data);
				
				//dd($coin);
				
				if($coin->save()){
					
					$coin->cost()->create($cost);
					
					return redirect()->route('coin.index');
					
				}else{
					
					return 'Ошибка';
					
				}
				
				
				
				
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
				$coin = Coin::findOrFail($id);
				
				$result = Storage::disk('public')->delete('/storage/' . $coin->picture);
				$coin->cost()->delete();
				
				$coin->delete();
				
				return redirect()->route('coin.index');
    }
}
