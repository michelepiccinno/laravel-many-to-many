@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
          
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $post->name }}</div>
                        <div class="card-body">
                            <h5>{{ $post->description }}</h5>
                            <p>{{ $post->type ? $post->type->name : 'senza type' }}</p>
                            @if (count($post->technologies) > 0)
                                @forelse ($post->technologies as $technology)
                                    <span class="badge text-bg-secondary"> {{ $technology->name }}</span>
                                @empty
                                    <span>Nessuna tecnologia inserita</span>
                                @endforelse 
                            @endif
                        </div>
                        <div>
                            <a class="btn btn-warning ms-1 mb-1" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
                            {{-- <a class="btn btn-warning ms-1 mb-1" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a> --}}
                        </div>
                    </div>
                </div>
          
        </div>
    </div>
@endsection
