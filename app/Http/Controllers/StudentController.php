<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::where('role_id', 2)->get();
        return view('panel.student.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Student::create($request->all());
             if($request->hasFile('bukti_bayar')){
                 $request->file('bukti_bayar')->move('bukti_bayar/' , $request->file('bukti_bayar')->getClientOriginalName());
                 $data->bukti_bayar = $request->file('bukti_bayar')->getClientOriginalName();
                 $data->save();
             }
        return redirect('/panel/dashboard')->with('success','data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $data = User::where('id', $student->user_id)->get();
        return view('panel.student.show', [
            'data' => $data[0],
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = User::where('id', $student->user_id)->get();
        return view('panel.student.edit', [
            'data' => $data[0],
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {   $user['name'] = $request->name;
        
        User::where('id', $student->id)->update($user);

        $data = Student::find($student->id);
        $data->update($request->all());
        $data->update($request->except('bukti_bayar'));
        if ($request->hasFile('bukti_bayar')) {
            $request->file('bukti_bayar')->move('bukti_bayar/', $request->file('bukti_bayar')->getClientOriginalName());
            $data->bukti_bayar = $request->file('bukti_bayar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/panel/student')->with('success','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        User::destroy($student->id);
        return redirect('/panel/student')->with('success','data berhasil di delete');
    }
}
