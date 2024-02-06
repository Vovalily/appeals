@php use App\Enums\AppealEnum; @endphp
@extends('main')

@section('content')

    <table>
        <thead>
        <tr>
            <th>Человек</th>
            <th>Вопрос</th>
            <th>Ответ</th>
            <th>Статус</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach($appeals as $appeal)
            <tr>
                <td>{{$appeal->user_name}}</td>
                <td>{{$appeal->question}}</td>
                <td>{{$appeal->answer}}</td>
                <td>{{$appeal->status}}</td>
                <td>{{$appeal->created_at}}</td>
                <td><a href="{{route('appeals.destroy', $appeal->id)}}">Удалить</a></td>
                <td><a href="{{route('appeals.show', $appeal->id)}}">Перейти</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
