@extends('layout')
@section('content')
    <div class="h-screen flex justify-center items-center">
        <div class="flex justify-between w-96 items-center">
            <h3>{{$computer['name']}} - <strong>{{$computer['origin']}}</strong> - <strong>{{$computer['price']}}$</strong></h3>
            <div class="flex">
                <a href="{{route('computers.edit', ['computer' => $computer['id']])}}"><button class="w-20 text-white hover:bg-blue-600/95 border rounded-xl bg-blue-600 py-2">Edit</button></a>
                <form action="{{route('computers.destroy', ['computer' => $computer['id']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-20 text-white hover:bg-red-600/90 border rounded-xl bg-red-600 py-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Show Computer' . $computer['id'])