@extends('frontend.layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="full">
                   <h3>Kursus</h3>
               </div>
            </div>
        </div>
    </div>
  </section>

  <div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span>Kursus </span>Pilihan</h2>
                    </div>
                </div>
            </div>
            @foreach (\App\Models\Course::inRandomOrder()->limit(9)->get() as $item)
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{ url("$item->image")}}" alt="#" />
                    <h4>{{ \Illuminate\Support\Str::limit($item->title, 22, $end='...') }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
