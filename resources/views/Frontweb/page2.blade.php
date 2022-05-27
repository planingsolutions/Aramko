@extends('layout.page3')
@section('tittle', 'All Projects | Aramko')

@section('content')
    <div class="with-sidebar-wrapper">
          <section id="content-section-1">
                    <div class="section-container container">
                        <div class="portfolio-item-wrapper type-classic-portfolio" style="margin-bottom: 30px;">

                            <div class="filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align" style="text-align:center;">
                                <ul>
                                <li><a href="#" class="active" data-filter="*" style="color: red;">@lang('labels.backend.access.Home.All Projects') </a></li>

                                    <li><a href="#" data-filter=".class1" style="color: red;">@lang('labels.backend.access.Home.fuel stations')</a></li>
                                    <li><a href="#" data-filter=".class2" style="color: red;">@lang('labels.backend.access.Home.industrial facilities')</a></li>
                                    <li><a href="#" data-filter=".class3" style="color: red;">@lang('labels.backend.access.Home.medical facilities')</a></li>
                                    <li><a href="#" data-filter=".class4" style="color: red;">@lang('labels.backend.access.Home.educational and administrative facilities')</a></li>
                                </ul>
                            </div>


                            <div class="portfolio-item-holder gdlr-portfolio-column-4">
                                <div class="gdlr-isotope filter-container" data-type="portfolio" data-layout="masonry">
                                    <div class="clear"></div>
                                    @foreach($project1 as $p1)
                                    <div class="three columns {{$p1->filter}}">
                                        <div class="gdlr-item gdlr-portfolio-item gdlr-classic-portfolio">
                                            <div class="gdlr-ux gdlr-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail gdlr-image"><img src="{{asset('public/img/'.$p1->Images[0])}}" alt="" width="440" height="550" /><span class="portfolio-overlay">&nbsp;</span><a href="{{route('descriptionOfeachProject', $p1->id)}}"><span class="portfolio-icon" ><i class="fas fa-link" aria-hidden="true"></i></span></a></div>
                                                <h3 class="portfolio-title"><a href="{{route('descriptionOfeachProject', $p1->id)}}">{{$p1->Tittle}}</a></h3>
                                                <div class="gdlr-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag"><span class="info-head gdlr-title">Tags </span><a href="{{route('descriptionOfeachProject', $p1->id)}}" rel="tag">{{$p1->Location}}</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                    @foreach($project2 as $p2)
                                    <div class="three columns {{$p2->filter}}">
                                        <div class="gdlr-item gdlr-portfolio-item gdlr-classic-portfolio">
                                            <div class="gdlr-ux gdlr-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail gdlr-image"><img src="{{asset('public/img/'.$p2->Images[0])}}" alt="" width="440" height="550" /><span class="portfolio-overlay">&nbsp;</span><a href="{{route('descriptionOfeachProject', $p2->id)}}"><span class="portfolio-icon" ><i class="fas fa-link" aria-hidden="true"></i></span></a></div>
                                                <h3 class="portfolio-title"><a href="{{route('descriptionOfeachProject', $p2->id)}}">{{$p2->Tittle}}</a></h3>
                                                <div class="gdlr-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag"><span class="info-head gdlr-title">Tags </span><a href="{{route('descriptionOfeachProject', $p2->id)}}" rel="tag">{{$p2->Location}}</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                    @foreach($project3 as $p3)
                                    <div class="three columns {{$p3->filter}}">
                                        <div class="gdlr-item gdlr-portfolio-item gdlr-classic-portfolio">
                                            <div class="gdlr-ux gdlr-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail gdlr-image"><img src="{{asset('public/img/'.$p3->Images[0])}}" alt="" width="440" height="550" /><span class="portfolio-overlay">&nbsp;</span><a href="{{route('descriptionOfeachProject', $p3->id)}}"><span class="portfolio-icon" ><i class="fas fa-link" aria-hidden="true"></i></span></a></div>
                                                <h3 class="portfolio-title"><a href="{{route('descriptionOfeachProject', $p3->id)}}">{{$p3->Tittle}}</a></h3>
                                                <div class="gdlr-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag"><span class="info-head gdlr-title">Tags </span><a href="{{route('descriptionOfeachProject', $p3->id)}}" rel="tag">{{$p3->Location}}</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    @foreach($project4 as $p4)
                                    <div class="three columns {{$p4->filter}}">
                                        <div class="gdlr-item gdlr-portfolio-item gdlr-classic-portfolio">
                                            <div class="gdlr-ux gdlr-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail gdlr-image"><img src="{{asset('public/img/'.$p4->Images[0])}}" alt="" width="440" height="550" /><span class="portfolio-overlay">&nbsp;</span><a href="{{route('descriptionOfeachProject', $p4->id)}}"><span class="portfolio-icon" ><i class="fas fa-link" aria-hidden="true"></i></span></a></div>
                                                <h3 class="portfolio-title"><a href="{{route('descriptionOfeachProject', $p4->id)}}">{{$p4->Tittle}}</a></h3>
                                                <div class="gdlr-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag"><span class="info-head gdlr-title">Tags </span><a href="{{route('descriptionOfeachProject', $p4->id)}}" rel="tag">{{$p4->Location}}</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                                         

                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <div class="clear"></div>
        </div>
@endsection