<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralItem;
use App\GeneralCategory;

  class GeneralItemsController extends Controller {

        public function __construct() {
          $this->middleware('auth');
      }

      public function index() {
        // $items = GeneralItem::All();
        $items = GeneralItem::paginate(10);
        return view('admin/general-items/all', [
          'items' => $items
        ]);
      }

      public function create() {
        $categories = GeneralCategory::All();
        return view('admin/general-items/create', [
          'categories' => $categories
        ]);
        }

        public function store() {
          // return request()->all();
          request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer']
          ]);

          $item = new GeneralItem();
          $item->title = request('title');
          $item->description = request('description');
          $item->image_url = request('image_url');
          $item->price = request('price');
          $item->category_id = request('category_id');
          $item->save();
            return redirect('/admin/general-items');
          }

      public function edit($id) {
        $item = GeneralItem::find($id);
        $categories = GeneralCategory::All();
        return view('admin/general-items/edit', [
          'item' => $item,
          'categories' => $categories
        ]);
        }

        public function update($id) {
          request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer']
          ]);

          $item = GeneralItem::find($id);
          $item->title = request('title');
          $item->description = request('description');
          $item->image_url = request('image_url');
          $item->price = request('price');
          $item->category_id = request('category_id');
          $item->save();

          return redirect('/admin/general-items');

          }

          public function delete($id) {
            $item = GeneralItem::find($id);
            $item->delete();
            return redirect('/admin/general-items');
          }
}
