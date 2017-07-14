@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Selamat Datang Di Larapus
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-muted">Buku dipinjam</td>
                                <td>
                                    @if ($borrowLogs->count() == 0)
                                        tidak ada buku dipinjam
                                    @endif
                                    <ul>
                                        @foreach ($borrowLogs as $borrowLog)
                                            <li>{!! Form::open(['url' => route('member.books.return', $borrowLog->book_id),
                                            'method' => 'put',
                                            'class' => 'form-inline js-confirm',
                                            'data-confirm' => "Anda yakin hendak mengembalikan".$borrowLog->book->title. "?"])!!}
                                            {{$borrowLog->book->title}}
                                            {!! Form::submit('Kembalikan', ['class'=>'btn-xs btn-default']) !!}
                                            
                                            {!! Form::close() !!}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection