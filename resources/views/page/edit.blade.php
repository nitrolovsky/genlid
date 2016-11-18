@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="/pages/{{ $page->id }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="brand" class="col-xl-3 col-form-label">
                    Название бренда
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="brand" placeholder="Первая школа фитнеса" name="brand" value="{{ $page->brand }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-xl-3 col-form-label">
                    Контактный телефон
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="phone" placeholder="8 (921) 116 85 65" name="phone" value="{{ $page->phone }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="bg" class="col-xl-3 col-form-label">
                    Фоновое изображение
                </label>
                <div class="col-xl-9">
                    <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="bg" value="{{ $page->bg }}">
                            <span class="custom-file-control"></span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label for="descriptor" class="col-xl-3 col-form-label">
                    Заголовок по центру
                </label>
                <div class="col-xl-9">
                    <textarea class="form-control" id="descriptor" rows="3" name="descriptor" placeholder="8 октября. Бесплатный Мастер-класс Продажи фитнес тренера х2. Вживую в Москве и Онлайн по РФ и СНГ.">{{ $page->descriptor }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="video" class="col-xl-3 col-form-label">
                    Ссылка на видео c youtube
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="video" placeholder="https://www.youtube.com/embed/LwKl8pN3i5o" name="video" value="{{ $page->video }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="profit" class="col-xl-3 col-form-label">
                    Текст с подробностями под видео
                </label>
                <div class="col-xl-9">
                     <textarea class="form-control" id="profit" rows="3" name="profit" placeholder="Для тех, кто хочет стать или уже является фитнес тренером. Как заработать первые 50000 рублей за 30 дней. Как удвоить продажи. Как перестать жить в фитнес-зале.">{{ $page->profit }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="form_title" class="col-xl-3 col-form-label">
                    Заголовок для формы
                </label>
                <div class="col-xl-9">
                    <textarea class="form-control" id="profit" rows="3" name="form_title" placeholder="Зарегистрируйтесь сейчас на Мастер-класс и уже сейчас мы отправим 5 полезных видео по фитнесу">{{ $page->form_title }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="call_to_action" class="col-xl-3 col-form-label">
                    Кнопка призыва к действию
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="call_to_action" placeholder="Отправить заявку" name="call_to_action" value="{{ $page->call_to_action }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="legal" class="col-xl-3 col-form-label">
                    Юридическая информация
                </label>
                <div class="col-xl-9">
                     <textarea class="form-control" id="legal" rows="3" name="legal" placeholder="© 2010-2016 Бизнес Молодость. ООО «БП» Общество с ограниченной ответственностью «База предпринимательства». Юридический адрес: 117545, г. Москва, ул. Дорожная, д.8, корп.1, офис 103. ИНН 7726338554. КПП 772601001. ОГРН 1157746406850. Адрес: г. СПб, ул. Зодчего-Росси 1/3, подъезд 5.">{{ $page->legal }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-xl-3 col-form-label">
                    Email
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="email" placeholder="email@gmail.com" name="email" value="{{ $page->email }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-xl-3 col-xl-9">
                    <button type="submit" class="btn btn-primary">Обновить и перейти на страницу</button>
                </div>
            </div>
        </form>
    </div>
@endsection
