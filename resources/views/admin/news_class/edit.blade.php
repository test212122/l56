@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">编辑分类</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/index">首页</a></li>
            <li><a href="/admin/news_class/index">分类列表</a></li>
            <li class="active">编辑分类</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="/admin/news_class/index" class="btn btn-light">分类列表</a>
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
                        编辑分类
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($data,['url'=>'/admin/news_class/edit',"class"=>"form-horizontal"]) !!}
                            {{Form::hidden('id',$data->id)}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label">分类</label>
                            <div class="col-sm-8">
                                <select name="parent_id" class="selectpicker" data-style="btn-success">
                                    <option value="">暂无</option>
                                    @foreach(\App\Model\NewsClass::whereNull('parent_id')->get() as $key=>$val)
                                        <option {{$data->parent_id==$val->id?"selected":''}} value="{{$val->id}}">{{$val->title}}</option>
                                        @foreach(\App\Model\NewsClass::where('parent_id',$val->id)->get() as $v)
                                            <option {{$data->parent_id==$v->id?"selected":''}} value="{{$v->id}}"> ┣  {{$v->title}}</option>
                                        @endforeach
                                    @endforeach
                                    {{--<option>Relish</option>--}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input002" class="col-sm-2 control-label form-label">标题</label>
                            <div class="col-sm-5">
                                {{Form::text('title',null,["placeholder"=>"必填","class"=>"form-control","id"=>"input002"])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input002" class="col-sm-2 control-label form-label">排序</label>
                            <div class="col-sm-5">
                                {{Form::text('sort',null,["placeholder"=>"必填","class"=>"form-control","id"=>"input002"])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input002" class="col-sm-2 control-label form-label">推荐</label>
                            <div class="col-sm-5">
                                <div class="checkbox checkbox-success checkbox-inline">
                                    <input name="status[]" type="checkbox" id="inlineCheckbox12" {{in_array(1,explode(',',$data->status))?"checked":""}} value="1">
                                    <label for="inlineCheckbox12"> 首页 </label>
                                </div>
                                <div class="checkbox checkbox-success checkbox-inline">
                                    <input name="status[]" type="checkbox" id="inlineCheckbox2" {{in_array(2,explode(',',$data->status))?"checked":""}} value="2">
                                    <label for="inlineCheckbox2"> 热门 </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label">简介</label>
                            <div class="col-sm-5">
                                {{Form::textarea('intro',null,["class"=>"form-control","row"=>3,"id"=>"textarea1" ,"placeholder"=>"可为空"])}}
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