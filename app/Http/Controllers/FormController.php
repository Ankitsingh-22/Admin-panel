<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Method to show the form
    public function showForm()
    {
        return view('form');
    }

    // Method to handle form submission
    public function submitForm(Request $request)
    {
        // Get the input data
        $data = $request->all();

        // Redirect back to the form with the data
        return redirect()->back()->with('data', $data);
    }
}
