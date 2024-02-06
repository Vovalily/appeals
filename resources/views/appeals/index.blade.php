@extends('main')

@section('content')
<a href="{{route('appeals.create')}}">Cоздать</a>
<a href="{{route('admin.index')}}">Авторизация</a>
<div class="d-flex flex-wrap gap-2">
    @dd(  unset($appeals);)
@foreach($apeals_fixed as $appeal)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$appeal->user_name}}</h5>
                    <div>
                        <p class="card-text">{{$appeal->question}}</p>
                    </div>
                    <div>
                        <p class="card-text">{{$appeal->answer}}</p>
                    </div>
                </div>
            </div>
@endforeach
</div>
<div class="d-flex flex-wrap gap-2">
    @foreach($appeals as $appeal)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$appeal->user_name}}</h5>
                <div>
                    <p class="card-text">{{$appeal->question}}</p>
                </div>
                <div>
                    <p class="card-text">{{$appeal->answer}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    {{$appeals->links()}}
@endsection
