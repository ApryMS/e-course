<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaRequest;
use App\Models\Admin\TotalFee;
use App\Models\HistoryTransaksiFee;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use App\Models\User\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::where('user_id', Auth::user()->id)->get();
        return view('pages.mentor.user-customer', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provice = Province::all();
        $product = Product::all();
        $payment_metode  = PaymentMethod::all();
        return view('pages.mentor.create-siswa', ['data' => $provice ,'product' => $product , 'payment_metode' => $payment_metode ,]);
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
        $provice = Province::findOrFail($request->province);
        $data['province'] = $provice->name;
        $data['user_id'] = Auth::user()->id ;
        $regency = Regency::findOrFail($request->regency);
        $data['regency'] = $regency->name;
        $data['password'] = Hash::make($data['password']);
        Siswa::create($data);
        return redirect()->route('siswa.index')->with('status', 'berhasil membuat siswa, silahkan konfirmasi pembayaran');
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
    
    public function getRegency(request $request) {
        $idProvince = $request->id_province;
        $datas = Regency::where('province_id', $idProvince )->get();
        foreach ( $datas as $regency) {
            echo "<option value='$regency->id'>$regency->name</option>";
        }
    }

    public function daftarPejuang($id) {
        $mentor = User::findOrFail($id);
        return view('pages.mentor.create-pejuang', ['mentor'=>$mentor]);
    }

    public function postPejuang(Request $request, $id) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'PEJUANG';
        $data['user_id'] = $id;
        
        $pejuang = User::create($data);
        $createFee = new TotalFee();
        $createFee->user_id = $pejuang->id;
        $createFee->save();

        return redirect()->route('login')->with('status', 'Berhasi mendaftar sebagai pejuang. Selamat Berjuang...');

    }

    public function historyPaymentFee(){
        $data = HistoryTransaksiFee::where('user_id', Auth::user()->id);
        return view('pages.mentor.history_payment_fee',['data' => $data]);
    }

}
