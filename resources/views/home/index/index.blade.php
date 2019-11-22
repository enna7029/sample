@extends('layouts.home')

@section('title',$head['title'])

@section('keywords',$head['keywords'])

@section('description',$head['description'])

@section('content')
    <!--左侧列表开始-->
    <div class="col-xs-12 col-md-12 col-log-8">
        <!--文章列表开始-->
        <div class="row b-one-article">
            <h3 class="col-xs-12 col-md-12 col-lg-12">
                <a class="b-oa-title" href="" target="_blank">文章标题</a>
            </h3>
            <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                <ul class="row">
                    <li class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-user"></i>
                        作者
                    </li>
                    <li class="col-xs-7 col-md-3 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        创建日期
                    </li>
                    <li class="col-xs-5 col-md-2 col-lg-2">
                        <i class="fa fa-list-alt"></i>
                        <a href="" target="_blank">分类</a>
                    </li>
                    <li class="col-xs-7 col-md-5 col-lg-4 ">
                        <i class="fa fa-tags"></i>
                        标签
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="row">
                    <!--封面图片-->
                    <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs b-oa-thumbnail">
                        <figure class="b-oa-pic b-style1">
                            <a href="http://homestead.test/uploads/article/5d9829577d311.png" target="_blank">
                                <img class="bjy-lazyload" src="http://homestead.test/uploads/article/5d9829577d311.png" data-src="" alt="" title="">
                            </a>
                            <figcaption>
                                <a href="" target="_blank"></a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--文章描述-->
                    <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read">
                        文章描述
                    </div>
                </div>
            </div>
        </div>
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

