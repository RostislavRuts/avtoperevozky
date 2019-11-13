{{-- Эта страница с формой редактирования продуктов которые потом попадет в БД в таблицу products, а так же отобразятся в нашем представлении по адрессу resources/views/admin/products/edit.blade.php в котором есть кнопка-ссылка которая нас и перебрасывает по URL-адрессу этой страницы

Так же она связана с методом edit, update контроллера ProductController --}}
@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
{{-- 1. Мы делали проверку(валидацию) в методе который связан с этим представлением (ProductController@create). 
  Если при проверке возникает ошибка то браузер нам об этом скажет в нежелательном для нас виде так ка он не откроет представление.

  2. Чтобы увидеть ошибки в том виде как нам нравится нужно исспользовать данную проверку(это встроенная проверка laravel) см.ниже. Она выведет div с перечнем ошибок на экран в читабельном виде.

  3. Подробнее про нее на сайте laravel/the basics/validation/# Displaying the validations errors*/ --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="/admin/testimonials/{{$testimonial->id}}" method="post">
        @csrf
        @method('put')
        {{--Всегда исспользовать эту защиту при создании формы!!!!--}}

    {{-- Laravel позволяет легко защитить ваше приложение от атак с подделкой межсайтовых запросов (CSRF). Подделка межсайтовых запросов — тип атаки на сайты, при котором несанкционированные команды выполняются от имени аутентифицированного пользователя.

    Laravel автоматически генерирует CSRF-"токен" для каждой активной пользовательской сессии в приложении. Этот токен используется для проверки того, что именно авторизованный пользователь делает запрос в приложение.

    При определении каждой HTML-формы вы должны включать в неё скрытое поле CSRF-токена, чтобы посредник CSRF-защиты мог проверить запрос. Вы можете использовать вспомогательную функцию csrf_field() для генерирования поля токена:

    PHP
    <form method="POST" action="/profile">
      {{ csrf_field() }}
      ...
    </form> --}}
        <div class="form-group @error('name') has-error @enderror">
            {{-- Рассмотрели ошибки валидации. И решили подсвечивать наши поля красным если будет ошибка.
            https://adminlte.io/themes/AdminLTE/pages/forms/general.html тут нашли инпут который подсвечивается и проинспектировав его увидели див с классами что нам нужны и скопировали себе --}}
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$testimonial->name}}">
            {{-- Из за нашего текстового редактора и всяких ошибок которые появляются если не прошли нашу валидацию страница обновляется и стерает все в полях которые мы заполнили, и чтоб этого не происходило мы созраняем написанное в полях с помощью value="{{old('name')}}"--}}

            {{-- Ниже говорим о том что если есть ошибка то выведем ее в span --}}
            @error('name') 
                <span class="help-block">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group @error('email') has-error @enderror">
            <label for="email">Отзыв</label>
            <textarea  class="form-control" name="email" id="email">{{$testimonial->email}}</textarea>
            {{-- Ниже говорим о том что если есть ошибка то выведем ее в span --}}
            @error('email') 
                <span class="help-block">{{$message}}</span>
            @enderror
        </div>
        
        {{-- Для описания будем исспользовать текстовый редактор https://unisharp.github.io/laravel-filemanager/integration и там выбрали Option 1: CKEditor. Подключили его с помощью скиптов внизу этого файла --}}
        <div class="form-group @error('comment') has-error @enderror">
            <label for="comment">Отзыв</label>
            <textarea  class="form-control" name="comment" id="comment">{{$testimonial->comment}}</textarea>
            {{-- Ниже говорим о том что если есть ошибка то выведем ее в span --}}
            @error('comment') 
                <span class="help-block">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Статус</label>
            <select name="status" id="status" class="form-control" value="{{$testimonial->status}}">
                <option>Положительный</option>
                <option>Негативный</option>
            </select>
        </div>
        
        <button class="btn btn-primary">Сохранить</button>
   </form>
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#status').select2();
{{-- Этот плагин мы подключили с сайта DataTable. 
    Это наша красивая таблица. В файле config/adminlte.php мы этот плагтн подключили и прописали ссылку на последние версии.
    select2(); - ф-ция которая красиво выводит роли --}}
        } );
    </script>


    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    
@endsection