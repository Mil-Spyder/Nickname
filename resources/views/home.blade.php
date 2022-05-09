@extends('layouts.app')

@section('content')

    <h2 class="font-bold">liste des enseignants</h2>

    <table class="table-auto">
        <thead>
            <tr>
                <th class=" text-center ">
                    <h4 class="font-bold ">Nom</h4>
                </th>
                <th class=" text-center ">
                    <h4 class="font-bold">Surnom</h4>
                </th>
                <th class=" text-center ">
                    <h4 class="font-bold">Options</h4>
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($teachers->count() > 0)
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                            <p class="text-center">{{ $teacher->Firstname }} {{ $teacher->Name }}</p>
                        </td>
                        <td>
                            <p class="text-center">{{ $teacher->Nickname }}</p>
                        </td>
                        <td>
                            <ul>
                                <li><a href="{{ route('teacher.update', ['id' => $teacher->id]) }}">modifier</a></li>
                                <li><a href="#">supprimer</a></li>
                                <li><a href="{{ route('teacher.show', ['id' => $teacher->id]) }}">détails</a></li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            @else
                <span>aucune données</span>
            @endif
        </tbody>
    </table>


@endsection
