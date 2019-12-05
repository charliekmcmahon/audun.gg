@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    @section('title', ' Audun Hilden')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')

    @include('_partials.header-project')


    <div class="center-div text-white">
      <div class="row wrapper no-valign-wrap-on-mobile">
        <div class="col s12 l19 desktop">
          <h1 class="project_title text-center" style="margin-top:8.5rem;">
          {{$page->title}} - title
        </h1>
        <div class="project_text text-center mt-6">
          {{$page->desc}} - desc
        </div>
        <p>
          <br>
          <div class="wrapperwork">
            <div class="featured-image center-oldclass" style="background:{{$page->maincolor}}">
              <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8">
                  <div class="browser">
                    <div class="header">
                      <ul class="dots">
                        <li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
                      </ul>
                    </div>
                    <img class="img-fluid" src="https://www.mailerlite.com/assets/features/feature-list/block-builder.jpg" alt="">
                  </div>

                  <h1 class="project_title text-center" style="margin-top:12.5rem;">
                    Services
                  </h1>
                  <div class="project_text text-center mt-6">
                    Web-Design, Mobile Design, Email services, CMS, Responsive
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
