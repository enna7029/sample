@extends('layouts.home')

@section('title',$head['title'])

@section('keywords',$head['keywords'])

@section('description',$head['description'])

@section('content')
    <!--左侧列表开始-->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <!--文章列表开始-->
        @foreach($articles as $k=>$v)
            <div class="row b-one-article">
                <h3 class="col-xs-12 col-md-12 col-lg-12">
                    <a class="b-oa-title" href="{{$v->url}}" target="_blank">{{$v->title}}</a>
                </h3>
                <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                    <ul class="row">
                        <li class="col-xs-5 col-md-2 col-lg-3">
                            <i class="fa fa-user"></i>
                            {{$v->author}}
                        </li>
                        <li class="col-xs-7 col-md-3 col-lg-3">
                            <i class="fa fa-calendar"></i>
                            {{$v->create_at}}
                        </li>
                        <li class="col-xs-5 col-md-2 col-lg-2">
                            <i class="fa fa-list-alt"></i>
                            <a href="{{$v->category->url}}" target="_blank">{{$v->category->name}}</a>
                        </li>
                        <li class="col-xs-7 col-md-5 col-lg-4 ">
                            <i class="fa fa-tags"></i>

                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="row">
                        <!--封面图片-->
                        <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs b-oa-thumbnail">
                            <figure class="b-oa-pic b-style1">
                                <a href="{{$v->url}}" target="_blank">
                                    <img class="bjy-lazyload"
                                         src="/images/home/loading.gif" data-src="{{$v->cover}}"
                                         alt="" title="">
                                </a>
                                <figcaption>
                                    <a href="{{url('aticle',[$v->id])}}" target="_blank"></a>
                                </figcaption>
                                @if(1 == $v->is_top)
                                    <img class="b-top-icon" src="/images/home/top.png" alt="top">
                                @endif
                            </figure>
                        </div>
                        <!--文章描述-->
                        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read">
                            {{$v->description}}
                        </div>
                    </div>
                </div>
                <a class="b-readall" href="{{$v->url}}" target="_blank">
                    阅读更多
                </a>
            </div>
    @endforeach
    <!--文章列表结束-->
        <!--列表分页开始-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">

            </div>
        </div>
        <!--列表分页结束-->
    </div>
    <!--左侧列表结束-->
@endsection

