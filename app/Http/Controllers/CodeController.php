<?php

namespace App\Http\Controllers;

use App\Exports\CodeExport;
use App\Models\Code;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes = Code::all(); // Ambil semua data Code
        return view('admin.code.index', compact('codes')); // Kirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.code.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'sometimes|required',
            'discount_percentage' => 'sometimes|required',
        ]);

        Code::create([
            'code' => $request->code,
            'discount_percentage' => $request->discount_percentage,
        ]);

        return redirect()->route('code.index')->with('success', 'Data added successfully');
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
    public function edit(Code $code)
    {
        return view('admin.code.edit', compact('code')); // Kirim data code untuk diedit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Code $code)
    {
        $request->validate([
            'code' => 'sometimes|required',
            'discount_percentage' => 'sometimes|required',
        ]);

        $code->update($request->only(['code', 'discount_percentage']));

        return redirect()->route('code.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Code $code)
    {
        $code->delete();

        return redirect()->route('code.index')->with('success', 'Data deleted successfully');
    }

    public function destroyAll()
    {
        Code::truncate();

        return redirect()->route('code.index')->with('success', 'All data deleted successfully');
    }

    // Export
    public function export()
    {
        return Excel::download(new CodeExport, 'codes.xlsx');
    }
}
