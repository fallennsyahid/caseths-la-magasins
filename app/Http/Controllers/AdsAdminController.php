<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Exports\AdsExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AdsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ads' => 'required|string|nullable',
            'picture' => 'nullable',
        ]);

        if ($request->hasFile('picture')) {
            $pictureName = $request->file('picture')->store('ads', 'public');
        } else {
            $pictureName = null;
        }

        Ads::create([
            'ads' => $request->ads,
            'picture' => $pictureName,
        ]);

        return redirect()->route('ads.index')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ads $ad)
    {
        return view('admin.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ads $ad) // Ubah dari $ads menjadi $ad
    {
        $request->validate([
            'ads' => 'required',
            'picture' => 'nullable',
        ]);

        $data = $request->only('ads');

        if ($request->hasFile('picture')) {
            if (!empty($ad->picture)) {
                Storage::disk('public')->delete($ad->picture);
            }

            $pictureName = $request->file('picture')->store('ads', 'public');
            $data['picture'] = $pictureName;
        }

        $ad->update($data); // Pastikan untuk menyimpan perubahan
        return redirect()->route('ads.index')->with('success', 'Data updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ads $ads)
    {
        Storage::disk('public')->delete($ads->picture);
        $ads->delete();

        return redirect()->route('ads.index')->with('success', 'Data deleted successfully');
    }

    public function destroyAll()
    {
        Ads::truncate(); // Hapus semua data di tabel

        return redirect()->route('ads.index')->with('success', 'All data deleted successfully');
    }

    public function export()
    {
        return Excel::download(new AdsExport, 'ads.xlsx');
    }
}
