<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-div">
                    <a href="{{route('index')}}#anchor-about">О Нас</a>
                </div>
                <div class="footer-div">
                    <a href="{{route('index')}}#anchor-news">Новости</a>
                </div>
                <div class="footer-div">
                    <a href="{{route('index')}}#anchor-partners">Наши партнеры</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-div">
                    @guest()
                        <a class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Присоединиться к борьбе</a>
                    @else
                        <a href="javascript:void(0)">Присоединиться к борьбе</a>
                    @endguest
                </div>
                <div class="footer-div">
                    @guest()
                        <a class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти в кабинет</a>
                    @else
                        <a href="javascript:void (0)">Войти в кабинет</a>
                    @endguest
                </div>
                <div class="footer-div">
                    <a href="">Карта</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-div">
                    <a data-bs-toggle="modal" data-bs-target="#drug-trafficking" class="text-white">Сообщить о наркоторговле</a>
                </div>
                <div class="footer-div">
                    <a data-bs-toggle="modal" data-bs-target="#get-consultation" class="text-white">Получить консультацию</a>
                </div>
                <div class="footer-div">
                    <a href="{{route('aboutFund')}}" class="text-white">Помочь Фонду</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex justify-content-center align-items-center h-100 py-2">
                    <div class="social-block">
                        <span>
                            Присоединяйтесь к нам в социальных сетях:
                        </span>
                        <div class="d-flex justify-content-around p-2">
                            <a href="#">
                                <img src="{{asset('images/telegram-white.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('images/tik-tok-white.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('images/instagram-white.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('images/mail-white.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-lg-0 mb-2">
                <a href="#">esirtkisiz.kz</a>
                <span class="mx-3 text-white">All rights reserved.</span>
            </div>
            <div class="col-md-3 mb-md-0 mb-lg-0 mb-2">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{asset('images/telegram-white.png')}}" alt="">
                    </a>
                    <a href="#" class="me-3">
                        <img src="{{asset('images/tik-tok-white.png')}}" alt="">
                    </a>
                    <a href="#" class="me-3">
                        <img src="{{asset('images/instagram-white.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('images/mail-white.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-md-0 mb-lg-0 mb-2 mobile-footer-text">
                <a href="mailto:info@bbn.kz">info@bbn.kz</a>
            </div>
        </div>
    </div>
</div>
