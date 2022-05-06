@extends('layouts.app')
@section('content')
    <div class="text-4xl"> teacher add</div>
    <div>
        <form method="POST" action="{{route('teacher.store')}}">
            @csrf
            <input type="radio" name="gender" id="male" value="m">homme
            <input type="radio" name="gender" id="female" value="f">femme
            <input type="radio" name="gender" id="other" value="o">autre

            Nom:<input type="text" name="name" id="">
            Prénom: <input type="text" name="Firstname">
            surnom:<input type="text" name="Nickname">
            <textarea name="Origin" id="" cols="30" rows="10">Origin</textarea>
            <select name="Section" id="">
                <option value="informatique">informatique</option>
                <option value="mecanique">mécanique</option>
            </select>
            <button type="submit" class="bg-green-500">ajouter</button>
        </form>
    </div>
@endsection
