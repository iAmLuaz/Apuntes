<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('index', compact('students', 'students'));
    }
}
