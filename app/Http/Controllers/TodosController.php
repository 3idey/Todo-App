<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index()

    {
        // Fetch all todos for the authenticated user
        $todos = \App\Models\Todos::where('user_id', Auth::user()->id)->get();
        // Pass the todos to the view
        return view('todos.index', ['todos' => $todos]);

        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = $request->validate([
            'description' => 'required|max:255',
        ]);
        $todo['user_id'] = Auth::user()->id; // Set the user_id to the currently authenticated user
        \App\Models\Todos::create($todo);
        return redirect('/todos');
    }

    public function show($id)
    {
        return view('todos.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('todos.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the todo
        // Redirect to the index page
    }

    public function destroy($id)
    {
        // Find the todo by ID and delete it
        $todo = \App\Models\Todos::find($id);
        if ($todo) {
            $todo->delete();
        }
        return redirect('/todos');
    }
}
