<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use auth;
use App\Models\Timeline;
use App\Models\User;


class TimelineController 
{
        public function savetimeline(Request $request){
            $incomingfields = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
                'start_date'  => 'required|date|before_or_equal:finished_date',
                'finished_date'    => 'required|date|after_or_equal:start_date'
            ]);
            $incomingfields['user_id'] = auth()->user()->id;
            $incomingfields['divisi'] = auth()->user()->divisi;
            Timeline::create($incomingfields);
            return redirect('/timeline');
        }
        public function showtimeline(){
        $userdivisi = auth()->user()->divisi;
        if($userdivisi == 'BPH' || $userdivisi == 'GRAMTI'){
            $timelines = Timeline::orderBy('start_date','asc')->get();
        }
        else{
        $timelines = Timeline::where('divisi',$userdivisi)->orderBy('start_date','asc')->get();
        }
        return view('layouts.timeline',['timelines'=>$timelines]);
    }
    public function addtimelineview(){
        return view('layouts.maketimeline');    
    }
    public function edittimelineview($id){
        $timeline = Timeline::findOrFail($id);
        return view('layouts.edittimeline',['timeline' => $timeline]);    
    }
    public function updatetimeline(Request $request, $id){
        $incomingfields = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
                'start_date'  => 'required|date|before_or_equal:finished_date',
                'finished_date'    => 'required|date|after_or_equal:start_date'
            ]);
            Timeline::where('id', $id)->update([
                'title' => $incomingfields['title'],
                'description' => $incomingfields['description'],
                'status' => $incomingfields['status'],
                'start_date' => $incomingfields['start_date'],
                'finished_date' => $incomingfields['finished_date']
            ]);
            return redirect('/timeline')->with('success', 'Timeline berhasil diupdate');
    }
    public function deletetimeline($id){
        Timeline::findOrFail($id)->delete();
        return redirect('/timeline')->with('success', 'Timeline berhasil dihapus');
    }
}
