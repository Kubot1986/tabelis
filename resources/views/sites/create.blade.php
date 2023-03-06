@extends('layouts.app')

@section('content')

    <H1 class="block mb-2 text-xl font-extrabold text-gray-900 dark:text-yellow-300 ">CREATE NEW SITE</H1>


    <form method="post" action="{{ route('sites.store') }}">
        @csrf
        <div class="mb-3 w-1/4">

            <input type="text" name="site_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Objekto pavadinimas" required>
        </div>
        <div class="mb-3 w-1/4">

            <input type="date" name="site_start_date" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Objekto pradzios data" >
        </div>
        <div class="mb-3 w-1/4">

            <input type="date" name="site_end_date" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Objekto pabaigos data" >
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CREATE</button>
    </form>
@endsection
