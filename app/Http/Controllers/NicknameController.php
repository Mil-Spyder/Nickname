<?php

namespace App\Http\Controllers;

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
        $teacher= new teacher();
        $teacher->Gender=$request->gender;
        $teacher->Name =$request->name;
        $teacher->Firstname=$request->Firstname;
        $teacher->Nickname=$request->Nickname;
        $teacher->Origin=$request->Origin;
        $teacher->section_id=$request->Section;
        $teacher->save();

        dd($teacher);
    }
    public function insert()
    {
    }
}
