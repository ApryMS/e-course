<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Province;
use App\Models\User\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('pages.admin.siswa.user-customer', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provonce = Province::all();
        $payment_metode = PaymentMethod::where('status', 'AKTIF')->get();
        $product = Product::where('status_product', 'AKTIF')->get();
        return view('pages.admin.siswa.create-siswa',['data'=>$provonce , 'product'=>$product, 'payment_metode'=>$payment_metode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['password'] = bcrypt($request->password);
        Siswa::create($data);
        return redirect()->route('siswa.index')->with('status', 'Berhasil menambah siswa, silahkan konfirmasi pembayaran untuk mengaktifkan siswa');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
