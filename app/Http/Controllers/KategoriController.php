<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all();
        return view('pages.datamaster.kategori.index', [
            'data' => $data
        ]);
    }

    //Create Page
    public function create()
    {
        return view('pages.datamaster.kategori.create',);
    }

    // Insert to database
    public function store(Request $request)
    {
        $category = Kategori::create([
            'kategori' => ($request->input('category'))
        ]);

        return redirect()->route('datamaster-kategori.index');
    }

    // Edit Data
    public function edit(string $id)
    {

        $category = Kategori::find($id);

        return view('pages.datamaster.kategori.edit', [
            'kategori' => $category
        ]);
    }

    public function update(Request $request, Kategori $category)
    {
        $category->update([
            //? model -------- name html
            'kategori' => $request->input('category')
        ]);

        return redirect()->route('datamaster-kategori.index');
    }


    // Delete data
    public function destroy(string $id)
    {
        $category = Kategori::find($id);
        $category->delete();
        return redirect()
            ->route('datamaster-kategori.index');
    }
}
