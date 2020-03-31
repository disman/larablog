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
                  <h3 class="post-title"><a href="#">{{ $row->title }}</a></h3>
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
               <h2>Recent Posts</h2>
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
               <div class="col-md-6">
                  <div class="post">
                     <a class="post-img" href="blog-post.html"><img src="{{asset('front/img/post-4.jpg')}}" alt=""></a>
                     <div class="post-body">
                        <div class="post-meta">
                           <a class="post-category cat-2" href="category.html">JavaScript</a>
                           <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                              JavaScript-Based CPU
                              Side-Channel Attacks</a></h3>
                     </div>
                  </div>
               </div>
               <!-- /post Content -->

               <div class="clearfix visible-md visible-lg"></div>
            </div>
         </div>

         <div class="col-md-4">
            <!-- post widget Terkait -->
            <div class="aside-widget">
               <div class="section-title">
                  <h2>Most Read</h2>
               </div>
               <div class="post post-widget">
                  <a class="post-img" href="blog-post.html"><img src="{{asset('front/img/widget-2.jpg')}}" alt=""></a>
                  <div class="post-body">
                     <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                           Design Mockup
                           Into Code Automatically</a></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /row Terkait -->
   </div>
   <!-- /container -->
</div>
<!-- /section -->

@endsection