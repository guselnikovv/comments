@foreach($comments as $comment)
    <div class="card-body p-4 append_card" value="{{ $comment->id }}">
        <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="{{ $comment->avatar }}" alt="avatar" width="60"
                 height="60" />
            <div>
                <h6 class="fw-bold mb-1">{{ $comment->name }}</h6>
                <div class="d-flex align-items-center mb-3 ">
                    <p class="mb-0">
                        {{ $comment->created_at }}
                    </p>
                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>


                </div>
                <p class="mb-0">
                    {{ $comment->comment }}
                </p>
            </div>
        </div>
    </div>

    <hr class="my-0" />
@endforeach


