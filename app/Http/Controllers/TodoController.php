<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(todo $todo)
    {
        return view('todo.index' , ['todos' => $todo::all()]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, todo $todo )
    {
        // validate

        $attribute = $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]) ;

        $todo::create($attribute);

        return redirect()->route('todo.index');




        //create
        //redirect
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        return view('todo.show' , ['todo' => $todo]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        return view('todo.edit', ['todo' => $todo]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        //authenticate
        // autherize

        // validate

        $attributes = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]) ;
        // sustain

        $todo->update($attributes) ;


        // redirect
        return redirect()->route('todo.show' , $todo) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        $todo->delete() ;
        return redirect()->route('todo.index') ;
    }
}
