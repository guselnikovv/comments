@foreach($authors as $author)
    <div class="d-flex flex-start author_item" value="{{ $author->id }}">
        <img class="rounded-circle shadow-1-strong me-3"
             src="{{ $author->avatar }}" alt="avatar" width="60"
             height="60" />
        <h6 class="fw-bold mb-1 author_name">{{ $author->name }}</h6>
    </div>
@endforeach
