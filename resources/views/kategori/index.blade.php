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
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
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
                @foreach ($kategoris as $index=>$kategori)
                <tr>
                    <td>{{ $index + $loop->iteration }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->slug }}</td>
                    <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
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