@extends('main')

@section('content')
    <form action="{{route('appeals.store')}}" method="post">
        @csrf
        <input type="text" name="user_name" placeholder="Имя">
        <textarea type="text" name="question" placeholder="Вопрос"></textarea>
        <button type="submit">Отправить</button>
    </form>

@endsection
