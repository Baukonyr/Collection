<?php

namespace App\Http\Controllers;

use App\Project;
use App\Counterparty;
use App\ContactType;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

				$array = Project::whereHas('counterparty', function($q){
					$user = Auth::id();
					$q->where('user_id', $user);
				})->where('status_id', 1)->get();
				
				$totalTask = 0;
				
				foreach($array as $item){
					$item->countTask = $item->getCountTask();
					$totalTask +=  $item->countTask;
				}
				
				$totalProject = count($array);
				return view('backend.Project.ProjectIndex')->with(['projects' => $array,
																													 'totalProject' => $totalProject, 
																													 'totalTask' => $totalTask]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				$counterparty = Counterparty::all();
				return view('backend.Project.ProjectCreate')->with(['counterparty' => $counterparty]);
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
				$data = $request->input('data');
				$data['status_id'] = 1;

				$object = new Project();
				$object->fill($data);

				if($object->save()){
					return redirect()->route('Project.index');
				}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
				$object = Project::findOrFail($id);
				$object->load('counterparty');
				$object->counterparty->load('contact', 'address');
				$object->activeTask = $object->getActiveTask();
				$contactType = ContactType::all();
				//dd($object);
				return view('backend.Project.ProjectShow')->with(['object' => $object, 'contactType' => $contactType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
				$object = Project::findOrFail($id);
				$object->dateStart = str_replace(' ', 'T', $object->dateStart);
				$object->dateEnd = str_replace(' ', 'T', $object->dateEnd);
				
				$counterparty = Counterparty::all();
				return view('backend.Project.ProjectEdit')->with(['object' => $object, 'counterparty' => $counterparty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
				
				$object = Project::findOrFail($id);

				$object->fill($request->input('data'));

				$object->update();
				
				return redirect()->route('Project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
				
/* 				$project = Project::findOrFail($id);
				$project->task()->delete();
				$result = $project->delete();
				
				if($result){
					return redirect()->route('Project.index');
				} */
				
    }
}
