@extends('layouts.app', ['page' => __('Vue'), 'pageSlug' => 'Vue'])

@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
@endsection
