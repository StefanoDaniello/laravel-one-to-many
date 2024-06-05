@extends('layouts.admin')
@section('title', $category->title)

@section('content')
<section>
    <h1>{{$category->title}}</h1>
    <p>{{$category->content}}</p>
    <p>{{$category->slug}}</p>
    <img src="{{asset('storage/'.$category->image)}}" alt="{{$category->title}}"> <br>
    <button class="btn btn-primary my-3">
        <a href="{{route('admin.categories.index')}}" class="text-white">Torna ai categorys</a>
    </button>
</section>
@endsection