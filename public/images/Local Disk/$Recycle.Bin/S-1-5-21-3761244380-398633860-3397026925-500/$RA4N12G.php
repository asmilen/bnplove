@extends('frontend')

@section('content')

<!-- block top-->
@include('frontend.banner_bread')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <div class="Container">
            <div class="inner-page">
                <div class="navtab">
                    <ul class="menutab" >
                        <li ><a href="{{url('tran-dau/danh-sach/1')}}">Vòng bảng (t1)</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/2')}}">Vòng bảng (t2)</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/3')}}">Vòng bảng (t3)</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/4')}}">Vòng 16</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/5')}}">tứ kết</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/6')}}">bán kết</a></li>
                        <li ><a href="{{url('tran-dau/danh-sach/7')}}">chung kết</a></li>
                    </ul>
                    <form class="searchbox">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input name="" type="text" placeholder="Tìm đội">
                    </form>
                </div>
                <script>

                    $(document).ready(function() {
                        $('.navtab a[href="' + location.protocol + '//' + location.host + location.pathname + '"]').parents('li').addClass('active');
                    });

                </script>
                <?php

               // $tuan = "2016-05-15"; // Năm/Tháng/Ngày

                function sw_get_current_weekday($date) {
                    date_default_timezone_set('Asia/Ho_Chi_Minh');

                    $weekday = date("l", strtotime($date));
                    $weekday = strtolower($weekday);
                    switch($weekday) {
                        case 'monday':
                            $weekday = 'Thứ hai';
                            break;
                        case 'tuesday':
                            $weekday = 'Thứ ba';
                            break;
                        case 'wednesday':
                            $weekday = 'Thứ tư';
                            break;
                        case 'thursday':
                            $weekday = 'Thứ năm';
                            break;
                        case 'friday':
                            $weekday = 'Thứ sáu';
                            break;
                        case 'saturday':
                            $weekday = 'Thứ bảy';
                            break;
                        default:
                            $weekday = 'Chủ nhật';
                            break;
                    }
                    return $weekday.', ' . date('d/m/Y ', strtotime($date));
                }
                ?>
                <div class="Contmid" >
                    <div class="headtxt">Chọn 1 trận đấu để tham gia</div>
                    <div class="bxbit">
                        <div class="rowbit ">
                            @foreach($data['name'] as $index => $name)

                                {{--@foreach($data['bets'] as $index => $team)--}}
                                <?php
                                    $date = substr($name->match_time, 0, 10);

//                                dd($tuan1);
                                ?>
                                {{--@if($date < )--}}
                                {{--@if (strtotime($date) <= strtotime($tuan))--}}

                                <div  style="padding-top: 20px; padding-bottom: 10px">
                                    <h2 class="date">
                                        {{sw_get_current_weekday($name->match_time)}}
                                    </h2>
                                </div>
                                @foreach($data['bets'] as $index => $team)
                                    <?php
                                    $date2 = substr($team->match_time, 0, 10);
                                    $time = substr($team->match_time, 11, 19);
                                    ?>
                                    @if($date === $date2)
                                        <div class="linebox clearfix">
                                            <div class="bxtime">
                                                <span class="txt">A</span>
                                                <span class="time">{{$time}}</span>
                                            </div>
                                            @if($team->score_a > $team->score_b)
                                                <a href="{{url('tran-dau/') . '/' . $team->id}}" id-attr="" style="color: dimgray">
                                                    <div class="bxteamleft"><span class="nameteam">{{$team->teamA->name}}</span></div>
                                                    <div class="bxflags">
                                                        <span class="flags" ><img src={{url('files/' . $team->teamA->image)}}></span>
                                                        <span class="point">{{$team->score_a}} : {{$team->score_b}}</span>
                                                        <span class="flags" ><img src={{url('files/' . $team->teamB->image)}}></span>
                                                    </div>
                                                    <div class="bxteamright"><span class="nameteam select">{{$team->teamB->name}}</span></div>
                                                </a>
                                            @elseif($team->score_a === $team->score_b)
                                                @if($team->result === null)
                                                    <a href="{{url('tran-dau/') . '/' .$team->id}}"  style="color: dimgray">
                                                        <div class="bxteamleft"><span class="nameteam select">{{$team->teamA->name}}</span></div>
                                                        <div class="bxflags">
                                                            <span class="flags" >
                                                                <img src={{url('files/' . $team->teamA->image)}}>
                                                            </span>
                                                            <span class="point">Chưa diễn ra</span>
                                                            <span class="flags" >
                                                                <img src={{url('files/' . $team->teamB->image)}}>
                                                            </span>
                                                        </div>
                                                        <div class="bxteamright">
                                                            <span class="nameteam select">{{$team->teamB->name}}</span>
                                                        </div>
                                                    </a>
                                                @else
                                                    <a href="{{url('tran-dau/') . '/' .$team->id}}"  style="color: dimgray">
                                                        <div class="bxteamleft"><span class="nameteam">{{$team->teamA->name}}</span></div>
                                                        <div class="bxflags">
                                                            <span class="flags" >
                                                                <img src={{url('files/' . $team->teamA->image)}}>
                                                            </span>
                                                            <span class="point">{{$team->score_a}} : {{$team->score_b}}</span>
                                                            <span class="flags" >
                                                                <img src={{url('files/' . $team->teamB->image)}}>
                                                            </span>
                                                        </div>
                                                        <div class="bxteamright"><span class="nameteam ">{{$team->teamB->name}}</span></div>
                                                    </a>
                                                @endif
                                            @elseif($team->score_a < $team->score_b)
                                                <a href="{{url('tran-dau/') . '/' .$team->id}}"  style="color: dimgray">
                                                    <div class="bxteamleft"><span class="nameteam select">{{$team->teamA->name}}</span></div>
                                                    <div class="bxflags">
                                                        <span class="flags" ><img src={{url('files/' . $team->teamA->image)}}></span>
                                                        <span class="point">{{$team->score_a}} : {{$team->score_b}}</span>
                                                        <span class="flags" ><img src={{url('files/' . $team->teamB->image)}}></span>
                                                    </div>
                                                    <div class="bxteamright"><span class="nameteam ">{{$team->teamB->name}}</span></div>
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                                {{--@else--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                            @endforeach
                            {!! $data['bets']->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection