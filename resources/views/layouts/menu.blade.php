
<li class="nav-item">
    <a href="{{ route('news.index') }}"
       class="nav-link {{ Request::is('news*') ? 'active' : '' }}">
        <p>Новости</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('partners.index') }}"
       class="nav-link {{ Request::is('partners*') ? 'active' : '' }}">
        <p>Партнеры</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('points.index') }}"
       class="nav-link {{ Request::is('points*') ? 'active' : '' }}">
        <p>Точки <span class="badge badge-warning right">{{$points}}</span></p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Заявки
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{ route('infoDrugs.index') }}"
               class="nav-link {{ Request::is('infoDrugs*') ? 'active' : '' }}">
                <p>По наркоторговле <span class="badge badge-warning right">{{$drug}}</span></p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('getConsultations.index') }}"
               class="nav-link {{ Request::is('getConsultations*') ? 'active' : '' }}">
                <p>на консультацию <span class="badge badge-warning right">{{$consultation}}</span></p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('helpFunds.index') }}"
               class="nav-link {{ Request::is('helpFunds*') ? 'active' : '' }}">
                <p>по фонду <span class="badge badge-warning right">{{$funds}}</span></p>
            </a>
        </li>

    </ul>
</li>
