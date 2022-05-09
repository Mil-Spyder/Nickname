<?php

namespace App\Http\Controllers;

use App\Models\section;
use App\Models\teacher;
use Illuminate\Http\Request;

class NicknameController extends Controller
{
    public function index()
    {
        $teachers = teacher::all();
        /*
        // donné statique
        $names = [
            'jule',
            'charle'
        ];
        */
        //$nickname = ['juju', 'chacha'];
        return view('home', compact('teachers'));
    }
    public function show($id)
    {
        $teacher = teacher::findOrFail($id);
        return view('details', [
            'teacher' => $teacher
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
         /*
        //une façon de faire
        $teacher= new teacher();
        $teacher->Gender=$request->gender;
        $teacher->Name =$request->name;
        $teacher->Firstname=$request->Firstname;
        $teacher->Nickname=$request->Nickname;
        $teacher->Origin=$request->Origin;
        $teacher->section_id=$request->Section;
        $teacher->save();
        */

        //$section = section::find($id);
        //$section=$request->Section;
       
        teacher::create([
            'Gender'=>$request->gender,
            'Name'=>$request->name,
            'Firstname'=>$request->Firstname,
            'Nickname'=>$request->Nickname,
            'Origin'=>$request->Origin,
            'section_id'=>$request->Section
        ]);
        
        return view('home');
    }
    public function update($id)
    {
        $teacher = teacher::findOrFail($id);
        
        return view('update', [
            'teacher' => $teacher
        ]);
    }
}
