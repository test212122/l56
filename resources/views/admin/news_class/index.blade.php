@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">分类列表</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">分类列表</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/news_class/create" class="btn btn-light"><i class="fa fa-plus"></i>新建分类</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    分类列表
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>标题</td>
                            <td>所属分组</td>
                            <td>排序</td>
                            <td>推荐</td>
                            <td>简介</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Model\NewsClass::orderBy('sort')->orderBy('id','desc')->whereNull('parent_id')->get() as $val)
                            <tr>
                                <td>{{$val->title}}</td>
                                <td>{{\App\Model\NewsClass::where('id',$val->parent_id)->value('title')}}</td>
                                <td>{{$val->sort}}</td>
                                <td>{{\App\Model\NewsClass::status($val->status)}}</td>
                                <td>{{$val->intro}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>
                                    <a href="/admin/news_class/edit?id={{$val->id}}">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\NewsClassController@dels')}}" data-id="{{$val->id}}">删除</a>
                                </td>
                            </tr>
                            @foreach(\App\Model\NewsClass::orderBy('sort')->orderBy('id','desc')->where('parent_id',$val->id)->get() as $va)
                                <tr>
                                    <td style="text-indent:3%;"><span style="font-size: 16px;">┣ </span> {{$va->title}}</td>
                                    <td>{{\App\Model\NewsClass::where('id',$va->parent_id)->value('title')}}</td>
                                    <td>{{$va->sort}}</td>
                                    <td>{{\App\Model\NewsClass::status($va->status)}}</td>
                                    <td>{{$va->intro}}</td>
                                    <td>{{$va->created_at}}</td>
                                    <td>
                                        <a href="/admin/news_class/edit?id={{$va->id}}">编辑</a>
                                        <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\NewsClassController@dels')}}" data-id="{{$va->id}}">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- End Panel -->
    </div>
@endsection
@section('js')

@endsection