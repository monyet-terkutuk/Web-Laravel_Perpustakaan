@extends('admin.partials.main')
@section('main')
    <div class="section m-4">

        <div class="inline-block px-4 py-4 rounded bg-white">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Romantis</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sastra</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dongeng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Edukasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bisnis</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sejarah</button>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary rounded" type="submit">Search</button>
            </form>

            <hr class="mt-5 border-2 border-success">

            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="row ">

                        @foreach ($books as $item)
                            <div class="col-lg-3">
                                <div class="au-card recent-report shadow">
                                    <div class="chart-note mr-0">
                                        @if ($item->status == 'Tersedia')
                                            <span class="dot dot--green "></span>
                                            <span class="text-success">Tersedia</span>
                                        @elseif ($item->status == 'Dipinjam')
                                            <span class="dot dot--red "></span>
                                            <span class="text-danger">Dipinjam</span>
                                        @endif
                                    </div>
                                    <div class="au-card-inner">
                                        <div class="chart-info inline-block">
                                            <h3 class="title-2">{{ $item->title }}</h3>
                                            @if ($item->image)
                                                <img class="mt-3 rounded chart-info__right"
                                                    style="max-height: 90px; max-width:90px"
                                                    src="/images/{{ $item->image }}" alt="">
                                            @else
                                                <img class="mt-3 rounded chart-info__right"
                                                    src="https://source.unsplash.com/70x70/?{{ $item->category->name }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div>
                                            <p>{!! $item->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach





                    </div>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="row ">
                        <div class="col col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">profile</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
