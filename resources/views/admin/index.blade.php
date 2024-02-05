@php use App\Enums\AppealEnum; @endphp
@extends('main')

@section('content')

    <table>
        <thead>
        <tr>
            <th>Человек</th>
            <th>Вопрос</th>
            <th>Ответ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($appeals as $appeal)
            <tr>
                <td>{{$appeal->user_name}}</td>
                <td>{{$appeal->question}}</td>
                <td>{{$appeal->answer}}</td>
                <td>
                    <form action="{{route('appeals.update', $appeal->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <select name="status" @if($appeal->status == AppealEnum::CONFIRM) disabled @endif>
                            <option hidden="hidden" selected>{{$appeal->status}}</option>
                            @foreach(AppealEnum::cases() as $status)
                                <option value="{{$status->value}}">{{$status->value}}</option>
                            @endforeach
                        </select>
                        <button type="submit">Изменить статус</button>
                    </form>
                </td>
                <td><a href="{{route('appeals.destroy', $appeal->id)}}">Удалить</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
