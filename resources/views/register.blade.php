<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <script src="https://kit.fontawesome.com/bd7a23af56.js" crossorigin="anonymous"></script>
    <title>Будущее без наркотиков</title>
    @livewireStyles
    @stack('css')
        <style>
            .block-1 {
                background: linear-gradient(237.58deg, #808080 -21.8%, #C4C4C4 97.42%);
                border-radius: 5px;
                padding: 15px;
                height: 285px;
            }
            .block-2 {
                background: rgba(255, 0, 0, 0.8);
                border-radius: 5px;
                padding: 15px;
                height: 285px;
            }
            .c {
                height: calc(100vh - 91px);
            }
            .modal-content {
                background: linear-gradient(237.58deg, #808080 -21.8%, #C4C4C4 97.42%);
                border-radius: 5px;
            }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand d-flex m-auto" href="#">
            <div class="ms-3 logo-cabinet-class">
                <div>
                    Esirtkisiz
                    <img src="{{asset('images/eb-logo.png')}}" alt="">
                    Bolashaq
                </div>
            </div>
        </a>
    </div>
</nav>

<div class="container c">
    <div class="d-md-flex w-100 h-100 justify-content-around align-items-center">
        <div class="col-md-5 col-sm-12 mb-md-0 mb-3">
            <div class="block-1">
                <p class="text-white">Стань частью движения! Закрашивай рекламу наркотиков в своем городе, сними процесс на видео и опубликуй на сайте - сотрем заразу вместе!</p>
                <br>
                <p class="text-white">Увеличивай свои показатели и повышай свою позицию в рейтинге - стань лучшим  борцом за чистоту нашей страны!</p>

                <button class="btn btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Зарегистрироваться</button>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
            <div class="block-2">
                <h3><img src="{{asset('images/warning_icon.png')}}"><span class="text-white ms-3">Важно!</span></h3>
                <p class="text-white">
                    <b>Логин</b> (твой логин будет отображаться на глобальный карте, поэтому советуем сохранять свою
                    анонимность)<br>
                    <b>Пароль</b> (Пароль должен состоять из восьми или более символов латинского алфавита, содержать
                    заглавные и строчные буквы, цифры)<br>
                    <b>Почтовый адрес</b> (твой почтовый адрес)<br>
                    <b>Номер телефона</b> (твой мобильный номер с привязкой к Telegram и / или Whats App)<br>
                    <small>Какова твоя мотивация и откуда ты узнал/-а о Фонле: Ұ140 символов макс.</small>
                </p>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('register-component')
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@livewireScripts

@stack('js')
</body>
</html>
