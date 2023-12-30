<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
  public function index()
  {
    $description = "Masuk ke halaman dasbor SIMIK";
    $title = "Login | Masuk Laman Belakang";
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs,
                                                            'description' => $description,
                                                            'title' => $title]);
  }
}
