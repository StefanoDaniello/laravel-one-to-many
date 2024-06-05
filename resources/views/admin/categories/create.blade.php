@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
    <section>
        <h2>Create a new category</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="reset" class="btn btn-danger mx-4">
                    <a href="{{route('admin.categories.index')}}" class="text-white">Annulla</a>
                </button>
            </div>
        </form>


    </section>

@endsection