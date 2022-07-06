<?php

namespace App\Http\Controllers\Pejuang;

use App\Http\Controllers\Controller;
use App\Models\PaymentConfirmation;
use App\Models\Product;
use App\Models\User;
use App\Models\User\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PejuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::where('user_id', Auth::user()->id)->get();
        return view('pages.pejuang.user-customer', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profile(){
        $data = User::findOrFail(Auth::user()->id);
        return view('pages.profile', ['user' => $data]);
    }

    public function editProfile(Request $request ,$id) {
        $user = User::findOrFail($id);
        $item = $request->all();
        if($request->password){
            $item['password'] = bcrypt($request->password);
        }else{
            unset($item['password']);
        }

        if($request->email){
            $item['email'] = $request->email ;
        }else{
            unset($item['email']);
        }

        $user->update($item);
        return redirect()->back()->with('status', 'Data diri berhasil di ubah');

    }

    public function listConfirmasiPembayaran(){
        $data = PaymentConfirmation::where('user_id', Auth::user()->id)->get();
        return view('pages.list-pembayaran-siswa',['data'=> $data]);
    }

    public function confirmasiPembayaran(){
        $data = Siswa::where('user_id', Auth::user()->id)->with(['PaymentMethod', 'User', 'Product'] )->get();
        return view('pages.createKonfirmasiPembayaran', ['data' => $data]);
    }
    public function postPembayaranSiswa(Request $request){
        $data = $request->all();
        // $siswa = Siswa::where('id',$request->siswa_id)->get();
        $siswa = Siswa::findOrFail($request->siswa_id);
        $data['user_id'] = $siswa->user_id;
        $data['product_id'] = $siswa->product_id;
        // $product = Product::where('id', $siswa->product_id)->get();
        $product = Product::findOrFail( $siswa->product_id);
        $data['price'] = $product->price;
        $data['photo_payment'] = $request->file('photo_payment')->store('assets/photo_payment','public');

        PaymentConfirmation::create($data);
        return redirect()->route('list-confirmasi-pembayaran')->with('status', 'berhasil menambah confirmasi pembayaran, selanjutnya tunggu konfirmasi admin jika status pembayaran sudah lunas');
        
    }

}
