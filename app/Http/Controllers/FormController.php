<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formInput');
    }
    public function hasil(request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jenisKelamin' => $request->input('jenisKelamin'),
            'skill' => $request->input('skill')

        ];
        return view('formInput', compact("data"));
    }
}
