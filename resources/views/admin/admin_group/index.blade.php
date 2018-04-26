@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Row -->
    <div class="row">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">管理员分组列表</h1>
            <ol class="breadcrumb">
                <li><a href="/admin/index">首页</a></li>
                <li class="active">管理员分组列表</li>
            </ol>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/admin_group/create" class="btn btn-light"><i class="fa fa-plus"></i>新建管理员分组</a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-title">
                    管理员分组列表
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>分组名称</td>
                            <td>是否启用</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Model\AdminGroup::orderBy('id','desc')->get() as $val)
                            <tr>
                                <td>{{$val->title}}</td>
                                <td>{{$val->is_enable?'启用':'未启用'}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>
                                    <a href="/admin/admin_group/edit?id={{$val->id}}">编辑</a>
                                    <a href="javascript:void(0);" class="alert_message" url="{{action('Admin\AdminGroupController@dels')}}" data-id="{{$val->id}}">删除</a>
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