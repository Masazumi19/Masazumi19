<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Facade\Ignition\Tabs\Tab;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
}
