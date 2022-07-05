<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\TotalFee;
use App\Models\HistoryTransaksiFee;
use App\Models\User;
use App\Models\User\Mentor;
use App\Models\User\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role', 'MENTOR')->get();
        return view('pages.admin.mentor.user-mentor', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.mentor.create-user-mentor');
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
        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'MENTOR';
        $data['user_id'] = Auth::user()->id;
        
        $mentor = User::create($data);
        $createFee = new TotalFee();
        $createFee->user_id = $mentor->id;
        $createFee->save();
        return redirect()->route('mentor.index')->with('status', 'Berhasil menambahkan mentor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentor = User::findOrFail($id);
        $fee = TotalFee::where('user_id', $id)->get()->first();
        $pejuang = User::where([
            ['user_id', '=', $id],
            ['role', '=', 'PEJUANG'],
        ])->get();
        $pejuangTotal = User::where([
            ['user_id', '=', $id],
            ['role', '=', 'PEJUANG'],
        ])->get()->count();
        return view('pages.admin.mentor.detail-mentor', [
            'mentor' => $mentor,
            'pejuang' => $pejuang,
            'pejuangTotal' => $pejuangTotal,
            'fee' => $fee,
        ]);
        
        // $mentor = User::findOrFail($id);
        // $pejuang = User::where('role', 'PEJUANG')->get();
        // $siswa = Siswa::where('user_id', $id)->get();
        // return view('pages.admin.mentor.detail-mentor', [
        //     'mentor' => $mentor,
        //     'pejuang' => $pejuang,
        //     'siswa' => $siswa,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

    public function transferFeeMentor($id) {
        $fee = TotalFee::findOrFail($id);
        $mentor = User::findOrFail($fee->user_id);
        return view('pages.admin.mentor.create-transfer-mentor', ['mentor' => $mentor, 'fee' => $fee]);
    }
    public function postTransferFeeMentor(Request $request, $id) {
        $data = $request->all();
        $fee = TotalFee::findOrFail($id);
        $historyTransaksi = new HistoryTransaksiFee();
        $historyTransaksi->user_id = $fee->user_id;
        $historyTransaksi->total_transfer = $fee->total_fee;
        $historyTransaksi->total_siswa = $fee->total_siswa_confirm;
        return redirect()->back()->with('status', 'Fee mentor sudah terkirim, cek pada history transfer fee');
    }


}
