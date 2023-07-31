<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        //mengambil semua data tasks di model
        $tasks = Task::getAll();

        //mengirim data tasks ke view
        return view('tasks/index', [
            'tasks' => $tasks,
        ]);

    }

    public function show($id){
        $tasks = Task::find($id);

        return view('tasks.show', compact('tasks'));
    }
}
