<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('backend.admin.berita.create',['kategoris'=>$kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->judul;
        $slug = preg_replace("/\s+/", "-", $judul);
        $kategori = $request->kategori;
        $thubmnail = $request->thumbnail;
        $isi = $request->isi;


        $berita = new Berita();
        $berita->judul = $judul;
        $berita->slug = $slug;
        $berita->kategori_id = $kategori;
        $berita->body = $isi;
        $berita->singkat = Str::limit(strip_tags($isi), 50);
        $berita->gambar = $thubmnail;
        $berita->save();
        return redirect()->route('admin.dashboard.berita.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        $berita = Berita::all();
        dd($berita);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
