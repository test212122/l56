@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">控制面板</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">控制面板</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/menu/create" class="btn btn-light"><i class="fa fa-plus"></i>添加</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    控制面板
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>标题</td>
                            <td>路由</td>
                            <td>排序</td>
                            <td>是否展示</td>
                            <td>是否有参数</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Model\Menu::leftMenu(\App\Model\Admin::adminInfo()->id) as $val)
                            <tr>
                                <td>{{$val->title}}</td>
                                <td>{{$val->url}}</td>
                                <td>{{$val->sort}}</td>
                                <td>{{$val->is_show?'是':'否'}}</td>
                                <td>{{$val->is_parameter?'是':'否'}}</td>
                                <td>
                                    <a href="/admin/menu/edit?id={{$val->id}}">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\MenuController@dels')}}" data-id="{{$val->id}}">删除</a>
                                </td>
                            </tr>
                            @foreach($val->child as $v)
                                <tr>
                                    <td style="text-indent:2%;"><span style="font-size: 16px;">┣ </span> {{$v->title}}</td>
                                    <td>{{$v->url}}</td>
                                    <td>{{$v->sort}}</td>
                                    <td>{{$v->is_show?'是':'否'}}</td>
                                    <td>{{$v->is_parameter?'是':'否'}}</td>
                                    <td>
                                        <a href="/admin/menu/edit?id={{$v->id}}">编辑</a>
                                        <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\MenuController@dels')}}" data-id="{{$v->id}}">删除</a>
                                    </td>
                                </tr>
                                @foreach($v->child as $va)
                                    <tr>
                                        <td style="text-indent:3%;"><span style="font-size: 16px;">┣ </span> {{$va->title}}</td>
                                        <td>{{$va->url}}</td>
                                        <td>{{$va->sort}}</td>
                                        <td>{{$va->is_show?'是':'否'}}</td>
                                        <td>{{$va->is_parameter?'是':'否'}}</td>
                                        <td>
                                            <a href="/admin/menu/edit?id={{$va->id}}">编辑</a>
                                            <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\MenuController@dels')}}" data-id="{{$va->id}}">删除</a>
                                        </td>
                                    </tr>
                                @endforeach
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