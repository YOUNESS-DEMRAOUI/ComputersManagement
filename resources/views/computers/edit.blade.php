@extends('layout')
@section('content')
    <div class="h-screen flex flex-col justify-center items-center">
        <div>
            <h1 class="text-3xl my-8 font-bold">Edit A Computer</h1>
        </div>
        <div>
            <form action="{{route('computers.update', ['computer' => $computer['id']])}}" method="POST" class="flex flex-col justify-center w-80 border rounded-lg bg-white p-5">
                @csrf
                @method('PUT')
                <div class="flex flex-col my-2">
                    <label class="text-sm text-gray-500" for="computer_name">Computer Name</label>
                    <input value="{{$computer->name}}" class="text-black px-2 rounded-md h-10 outline-violet-500 border" type="text" id="computer_name" name="computer_name">
                    @error('computer_name')
                        <div class="form-error text-sm text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col my-2">
                    <label class="text-sm text-gray-500" for="computer_origin">Computer Origin</label>
                    <input value="{{$computer->origin}}" class="text-black px-2 rounded-md h-10 outline-violet-500 border" type="text" id="computer_origin" name="computer_origin">
                    @error('computer_origin')
                        <div class="form-error text-sm text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col my-2">
                    <label class="text-sm text-gray-500" for="computer_price">Computer Price</label>
                    <input value="{{$computer->price}}" class="text-black px-2 rounded-md h-10 outline-violet-500 border" type="text" id="computer_price" name="computer_price">
                    @error('computer_price')
                        <div class="form-error text-sm text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="text-white hover:bg-violet-500/95 border rounded-xl bg-violet-500 w-[50%] m-auto py-2 mt-2">Edit</button>
            </form>
        </div>
    </div>
@endsection

@section('title', 'Edit A Computer')
