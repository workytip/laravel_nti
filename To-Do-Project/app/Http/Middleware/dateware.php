<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dateware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id= $request->id;
        $data = DB::table('tasks')
        ->select('tasks.end_date')
        ->where('id',$id)
        ->get();
        // dd($data[0]->end_date);
        // exit;
        if($data[0]->end_date > time())
        {
            return $next($request);
        }
        else
        {
            $delete_error ='can not delete expired tasks';
            session()->flash('delete_error',$delete_error);
            return back();
        }

    }
}
