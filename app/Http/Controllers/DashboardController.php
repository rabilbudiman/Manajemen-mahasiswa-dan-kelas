<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $jumlah_user = User::count();
        $jumlah_mahasiswa = mahasiswa::count();
        return view('admin.dashboard_admin')->with('jumlah_mahasiswa', $jumlah_mahasiswa)->with('jumlah_user', $jumlah_user);
    }
}

