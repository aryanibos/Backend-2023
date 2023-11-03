<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        $data = [
            'message' => 'Get All Student',
            'students' => $students
        ];

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());

        $data = [
            'message' => 'Student Created Successfully',
            'student' => $student
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);


        if ($student) {
            // Cara 1 - Manual
            // $input = [
            //     'name' => $request->name ?? $student->name,
            //     'email' => $request->email ?? $student->email,
            //     'phone' => $request->phone ?? $student->phone,
            //     'address' => $request->address ?? $student->address,
            // ];

            // Cara 2 - Simple
            $student->update($request->all() ?? $student->all());

            $data = [
                'message' => 'Student Updated Successfully',
                'student' => $student
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student Not Found',
            ];
            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            $data = [
                'message' => 'Student Deleted Successfully',
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student Not Found',
            ];
            return response()->json($data, 404);
        }
    }
}
