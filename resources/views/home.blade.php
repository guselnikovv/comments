@extends('layouts.app')

@section('content')

    <div class="container-md">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    @foreach($sliders1 as $slider)
                        <div class="card-body p-4 append_card my_card" value="{{ $slider->id }}">
                            <div class="d-flex flex-start">
                                <img class="rounded-circle shadow-1-strong me-3"
                                     src="{{ $slider->avatar }}" alt="avatar" width="60"
                                     height="60" />
                                <div>
                                    <h6 class="fw-bold mb-1">{{ $slider->name }} id: {{ $slider->id }}</h6>
                                    <div class="d-flex align-items-center mb-3 ">
                                        <p class="mb-0">
                                            {{ $slider->created_at }}
                                        </p>
                                        <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>


                                    </div>
                                    <p class="mb-0">
                                        {{ $slider->comment }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-0" />
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach($sliders2 as $slider)
                        <div class="card-body p-4 append_card my_card" value="{{ $slider->id }}">
                            <div class="d-flex flex-start">
                                <img class="rounded-circle shadow-1-strong me-3"
                                     src="{{ $slider->avatar }}" alt="avatar" width="60"
                                     height="60" />
                                <div>
                                    <h6 class="fw-bold mb-1">{{ $slider->name }} id: {{ $slider->id }}</h6>
                                    <div class="d-flex align-items-center mb-3 ">
                                        <p class="mb-0">
                                            {{ $slider->created_at }}
                                        </p>
                                        <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>


                                    </div>
                                    <p class="mb-0">
                                        {{ $slider->comment }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-0" />
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach($sliders3 as $slider)
                        <div class="card-body p-4 append_card my_card" value="{{ $slider->id }}">
                            <div class="d-flex flex-start">
                                <img class="rounded-circle shadow-1-strong me-3"
                                     src="{{ $slider->avatar }}" alt="avatar" width="60"
                                     height="60" />
                                <div>
                                    <h6 class="fw-bold mb-1">{{ $slider->name }} id: {{ $slider->id }}</h6>
                                    <div class="d-flex align-items-center mb-3 ">
                                        <p class="mb-0">
                                            {{ $slider->created_at }}
                                        </p>
                                        <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>


                                    </div>
                                    <p class="mb-0">
                                        {{ $slider->comment }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-0" />
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<section style="background-color: #ad655f;">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <h4 class="mb-3">10 причин, чтобы стать программистом</h4>
                        <p class="fw-light mb-4 pb-2">Крупные компании каждый год запускают новые проекты. Для этого они набирают разработчиков всех уровней, в том числе начинающих, которые потом могут стать опытными программистами и лидерами команд. За перспективных кандидатов идёт настоящая война: только они устраиваются на проект, им уже приходят оферы с более высокой зарплатой от других компаний. А их, часто пытается «перебить» та фирма, в которой он работает.</p>
                        <p class="fw-light mb-4 pb-2">Рынок труда сильно перегрет. Иногда кандидат не стоит тех денег, которые ему предлагают, но фирме он нужен для перспективы. Программист за год работы может получить столько же, сколько маркетолог или дизайнер получал бы через три года. Если деньги для вас — один из главных факторов работы, выбирайте профессию программиста.</p>
                        <p class="fw-light mb-4 pb-2">Рынок труда сильно перегрет. Иногда кандидат не стоит тех денег, которые ему предлагают, но фирме он нужен для перспективы. Программист за год работы может получить столько же, сколько маркетолог или дизайнер получал бы через три года. Если деньги для вас — один из главных факторов работы, выбирайте профессию программиста.</p>
                        <div class="filter_bl">
                                <label for="filter_author" class="form-label">Фильтрация по автору <span class="close_filter">сбросить</span> </label>
                                <input type="text" class="form-control" id="filter_author" aria-describedby="emailHelp" placeholder="Начните вводит имя автора">
                                <div class="autocomplete_bl">


                                </div>
                        </div>
                        <div class="card_search_bl">

                        </div>
                        <div class="card_bl">
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
                        </div>

                        <div class="append">

                        </div>

                        <div class="add_comment">
                            <h4 class="mt-3">Оставьте комментарий!</h4>
                            @guest
                            <div class="mt-3">
                                <textarea class="form-control" id="add_comment" rows="3" disabled placeholder="Авторизуйтесь что-бы добавить комментарий"></textarea>
                            </div>
                            <a href="{{ route('login') }}"><button class="btn btn-primary mt-3">Авторизоваться</button></a>
                            @endguest
                            @auth
                                <div class="mt-3">
                                    <textarea class="form-control" id="add_comment_body" rows="3"  placeholder="Напишите ваш комментарий"></textarea>
                                </div>
                               <button id="add_comment" class="btn btn-primary mt-3">Добавить</button>
                            @endauth
                        </div>

                        <div class="row row_btn">
                            <button id="getComments" class="btn btn-light">Ещё</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>

$(document).ready(function() {

    $('#getComments').on('click', function () {
        let count_comm = $('.append_card').length

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ url('/ajax') }}',
            method: 'POST',
            data: {"count_comm": count_comm},
            success: function (response) {
                if(response === 'false'){
                    console.log(response);
                    $('#getComments').addClass('d-none');
                    $('.append').append('<p>Комментариев больше нет</p>')
                } else {
                    $('.append').append(response)
                }

            }
        })
    })

    $('#add_comment').on('click', function(){
        let body = $('#add_comment_body').val();
        console.log(body)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ url('/ajax/add_comment') }}',
            method: 'POST',
            data: {"body": body},
            success: function (response) {
                $('.append').append(response)
                $('#add_comment_body').val('');
            }
        })

    })

    $('#filter_author').on('input', function(){
        let search = this.value
        console.log(search.length)
        if(search.length > 2){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ url('/ajax/get_author') }}',
                method: 'POST',
                data: {"search": search},
                success: function (response) {
                    $('.autocomplete_bl').show();
                    if(response !== 'false'){
                        $('.autocomplete_bl').html(response);
                    } else {
                        $('.autocomplete_bl').html('<p>Нет результатов!</p>');
                    }
                   console.log(response)
                }
            })
        } else {
            console.log("df")
            $('.autocomplete_bl').hide();
        }

    })

    $(document).on('click', '.author_item', function(){
        let user_id = $(this).attr('value');
        let user_name = $(this).find('.author_name').text();
        console.log(user_id)
        console.log(user_name)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ url('/ajax/get_comments_author') }}',
            method: 'POST',
            data: {"user_id": user_id},
            success: function (response) {
                    $('.card_search_bl').html(response);
                    $('.card_search_bl').show();
                    $('#filter_author').val(user_name);
                    $('.card_bl').hide();
                    $('.autocomplete_bl').hide();
                    $('#getComments').hide();
                    $('.close_filter').show();
            }
        })

    })

    $('.close_filter').on('click', function(){
        $('.card_search_bl').hide();
        $('.card_bl').show();
        $('#filter_author').val('');
        $('.close_filter').hide();
        $('#getComments').show();
    })
})

</script>

@endsection
