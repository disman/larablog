@extends('layouts.app')
@push('customcss')
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endpush
@section('title','Tambah artikel')
@section('page-title','Artikel')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah artikel</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
        <form action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                @if($errors->has('title'))
                <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
                @endif
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                @if($errors->has('gambar'))
                <div class="alert alert-danger" role="alert">{{ $errors->first('gambar') }}</div>
                @endif
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <label>Kategori Artikel</label>
                <select name="categoris_id" class="form-control">
                    @foreach ($kategori as $row)
                    <option value={{$row->id}}>{{$row->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @if($errors->has('body'))
                <div class="alert alert-danger" role="alert">{{ $errors->first('body') }}</div>
                @endif
                <label>Isi Artikel</label>
                <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Post</button>
                <a href="{{ route('artikel.index') }}" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
            </div>

        </form>
    </div>
</div>
</div>
<!-- /.box -->
@endsection
@push('datatables')
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
@endpush