@extends('layouts.app')
@section('title','Tambah kategori')
@section('page-title','Tambah Kategori')
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
            <form role="form" action="{{ route('kategori.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        @if($errors->has('nama_kategori'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('nama_kategori') }}
                        </div>
                        @endif
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori" value="{{ old('nama_kategori') }}">
                    </div>

                    <div class="form-group">
                        @if($errors->has('slug'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('slug') }}
                        </div>
                        @endif
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ old('slug') }}">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Post</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.box -->

@endsection