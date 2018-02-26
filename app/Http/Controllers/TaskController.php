<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    public function index(){
        $tasks =  Task::all();
        return view('task.tasks',compact('tasks'));
    }
    public function incomplete(){
            $tasks = Task::incomplete()->get();
            return view('task.tasks',compact('tasks'));
    }

    public function show(Task $task){
            return view('task.task',compact('task'));
    }










    public function create($text){
        $task = new Task;
        $task->name = $text;
        $task->user_id= 1;
        $task->save();
return redirect('/tasks');
    }
}
