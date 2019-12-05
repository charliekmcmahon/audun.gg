@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
  @include('_partials.header')


    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')

    <div class="center-div text-white">
      <div class="row wrapper no-valign-wrap-on-mobile">
        <div class="col s12 l19">
          <div class="leftspan column">
            <h4>Hi, I'm</h4>
            <h1 style="margin: 15px 0;">
              Audun Hilden
            </h1>
            <div class="text">
              <span style="color:#4776ae;">
                Front-End Developer
              </span>, UI Designer and
              caffeine addicted. I'll make your dreams come online,
              just keep scrolling.
            </div>
          </div>
          <div class="rightspan column">
            <img src="https://i.imgur.com/5h83FYr.png" style="border-radius: 500px;width:200px;">
        </div>
      </div>
    </div>
  </div>
</div>
<div style="margin-top:300px;">
  &nbsp;
  @foreach ($page->featured as $featured)
  </div>
  <div class="body" style="background:{{$featured->maincolor}};">
    <div class="wrapper">
      <div class="leftspan column">
        <h2 class="title">{{$featured->title}}</h2>
        <p>
          <br>
        {{$featured->personal}}
      </div>
      <div class="rightspan column">
        <a href="/project/{{$featured->title}}" class="btn-primary-self btn-white" style="color:{{$featured->maincolor}}">
          See case study
        </a>
      </div>

      <img src="{{$featured->desktop}}" style="padding-top:50px;">

    </div>
    <div class="clearfix">&nbsp;</div>
  </div>

  @endforeach

@endsection
