@extends('layouts.app')
@section('content')
    <div>
        <div>
            <h2>modification des enseignants</h2>
        </div>
        
        <form method="POST" action="#">
            @csrf
            <input type="radio" name="gender" id="male" value="m">homme
            <input type="radio" name="gender" id="female" value="f">femme
            <input type="radio" name="gender" id="other" value="o">autre

            Nom:<input type="text" name="name" id="" value= {{$teacher->Name}}>
            Prénom: <input type="text" name="Firstname"value= {{$teacher->Firstame}}>
            surnom:<input type="text" name="Nickname" value= {{$teacher->Nickame}}>
            <textarea name="Origin" id="" cols="30" rows="10">{{$teacher->Origin}}</textarea>
            <select name="Section" id="">
                <option value="1">informatique</option>
                <option value="2">mécanique</option>
            </select>
            <button type="submit" class="bg-green-500">modifier</button>
        </form>
     
    </div>
@endsection
