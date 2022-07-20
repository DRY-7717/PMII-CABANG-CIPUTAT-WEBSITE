@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mail</h1>
        </div>

        <div class="section-body">
            <div class="row justify-content-center my-1">
                <div class="col-lg-10">
                    <a href="" class="text-decoration-none text-dark text-center">
                        <h3 class="mt-3">{{ $secretary->title }}</h3>
                    </a>
                    <p class="text-center">
                        <small class="text-muted">
                            By <a href="/mails?user={{ $secretary->user->username }}" class="text-decoration-none">
                                {{ $secretary->user->name }}</a>
                        </small>
                    </p>





                    <article style="font-size: 17px;" class="my-5" style="text-align:justify;">
                        {!! $secretary->body !!}

                        <p>Letter proof : <a href="/mail/secretary/download/{{ $secretary->slug }}">Bukti Surat</a></p>
                        <p class="font-weight-bold">Description : {{ $secretary->description }}</p>
                    </article>
                    <div class="group-button mt-5 mb-5 d-inline">
                        <a href="/dashboard/secretary" class="btn btn-success px-3"><i
                                class="fas fa-long-arrow-alt-left"></i> Back to All mail</a>

                        <a href="/dashboard/secretary/{{ $secretary->slug }}/edit" class="btn btn-primary"><i
                                class="fas fa-edit"></i>
                            Edit</a>

                        <form action="/dashboard/secretary/{{ $secretary->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger border-0 mx-1"
                                onclick="return confirm('Are you sure ?')"><i class="fas fa-trash-alt"></i> Delete</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection