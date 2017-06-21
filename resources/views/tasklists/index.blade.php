@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasklists) > 0)
        @if (Auth::check())
            <?php $user = Auth::user(); ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タスク</th>
                        <th>ステータス</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasklists as $tasklist)
                        <tr>
                            <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                            <td>{{ $tasklist->content }}</td>
                            <td>{{ $tasklist->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! link_to_route('tasklists.create', '新規タスクの入力', null, ['class' => 'btn btn-primary']) !!}
        @else
            <div class="center jumbotron">
                <div class="text-center">
                    <h1>タスク管理アプリへようこそ</h1>
                    {!! link_to_route('signup.get', '初めての方はここからSign up', null, ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
        @endif
    @endif
    
@endsection