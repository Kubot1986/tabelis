@extends('layouts.app')

@section('content')



    <div class="relative p-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full  text-xl text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    #
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Full name [Worker Id]
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Site name [Site Id]
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Date
                </th>

                <th scope="col" class="px-6 py-3 border-black border-2">
                    Hours Worked
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Edit timecard
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-black border-2 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$timecard->id}}
                </th>
                <td class="px-6 py-4 border-black border-2">
                    {{$timecard->worker->full_name}} [{{$timecard->worker_id}}]
                </td>
                <td class="px-6 py-4 border-black border-2">
                    {{$timecard->site->site_name}} [{{$timecard->site_id}}]
                </td>
                <td class="px-6 py-4 border-black border-2">
                    {{$timecard->date}}
                </td>
                <td class="px-6 py-4 border-black border-2">
                    {{$timecard->hours_worked}}
                </td>

                <td class="px-6 py-4 border-black border-2">
                    <a href="/timecards/{{$timecard->id}}/edit" class="font-medium text-blue-600 dark:text-green-600 hover:underline">EDIT</a>
                </td>

            </tbody>

        </table>
        <form method="post" class="p-2" action="{{ route('timecards.destroy', $timecard->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete timecard</button>
        </form>
    </div>







@endsection


