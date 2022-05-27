@extends('layout.page3')
@section('tittle', 'Aramko')

@section('content')
<section class="u-align-center u-clearfix u-white u-section-1" id="sec-cb46">
        <div class="u-expanded-width u-grey-10 u-shape u-shape-rectangle u-shape-1" style="background-color:white;"></div>
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    @foreach($mainsection as $sec1)
                    <div class="u-size-30">
                        <div class="u-layout-col">
                            <div class="u-align-right u-black u-bottom-left-radius-40 u-container-style u-layout-cell u-shape-round u-size-60 u-top-right-radius-40 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    <div class="u-image u-image-circle u-image-1" data-image-width="788" data-image-height="627" style="background-image: url(./public/img/{{$sec1->Images[0]}});"></div>
                                    <div class="u-border-7 u-border-white u-line u-line-horizontal u-line-1"></div>
                                    <h2 class="u-align-left u-custom-font u-font-merriweather u-text u-text-1">{{$sec1->Tittle}}</h2>
                                    <p class="u-custom-font u-font-merriweather u-text u-text-2"> {{$sec1->Paragraph1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30">
                        <div class="u-layout-col">
                            <div class="u-container-style u-image u-image-round u-layout-cell u-radius-40 u-size-30 u-image-2" data-image-width="1170" data-image-height="780" style=" background-image: url(./public/img/{{$sec1->Images[1]}});">
                                <div class="u-container-layout u-container-layout-2"></div>
                            </div>
                            <div class="u-align-left u-container-style u-image u-image-round u-layout-cell u-radius-40 u-size-30 u-image-3" data-image-width="700" data-image-height="700" style="background-image: url(./public/img/{{$sec1->Images[2]}});">
                                <div class="u-container-layout"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-9d5f">
        <h2 class="u-custom-font u-font-merriweather u-text u-text-body-color u-text-default u-text-1"> {{__('translation.About Us')}}</h2>
        <p class="u-custom-font u-font-merriweather u-text u-text-default-xl u-text-2"> {{__('translation.about tittle')}}</p>
        <div class="u-custom-color-1 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    @foreach($about_1 as $about_11)
                    <div class="u-size-20 u-size-30-md">
                        <div class="u-layout-col">
                            <div class="u-align-center u-container-style u-hover-feature u-layout-cell u-radius-20 u-shape-round u-size-30 u-white u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{asset('public/img/'.$about_11->Images[0])}}" data-image-width="1618" data-image-height="1080">
                                    <h4 class="u-custom-font u-font-merriweather u-text u-text-3"> {{$about_11->Tittle}}</h4>
                                    <p class="u-custom-font u-font-merriweather u-text u-text-4">{{$about_11->Paragraph1}}</p>
                                </div>
                            </div>
                            <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-30 u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-2"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($about_2 as $about_12)
                    <div class="u-size-20 u-size-30-md">
                        <div class="u-layout-col">
                            <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-3">
                                <div class="u-container-layout u-container-layout-3"></div>
                            </div>
                            <div class="u-align-center u-container-style u-hover-feature u-layout-cell u-radius-20 u-shape-round u-size-20 u-white u-layout-cell-4">
                                <div class="u-container-layout u-container-layout-4">
                                    <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-2" src="{{asset('public/img/'.$about_12->Images[0])}}" data-image-width="1170" data-image-height="780">
                                    <h4 class="u-custom-font u-font-merriweather u-text u-text-default u-text-5">{{$about_12->Tittle}}</h4>
                                    <p class="u-custom-font u-font-merriweather u-text u-text-6">{{$about_12->Paragraph1}}</p>
                                </div>
                            </div>
                            <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-5">
                                <div class="u-container-layout u-container-layout-5"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($about_3 as $about_13)
                    <div class="u-size-20 u-size-30-md">
                        <div class="u-layout-col">
                            <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-size-30 u-layout-cell-6">
                                <div class="u-container-layout u-container-layout-6"></div>
                            </div>
                            <div class="u-align-center u-container-style u-hover-feature u-layout-cell u-radius-20 u-shape-round u-size-30 u-white u-layout-cell-7">
                                <div class="u-container-layout u-container-layout-7">
                                    <img class="u-expanded-width u-image u-image-round u-radius-15 u-image-3" src="{{asset('public/img/'.$about_13->Images[0])}}" data-image-width="1626" data-image-height="1080">
                                    <h4 class="u-custom-font u-font-merriweather u-text u-text-default u-text-7">{{$about_13->Tittle}}</h4>
                                    <p class="u-custom-font u-font-merriweather u-text u-text-8">{{$about_13->Paragraph1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-3" id="carousel_a205" data-image-width="1620" data-image-height="1080">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default u-text-1"> {{__('translation.How we work')}}</h2>
            <p class="u-text u-text-2"> {{__('translation.howWork tittle')}}</p>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach($about_sec2 as $sec2)
                    <div class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <div alt="" class="u-image u-image-circle u-image-1" style="background-image: url(./public/img/{{$sec2->Images[0]}});"></div>
                            <h4 class="u-custom-font u-font-merriweather u-text u-text-3"> {{$sec2->Tittle}}</h4>
                            <p class="u-custom-font u-font-merriweather u-text u-text-grey-50 u-text-4">{{$sec2->Paragraph1}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-4" id="carousel_cfcf">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-border-20 u-border-custom-color-1 u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-shape u-shape-rectangle u-shape-1"></div>
            <div class="u-clearfix u-gutter-10 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        @foreach($about_sec3 as $sec3)
                        <div class="u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <p class="u-custom-font u-font-merriweather u-text u-text-grey-40 u-text-1">{{$sec3->Tittle}}</p>
                                <a href="#carousel_782e" class="u-active-black u-align-center u-border-none u-bottom-left-radius-20 u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-merriweather u-hover-black u-text-active-white u-text-hover-white u-top-right-radius-20 u-btn-1"><span class="u-file-icon u-icon u-text-white"><img src="{{asset('assets/images/6.png')}}" alt="">{{__('translation.CALL US')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="640" data-image-height="1422" style="background-image: url(./public/img/{{$sec3->Images[0]}});">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-5" id="carousel_f5fb">
        <img class="u-expanded-width u-image u-image-1" src="{{asset('assets/images/139330189_731364994243183_6230344626290823380_n.jpg')}}" data-image-width="1422" data-image-height="640">
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach($servicess as $servi)
                <div class="u-align-center u-container-style u-custom-item {{$servi->Paragraphh}}">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-custom-color-1 u-file-icon u-icon u-icon-circle u-spacing-24 u-text-white u-icon-1"><img src="{{asset('public/img/'.$servi->Images[0])}}" alt=""></span>
                        <h5 class="u-text u-text-default u-text-1"> {{$servi->Tittle}}</h5>
                        <p class="u-custom-font u-font-merriweather u-text u-text-2">{{$servi->Paragraph1}}</p>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-6" id="carousel_b9e2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-font-merriweather u-text u-text-body-color u-text-1"> {{__('translation.ourteam_tittle')}}</h2>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-20 u-size-20 u-image-1" data-image-width="720" data-image-height="960" style="background-image: url({{asset('assets/images/30707086_164425610937127_2988876052048117760_n.jpg')}});">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-20 u-shape-round u-size-20 u-layout-cell-2">
                                    <div class="u-border-7 u-border-custom-color-1 u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-2">
                                        <h4 class="u-custom-font u-font-merriweather u-text u-text-default-lg u-text-default-xl u-text-2">{{__('translation.ourteam_p2')}}</h4>
                                    </div>
                                </div>
                                <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                                    <div class="u-container-layout u-valign-top u-container-layout-3">
                                        <p class="u-custom-font u-font-merriweather u-text u-text-default u-text-3" data-animation-out="0"> {{__('translation.ourteam_p1')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-20 u-size-20 u-image-2" data-image-width="960" data-image-height="720" data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    <div class="u-container-layout u-container-layout-4"></div>
                                </div>
                                <div class="u-align-center-sm u-container-style u-layout-cell u-size-20 u-layout-cell-5">
                                    <div class="u-container-layout u-container-layout-5">
                                        <div class="u-align-center-sm u-align-center-xs u-image u-image-circle u-image-3" data-image-width="1600" data-image-height="1200"></div>
                                        <div class="u-align-center-sm u-align-center-xs u-image u-image-circle u-image-4" data-image-width="399" data-image-height="376"></div>
                                    </div>
                                </div>
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-20 u-size-20 u-image-5" data-image-width="960" data-image-height="720" data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    <div class="u-container-layout u-container-layout-6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-align-center-xs u-container-style u-image u-layout-cell u-radius-20 u-shape-round u-size-20 u-image-6" data-image-width="960" data-image-height="720" data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    <div class="u-container-layout u-valign-middle u-container-layout-7"></div>
                                </div>
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-20 u-size-20 u-image-7" data-image-width="960" data-image-height="708">
                                    <div class="u-container-layout u-container-layout-8"></div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-20 u-shape-round u-size-20 u-layout-cell-9" data-animation-name="customAnimationIn" data-animation-duration="1000">
                                    <div class="u-border-8 u-border-custom-color-1 u-container-layout u-valign-middle u-container-layout-9">
                                        <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                        @foreach($socialmedia as $socialss)

                                            <a class="u-social-url" title="facebook" target="_blank" href="{{$socialss->facebook}}"><span class="u-icon u-social-facebook u-social-icon u-text-black"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-65eb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-65eb"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                        </a>
                                            <a class="u-social-url" title="twitter" target="_blank" href="{{$socialss->twitter}}"><span class="u-icon u-social-icon u-social-twitter u-text-black"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1bc9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1bc9"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                        </a>
                                            <a class="u-social-url" title="instagram" target="_blank" href="{{$socialss->instgram}}"><span class="u-icon u-social-icon u-social-instagram u-text-black"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e95e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e95e"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                        </a>
                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_8186">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        @foreach($ProjectMain as $PM)
                        <div class="u-container-style u-layout-cell u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <img class="u-expanded-width u-image u-image-1" src="{{asset('public/img/'.$PM->Images[0])}}" data-image-width="640" data-image-height="1422">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                            <div class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-2">
                                <h2 class="u-custom-font u-font-merriweather u-text u-text-body-color u-text-1"> {{$PM->Tittle}} </h2>
                                @endforeach
                                <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        @foreach($featuredProject as $FP)
                                        <div class="u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container {{$FP->Paragraphh}}">
                                                <img alt="" class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-2" data-image-width="674" data-image-height="485" src="{{asset('public/img/'.$FP->Images[0])}}">
                                                <h4 class="u-custom-font u-font-merriweather u-text u-text-custom-color-1 u-text-2">{{$FP->Tittle}}</h4>
                                                <p class="u-custom-font u-font-merriweather u-text u-text-3">{{$FP->Paragraph1}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-8" id="carousel_782e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <h6 class="u-text u-text-default u-text-1">{{__('translation.contact us')}}</h6>
                                @if(session()->has('success'))
                    <div class="alert alert-success" style="color: #155724; background-color: #d4edda; border-radius: 60px !important; margin-top: 14px !important;">
                        {{ session()->get('success') }}
                    </div>
                 @endif
                                <div class="u-expanded-width u-form u-form-1">
                                    <form  action="{{url('admin/postcontact')}}" method="POST" source="email" name="form-1" style="padding: 10px;">
                                    @csrf

                                    <div class="u-form-group u-form-name">
                                            <label for="name-daf4" class="u-label">{{__('translation.Name')}}</label>
                                            <input type="text" placeholder="{{__('Forms.Main.Placeholder.Name')}}" id="name-daf4" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Email')}}</label>
                                            <input type="email"  placeholder="{{__('Forms.Main.Placeholder.Email')}}" id="email-daf4" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white"  oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-phone u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Phone')}}</label>
                                            <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="{{__('Forms.Main.Placeholder.Phone')}}" id="email-daf4" name="phone" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-daf4" class="u-label">{{__('translation.message')}}</label>
                                            <textarea placeholder="{{__('Forms.Main.Placeholder.Message')}}" rows="4" cols="50" id="message-daf4" name="message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required=""></textarea>
                                        </div>

                                            <button type="submit" class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-font-merriweather u-hover-black u-radius-20 u-btn-1" style="font-family: Material icons !important;">{{__('forms.Main.Placeholder.Submit' )}}</a>
                                        <div class="u-form-send-message u-form-send-success"> {{__('translation.EndOfForm')}}</div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-radius-20 u-shape-round u-size-27 u-layout-cell-2">
                        @foreach($website as $webbb)

                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <h6 class="u-custom-font u-font-merriweather u-text u-text-custom-color-1 u-text-2">{{__('translation.CALL US')}}</h6>
                                <p class="u-text u-text-body-color u-text-3">{{$webbb->phone}}
                                </p>
                                <h6 class="u-custom-font u-font-merriweather u-text u-text-custom-color-1 u-text-4">{{__('translation.LOCATION')}}</h6>
                                <a class="u-text u-text-body-color u-text-5" href="https://www.google.com/maps" target="_blank">{{$webbb->address}}
                                </a>
                                <h6 class="u-custom-font u-font-merriweather u-text u-text-custom-color-1 u-text-6">{{__('translation.OUR TOP SERVICES')}}</h6>
                                <p class="u-custom-font u-font-merriweather u-text u-text-7">{{__('translation.serv_1')}} <br>{{__('translation.serv_2')}} <br>{{__('translation.serv_3')}}
                                </p>
                            </div>

                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection