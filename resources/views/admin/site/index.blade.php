@extends('admin.layouts.main')
@section('css')
    <link rel="stylesheet" href="/admin/css/main.css" media="all" />
@endsection
@section('main')
    <div class="admin-main">

        <blockquote class="layui-elem-quote">
            <a href="javascript:;" class="layui-btn layui-btn-small" id="add">
                <i class="layui-icon">&#xe608;</i> 添加信息
            </a>
            <a href="#" class="layui-btn layui-btn-small" id="import">
                <i class="layui-icon">&#xe608;</i> 导入信息
            </a>
            <a href="#" class="layui-btn layui-btn-small">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> 导出信息
            </a>
            <a href="#" class="layui-btn layui-btn-small" id="getSelected">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> 获取全选信息
            </a>
            <a href="javascript:;" class="layui-btn layui-btn-small" id="search">
                <i class="layui-icon">&#xe615;</i> 搜索
            </a>
        </blockquote>
        <fieldset class="layui-elem-field">
            <legend>数据列表</legend>
            <div class="layui-field-box layui-form">
                <table class="layui-table admin-table">
                    <thead>
                    <tr>
                        <th style="width: 30px;"><input type="checkbox" lay-filter="allselector" lay-skin="primary"></th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody id="content">
                        <tr>
                            <td><input type="checkbox" lay-skin="primary"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="/detail-1" target="_blank" class="layui-btn layui-btn-normal layui-btn-mini">预览</a>
                                <a href="javascript:;" data-name="" data-opt="edit" class="layui-btn layui-btn-mini">编辑</a>
                                <a href="javascript:;" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">删除</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <div class="admin-table-page">
            <div id="paged" class="page">
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="/admin/js/common.js"></script>
@endsection