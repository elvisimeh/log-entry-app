<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Log;

class LogController extends Controller
{
    public function create(Request $request){
        $log = new Log;

        $log->project = $request->project;
        $log->user = $request->details;
        $log->severity = $request->severity;
        $log->details = $request->details;

        $log->save();

        if($log->save()){
            return ['message'=>$log];
        }
        else{
            return ['message'=>'Operation failed'];
        }
    }


    public function all(Request $request){
        $logs=DB::table('logs')->join('severities','logs.severity','=','severities.id')
        ->join('projects','logs.project','=','projects.id')->get();

        return view('all_logs', compact('logs'));
    }

    

}
