@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-100 p-6 rounded-lg">
            {{ $user->name }}
        </div>
    </div>
@endsection