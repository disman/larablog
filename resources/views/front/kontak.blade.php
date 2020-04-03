@extends('template.app')
@push('nav')
<ul class="nav-menu nav navbar-nav">
   @foreach($kategori as $row)
   <li class="cat-1"><a href="{{ route('artikel.kategori', $row->slug) }}">{{ $row->nama_kategori }}</a></li>
   @endforeach
</ul>
@endpush

@section('content')

<!-- Page Header -->
<div class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <ul class="page-header-breadcrumb">
               <li><a href="/">Home</a></li>
               <li>Contact</li>
            </ul>
            <h1>Contact</h1>
         </div>
      </div>
   </div>
</div>
<!-- /Page Header -->


<!-- section -->
<div class="section">
   <!-- container -->
   <div class="container">
      <!-- row -->
      <div class="row">
         <div class="col-md-6">
            <div class="section-row">
               <h3>Contact Information</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               <ul class="list-style">
                  <li>
                     <p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="93c4f6f1fef2f4d3f6fef2faffbdf0fcfe">buttonsoft1@gmail.com</span></a></p>
                  </li>
                  <li>
                     <p><strong>Phone:</strong> +62 852 4433 1122</p>
                  </li>
                  <li>
                     <p><strong>Address:</strong>Bahari</p>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-5 col-md-offset-1">
            <div class="section-row">
               <h3>Send A Message</h3>
               <form>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="form-group">
                           <span>Email</span>
                           <input class="input" type="email" name="email">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="form-group">
                           <span>Subject</span>
                           <input class="input" type="text" name="subject">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea class="input" name="message" placeholder="Message"></textarea>
                        </div>
                        <button class="primary-button">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /section -->

@push('kategori')
<ul class="footer-links">
   @foreach($kategori as $row)
   <li><a href="{{ route('artikel.kategori', $row->slug) }}">{{ $row->nama_kategori }}</a></li>
   @endforeach
</ul>
@endpush
@endsection