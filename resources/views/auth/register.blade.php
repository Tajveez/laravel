@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-gray-100 p-6 rounded-lg">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" id="name" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                
                <div class="mb-4">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" id="password_confirmation" placeholder="Confirm password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection