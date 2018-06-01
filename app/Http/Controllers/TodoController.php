<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = Todo::create([
            'title' => $request['title'],
            'priority' => $request['priority'],
            'completed' => $request['completed'],
            'user_id' => 1
        ]);

        return $todo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function show(Todos $todos)
    {
        return Todo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function edit(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	\Log::info($id);
        $todo = Todo::find($id);
        $todo->update([
        	'title' => $request['title'],
        	'priority' => $request['priority'],
            'completed' => $request['completed'],
        ]);
        return $todo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return Todo::all();
    }
}
