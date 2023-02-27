<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Computer; 

class ComputersController extends Controller
{

    // private static function getData(){
    //     return [
    //         ['id' => 1, 'name' => 'LG', 'origin' => 'Korea'],
    //         ['id' => 2, 'name' => 'HP', 'origin' => 'USA'],
    //         ['id' => 3, 'name' => 'Samsung', 'origin' => 'Japan'],
    //         ['id' => 4, 'name' => 'TOSHIBA', 'origin' => 'China']
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer_name' => 'required',
            'computer_origin' => 'required',
            'computer_price' => 'required|integer',
            
        ]);
        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer_name'));
        $computer->origin = strip_tags($request->input('computer_origin'));
        $computer->price = strip_tags($request->input('computer_price'));

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('computers.show', [
            'computer' => Computer::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('computers.edit', [
            'computer' => Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'computer_name' => 'required',
            'computer_origin' => 'required',
            'computer_price' => 'required|integer',
            
        ]);
    
        $computer = Computer::findOrFail($id);
        $computer->name = strip_tags($request->input('computer_name'));
        $computer->origin = strip_tags($request->input('computer_origin'));
        $computer->price = strip_tags($request->input('computer_price'));

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return redirect()->route('computers.index');
    }
}
