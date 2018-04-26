@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">编辑管理员</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/index">首页</a></li>
            <li><a href="/admin/admin/index">管理员列表</a></li>
            <li class="active">编辑管理员</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="/admin/admin/index" class="btn btn-light">管理员列表</a>
                <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
            </div>
        </div>
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->
    <!-- START CONTAINER -->
    <div class="container-padding">
        <!-- Start Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        编辑管理员
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($data,['url'=>'/admin/admin/edit',"class"=>"form-horizontal"]) !!}
                            {{Form::hidden('id',$data->id)}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">分类</label>
                                <div class="col-sm-8">
                                    <select name="group_id" class="selectpicker" data-style="btn-success">
                                        @foreach(\App\Model\AdminGroup::where('is_enable',true)->get() as $key=>$val)
                                            <option {{$data->group_id==$val->id?'checked':''}} value="{{$val->id}}">{{$val->title}}</option>
                                        @endforeach
                                        {{--<option>Relish</option>--}}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input002" class="col-sm-2 control-label form-label">名称</label>
                                <div class="col-sm-5">
                                    {{Form::input('text','user_name',null,["id"=>"input002","class"=>"form-control","placeholder"=>"必填"])}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input002" class="col-sm-2 control-label form-label">密码</label>
                                <div class="col-sm-5">
                                    {{Form::input('password','password',null,["id"=>"input002","class"=>"form-control","placeholder"=>"必填"])}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input002" class="col-sm-2 control-label form-label">手机</label>
                                <div class="col-sm-5">
                                    {{Form::input('text','mobile',null,["id"=>"input002","class"=>"form-control","placeholder"=>"必填"])}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认</button>
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>

                </div>
            </div>

        </div>
        <!-- End Row -->





    </div>
    <!-- END CONTAINER -->
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection