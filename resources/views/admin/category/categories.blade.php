@extends('layout.main')
@section('banner')
    {{-- <h1>{{ucwords($category[0]->category_name)}}</h1>
    <p>{{$category[0]->description}}</p> --}}

<div class="banner text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h1 class="mb-5">{{str_replace('_',' ',ucwords($category[0]->category_name))}}</h1>
          <p style="font-family:cursive;">{{$category[0]->description}}</p>
        </div>
      </div>
    </div>


    <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>

    <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_d)">
        <path class="path"
          d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
        <path
          d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
          stroke="#040306" stroke-miterlimit="10" />
      </g>
      <defs>
        <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
          <feOffset dy="4" />
          <feGaussianBlur stdDeviation="2" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
        </filter>
      </defs>
    </svg>


    <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>


    <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
        stroke-width="2" />
    </svg>
  </div>

@endsection
@section('content')
<div class="container my-5">
<div class="row ">
@foreach ($allblogs as $item)

{{-- <div class="col-lg-3 col-sm-12">
    <article class="card mb-4">
        <div class="post-slider slider-sm">
            <img src="{{asset('storage/blogfiles/'.$item->featured_image)}}" class="card-img-top" alt="post-thumb">
      </div>
      <div class="card-body">
        <h3 class="h4 mb-3"><a class="post-title" href="post/elements/">{{ucwords($item->title)}}</a></h3>
        <ul class="card-meta list-inline">
            <li class="list-inline-item">
                <a href="{{route('author',$item->user->name."_".$item->user->id)}}" class="card-meta-author">
                    <img src="{{asset('images/john-doe.jpg')}}" alt="{{ucwords($item->user->name)}}">
                    <span>{{ucwords($item->user->name)}}</span>
                </a>
            </li>
            <li class="list-inline-item">
                <i class="ti-timer"></i>3 Min To Read
            </li>
            <li class="list-inline-item">
                <i class="ti-calendar"></i>15 jan, 2020
            </li>

    </ul>
        <p>{{$item->body}}</p>
        <a href="post/elements/" class="btn btn-outline-primary">Read More</a>
    </div>
    </article>
</div> --}}
@include('include.post-item',['post'=>$item])
@endforeach
</div>
</div>
@endsection
