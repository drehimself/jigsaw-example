@extends('_layouts.master')

@section('body')
  <h2>Manual Blogroll</h2>

  <ul>
    <li><a href="/blog/blog-post-one">Blog Post One</a></li>
    <li><a href="/blog/blog-post-two">Blog Post Two</a></li>
    <li><a href="/blog/blog-post-three">Blog Post Three</a></li>
  </ul>

  <h2>Automatic Blogroll</h2>

  <ul>
    @foreach ($posts as $post)
      <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    @endforeach
  </ul>

  <h2>Reddit /r/aww</h2>

  <ul>
    @foreach ($reddit as $post)
      <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    @endforeach
  </ul>
@endsection
