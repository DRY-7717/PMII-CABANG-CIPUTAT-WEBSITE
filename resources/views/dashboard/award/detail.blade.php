@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Award</h1>
        </div>

        <div class="section-body">
            <div class="row justify-content-center my-1">
                <div class="col-lg-10">
                    <a href="" class="text-decoration-none text-dark text-center">
                        <h3 class="mt-3">{{ $award->title }}</h3>
                    </a>
                    <p class="text-center">
                        <small class="text-muted">
                            By <a href="/award?user={{ $award->user->username }}" class="text-decoration-none">
                                {{ $award->user->name }}</a> in
                            <a href="/award?category={{ $award->categoryprogram->slug }}"
                                class="text-decoration-none">{{ $award->categoryprogram->name
                                }}</a>
                        </small>
                    </p>


                    @if ($award->image)
                    <img src="{{ asset('storage/'.$award->image) }}" class="card-img-top" style="border-radius: 20px"
                        alt="{{ $award->categoryprogram->name }}">
                    @else
                    <img src=" https://source.unsplash.com/1200x600?{{ $award->categoryprogram->name }}"
                        class="card-img-top" style="border-radius: 20px" alt="{{ $award->categoryprogram->name }}">
                    @endif




                    <article style="font-size: 17px;" class="my-5" style="text-align:justify;">
                        {!! $award->body !!}
                    </article>
                    <div class="group-button mt-5 mb-5 d-inline">

                        <a href="/dashboard/award" class="btn btn-success px-3 "><i
                                class="fas fa-long-arrow-alt-left"></i> Back to All award</a>

                        <a href="/dashboard/award/{{ $award->slug }}/edit" class="btn btn-primary"><i
                                class="fas fa-edit"></i>
                            Edit</a>

                        <form action="/dashboard/award/{{ $award->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger border-0 mx-1 rounded-full"
                                onclick="return confirm('Are you sure ?')"><i class="fas fa-trash-alt"></i>
                                Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection