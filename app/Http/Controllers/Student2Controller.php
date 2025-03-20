<?php

namespace App\Http\Controllers;

use App\Models\Student2;
use Illuminate\Http\Request;

class Student2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students2 = [

        ];
        // $students2 = Student2::all();
        return view('students2.index',compact('students2'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request-> all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Student2 $student2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student2 $student2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student2 $student2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student2 $student2)
    {
        //
    }
}
