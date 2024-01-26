<?php

namespace App\Http\Controllers;

use App\Models\Lisence;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $lisences = Lisence::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('lisences'));
    }
}
