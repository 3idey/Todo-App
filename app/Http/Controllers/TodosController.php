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
        return view('todos.index', compact('todos'));
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
        $todo = \App\Models\Todos::find($id);
        if (!$todo) {
            return redirect('/todos')->with('error', 'Todo not found');
        }
        // Check if the authenticated user is the owner of the todo
        if ($todo->user_id !== Auth::user()->id) {
            return redirect('/todos')->with('error', 'Unauthorized access');
        }
        // Pass the todo to the view
        return view('todos.update', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = \App\Models\Todos::find($id);
        if (!$todo) {
            abort(404, 'Todo not found');
        }
        $todo->update($request->validate([
            'description' => 'required|max:255',
        ]));
        return redirect('/todos');
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
