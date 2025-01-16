@extends('layouts.app')
@section('content')
    <h1 class="text-center my-4">CodeX Blog</h1>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-8 mx-auto mb-4">
                    <div class="card h-100">
                        <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{!! $post->content !!}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Post by {{ $post->author }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('css')
<style>
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        border-radius: 10px;
        overflow: hidden;
    }
    .card:hover {
        transform: translateY(-10px);
    }
    .card-img-top {
        height: 400px;
        object-fit: cover;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #333;
    }
    .card-title h5 {
        font-size: 3.25rem;
        font-weight: bold;
        color: #9a1111;
    }
    .card-text {
        font-size: 0.9rem;
        color: #555;
    }
    .list-group-item {
        font-size: 0.85rem;
        color: #777;
    }
</style>
@endpush

