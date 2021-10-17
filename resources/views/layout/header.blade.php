<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand d-flex" href="#">
            <img src="{{asset('images/eb-logo.png')}}" alt="">
            <div class="ms-3 logo-class">
                <div>Esirtkisiz Bolashaq</div>
                <div>Будущее без наркотиков</div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-5">
                    <a class="nav-link" aria-current="page" href="#">О Нас</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="#">Новости</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="#">Наши партнеры</a>
                </li>
            </ul>
            <button class="btn btn-outline-login" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="far fa-user-circle"></i>
                Войти
            </button>
        </div>
    </div>
</nav>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
{{--                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('login-modal')
            </div>
        </div>
    </div>
</div>
