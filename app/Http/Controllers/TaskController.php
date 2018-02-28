<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    public function index(){
        $tasks =  Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function incomplete(){
            $tasks = Task::incomplete()->get();
            return view('tasks.index',compact('tasks'));
    }

    public function show(Task $task){
            return view('task.task',compact('task'));
    }

    public function store(){

        $this->validate(request(),[
            'user_id' => 'required|integer|max:23',
            'name' => 'required'

        ]);

        Task::create(request()->all());
        return redirect('/');
    }

    public function create(){
       return view('tasks/createTask');
    }


}


