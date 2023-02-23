<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function kasir()
    {
        $members = Member::all();
        return view('dashboard.kasir', compact('members'));
    }

    public function owner()
    {
        return view('dashboard.owner');

    }
}
