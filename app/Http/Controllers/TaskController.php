<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\tasks;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = tasks::all();
        return view('index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $request->validate([
            'task_name' =>'required',
            'task_description' =>'required',
            'task_precentage' =>'required'
        ]);


        $task = new tasks([
            'user_id'=> Auth::id(),
            'task_name'=>$request->get('task_name'),
            'task_description'=>$request->get('task_description'),
            'task_precentage'=>$request->get('task_precentage'),
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now()
        ]);
        $task->save();
        return redirect('/')->with('success', 'task has been added');
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
        
        $task = tasks::find($id);
        return view('show',compact('task'));
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
        $task = tasks::find($id);
        return view('edit',compact('task'));
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
        $request->validate([
            'task_name' =>'required',
            'task_description' =>'required',
            'task_precentage' =>'required'
        ]);

        $task = tasks::find($id);
        $task->task_name = $request->get('task_name');
        $task->task_description = $request->get('task_description');
        $task->task_precentage = $request->get('task_precentage');
        $task->save();
        return redirect('')->with('success', 'task saved!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = tasks::find($id);
        $task->delete();
        return redirect("")->with('success','task deleted!!');
    }
}
