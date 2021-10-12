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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
{{--                        <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
                        <input type="text" name="login" class="form-control" id="exampleInputLogin1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
{{--                        <label for="exampleInputPassword1" class="form-label">Password</label>--}}
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-login w-100">Войти</button>
                    </div>
                    <div class="mt-2">
                        <a href="#">
                            <button type="button" class="btn btn-outline-success w-100">Зарегестрироваться</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
