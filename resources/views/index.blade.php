@extends('layout.default')
@section('content')
<div class="search">
    <div class="container">
        <div class="d-flex w-100">
            <div class="position-relative d-flex align-items-center w-80">
                <div class="input-group">
                    <input type="text" class="search-input"><span class="searchicon"></span>
                    <button type="button">Поиск</button>
                </div>
            </div>
            <div class="d-flex justify-content-between w-20 ps-3">
                <a href="#">
                    <img src="{{asset('images/telegram.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{asset('images/tik-tok.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{asset('images/instagram.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{asset('images/mail.png')}}" alt="">
                </a>
            </div>
        </div>

    </div>
</div>

<div id="map"></div>

<div class="section-2 py-4">
    <div class="container">
        <div class="d-md-flex justify-content-between">
            <div class="msg">
                <img src="{{asset('images/comment.png')}}" alt="">
                Сообщить о наркоторговле
            </div>
            <div class="msg">
                <img src="{{asset('images/ask.png')}}" alt="">
                Получить консультацию
            </div>
            <div class="msg">
                <img src="{{asset('images/partnership.png')}}" alt="">
                Помочь Фонду
            </div>
            <div class="msg">
                <img src="{{asset('images/fond.png')}}" alt="">
                О фонде
            </div>
        </div>
    </div>
</div>

<div class="section-3 py-4">
    <div class="container">
        <h5 class="text-white">ГЛОБАЛЬНАЯ СТАТИСТИКА:</h5>

        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
                <div class="stat2">
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-4 py-4">
    <div class="container">
        <h1>О НАС</h1>
        <div class="row py-3">
            <div class="col-md-6">
                <img src="{{asset('images/about.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <h5>О НАС</h5>
                <p>Соображения высшего порядка, а также курс на социально-ориентированный национальный проект обеспечивает актуальность форм воздействия? Разнообразный и богатый опыт курс на социально-ориентированный национальный проект в значительной степени обуславливает создание модели развития! Не следует, однако, забывать о том, что консультация с профессионалами из IT позволяет выполнить важнейшие задания по разработке дальнейших направлений развития проекта.</p>
                <h5>ПРО НИХ</h5>
                <p>Разнообразный и богатый опыт повышение уровня гражданского сознания напрямую зависит от дальнейших направлений развитая системы массового участия. Соображения высшего порядка, а также начало повседневной работы по формированию позиции в значительной степени обуславливает создание ключевых компонентов планируемого обновления? С другой стороны реализация намеченного плана развития обеспечивает широкому кругу специалистов участие в формировании дальнейших направлений развитая системы массового участия. Не следует, однако, забывать о том, что сложившаяся структура организации в значительной степени обуславливает создание системы обучения кадров, соответствующей насущным потребностям.</p>
            </div>
        </div>
    </div>
</div>

<div class="section-5 py-4">
    <div class="container">
        <h2>НОВОСТИ</h2>

        <div class="row py-3">
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
        </div>
    </div>

</div>

@endsection
