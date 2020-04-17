@extends('layouts.admin')

@section('content')

    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">General Items</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">General Items</li>
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
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All General Items</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{date('m/d/Y', strtotime($item->updated_at))}}</td>
                                            <td><a href="/admin/general-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                              <!-- <a href="/admin/item/{{$item->id}}/delete" onclick="if(!  confirm('Are you sure you want to delete category?')) {return false;}"><i class="fas fa-trash-alt"></i></a> -->
                                            <a href="#"
                                               onclick="event.preventDefault();
                                                              if(!  confirm('Are you sure you want to delete item?')) {return false;} else {
                                                             document.getElementById('delete-item-{{$item->id}}').submit()};">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>

                                            <form id="delete-item-{{$item->id}}" action="/admin/general-items/{{$item->id}}/delete" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                            {{$items->links()}}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- striped table -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end striped table -->
                <!-- ============================================================== -->
            </div>

@endsection
