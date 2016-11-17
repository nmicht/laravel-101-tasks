<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Task;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();

        $user->load('ownedTasks','collaboratingTasks');

        return view('dashboard',compact('user'));
    }
}
