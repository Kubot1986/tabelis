@extends('layouts.app')

@section('content')



<div class="relative pl-2 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-3/5  text-xl text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3 border-black border-2">
                #
            </th>
            <th scope="col" class="px-6 py-3 border-black border-2">
                Full name
            </th>
            <th scope="col" class="px-6 py-3 border-black border-2">
                Role
            </th>

            <th scope="col" class="px-6 py-3 border-black border-2">
                Edit worker
            </th>

        </tr>
        </thead>
        <tbody>
        <tr class="bg-white  border-black border-2 border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$worker->id}}
            </th>
            <td class="px-6 py-4 border-black border-2">
                {{$worker->full_name}}
            </td>
            <td class="px-6 py-4 border-black border-2">
                {{$worker->role}}
            </td>

            <td class="px-6 py-4 border-black border-2">
                <a href="/workers/{{$worker->id}}/edit" class="font-medium text-blue-600 dark:text-green-600 hover:underline">EDIT</a>
            </td>

        </tbody>

    </table>
    <form class="p-2" method="post" action="{{ route('workers.destroy', $worker->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="  text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-3 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
    </form>
</div>







@endsection
