<?php

namespace App\Http\Controllers;

use App\Models\Admin\TotalFee;
use App\Models\BabVideo;
use App\Models\PaymentConfirmation;
use App\Models\User;
use App\Models\User\Siswa;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == 'ADMIN'){
            $siswa = Siswa::all()->count();
            $mentor = User::where('role', 'MENTOR')->get()->count();
            $pejuang = User::where('role', 'PEJUANG')->get()->count();
            $total_pendapatan = PaymentConfirmation::where('confirm', 'OKAY')->get()->sum('price');
            $video = Video::all()->count();
            $bab_video = BabVideo::all()->count();
            return view('pages.dashboard',[
                'siswa' => $siswa,
                'mentor' => $mentor,
                'pejuang' => $pejuang,
                'video' => $video,
                'total_pendapatan' => $total_pendapatan,
                'bab_video' => $bab_video,
            ]);
        } elseif (Auth::user()->role == 'MENTOR') {
            $total_fee = TotalFee::where('user_id', Auth::user()->id)->first();
            $siswa = Siswa::where('user_id', Auth::user()->id)->get()->count();
            $pejuang = User:: where('role', 'PEJUANG')->where('user_id', Auth::user()->id)->get()->count();
            $linkPendaftaranPejuang = Auth::user()->id ;
            return view('pages.dashboard',[
                'siswa' => $siswa,
                'pejuang' => $pejuang,
                'linkPendaftaranPejuang' => $linkPendaftaranPejuang,
                'total_fee' => $total_fee['total_fee'],
            ]);
        }else{
            $total_fee = TotalFee::where('user_id', Auth::user()->id)->first();
            $siswa = Siswa::where('user_id', Auth::user()->id)->get()->count();
            return view('pages.dashboard', ['total_fee' => $total_fee['total_fee'] , 'siswa' => $siswa]);
        }
    }
}
