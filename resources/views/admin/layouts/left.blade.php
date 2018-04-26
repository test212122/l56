<div class="sidebar clearfix">

    <ul class="sidebar-panel nav">
        <li class="sidetitle">主题</li>
        @foreach(\App\Model\Menu::leftMenu1(\App\Model\Admin::adminInfo()->id) as $val)
            @if($val->url!='')
                @if($val->is_parameter)
                <li><a href="{{URL::action($val->url,[$val->parameter])}}"><span class="icon color5"><i class="fa {{$val->font}}"></i></span>{{$val->title}}<span class="label label-default"></span></a></li>
                @else
                    <li><a href="{{URL::action($val->url)}}"><span class="icon color5"><i class="fa {{$val->font}}"></i></span>{{$val->title}}<span class="label label-default"></span></a></li>
                @endif
            @else
                <li><a href="javascript:void(0);"><span class="icon color7"><i class="fa {{$val->font}}"></i></span>{{$val->title}}<span class="caret"></span></a>
                    <ul>
                        @foreach($val->child as $v)
                            @if($v->url!='')
                                <li><a href="{{URL::action($v->url)}}">{{$v->title}}</a></li>
                            @else
                                <li><a href="javascript:void(0);">{{$v->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
</div>