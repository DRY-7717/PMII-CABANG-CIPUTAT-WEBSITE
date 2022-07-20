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
                        <h3 class="mt-3">{{ $mail->title }}</h3>
                    </a>
                    <p class="text-center">
                        <small class="text-muted">
                            By <a href="/mails?user={{ $mail->user->username }}" class="text-decoration-none">
                                {{ $mail->user->name }}</a>
                        </small>
                    </p>





                    <article style="font-size: 17px;" class="my-5" style="text-align:justify;">
                        {!! $mail->body !!}
                        <p>Letter proof : <a href="/mail/secretary/download/{{ $mail->slug }}">Bukti Surat</a></p>
                        <p class="font-weight-bold">Description : {{ $mail->description }}</p>
                    </article>
                    <div class="group-button mt-5 mb-5 d-inline">
                        <a href="/mail/secretary" class="btn btn-success px-3"><i
                                class="fas fa-long-arrow-alt-left"></i> Back to All mail</a>

                        <a href="/mail/secretary/{{ $mail->slug }}/edit" class="btn btn-primary"><i
                                class="fas fa-edit"></i>
                            Edit</a>

                        <form action="/mail/secretary/{{ $mail->slug }}" method="post" class="d-inline">
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