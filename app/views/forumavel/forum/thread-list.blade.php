@extends('forumavel.layouts.master')

@section('css')
@stop

@section('js')
@stop

@section('content')
@foreach($oThreads as $oThread)
<div class="row">
    <div class="span11 forumavel-thread">
        <a href="/forum/posts/{{$oThread->id}}">{{$oThread->name}}</a>
    </div>
</div>
@endforeach
@stop