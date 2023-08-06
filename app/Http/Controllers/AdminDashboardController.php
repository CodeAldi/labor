<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    function Index() : View {
        $today = Carbon::now()->isoFormat('D MMMM Y , H:m a');
        return view('backend.admin.index',[
            'today'=>$today,
        ]);
    }


}
