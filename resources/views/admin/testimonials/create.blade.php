{{-- Эта страница с формой создания отзыовв которые потом попадет в БД в таблицу testimonials, а так же отобразятся в нашем представлении по адрессу resources/views/admin/users/create.blade.php в котором есть кнопка-ссылка которая нас и перебрасывает по URL-адрессу этой страницы

Так же она связана с методом create, create, store контроллера UserController --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <form action="/admin/testimonials" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="comment">Отзыв</label>
            <textarea type="text" class="form-control" name="comment" id="comment" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="status">Parent Category</label>

           <select name="status" id="status" class="form-control">
                <option>Положительный</option>
                <option>Негативный</option>
            </select>
        </div>
        <br><br>
        <button class="btn btn-primary">Добавить отзыв</button>
   </form>
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#status').select2();
        } );
         {{-- Этот плагин мы подключили с сайта DataTable. 
        Это наша красивая таблица. В файле config/adminlte.php мы этот плагтн подключили и прописали ссылку на последние версии.
        select2(); - ф-ция которая красиво выводит категории родителей --}}
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    {{-- В pakalyst нашли https://unisharp.github.io/laravel-filemanager/installation.
    В файле .env сделали изменения в APP_URL(APP_URL=http://shop).

    В папке config/lfm файл можно почитать и посмотреть настройки этого менеджера. Там же можно менять пути к папкам и их названия(папок в которых будут хранится картинки) --}}
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection