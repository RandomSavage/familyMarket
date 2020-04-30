<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;

class AdminController extends Controller {

      public function __construct() {
        $this->middleware('auth');
    }

    public function dashboard() {
      return view('layouts/admin');
  }
}
