<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ordersHistory()
    {
        return view('frontend.orders_history');
    }
}
