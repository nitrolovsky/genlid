@extends('layouts.main')

@section('content')
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="brand" class="col-xl-3 col-form-label">
                    Название бренда
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="brand" placeholder="Первая школа фитнеса" name="brand">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-xl-3 col-form-label">
                    Контактный телефон
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="phone" placeholder="8 (921) 116 85 65" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="descriptor" class="col-xl-3 col-form-label">
                    Заголовок по центру
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="descriptor" placeholder="Первая школа фитнеса" name="descriptor">
                </div>
            </div>
            <div class="form-group row">
                <label for="video" class="col-xl-3 col-form-label">
                    Ссылка на видео c youtube
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="video" placeholder="https://www.youtube.com/embed/LwKl8pN3i5o" name="video">
                </div>
            </div>
            <div class="form-group row">
                <label for="profit" class="col-xl-3 col-form-label">
                    Текст с подробностями под видео
                </label>
                <div class="col-xl-9">
                     <textarea class="form-control" id="profit" rows="3" name="profit"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="form_title" class="col-xl-3 col-form-label">
                    Заголовок для формы
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="form_title" placeholder="Первая школа фитнеса" name="form_title">
                </div>
            </div>
            <div class="form-group row">
                <label for="call_to_action" class="col-xl-3 col-form-label">
                    Кнопка призыва к действию
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="call_to_action" placeholder="Отправить заявку" name="call_to_action">
                </div>
            </div>
            <div class="form-group row">
                <label for="legal" class="col-xl-3 col-form-label">
                    Юридическая информация
                </label>
                <div class="col-xl-9">
                     <textarea class="form-control" id="legal" rows="3" name="legal"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-xl-3 col-form-label">
                    Email
                </label>
                <div class="col-xl-9">
                    <input type="text" class="form-control" id="email" placeholder="email@gmail.com" name="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-xl-3 col-xl-9">
                    <button type="submit" class="btn btn-primary">Создать страницу</button>
                </div>
            </div>
        </form>
    </div>
@endsection
