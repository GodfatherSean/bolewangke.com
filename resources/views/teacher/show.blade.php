@extends('layouts.app')

@section('content')

    <div id="teacher" class="container">
        <div class="jumbotron bg-white box-shadow">
            <div class="media">
                <img class="ml-2 mr-3 border border-info rounded-circle"
                     src="{{ asset('storage/' . $teacher->picture) }}" alt="教师头像" width="100px">
                <div class="media-body">
                    <h3>{{ $teacher->name }}</h3>
                    <p class="small mb-1">
                        <strong>擅长科目：</strong>
                        @foreach($teacher->subjects as $subject)
                            <span class="small badge badge-info">{{ $subject->name }}</span>
                        @endforeach
                    </p>
                    <p class="small mt-3"> {{ $teacher->introduction }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="videos" class="container">
        <div class="row">
            @foreach($teacher->videos as $video)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('storage/' . $video->thumbnail) }}" alt="logo">
                        <div class="card-body">
                            <h5>{{ $video->name }}</h5>
                            <p class="card-text">{{ $video->introduction }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('video.show', ['id' => $video->id]) }}" class="btn btn-sm btn-outline-info">观看视频</a>
                                    <a href="{{ route('about') }}" class="btn btn-sm btn-outline-info">咨询价格</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
