@extends('layouts.app')

@section('content')
    
  {{-- NEWS --}}

  @include('articles')

  {{-- POSTS --}}
  @include('posts')


  <!-- BLOG -->

  @include('blogs')

@endsection


      
