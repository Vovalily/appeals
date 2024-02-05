@extends('main')

@section('content')
<a href="{{route('appeals.create')}}">Cоздать</a>
<a href="{{route('admins.index')}}">Авторизация</a>

<table>
    <thead>
    <tr>
        <th >Человек</th>
        <th >Вопрос</th>
        <th >Ответ</th>
    </tr>
    </thead>
    <tbody>
    @foreach($appeals as $appeal)
        <tr>
            <td>{{$appeal->user_name}}</td>
            <td>{{$appeal->question}}</td>
            <td>{{$appeal->answer}}</td>
        </tr>
    @endforeach

    </tbody>
  </table>

@endsection
