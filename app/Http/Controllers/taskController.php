<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
// use Symfony\Component\HttpFoundation\Response;
class taskController extends Controller
{
    public function index(){
        // return CalendarResource::collection(Task::all());
        return Task::all();
    }
    public function show(Task $task)
    {
        return Task::find($id);
        //return response($task, Response::HTTP_OK);
    }
    public function store(Request $request)
    {
        return Task::create($request->all());
        // $new_calendar = Task::create($request->all());
        // return response()->json([
        //     'data' => new CalendarResource($new_calendar),
        //     'message' => 'Successfully added new task!',
        //     'status' => Response::HTTP_CREATED
        // ]);
    }
    public function update(Request $request, Task $task)
    {
       return $task->update($request->all());
        // return response()->json([
        //     'data' => new CalendarResource($task),
        //     'message' => 'Successfully updated task!',
        //     'status' => Response::HTTP_ACCEPTED
        // ]);
    }
    public function delete(Request $request,$id){
        $task = Task::findorFail($id);
        $task->delete();

        return 204;
    }
}
