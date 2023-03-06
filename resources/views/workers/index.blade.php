@extends('layouts.app')

@section('content')


    <button class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xl px-3 py-3 ml-5 mx-2 my-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="/workers/create" >CREATE WORKER</a></button>


        <div class="relative pl-2  overflow-x-auto">
            <table class="w-1/2 border-black border-2 text-xl text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xl border-black border-2 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                        Vardas Pavarde
                    </th>
                    <th scope="col" class="px-6 py-3 border-black border-2 text-start">
                        Pareigos
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($workers as $worker)

                <tr class="bg-white border-black border-2  text-start dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 border-black border-2 ">
                        {{$worker->id}}
                    </td>
                    <th scope="row" class="px-6 border-black border-2 py-4 text-start font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/workers/{{$worker->id}}" class="font-medium text-blue-600 dark:text-orange-600 hover:underline">{{$worker->full_name}}</a>
                    </th>
                    <td class="px-6 py-4 border-black border-2 text-start">
                        {{$worker->role}}
                    </td>

                </tr>
                @endforeach


                </tbody>
            </table>
        </div>

@endsection
