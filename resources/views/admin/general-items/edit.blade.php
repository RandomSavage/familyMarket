@extends('layouts.admin')

@section('content')

<div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Edit General Item</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/general-items" class="breadcrumb-link">All General Items</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit General Item</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit this Item</h5>
                            <div class="card-body">
                              <form method="POST" action="/admin/general-items/{{$item->id}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                      <label for="inputtitle">Title</label>
                                        <input id="inputtitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title', $item->title) }}" required autocomplete="title" autofocus placeholder="Title">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="inputprice">Price</label>
                                        <input id="inputprice" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price" value="{{ old('price', $item->price) }}" required autocomplete="price" autofocus placeholder="Price">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputcategory">Category</label>
                                        <select name="category_id" class="form-control" id="inputcategory">
                                           @foreach ($categories as $category)
                                              <option value="{{$category->id}}"
                                              @if ($category->id == $item->category_id)
                                                selected
                                              @endif
                                              >{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputimageurl">Image Url</label>
                                          <input id="inputimageurl" type="text" class="form-control form-control-lg @error('image_url') is-invalid @enderror" name="image_url" value="{{ old('image_url', $item->image_url) }}" autocomplete="image_url" autofocus placeholder="Enter an image url">
                                          @error('image_url')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong style="background: red; padding: 10px; color: white;">{{ $message }}
                                                  </strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="inputdescription">Description</label>
                                          <textarea id="inputdescription" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus placeholder="Description">{{ old('description', $item->description) }}></textarea>
                                          @error('description')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6 pl-0">
                                            <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic form -->
                    <!-- ============================================================== -->
                </div>
              </div>

@endsection
