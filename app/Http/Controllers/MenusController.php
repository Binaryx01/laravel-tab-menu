<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenusController extends Controller
{
    

    public function index()
{
    $breakfastItems = MenuItem::where('type', 'breakfast')->get();
    $lunchItems = MenuItem::where('type', 'lunch')->get();
    $dinnerItems = MenuItem::where('type', 'dinner')->get();

    return view('menu', compact('breakfastItems', 'lunchItems', 'dinnerItems'));
}





    public function create()
    {
        return view('menu_form'); // Show the form
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required',
            'type' => 'required|in:breakfast,lunch,dinner',
            'description' => 'nullable',
            'price' => 'nullable|numeric',
        ]);





             // Save to the database
        MenuItem::create($request->all());



        return redirect('/menu');
}

}