@extends('layouts.front')

@section('content')
<h1>Hello World</h1>

<p>
    This view is loaded from module: {!! config('blog.name') !!}
</p>
@endsection