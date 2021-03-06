{{--
      ressources/views/works/index.blade.php
--}}

@extends('templates.index')

@section('title')
  Works - {{ $work->title }}
@endsection

@section('banner')
  Product Details
@endsection


@section('content')

  <div class="section">
    <div class="container">
      <div class="row">
        <!-- Product Image & Available Colors -->
        <div class="col-sm-6">
          <div class="product-image-large">
            <img src="{{ asset('assets/img/portfolio/' . $work->image ) }}" alt="Item Name">
          </div>
          <div class="colors">
            <span class="color-white"></span>
            <span class="color-black"></span>
            <span class="color-blue"></span>
            <span class="color-orange"></span>
            <span class="color-green"></span>
          </div>
        </div>
        <!-- End Product Image & Available Colors -->
        <!-- Product Summary & Options -->
        <div class="col-sm-6 product-details">
          <h2>{{ $work->title }}</h2>
          <h3></h3>
          <p>
            {{ $work->content }}
          </p>
          <h3>Project Details</h3>
          <p>
            <strong>Client: </strong>
            {{ $work->client->name }}
          </p>
          <p>
            <strong>Date: </strong>
            {{ \Carbon\Carbon::parse($work->created_at)->format('F d, Y') }}
          </p>
          <p>
            <strong>Tags: </strong>

            @foreach ($work->tags as $tag)
              {{ $tag->name }}
              {{-- {{dump($tag->id)}} --}}
            @endforeach
          </p>

        </div>
        <!-- End Product Summary & Options -->
      </div>
    </div>
  </div>

  <hr>

  <div class="section">
    <div class="container">
      <div class="row">

        <div class="section-title">
          <h1>Similar Works</h1>
        </div>
        <ul class="grid cs-style-2">
          @include('works._liste_show', ['works' => \App\Models\Work::whereHas('tags', function ($q) use ($work) {
                                                                                    return $q->whereIn('name', $work->tags->pluck('name'));
                                                                                  })
                                                                    ->orderBy('created_at', 'desc')->take(4)->get()])
        </ul>
      </div>
    </div>
  </div>


@endsection
