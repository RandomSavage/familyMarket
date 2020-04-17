<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralCategoriesController extends Controller {

      public function index() {
      // $categories = GeneralCategory::All();
      $categories = GeneralCategory::paginate(10);
      return view('admin/general-categories/all', [
        'categories' => $categories
      ]);
    }

    public function create() {

      return view('admin/general-categories/create');
      }

      public function store() {
        // return request()->all();
        request()->validate([
          'title' => ['required', 'string', 'max:255'],
          'description' => ['required', 'string'],
          'image_url' => ['required', 'string']
        ]);

        $category = new GeneralCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();
          return redirect('/admin/general-categories');
        }

    public function edit($id) {

      $category = GeneralCategory::find($id);
      return view('admin/general-categories/edit', [
        'category' => $category
      ]);
      }

      public function update($id) {
        request()->validate([
          'title' => ['required', 'string', 'max:255'],
          'description' => ['required', 'string'],
          'image_url' => ['required', 'string']
        ]);

        $category = GeneralCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/general-categories');

        }

        public function delete($id) {
          $category = GeneralCategory::find($id);
          $category->delete();
          return redirect('/admin/general-categories');
        }
}
