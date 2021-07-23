<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        //transaksi

        $transaksi = Transaction::count();

        return view('beckend.dashboard', compact('transaksi'));
    }
}
