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
    public function show($id){
        $teacher = teacher::findOrFail($id);
        return view('details',[
            'teacher'=> $teacher
        ]);
    }

    public function create(){
        return view('create');
    }
    public function insert(){

    }
}
