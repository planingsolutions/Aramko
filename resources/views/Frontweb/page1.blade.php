@extends('layout.page3')
@section('tittle', 'Project Description')

@section('content')

<section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-white u-section-1" id="carousel_002f">
      <div class="u-clearfix u-sheet u-sheet-1">
        @foreach($data as $dataa)
        <div class="fr-view u-clearfix u-rich-text u-text u-text-2">
          <h2 id="isPasted">
            <span style="font-weight: 700;">
              <span class="u-text-custom-color-1">{{$dataa->Tittle}}</span>
            </span>
          </h2>

          <p style="text-align: center;">
            <span style="line-height: 2; font-size: 0.888889rem;">{{$dataa->Paragraph1}}.&nbsp;</span>
          </p>
          <blockquote>
            <p style="text-align: center;">
              <span style="line-height: 2; font-weight: 700; font-size: 0.888889rem;">{{$dataa->Paragraphh}}.&nbsp;</span>
            </p>
          </blockquote>
        </div>
        <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" id="carousel-e131" data-interval="5000" data-u-ride="carousel">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1422" data-image-height="640">
                <img class="u-back-image u-expanded" src="{{asset('public/img/'.$dataa->Images[0])}}">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1196">
                <img class="u-back-image u-expanded" src="{{asset('public/img/'.$dataa->Images[1])}}">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
              <div class="u-back-slide" data-image-width="1422" data-image-height="640">
                <img class="u-back-image u-expanded" src="{{asset('public/img/'.$dataa->Images[2])}}">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="1422" data-image-height="640">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{asset('public/img/'.$dataa->Images[3])}}">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="1422" data-image-height="640">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{asset('public/img/'.$dataa->Images[4])}}">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-e131" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-e131" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="{{asset('public/img/'.$dataa->Images[0])}}">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-e131" data-u-slide-to="1">
              <img class="u-carousel-thumbnail-image u-image" src="{{asset('public/img/'.$dataa->Images[1])}}">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-e131" data-u-slide-to="2">
              <img class="u-carousel-thumbnail-image u-image" src="{{asset('public/img/'.$dataa->Images[2])}}">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="3">
              <img class="u-carousel-thumbnail-image u-image" src="{{asset('public/img/'.$dataa->Images[3])}}">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="4">
              <img class="u-carousel-thumbnail-image u-image" src="{{asset('public/img/'.$dataa->Images[4])}}" style="margin-right: 10px;">
            </li>
          </ol>
        </div>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-color-1 u-file-icon u-icon u-icon-circle u-icon-1"><img src="{{asset('assets/images/7.png')}}"></span>
                <h5 class="u-custom-font u-font-georgia u-text u-text-3">{{__('translation.Project Owner')}}</h5>
                <p class="u-text u-text-4">{{$dataa->PO}}</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-color-1 u-file-icon u-icon u-icon-circle u-icon-2"><img src="{{asset('assets/images/8.png')}}" alt=""></span>
                <h5 class="u-custom-font u-font-georgia u-text u-text-5"> {{__('translation.Consultant')}}</h5>
                <p class="u-text u-text-6">{{$dataa->Consultant}}</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-color-1 u-file-icon u-icon u-icon-circle u-icon-3"><img src="{{asset('assets/images/10.png')}}" alt=""></span>
                <h5 class="u-custom-font u-font-georgia u-text u-text-7">{{__('translation.General Constractor')}}</h5>
                <p class="u-text u-text-8">{{$dataa->GeneralC}}</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-custom-color-1 u-file-icon u-icon u-icon-circle u-icon-4"><img src="{{asset('assets/images/9.png')}}" alt=""></span>
                <h5 class="u-custom-font u-font-georgia u-text u-text-9"> {{__('translation.Subconstractor')}}</h5>
                <p class="u-text u-text-10">{{$dataa->Subconstractor}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </section>
    
    @endsection