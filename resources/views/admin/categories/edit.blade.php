@extends('layouts.admin')

@section('title', 'Create category')

@section('content')
    <section>
        <h2>Edit category</h2>
        <form action="{{ route('admin.categories.update', $category) }}" method="category">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="category_id" class="form-label">Select Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                     <option value="{{$category->id}}">{{$category->name}}</option>
                </select>
                @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Modifica</button>
                <button type="reset" class="btn btn-danger mx-4">
                    <a href="{{route('admin.categories.index')}}" class="text-white">Annulla</a>
                </button>
            </div>
        </form>


    </section>

@endsection