@extends("layouts.app")

@section('title', "blog")
@section('meta-description',"blog meta description")

@section("content")

    <h1>Bloog</h1>

    @foreach ($post as $post)
  <h2>  {{ $post->title }}</h2>

    @endforeach

@endsection

