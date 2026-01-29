<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Mostra la llista
    public function index() {
        $todos = Todo::latest()->get();
        return view("todos.index", compact("todos"));
    }

    public function store(Request $request) {
        if ($request->has("title") || trim($request->title) === '') {
            return back();
        }

        Todo::create([
            "title"=> $request->title,
        ]);

        return redirect()->back();
    }

    public function toggle(Todo $todo) {
        $todo->completed = !$todo->completed;
        $todo->save();

        return redirect()->back();
    }

    public function destroy(Todo $todo) {
        $todo->delete();
        return redirect()->back();
    }
}
