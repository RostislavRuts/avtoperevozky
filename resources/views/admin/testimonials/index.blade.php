{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
    <table id="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Имя</th>
                <th>Почта</th>
    			<th>Отзыв</th>
    			<th>Статус</th>
                <th style="text-align: center;">Delete comment</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($testimonials as $comment)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td><a href="/admin/testimonials/{{$comment->id}}/edit">{{$comment->name}}</a></td>
                <td>{{$comment->email}}</td>
    			<td>{{$comment->comment}}</td>
                <td>{{$comment->status}}</td>
                <td style="text-align: center;">    
                    {{--Это форма для удаления категорий в route:list для метода delete написанно какой URL-адресс нам исспользовать--}}
                    <form action="/admin/testimonials/{{$comment->id}}" method="post">
                        
                        @csrf

                        <!-- <input type="hidden" name="_method" value="DELETE"> Это один из способов как исспользовать метод для удаления -->

                        @method('DELETE') {{-- - это второй более короткий вариант для исспользования метода удаления категорий --}}
                        <button class="btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
@stop

@section('js')
<script>
	$(document).ready( function () {
    	$('#table').DataTable();
	} );
</script>
@endsection

