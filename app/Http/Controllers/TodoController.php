<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function allTodos()
    {
        $todos = Todo::get();

        return view("Todos", compact("todos"));
    }

    public function storeTodo(Request $request)
    {
        $request->validate([
            "title" => "required",
            "detail" => "required",
            "user" => "required",
        ], [
            "title.required" => "Title is Required!",
            "detail.required" => "Detail is Required!",
            "user.required" => "User is Required!",
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->user = $request->user;
        $todo->save();

        return back()->with("msg", "Your todo added successfully");
    }
}
