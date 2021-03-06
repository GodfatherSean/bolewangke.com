@extends('layouts.app')

@section('content')
    @include('components.alert')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="account" class="mb-4">
                    <div class="p-3 bg-white rounded box-shadow">
                        <h5 class="border-bottom border-gray pb-2 mb-2">账号信息</h5>
                        <dl class="row">
                            <dt class="col-sm-4">账号名称</dt>
                            <dd class="col-sm-8">{{ Auth::user()->name }}</dd>
                            <dt class="col-sm-4">登录邮箱</dt>
                            <dd class="col-sm-8">{{ Auth::user()->email }}</dd>
                            <dt class="col-sm-4">QQ</dt>
                            <dd class="col-sm-8">{{ Auth::user()->qq }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <div id="ordered" class="rounded box-shadow bg-white p-3 mb-4">
                    <h5 class="border-bottom border-gray pb-2 mb-2">已下单的</h5>
                    @foreach (Auth::user()->orderedVideos as $video)
                        @include('components.video-row', ['video' => $video])
                    @endforeach
                    @foreach (Auth::user()->orderedCourses as $course)
                        @include('components.course-row', ['course' => $course])
                    @endforeach
                    {{--TODO: Implement Note--}}
                    <small class="d-block text-right mt-3">
                        <a class="btn btn-sm btn-block btn-outline-info" href="{{ route('video.index') }}">浏览所有课程</a>
                    </small>
                </div>
                <div id="subscribed" class="rounded box-shadow bg-white p-3 mb-4">
                    <h5 class="border-bottom border-gray pb-2 mb-2">已购买的</h5>
                    @foreach (Auth::user()->subscribedVideos as $video)
                        @include('components.video-row', ['video' => $video])
                    @endforeach
                    @foreach (Auth::user()->subscribedCourses as $course)
                        @include('components.course-row', ['course' => $course])
                    @endforeach
                    {{--TODO: Implement Note--}}
                </div>
                <div id="public" class="rounded box-shadow bg-white p-3 mb-4">
                    <h5 class="border-bottom border-gray pb-2 mb-2">全部体验课程</h5>
                    @foreach($publicVideos as $video)
                        @include('components.video-row', ['video' => $video])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

