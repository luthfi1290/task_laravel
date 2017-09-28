@extends('layouts.app')

@section('content')
  @if ( count($cek) >= 1 )
    @include('members.status')
  @else
    @include('members.form')
  @endif
@endsection
