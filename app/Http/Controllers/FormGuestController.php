<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Institution;
use Illuminate\Http\Request;

class FormGuestController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.form', compact('institutions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5|max:128',
            'institutions_id' => 'required',
            'from' => 'required|min:3|max:255',
            'email' => 'required|email|max:64',
            'phonenumber' => 'required|min:10|max:16',
            'note' => 'required'
        ]);

        $guest = Guest::create($request->all());
        return redirect()->route('form.index')->with('success', 'data kamu sudah disimpan.');
           
    }
}
