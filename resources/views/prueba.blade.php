@extends('welcome')

@section('content')

<h1>Index</h1>


@foreach ($keyed as $item)
<label>{{$item->name}}</label>  
@endforeach

@endsection