<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralCategory;
use App\GeneralItem;

class StaticPagesController extends Controller {
  public function home() {

  return view('welcome');
  }

  public function singleCategory($slug) {
    $generalCategory = GeneralCategory::where('title', '=', $slug)->first();
    $generalItems = GeneralItem::where('category_id', '=', $generalCategory->id)->get();

    return view('inventory/single-category', [
      "generalItem" => ucfirst($slug),
       "generalItems" => $generalItems
    ]);

  }

    public function contact() {
     return view('pages/contact');
   }
}
