<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use DB;

class TodoController extends Controller
{
    // public function display()
    // {
    //     $todos = Todo::latest()->get();
    //     return view('welcome')->with('todos',$todos);
    // }
    
    // public function save(Request $request)
    // {
    //     $title = $request->input('title');
    //     DB::insert('insert into todos (title) values (?)',[$title]);

    //     return redirect('/')->with('success','List Saved');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('welcome')->with('todos',$todos);
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
        $validateData = $request->validate([
            'title'=>'required|max:255',
        ]);

        $todo = Todo::create([
            'title' => $request->title,
            'status' => 'Todo', 'In Progress', 'Completed',
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
