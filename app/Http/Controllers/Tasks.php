<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Task;

/**
 * * @return \Illuminate\Http\Response
*/

class Tasks extends Controller {
public function index() {
    $tasks = Task::all();

    return view("tasks.index", compact('tasks'));
}
public function store(Request $request)
{
    $request->validate([
      'title'=>'required',
      'details'=>'required',
    ]);

    $contact = new Task([
        'title'=> $request->get('title'),
        'details'=> $request->get('details')
    ]);
   $contact->save();
   return redirect('/tasks')->with('success', 'Task saved!');
}

function create() 
{
    return view('tasks.create');
}

function edit($id)
{
    $task = Task::find($id);
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title'=>'required',
        'details'=>'required'
    ]);

    $task = Task::find($id);
    $task->title = $request->get('title');
    $task->details = $request->get('details');
    $task->save();
    
    return redirect('/tasks')->with('success', 'Task updated');
}
/**
 * @param \Illuminate\Http\Request $_request
 * @return \Illuminate\Http\Response
 *  */ 

/**
 * Display the specified resource
 * 
 * @param int $id
 * @reeturn \Illuminate\Http\Response
 */

public function destroy($id)
{
    $task = Task::find($id);
    $task->delete();

    return redirect('/tasks')->with('success', 'Contact deleted!');
}

} 