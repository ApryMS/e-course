<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentMetodeRequest;
use App\Models\PaymentConfirmation;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\User;
use App\Models\User\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PaymentConfirmation::where('confirm','MENUNGGU')->with(['Siswa','Product'])->get();
        return view('pages.admin.payment.confirm-payment', ['data'=>$data]);
    }
    public function historyPayment()
    {
        $data = PaymentConfirmation::where('status_payment','TERKONFIRMASI');
        return view('pages.admin.payment.history-payment', ['data'=>$data]);
    }
    public function metodePayment()
    {
        $data = PaymentMethod::all();
        return view('pages.admin.payment.metode-payment', ['data'=> $data]);
    }

    //create confirm payment from admin
    public function createKonfirmasiPembayaran() {

        $data = Siswa::where('user_id', Auth::user()->id)->with(['PaymentMethod', 'User', 'Product'] )->get();
        return view('pages.admin.payment.createKonfirmasiPembayaran', ['data' => $data]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.payment.create-payment-metode');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentMetodeRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/payment_metode/photo','public');
        PaymentMethod::create($data);
        return redirect()->route('metode-payment')->with('status', 'Berhasil menambahkan metode pembayaran');
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

    public function activeStatusPaymentMetode($id) {
        $data = PaymentMethod::findOrFail($id);
        $data->update(['status' => 'AKTIF']);
        return redirect()->back()->with('status', 'Status metode berhasil diubah');
    }


    public function nonStatusPaymentMetode($id) {
        $data = PaymentMethod::findOrFail($id);
        $data->update(['status' => 'NON AKTIF']);
        return redirect()->back()->with('status', 'Status metode berhasil dirubah');
    }
}
