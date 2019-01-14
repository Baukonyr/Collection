<?php

namespace App\Http\Controllers;

use App\Counterparty;
use App\Address;
use App\Contact;
use App\ContactType;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CounterpartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
				$id = Auth::id();
				$array = Counterparty::where(['user_id' => $id])->get();
				
				return view('backend.Counterparties.CounterpartiesIndex')->with(['array' => $array]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('backend.Counterparties.CounterpartiesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

				$id = Auth::id();

				$counterparties = $request->input('data.data');
				$counterparties['user_id'] = $id;
				$counterparties['status_id'] = 1;
				$contacts = $request->input('data.contact');
				$address = $request->input('data.address');

				
				
				foreach($contacts as $key => $array){
					foreach($array as $contact){
						$objects[] = ['type_id' => $key, 'value' => $contact];
					}
				}
				$object = Counterparty::create($counterparties);
				$object->address()->create($address);
				$object->contact()->createMany($objects);
				
				return redirect()->route('home');
				
    }		

    /**
     * Display the specified resource.
     *
     * @param  \App\Counterparties  $counterparties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

				$object = Counterparty::findOrFail($id);
				$contactType = ContactType::all();
				
				$object->load('contact', 'address', 'project');

				
				//dd($object);
				return view('backend.Counterparties.CounterpartiesShow')->with(['object' => $object, 'contactType' => $contactType]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Counterparties  $counterparties
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
				$object = Counterparty::findOrFail($id);
				$object->load('address', 'contact');
				//dd($object);
				return view('backend.Counterparties.CounterpartiesEdit')->with('object', $object);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Counterparties  $counterparties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
				$object = Counterparty::findOrFail($id);
				
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Counterparties  $counterparties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
				

    }
}
