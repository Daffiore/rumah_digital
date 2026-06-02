<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController
{
    public function showannouncement(){
    $announcements = Announcement::orderBy('published_at','asc')->get();
        return view('layouts.announcement',['announcements' => $announcements]);
    }
    public function addannouncement(){
        return view('layouts.makeannouncement');
    }
    public function saveannouncement(Request $request){
        $incomingfields = $request -> validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);
        $incomingfields['divisi'] = auth()->user()->divisi;
        $incomingfields['user_id'] = auth()->user()->id;
        Announcement::create($incomingfields);
        return redirect('/announcement');
    }
    public function showeditannouncement($id){
            $announcement = Announcement::findorFail($id);
            return view('layouts.editannouncement',['announcement' => $announcement]);   
    }
    public function updateannouncement(Request $request, $id){
        $incomingfields = $request -> validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);
        Announcement::where('id',$id)->update([
            'title' => $incomingfields['title'],
            'description' => $incomingfields['description'],
            'status' => $incomingfields['status']
        ]);
        return redirect('/announcement');
    }
      public function deleteannouncement($id){
        Announcement::findOrFail($id)->delete();
        return redirect('/announcement')->with('success', 'Announcement berhasil dihapus');
    }

}
