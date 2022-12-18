<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Menu;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function task(Request $request){
        $task = new Task();
        $task->task_number = 'Task:'. uniqid();
        $task->task_assign = $request->task_assign;
        $task->task_start = $request->task_start;
        $task->task_end = $request->task_end;
        $task->task_time = $request->task_time;
        $task->task_work = $request->task_work;
        $task->task_place = $request->task_place;
        $task->save();
        return redirect()->back()->with('success', 'Task Added');
    }

    function brand(Request $request){
        $brand = new Brand();
        $brand->brand = $request->brand;
        $brand->save();
        return redirect()->back()->with('success', 'Brand Name added');
    }

    function menu(Request $request){
        $brand = new Menu();
        $brand->brand_name = $request->brand_name;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->back()->with('success', 'Brand Name added');
    }
}
