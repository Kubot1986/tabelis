@extends('layouts.app')

@section('content')


    <button class="focus:outline-none text-black bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xl px-3 py-3 ml-5 mx-2 my-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="/sites/create" >CREATE SITE</a></button>


    <div class="relative pl-2 overflow-x-auto">
        <table class="w-2/4 border-black border-2 text-xl text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xl  border-black border-2 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                    #
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                    Objekto pavadinimas
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                    Objekto pradzios data
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                    Objekto pabaigos data
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($sites as $site)

                <tr class="bg-white border-b border-black border-2 text-start dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$site->id}}
                    </td>
                    <th scope="row" class="px-6 border-black border-2 text-start py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/sites/{{$site->id}}" class="font-medium text-blue-600 dark:text-orange-600 hover:underline">{{$site->site_name}}</a>
                    </th>
                    <td class="px-6 border-black border-2 text-start py-4">
                        {{$site->site_start_date}}
                    </td>
                    <td class="px-6 border-black border-2 text-start py-4">
                        {{$site->site_end_date}}
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
