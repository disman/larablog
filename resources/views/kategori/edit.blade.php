@extends('layouts.app')
@section('title','Update kategori')
@section('page-title','Edit Kategori')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori" value="{{ $kategori->nama_kategori }}">
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $kategori->slug }}">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Update</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.box -->

@endsection