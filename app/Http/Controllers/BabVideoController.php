<?php

namespace App\Http\Controllers;

use App\Models\BabVideo;
use App\Models\Product;
use Illuminate\Http\Request;

class BabVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BabVideo::all();
        return view('pages.admin.bab.bab', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Product::where('status_product', 'AKTIF')->get();
        return view('pages.admin.bab.create-bab', ['produk' => $produk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        BabVideo::create($data);
        return redirect()->route('bab-video.index')->with('status', 'Berhasil menambahkan bab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BabVideo  $babVideo
     * @return \Illuminate\Http\Response
     */
    public function show(BabVideo $babVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BabVideo  $babVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(BabVideo $babVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BabVideo  $babVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BabVideo $babVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BabVideo  $babVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BabVideo $babVideo)
    {
        //
    }
}
