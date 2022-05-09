<?php

namespace App\Http\Controllers;

use App\Models\section;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        return view('teacher.home', compact('teachers'));
    }
    public function show($id)
    {
        $teacher = teacher::findOrFail($id);
        return view('teacher.details', [
            'teacher' => $teacher
        ]);
    }

    public function create()
    {
        return view('teacher.create');
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
            'Gender' => $request->gender,
            'Name' => $request->name,
            'Firstname' => $request->Firstname,
            'Nickname' => $request->Nickname,
            'Origin' => $request->Origin,
            'section_id' => $request->Section
        ]);

        return view('teacher.home');
    }
    public function update()
    {
        /*
        $teacher = teacher::findOrFail($id);
       
        
        return view('teacher.update', [
            'teacher'=>$teacher,
            
        ]);
        */
        // Récupère l'enseignant que l'on souhaite mettre à jour
        $teacher = Teacher::find(request()->route('id'));

        // On test le verbe HTTP pour gérer le GET (affichage du formulaire) et le POST (mise à jour de l'enseignant)
        if (request()->isMethod('post')) {

            // Validation de l'enseignant
            request()->validate([
                'firstname' => ['required'],
                'lastname'  => ['required'],
                'surname'  => ['required'],
                'gender' => ['required'],
                'sections' => ['required'],
            ]);

            // Mise à jour de l'enseignant
            $result = $teacher->update([
                'id' => $teacher->id,
                'Firstname' => request('Firstname'),
                'Name' => request('name'),
                'Nickname' => request('Nickname'),
                'Gender' => request('gender'),
                'Origin' => request('Origin'),
                'section_id' => request('Section'),
            ]);

            // Redirige sur la homepage
            if ($result) {
                return Redirect::to("/")->withSuccess("L'enseignant a été mis à jour avec succès");
            } else {
                return Redirect::to("/")->withFail("L'enseignant n'a pas été mis à jour");
            }
        } else {
            $sections = Section::all();

            // Affichage du formulaire permettant de modifier un enseignant
            return view('teacher.update', [
                'teacher' => $teacher,
                'sections' => $sections,
            ]);
        }
    }

    /**
     * Permet de supprimer un enseignant
     */
    public function delete()
    {
        // Récupère l'enseignant que l'on souhaite supprimer
        $teacher = Teacher::find(request()->route('id'));

        if ($teacher) {
            // si l'enseignant existe on tente de le supprimer
            if ($teacher->delete()) {
                return Redirect::to("/")->withSuccess("L'enseignant a été supprimé avec succès");
            } else {
                return Redirect::to("/")->withFail("Une erreur s'est produite lors de la suppression de l'enseignant");
            }
        } else {
            // si l'enseignant n'existe pas, on informe l'utilisateur
            return Redirect::to("/")->withFail("L'enseignant n'existe pas !");
        }
    }
    public function change(Request $request)
    {
        $teacher = teacher::all();
        $teacher->update([
            'Gender' => $request->gender,
            'Name' => $request->name,
            'Firstname' => $request->Firstname,
            'Nickname' => $request->Nickname,
            'Origin' => $request->Origin,
            'section_id' => $request->Section
        ]);
        return Redirect::to("")->withSuccess("Success");
    }
}
