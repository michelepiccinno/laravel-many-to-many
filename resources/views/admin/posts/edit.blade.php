@extends('layouts.admin')

@section('content')
    {{--
@php
/*Stampiamo i dati in arrivo */
echo '<pre>';
print_r($post) . 'ciao';
echo '</pre>';
@endphp
--}}
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>Modifica Progetto</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Progetto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') ?? $post->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione Progetto</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('description') ?? $post->description }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type_id" class="form-label">Type Progetto</label>
                    <select type="text" class="form-select @error('type') is-invalid @enderror" id="description"
                        name="type_id" value="{{ $post->type_id }}">
                        @foreach ($types as $type)
                            <option value="{{ old('type_id') ?? $type->id }}"
                                {{ $post->type->id == $type->id ? 'selected="selected"' : '' }}>
                                {{ old('type_id') ?? $type->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="technology" class="form-label">Tecnologia utilizzata</label>
                    <select class="form-select" name="technologies[]" id="technologies" multiple>
                        @foreach ($technologies as $technology)
                            <option value="{{ $technology->id }}"
                                {{ $post->technologies->contains($technology->id) ? 'selected' : '' }}>{{ $technology->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Applica Modifiche</button>
            </form>
        </div>
    </div>

 <pre>
    @php
        var_dump($post->technologies);
    @endphp
 </pre>

@endsection
