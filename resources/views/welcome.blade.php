@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        @if (count($tasklists) > 0)
            @include('tasklists.index', ['tasklists' => $tasklists])
        @endif
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスク管理アプリへようこそ</h1>
                {!! link_to_route('signup.get', '初めての方はここからSign up', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection