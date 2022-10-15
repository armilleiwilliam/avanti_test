<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TodoItemController extends Controller
{

    public function index(): View
    {
        $todoList = TodoItem::all();
        return view("front.todo_list")->with(["todoList" => $todoList]);
    }

    public function add(): View
    {
        return view('front.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            "subject" => "required|max:255",
            "description" => "max:500|nullable",
            "priority" => "required|nullable",
            "startAt" => "date|nullable",
            "finishAt" => "date|nullable"
        ]);

        $todoItem = new TodoItem();
        $todoItem->subject = $request->subject;
        $todoItem->description = $request->description;
        $todoItem->priority = $request->priority;
        $todoItem->start_at = $request->startAt;
        $todoItem->finish_at = $request->finishAt;
        $todoItem->user_id = $request->user()->id;
        $todoItem->save();

        return redirect("/dashboard")->with("success" , "Item added");

    }

    public function edit(TodoItem $todoItem): View
    {
        if(Auth::user()->cannot('update', $todoItem)){
            abort(403);
        }

        $todoItem = TodoItem::findOrFail($todoItem);
        return view("front.edit")->with(["todoItem" => $todoItem]);
    }
}
