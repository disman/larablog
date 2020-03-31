@extends('template.app')
@push('nav')
<ul class="nav-menu nav navbar-nav">
   @foreach($kategori as $row)
   <li class="cat-1"><a href="#">{{ $row->nama_kategori }}</a></li>
   @endforeach
</ul>
@endpush
@section('content')
<!-- section -->
<div class="section">
   <!-- container -->
   <div class="container">
      <!-- row -->
      <div class="row">

         <!-- post Atas -->
         @foreach($artikel as $row)
         <div class="col-md-6">
            <div class="post post-thumb">
               <a class="post-img" href="#"><img src="{{ asset('uploads/'.$row->gambar) }}" alt="" width="300" height="300"></a>
               <div class="post-body">
                  <div class="post-meta">
                     <a class="post-category cat-2" href="">{{ $row->kategori->nama_kategori }}</a>
                     <span class="post-date">{{ $row->created_at->diffForHumans() }}</span>
                  </div>
                  <h3 class="post-title"><a href="{{ route('artikel.detail', $row->title) }}">{{ $row->title }}</a></h3>
               </div>
            </div>
         </div>
         @endforeach
         <!-- /post Atas -->

      </div>
      <!-- /row -->

      <!-- row -->
      <div class="row">
         <div class="col-md-12">
            <div class="section-title">
               <h2>Total Artikel</h2>
            </div>
         </div>
         <div class="clearfix visible-md visible-lg"></div>
      </div>
      <!-- /row -->

      <!-- row -->
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="clearfix visible-md visible-lg"></div>

               <!-- post Content-->
               @foreach($totalArtikel as $row)
               <div class="col-md-6">
                  <div class="post">
                     <a class="post-img" href="#"><img src="{{ asset('uploads/'.$row->gambar) }}" alt="" width="200px" height="150px"></a>
                     <div class="post-body">
                        <div class="post-meta">
                           <a class="post-category cat-2" href="category.html">{{ $row->kategori->nama_kategori }}</a>
                           <span class="post-date">{{ $row->created_at->diffForHumans() }}</span>
                        </div>
                        <h3 class="post-title"><a href="{{ route('artikel.detail', $row->title) }}">{{ $row->title }}</a></h3>
                     </div>
                  </div>
               </div>
               @endforeach
               <!-- /post Content -->

               <div class="clearfix visible-md visible-lg"></div>
            </div>
         </div>

         <div class="col-md-4">
            <!-- post widget Terkait -->
            <div class="aside-widget">
               <div class="section-title">
                  <h2>Artikel Terkait</h2>
               </div>
               @foreach($artikelTerkait as $row)
               <div class="post post-widget">
                  <a class="post-img" href="blog-post.html"><img src="{{ asset('uploads/'.$row->gambar) }}" alt="" width="80" height="60"></a>
                  <div class="post-body">
                     <h3 class="post-title"><a href="{{ route('artikel.detail', $row->title) }}">{{ $row->title }}</a></h3>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- /row Terkait -->
   </div>
   <!-- /container -->
</div>
<!-- /section -->

@push('kategori')
<ul class="footer-links">
   @foreach($kategori as $row)
   <li><a href="#">{{ $row->nama_kategori }}</a></li>
   @endforeach
</ul>
@endpush

@endsection