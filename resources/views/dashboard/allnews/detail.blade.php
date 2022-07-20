@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail News</h1>
        </div>

        <div class="section-body">
            <div class="row justify-content-center my-1">
                <div class="col-lg-10">
                    <a href="" class="text-decoration-none text-dark text-center">
                        <h3 class="mt-3">{{ $news->title }}</h3>
                    </a>
                    <p class="text-center">
                        <small class="text-muted">
                            By <a href="/news/searchpage?user={{ $news->user->username }}" class="text-decoration-none">
                                {{ $news->user->name }}</a> in
                            <a href="/news/searchpage?category={{ $news->categoryprogram->slug }}"
                                class="text-decoration-none">{{ $news->categoryprogram->name
                                }}</a>
                        </small>
                    </p>


                    @if ($news->image)
                    <img src="{{ asset('storage/'.$news->image) }}" class="card-img-top" style="border-radius: 20px"
                        alt="{{ $news->categoryprogram->name }}">
                    @else
                    <img src=" https://source.unsplash.com/1200x600?{{ $news->categoryprogram->name }}"
                        class="card-img-top" style="border-radius: 20px" alt="{{ $news->categoryprogram->name }}">
                    @endif




                    <article style="font-size: 17px;" class="my-5" style="text-align:justify;">
                        {!! $news->body !!}
                    </article>
                    <div class="group-button mt-5 mb-5 d-inline">
                        <a href="/allprogram/news" class="btn btn-success px-3"><i
                                class="fas fa-long-arrow-alt-left"></i> Back to All news</a>

                        <form action="/allnews/news/destroy/{{ $news->slug }}" method="post" class="d-inline">
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