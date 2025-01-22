<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    // Menampilkan daftar semua karyawan
    public function index()
    {
        // Ambil semua data karyawan
        $employees = Employee::all();

        // Kirim data ke Vue melalui Inertia
        return inertia('Employee/Index', [
            'employees' => $employees,
        ]);
    }

    // Menampilkan detail karyawan tertentu
    public function show($id)
    {
        // Ambil data karyawan berdasarkan ID
        $employee = Employee::findOrFail($id);

        // Kirim data karyawan ke Vue melalui Inertia
        return inertia('Employee/Show', [
            'employee' => $employee,
        ]);
    }

    // Menampilkan form untuk menambah karyawan baru
    public function create()
    {
        return inertia('Employee/Create');
    }

    // Menyimpan data karyawan baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Simpan data karyawan baru ke database
        Employee::create($request->all());

        // Redirect atau beri respons setelah penyimpanan berhasil
        return redirect()->route('employees.index');
    }

    // Menampilkan form untuk mengedit data karyawan
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return inertia('Employee/Edit', [
            'employee' => $employee,
        ]);
    }

    // Memperbarui data karyawan
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index');
    }

    // Menghapus data karyawan
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
