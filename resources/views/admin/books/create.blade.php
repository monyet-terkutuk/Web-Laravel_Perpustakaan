@extends('admin.partials.main')
@section('main')
    <div class="container">
        @foreach ($errors->all() as $item)
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                <span class="badge badge-pill badge-danger">Warning!</span>
                {{ $item }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
        <div class="card rounded shadow">
            <div class="card-body">
                <h3 class="mt-3">Tambah Data Buku</h3>
                <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 mt-3">
                                <label for="title" class="form-label">Title Book</label>
                                <input type="text" name="title" class="form-control rounded" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control rounded" id="author">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 mt-3">
                                <label for="image" class="form-label">Cover Book</label>
                                <input type="file" name="image" class="form-control rounded" id="image">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control rounded-3"
                                placeholder="Deskripsi buku disini.." id="floatingTextarea"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-3 mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
