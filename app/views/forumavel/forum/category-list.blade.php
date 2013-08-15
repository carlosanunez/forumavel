@extends('forumavel.layouts.master')

@section('css')
@stop

@section('js')
@stop

@section('content')
@foreach($oCategories as $oCategory)
<div class="row">
    <div class="span12 forumavel-category">
        {{$oCategory->name}}
    </div>
    <div class="span12 forumavel-forums">
        @foreach($oCategory->getForums()->get() as $oForum)
        <div class="row">
            <img src="#" class="span1 hidden-phone"/>
            
            <div class="span11">
                <div class="label visible-phone">New Post</div>
                <a href="/forum/threads/{{$oForum->id}}">{{$oForum->name}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@stop