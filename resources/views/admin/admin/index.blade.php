@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">管理员列表</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">管理员列表</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/admin/create" class="btn btn-light"><i class="fa fa-plus"></i>新建管理员</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    管理员列表
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>用户名</td>
                            <td>所属分组</td>
                            <td>手机号</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Model\Admin::orderBy('id')->where('user_name','<>','admin@admin.com')->get() as $val)
                            <tr>
                                <td>{{$val->user_name}}</td>
                                <td>{{$val->group->title}}</td>
                                <td>{{$val->mobile}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>
                                    <a href="/admin/admin/edit?id={{$val->id}}">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\AdminController@dels')}}" data-id="{{$val->id}}">删除</a>
                                </td>
                            </tr>
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