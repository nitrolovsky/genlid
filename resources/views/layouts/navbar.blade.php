<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Генератор видео-лендингов</a>
                        </li>
                        @if (Session::get('authed'))
                            <li class="nav-item">
                                <a class="nav-link" href="/pages">Лендинги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/proposals">Заявки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/users/{{ Session::get('id') }}">Профиль</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/users/logout">Выйти</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/users/login">Войти</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/all">Все лендинги</a>
                        </li>
                    </ul>
                    <span class="navbar-text float-xl-right float-lg-right text-white">
                        8 (929) 116 85 65
                    </span>
                </div>
            </div>
        </div>
    </div>
</nav>
