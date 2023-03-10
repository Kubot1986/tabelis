@extends('layouts.app')

@section('content')

    <div class="block mb-2 text-xl font-extrabold text-gray-900 dark:text-yellow-300 ">
        <form method="post" action="{{ route('workers.update', $worker->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="full_name">Full name</label>
                <input type="text" value="{{ $worker->full_name }}" name="full_name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Vardenis Pavardenis" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" value="{{ $worker->role }}" name="role" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pareigos" >
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>
    </div>



@endsection
