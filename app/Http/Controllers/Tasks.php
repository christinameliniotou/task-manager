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

 function show($id)
 {
     //
 }

} 