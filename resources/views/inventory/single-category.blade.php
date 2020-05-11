@extends('includes.head')

@include('includes.header')
@include('includes.mobile-nav')

  <script src="/resources/js/mobNav.js"></script>
  <div id="single-menu-page">
    <div class="row">
      <div class="col-sm-12
      offset-md-1 col-md-10
      offset-lg-2 col-lg-8">
        <div class="content-box">
          <div class="row bg">
            <div class="col-md-12">
              <h1>{{$generalItem}}</h1>
            </div>
            <!-- <div class="col-md-6">
              <div class="item">
                <div class="title">
                  <h4>Texas Burger</h4>
                  <span class="price">$9</span>
                </div>
                <div class="description">
                  <p>Fresh Slain Steer Ground Sirloin smothered in BBQ Sauce</p>
                </div>
              </div>
            </div> -->
            @foreach ($generalItems as $item)
              <div class="col-md-6">
                <div class="item">
                  <div class="title">
                    <h4>{{$item->title}}</h4>
                    <div class="item-img">
                      <img src="{{$item->image_url}}" alt="item">
                    </div>
                    <span class="price">{{$item->price}}</span>
                  </div>
                  <div class="description">
                    <p>{{$item->description}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    @include('includes.footer')

  </div>
