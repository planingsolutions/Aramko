<div class="footer-container container">
            <div class="footer-column four columns" id="footer-widget-1">
                <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                    <h3 class="gdlr-widget-title">{{__('translation.nav_About')}}</h3>
                    <div class="clear"></div>
                    <div class="textwidget">
                    @foreach($website as $webbb)

                        <p>{{$webbb->Tittle}}</p>
                    @endforeach
                        <div class="clear"></div>
                        @foreach($socialmedia as $socialss)

                        <div class="gdlr-space" style="margin-top: 30px;"></div>
                        <p>
                            <a title="Facebook" target="_blank" href="{{$socialss->facebook}}"><i class="gdlr-icon fab fa-facebook-f" style="color: #fff; font-size: 24px;"></i></a>
                            <a title="Instagram" target="_blank" href="{{$socialss->instgram}}"><i class="gdlr-icon fab fa-instagram" style="color: #fff; font-size: 24px;"></i></a>
                            <a title="whatsapp" target="_blank"  href="https://api.whatsapp.com/send?phone={{$socialss->whatsapp}}&text={{__('translation.whatsappMsg')}}"><i class="gdlr-icon fab fa-whatsapp" style="color: #fff; font-size: 24px; "></i></a> 
                            <a title="Twitter" target="_blank" href="{{$socialss->twitter}}"><i class="gdlr-icon fab fa-twitter" style="color: #fff; font-size: 24px;"></i></a>
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-column four columns" id="footer-widget-2">
                <div id="recent-posts-5" class="widget widget_recent_entries gdlr-item gdlr-widget">
                    <h3 class="gdlr-widget-title">{{__('translation.websitemap')}}</h3>
                    <div class="clear"></div>
                    <ul>
                        <li>
                            <a href="#sec-9d5f">{{__('translation.nav_About')}}</a>
                        </li>
                        <li>
                            <a href="#carousel_f5fb">{{__('translation.nav_Services')}}</a>
                        </li>
                        <li>
                            <a href="#carousel_782e">{{__('translation.nav_Contact')}}</a>
                        </li>
                        <li>
                            <a href="{{route('Projects')}}">{{__('translation.nav_Projects')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-column four columns" id="footer-widget-3">
                <div id="gdlr-recent-portfolio2-widget-5" class="widget widget_gdlr-recent-portfolio2-widget gdlr-item gdlr-widget">
                    <h3 class="gdlr-widget-title">{{__('translation.Recent Projects')}}</h3>
                    <div class="clear"></div>
                    <div class="gdlr-recent-port2-widget">
                    @foreach($images as $images)

                        <div class="recent-port-widget-thumbnail">
                            <a href="#"><img src="{{asset('public/img/'.$images->images)}}" alt="" width="150" height="150" /></a>
                        </div>
                        
                    @endforeach
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="copyright-wrapper">
            <div class="copyright-container container" style="text-align:center;">
                    {{__('translation.Copyright')}} <span class="year"></span> &copy; <a href="https://planing-solutions.com/"  target="_blank" style="color:#b39b54 !important; ">
                    {{__('translation.planning-solutions')}}

</a>
                <div class="clear"></div>
            </div>
        </div>