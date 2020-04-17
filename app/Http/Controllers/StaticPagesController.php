<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralCategory;
use App\GeneralItem;

class StaticPagesController extends Controller {
  public function home() {

  return view('welcome');
  }
}
