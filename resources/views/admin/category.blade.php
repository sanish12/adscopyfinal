@extends('admin.layout')
@section('main')
@foreach($categories as $category)
  <li class='list-group-item'>
  {{ $category->name }}
</li>
@endforeach
@stop
