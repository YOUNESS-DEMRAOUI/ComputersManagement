@extends('layout')
@section('content')
    <div class="h-screen flex justify-center items-center">
        <div class="w-96">
            @if (count($computers) > 0)
                <ul >
                    @foreach ($computers as $computer)
                    <li class="flex justify-between items-center"><a href="{{route('computers.show', ['computer' => $computer['id']])}}">{{$computer['name']}} - <strong>{{$computer['origin']}} - <strong>{{$computer['price']}}$</strong></strong></a>
                    <div class="flex">
                        <a href="{{route('computers.edit', ['computer' => $computer['id']])}}"><button class="w-20 text-white hover:bg-blue-600/90 border rounded-xl bg-blue-600 py-2">Edit</button></a>
                        <form action="{{route('computers.destroy', ['computer' => $computer['id']])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-20 text-white hover:bg-red-600/90 border rounded-xl bg-red-600 py-2">Delete</button>
                        </form>
                    </div>
                    </li>             
                    @endforeach
                </ul> 
            @else
                <p>No computers</p>
            @endif
        </div>
    </div>
@endsection

@section('title', 'Computers')