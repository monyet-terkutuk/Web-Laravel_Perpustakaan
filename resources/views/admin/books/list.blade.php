@extends('admin.partials.main')
@section('main')
    <div class="row mx-3 ">
        <div class="col-lg-12">
            <h1 class="text-center">List data buku</h1>
            <a href="{{ route('books.create') }}" class="btn btn-dark mb-3 rounded">+ Tambah Buku</a>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th class="text-right">Category</th>
                            <th class="text-right">Date add</th>
                            <th class="text-right">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->category->name }}</td>
                                <td class="text-right">{{ $book->created_at->format('d-m-Y') }}</td>
                                @if ($book->status == 'Tersedia')
                                    <td class="text-right text-success">{{ $book->status }}</td>
                                @elseif ($book->status == 'Dipinjam')
                                    <td class="text-right text-danger">{{ $book->status }}</td>
                                @elseif ($book->status == 'Hilang')
                                    <td class="text-right text-secondary">{{ $book->status }}</td>
                                @endif
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
