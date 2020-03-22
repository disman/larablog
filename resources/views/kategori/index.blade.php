@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
@section('title','Dahboard')
@section('page-title','Kategori')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Kategori</h3>
        <div class="pull-right">
            <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Kategori</a>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1
                @endphp

                @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->slug }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="/kategori/delete/{{ $kategori->id }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@push('datatables')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
@endpush
@push('customdatatables')
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endpush
@endsection