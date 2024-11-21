@extends('layouts.app')
<div class="container">
  <h1>Posts</h1>
 
  @auth
  <a class="btn btn-primary btn-sm" href="{{route('posts.create')}}"
    role="button">Crear post</a>
  @endauth
<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($posts as $post)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('posts.show',$post)}}"> {{$post->titulo}}</a>.
      Escrito el {{$post->created_at}}
    </li>
  @endforeach
</ul>    
</div>