@extends('layouts.app')

@section('content')


    <button class="focus:outline-none text-black bg-violet-400 hover:bg-violet-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xl px-3 py-3 ml-5 mx-2 my-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="/timecards/create" >CREATE TIMECARD</a></button>


    <div class="relative pl-2 overflow-x-auto">
        <table class="w-2/4  text-xl text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 border-black border-2 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Full Name [Worker Id]
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Site name [Site Id]
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Data
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Hours worked
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($timecards as $timecard)

                <tr class="bg-white border-b border-black border-2 dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$timecard->id}}
                    </td>
                    <th scope="row" class="px-6 border-black border-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/timecards/{{$timecard->id}}" class="font-medium text-blue-600 dark:text-orange-600 hover:underline">{{$timecard->worker->full_name}} [{{$timecard->worker_id}}]</a>
                    </th>
                    <td class="px-6 py-4 border-black border-2">
                        {{$timecard->site->site_name}} [{{$timecard->site_id}}]
                    </td>
                    <td class="px-6 py-4 border-black border-2">
                        {{$timecard->date}}
                    </td>
                    <td class="px-6 py-4 border-black border-2">
                        {{$timecard->hours_worked}}
                    </td>

                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
