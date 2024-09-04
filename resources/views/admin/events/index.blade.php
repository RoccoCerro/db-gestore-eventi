@extends('layouts.app')

@section('content')
  @foreach ($events as $event)
    {{ $event->name }}
  @endforeach
@endsection