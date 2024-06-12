<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function dashboard(){
        $studentRegister    = User::where('role_id', 2)->get();
        $studentConfirm     = User::where('role_id', 2)->where('status', 1)->get();
        $studentPending     = User::where('role_id', 2)->where('status', 0)->get();
        return view('panel.dashboard', [
            'studentRegister'   => count($studentRegister),
            'studentConfirm'    => count($studentConfirm),
            'studentPending'    => count($studentPending)
        ]);
    }

    public function form(){
        return view('panel.form-page');
    }
}
