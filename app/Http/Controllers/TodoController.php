<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        return view('todolist');
    }

    public function add(Request $request) {
        Todo::create([
            'content' => $request->content
        ]);

        return redirect()->route('todo.init');
    }

}