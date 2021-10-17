<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="row w-100">
            <div class="col-md-4 d-flex align-items-center">
                <div class="d-flex logo-img">
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
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a class="navbar-brand d-flex" href="{{route('index')}}">
                    <div class="ms-3 logo-cabinet-class">
                        <div>
                            Esirtkisiz
                            <img src="{{asset('images/eb-logo.png')}}" alt="">
                            Bolashaq
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-center">
                <div class="dropdown">
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                    <a href="{{route('home')}}" id="dropdownMenuLink">
                        <img src="{{asset('images/no-image.png')}}" width="50" height="50">
                    </a>
                    @else
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/no-image.png')}}" width="50" height="50">
                        </a>
                    @endif
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-start myDropdown" aria-labelledby="dropdownMenuLink">
                        <div class="d-flex p-2">
                            <img src="{{asset('images/no-image.png')}}" width="50" height="50">
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <strong>{{\Illuminate\Support\Facades\Auth::user()->login}}</strong>
                            </div>
                        </div>
                        <div class="p-2">
                            Личная статистика:
                        </div>
                        <div class="d-flex py-2">
                            <div class="border-end d-flex justify-content-center align-items-center p-2">
                                {{count($graffiti)}}
                            </div>
                            <div class="d-flex align-items-center ps-2">
                                Колличество закрашенной рекламы
                            </div>
                        </div>
                        <div class="d-flex py-2">
                            <div class="border-end d-flex justify-content-center align-items-center p-2">
                                {{count($smokes)}}
                            </div>
                            <div class="d-flex align-items-center ps-2">
                                Колличсество утилизированных устройств для курения наркотиков
                            </div>
                        </div>
                        <div class="py-2 text-center">
                            <button class="btn bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal" style="line-height: 1">
                                <div class="d-flex justify-content-center text-black">
                                    <img src="{{asset('images/plus.png')}}">
                                    <span class="ms-2">Добавить отчет</span>
                                </div>
                            </button>
                        </div>
                        <div class="py-2 text-center">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn bg-transparent" style="line-height: 1">
                                    <div class="d-flex justify-content-center text-black">
                                        <span class="ms-2">Выйти</span>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="search">
    <div class="container">
        <div class="d-flex w-100">
            <div class="position-relative d-flex align-items-center w-100">
                <div class="input-group">
                    <input type="text" class="search-input"><span class="searchicon"></span>
                    <button type="button">Поиск</button>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Выберите вид флажка</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="{{route('bookmark')}}" class="list-group-item list-group-item-action list-group-item-danger">
                        <img src="{{asset('images/bookmark.png')}}" alt="">
                        Закладки
                    </a>
                    <a href="{{route('graffiti')}}" class="list-group-item list-group-item-action list-group-item-primary">
                        <img src="{{asset('images/graffiti_modal.png')}}" alt="">
                        Граффити
                    </a>
                    <a href="{{route('smokes')}}" class="list-group-item list-group-item-action list-group-item-dark">
                        <img src="{{asset('images/smoke_modal.png')}}" alt="">
                        Курительные изделия
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
