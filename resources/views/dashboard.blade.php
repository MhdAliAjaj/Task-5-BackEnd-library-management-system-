<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5">
            <a href="{{ url('roles') }}" class="btn btn-primary mx-1">Roles</a>
            <a href="{{ url('permissions') }}" class="btn btn-info mx-1">Permissions</a>
            <a href="{{ url('users') }}" class="btn btn-warning mx-1">Users</a>
            <a href=" route{{('admin.add.mainBook') }}"class="btn btn-info mx-1" >Classification of major books</a>
            <a href="{{ url('admin.add.subBook') }}" class="btn btn-warning mx-1">Classification of sub-books</a>
            <a href="{{ url('admin.add.Book') }}"class="btn btn-warning mx-1">Add Book</a>
          
                
             

        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
