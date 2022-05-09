@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text-2xl font-semibold text-left text-gray-800">modification des enseignants</h2>
    </div>

    <form method="post" action="#">
        @csrf
        <div class="mt-5 mb-5 mr-3">
            <input type="radio" name="gender" id="male" value="m"  @if($teacher->gender === "m") checked @endif>homme
            <input type="radio" name="gender" id="female" value="f">femme
            <input type="radio" name="gender" id="other" value="o">autre
        </div>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</label>
            <input type="text" id="nom" value="{{ $teacher->Name }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="FirstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prénom</label>
            <input type="text" id="firstname" value="{{ $teacher->Firstname }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>


        <div class="mb-6">
            <label for="NickName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Surnom</label>
            <input type="text" id="firstname" value="{{ $teacher->Nickname }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <textarea name="origin" id="origins" cols="30" rows="5" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="origin">{{ $teacher->Origin }}</textarea>
        </div>
        <div class="mb-6">
            <select name="Section" class="bg-gray-50 border-gray-300" id="">
                <option value="1">informatique</option>
                <option value="2">mécanique</option>
            </select>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
    </form>

@endsection
