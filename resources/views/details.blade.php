@extends('layouts.app')
@section('content')
    <div>
        <h3> Détail: {{ $teacher->Firstname }} {{ $teacher->Name }}</h3> sexe:{{ $teacher->Gender }}
    </div>

    <p> Surnom: {{ $teacher->Nickname }}</p>
    <p>{{ $teacher->Origin }}</p>
    
@endsection
