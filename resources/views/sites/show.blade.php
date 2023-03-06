@extends('layouts.app')

@section('content')



    <div class="relative pl-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-3/5 text-xl text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    #
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Site name
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Site start date
                </th>
                <th scope="col" class="px-6 py-3 border-black border-2">
                    Site end date
                </th>

                <th scope="col" class="px-6 py-3 border-black border-2">
                    Edit site
                </th>

            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 border-black border-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$site->id}}
                </th>
                <td class="px-6 py-4 border-black border-2">
                    {{$site->site_name}}
                </td>
                <td class="px-6 py-4 border-black border-2">
                    {{$site->site_start_date}}
                </td>
                <td class="px-6 py-4 border-black border-2">
                    {{$site->site_end_date}}
                </td>

                <td class="px-6 py-4 border-black border-2">
                    <a href="/sites/{{$site->id}}/edit" class="font-medium text-blue-600 dark:text-green-600 hover:underline">EDIT SITE</a>
                </td>

            </tbody>

        </table>
        <form class="p-2" method="post" action="{{ route('sites.destroy', $site->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl  w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete site</button>
        </form>
    </div>







@endsection
