<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function create()
    {


        return view('create');
    }

    public function index()
    {
        $id=auth()->user()->id;
        $data = DB::table('tasks')
        ->select('tasks.*')
        ->where('user_id',$id)
        ->get(); // get all data from tasks table

    return view('index', ['data' => $data]);


    }

    public function store(Request $request)
    {
        $data =   $this->validate($request, [
            "title"    => "required | min:10 | max : 150",
            "content"  => "required|min:30 | max:15000",
            "start_date"     => "required|date",
            "end_date"     => "required|date",
            "image"    => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        # Uploading the image to the server
        $imageName = time() . uniqid() . '.' . $request->image->extension();

        $request->image->move(public_path('uploads'), $imageName);

        $data['image'] = $imageName;

         # Convert data to timestamp
         $data['start_date'] = strtotime($data['start_date']);
         $data['end_date'] = strtotime($data['end_date']);

       $data['user_id'] = auth()->user()->id;

        // DB Query Builder . . .
        $op =   DB::table('tasks')->insert($data);

        if ($op) {
            $message = "Task Created Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "Task Not Created";
            session()->flash('Message-error', $message);
        }

        return redirect(url('create'));
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);

        $op =   Task::where('id', $request->id)->delete();   // delete from Tasks where id = $id
            //dd($request->id);
        if ($op) {

            # Remove image . . .
            unlink(public_path('uploads/' . $task->image));

            $message = "Task Removed Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "Task Not Removed";
            session()->flash('Message-error', $message);
        }

        return redirect(url('index'));

    }
}
