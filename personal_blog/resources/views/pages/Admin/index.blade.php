@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Add Blog Post</h1>
        </div>

        <div class="col-lg-12">
            <form action="{{ route('admin.store') }}" class="form-background" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter title">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Author">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ImageURL</label>
                            <input type="text" name="image" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter image URL">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Publish</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container mt-5">
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
                            <div class="card-body">
                                <a href="{{ route('admin.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal{{ $post->id }}">Update</button>
                            </div>
                        </div>
                    </div>

                    <!-- Update Modal -->
                    <div class="modal fade" id="updateModal{{ $post->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel{{ $post->id }}">Update Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.update', $post->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group mb-3">
                                            <label for="title{{ $post->id }}" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" id="title{{ $post->id }}" value="{{ $post->title }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="author{{ $post->id }}" class="form-label">Author</label>
                                            <input type="text" name="author" class="form-control" id="author{{ $post->id }}" value="{{ $post->author }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="image{{ $post->id }}" class="form-label">Image URL</label>
                                            <input type="text" name="image" class="form-control" id="image{{ $post->id }}" value="{{ $post->image }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="content{{ $post->id }}" class="form-label">Content</label>
                                            <textarea class="form-control" name="content" id="content{{ $post->id }}" rows="3">{{ $post->content }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .page-title {
        font-size: 80px;
        font-weight: bold;
        color: #055e16;
    }
    .form-background {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
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
    }
    .card-text {
        font-size: 0.9rem;
        color: #555;
    }
    .list-group-item {
        font-size: 0.85rem;
        color: #777;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .modal-content {
        border-radius: 10px;
    }
    .modal-header {
        border-bottom: none;
    }
    .modal-footer {
        border-top: none;
    }
</style>
@endpush

@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#exampleFormControlTextarea1'))
        .catch(error => {
            console.error(error);
        });

    @foreach ($posts as $post)
        ClassicEditor
            .create(document.querySelector('#content{{ $post->id }}'))
            .catch(error => {
                console.error(error);
            });
    @endforeach
</script>
@endpush

