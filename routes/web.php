<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', "Home")->name("todo.form");

Route::get("/todos", [TodoController::class, "allTodos"])->name("all.todo");

Route::post("/store", [TodoController::class, "storeTodo"])->name("todo.store");
