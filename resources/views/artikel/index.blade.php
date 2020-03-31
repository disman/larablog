@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
@section('title','Artikel')
@section('page-title','Artikel')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Artikel</h3>
        <div class="pull-right">
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikels as $artikel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artikel->title }}</td>
                    <td><img src="{{ asset('uploads/'.$artikel->gambar) }}" width="80px" height="50px"></td>
                    <td>{{ $artikel->kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a>

                        <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span> Hapus
                            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
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