@extends('admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Matches</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">

            @include('admin.list')
        
            <h2>Cap nhat ti so</h2>
            {!! Form::model($match, [
                    'method' => 'Post',
                    'url' => 'admin/matches/update-score'
                 ]) !!}
            <div class="form-group">
                {!! Form::label('score_a', $match->teamA->name) !!}
                {!! Form::number('score_a',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('score_b', $match->teamB->name) !!}
                {!! Form::number('score_b',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::hidden('id',$match->id) !!}
            {!! Form::hidden('match_time') !!}
            {!! Form::hidden('active_from') !!}
            {!! Form::hidden('active_until') !!}
            {!! Form::hidden('rate_a') !!}
            {!! Form::hidden('rate_draw') !!}
            {!! Form::hidden('rate_b') !!}
            {!! Form::close() !!}

            

        </div>
    </div>
@endsection