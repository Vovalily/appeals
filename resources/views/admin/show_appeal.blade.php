@extends('main')

@section('content')
    <form action="{{route('answer.add', $appeal->id)}}" method="post">
        @csrf
        <textarea type="text" name="answer" placeholder="Ответ">{{$appeal->answer}}</textarea>
            <label>Закрепить</label>
            <input type="checkbox" name="is_fixed" @if($appeal->is_fixed == 1) checked @endif>

        <button type="submit">Отправить</button>
    </form>
@endsection
