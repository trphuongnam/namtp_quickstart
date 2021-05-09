<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index()
    {
        $task = Task::orderBy('id', 'DESC')->limit(5)->get();
        return view('pages/index')->with("task", $task);
    }

    function all()
    {
        $task = Task::orderBy('id', 'DESC')->get();
        return view("pages/list")->with("task", $task);
    }

    function add(Request $request)
    {
        $task = new Task();
      
        /* Check du lieu dau vao */
        $validate = $request->validate(['task'=>'required'], ['task.required'=>'Bạn phải nhập tên Task']);
        if($validate == true)
        {
            $task->name = $request->task;
            $save_task = $task->save();
            return redirect('/')->with("save_success", "Save task success");
        }else{
            redirect()->back()->withInput()->withErrors($validate);
        }
    }

    function del($id)
    {
        $get_task = Task::get()->where("id", $id)->pluck('name');
        $name_task = $get_task[0];

        $task = Task::destroy($id);
        if($task == true)
        {
            return redirect("/")->with("del_success", "Task: $name_task delete success");
    
        }else{
            return redirect("/")->with("del_not_success", "Task: $name_task delete not success");
        }
    }
}
