@extends('layout.default')
@section('content')
@push('css')
    <style>
        .stat-block {
            position: absolute;
            top: 20%;
            z-index: 1000;
        }
        .in-stat-block {
            background: white;
            display: flex;
            border: 1px solid grey;
            border-radius: 30px;
        }
        .in-stat-join {display: flex;}
        .in-stat-block:first-child {width:94%;}
        .in-stat-block:nth-child(2) {width:75%;}
        .in-stat-block div:first-child {border-right: 1px solid grey; padding: 5px 10px; border-radius: 30px;display: flex;align-items: center;font-size: 16px; font-family: Montserrat, sans-serif;}
        .in-stat-block div:first-child span {font-size: 16px;}
        .in-stat-block div span {padding: 0 10px; font-weight: 500; font-size: 14px; font-family: Montserrat, sans-serif;}
        .in-stat-join div:first-child {}
        .in-stat-join div:last-child {
            background: linear-gradient(352.17deg, #FF0000 9.34%, #FF7A00 97.31%);
            border-radius: 30px;
            border: 1px solid white;
            height: 60px;
            color: white;
            font-size: 16px;
        }
    </style>
@endpush
<div id="map">
    <div class="container position-relative h-100">
        <div class="stat-block">
            <div class="in-stat-block">
                <div>
                    <img src="{{asset('images/Graffiti.png')}}">
                    <span>{{count($graffiti)}}</span>
                </div>
                <div class="d-flex h-100 align-items-center px-3 my-auto">
                    <span>Графити закрашено</span>
                </div>
            </div>
            <div class="in-stat-block mt-3">
                <div>
                    <img src="{{asset('images/bookmark-stat.png')}}">
                    <span>{{count($bookmarks)}}</span>
                </div>
                <div class="d-flex h-100 align-items-center px-3 my-auto">
                    <span>Закладки</span>
                </div>
            </div>
            <div class="in-stat-block mt-3">
                <div>
                    <img src="{{asset('images/smoke.png')}}">
                    <span>{{count($smokes)}}</span>
                </div>
                <div class="d-flex h-100 align-items-center px-3 my-auto">
                    <span>Курительных изделий <br> утилизировано</span>
                </div>
            </div>
            @guest()
                <div class="in-stat-join mt-3">
                <div data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{asset('images/stat-hand.png')}}">
                </div>
                <div class="d-flex align-items-center ms-2 px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span>Присоединиться к борьбе</span>
                </div>
            </div>
            @endguest
        </div>
    </div>
</div>

<div class="section-2 py-4">
    <div class="container">
        <div class="d-md-flex justify-content-between">
            <div class="msg" data-bs-toggle="modal" data-bs-target="#drug-trafficking">
                <img src="{{asset('images/comment.png')}}" alt="">
                Сообщить о наркоторговле
            </div>
            <div class="msg" data-bs-toggle="modal" data-bs-target="#get-consultation">
                <img src="{{asset('images/ask.png')}}" alt="">
                Получить консультацию
            </div>
            <div class="msg" data-bs-toggle="modal" data-bs-target="#help-fund">
                <img src="{{asset('images/partnership.png')}}" alt="">
                Помочь Фонду
            </div>
            <a href="{{route('aboutFund')}}" class="text-black">
            <div class="msg">
                <img src="{{asset('images/fond.png')}}" alt="">
                О фонде
            </div>
            </a>
        </div>
    </div>
</div>

<div class="section-3 py-4">
    <div class="container">
        <h5 class="text-white">ГЛОБАЛЬНАЯ СТАТИСТИКА:</h5>

        <div class="row">
            <div class="col-md-6">
                @if(count($data)>0)
                    @foreach($data as $login => $user)
                        <div class="stat1">
                            <div class="row w-100">
                                <div class="col-6 d-flex justify-content-around align-items-center">
                                    <img src="{{asset('images/top-1.png')}}" alt="">
                                    <span>{{$login}}</span>
                                </div>
                                <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                    <img src="{{asset('images/Graffiti.png')}}" alt="">
                                    <span>{{$user['graffiti']}}</span>
                                    <img src="{{asset('images/cirlce.png')}}" alt="">
                                    <span>{{$user['bookmarks']}}</span>
                                    <img src="{{asset('images/smoke.png')}}" alt="">
                                    <span>{{$user['smokes']}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="stat1">
                            <div class="row w-100">
                                <div class="col-6 d-flex justify-content-around align-items-center">
                                    <img src="{{asset('images/top-1.png')}}" alt="">
                                    <span>Azamatti Azamat</span>
                                </div>
                                <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                    <img src="{{asset('images/Graffiti.png')}}" alt="">
                                    <span>070</span>
                                    <img src="{{asset('images/cirlce.png')}}" alt="">
                                    <span>040</span>
                                    <img src="{{asset('images/smoke.png')}}" alt="">
                                    <span>080</span>
                                </div>
                            </div>
                        </div>
                    <div class="stat1">
                        <div class="row w-100">
                            <div class="col-6 d-flex justify-content-around align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                    </div>
                    <div class="stat1">
                        <div class="row w-100">
                            <div class="col-6 d-flex justify-content-around align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="stat2">
                    @if(count($data2)>0)
                        @foreach($data2 as $login => $user)
                            <div class="d-flex w-100">
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <img src="{{asset('images/top-1.png')}}" alt="">
                                    <span>{{$login}}</span>
                                </div>
                                <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                    <img src="{{asset('images/Graffiti.png')}}" alt="">
                                    <span>{{$user['graffiti']}}</span>
                                    <img src="{{asset('images/cirlce.png')}}" alt="">
                                    <span>{{$user['bookmarks']}}</span>
                                    <img src="{{asset('images/smoke.png')}}" alt="">
                                    <span>{{$user['smokes']}}</span>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="d-flex w-100">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img src="{{asset('images/top-1.png')}}" alt="">
                                <span>Azamatti Azamat</span>
                            </div>
                            <div class="col-6 d-flex justify-content-between align-items-center mobile-img">
                                <img src="{{asset('images/Graffiti.png')}}" alt="">
                                <span>070</span>
                                <img src="{{asset('images/cirlce.png')}}" alt="">
                                <span>040</span>
                                <img src="{{asset('images/smoke.png')}}" alt="">
                                <span>080</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-4 py-4" id="anchor-about">
    <div class="container">
        <h1>О НАС</h1>
        <div class="row py-3">
            <div class="col-md-6 text-center">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <h5>О НАС</h5>
                <p>
                    Корпоративный фонд "Будущее без наркотиков" создан в 2004 году Ассоциацией "Конгресс молодёжи Казахстана" как организация которая будет бороться с употреблением и распространением наркотических средств и ПАВ.
                    <br>
                    Наш Фонд занимается профилактической наркомании через создание уникального контента, вовлечения молодёжи в здоровый образ жизни и припятсвия распространению запрещённых веществ с помощью общества.
                    <br>
                    Фонд открывает штабы во всех регионах и готов сотрудничать с различными государственными органами, неправительственными организациями, инициативными гражданами и заинтересованными сторонами
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-5 py-4" id="anchor-news">
    <div class="container">
        <h2>НОВОСТИ</h2>

        <div class="row py-3">
            @if(count($news)>0)
                @foreach($news as $new)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{$new->getFile('image')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->title}}</h5>
                                <p class="card-text text-truncate">
                                    {!! $new->description !!}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div>{{$new->created_at->diffForHumans()}}</div>
                                    <div>
                                        <a href="{{route('singleNew', $new->alias)}}">Читать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('images/new-1.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ONLINE DIALOG</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div>09.10.2021</div>
                            <div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>

<div class="section-6 py-4" id="anchor-partners">
    <div class="container">
        <h2>НАШИ ПАРТНЕРЫ</h2>
        <div class="slider partners py-3">
            @if(count($partners)>0)
                @foreach($partners as $partner)
                    <div>
                        <div class="img-slide" style='background-image: url("{{$partner->getFile('logo')}}")'></div>
                        <p><a class="text-black fw-bold" href="{{$partner->link}}">{{$partner->title}}</a></p>
                    </div>
                @endforeach
            @else
            <div>
                <div class="slides"></div>
                <p>Название компании</p>
            </div>
            <div>
                <div class="slides"></div>
                <p>Название компании</p>
            </div>
            <div>
                <div class="slides"></div>
                <p>Название компании</p>
            </div>
            @endif
        </div>
    </div>
</div>

@include('modals')
@endsection
@push('js')
    <script>
        let bookmarks = @json($bookmarks),
            graffiti = @json($graffiti),
            smoke = @json($smokes);

        if (bookmarks != null){
            var bookmarkIcon = L.icon({
                iconUrl: '/images/bookmark.png',
            });
            bookmarks.forEach((item,i) => {
                L.marker(JSON.parse(item)[0], {icon: bookmarkIcon}).addTo(map);
            })

        }
        if (graffiti != null){
            var graffitiIcon = L.icon({
                iconUrl: '/images/graffiti_modal.png',
            });
            graffiti.forEach((item, i) => {
                L.marker(JSON.parse(item)[0], {icon: graffitiIcon}).addTo(map);
            })

        }
        if (smoke != null){
            var smokeIcon = L.icon({
                iconUrl: '/images/smoke_modal.png',
            });
            smoke.forEach((item, i) => {
                L.marker(JSON.parse(item)[0], {icon: smokeIcon}).addTo(map);
            })

        }
    </script>
@endpush
