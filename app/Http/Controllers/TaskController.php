<?php

namespace App\Http\Controllers;

use App\Repository\TaskRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{
    //

    protected  $task;

    public function __construct(TaskRepository $tasks){
        $this->middleware('auth');
        $this->task = $tasks;
    }

    public function index(Request $request){
        return view("tasks.index",[ 'tasks'=> $this->task->forUser($request->user())]);
    }

    public function store(Request $request){

            $this->validate($request , ['name' => 'required|max:255']);

            $request->user()->task()->create(['name' => $request->name]);

            return redirect('/task');
    }

    public function destroy(Request $request,Task $task){
       $this->authorize('destroy',$task);
       $task->delete();
      return redirect('/task');
    }

}
