<div class="container-fluid">
              <section class="footer-top padding-y">
                  <div class="row">
                    <aside class="col-sm-2 col-md-2" style="margin-right: 0px;">
                      <h6 class="title">{{__('translation.Our app')}}</h6> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/nkZP7fe.png" height="40"></a> <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/47q2YGt.png" height="40" width="123"></a>
                  </aside>
                      
                      <aside class="col-sm-3 col-md-2">
                          <h6 class="title">{{__('translation.nav_About')}}</h6>
                          <ul class="list-unstyled">
                              <li> <a href="#" data-abc="true">{{__('translation.About us')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Services')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Terms & Condition')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Our Blogs')}}</a></li>
                          </ul>
                      </aside>
                      <aside class="col-sm-3 col-md-2">
                          <h6 class="title">{{__('translation.Services')}}</h6>
                          <ul class="list-unstyled">
                              <li> <a href="#" data-abc="true">{{__('translation.Help center')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Money refund')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Terms and Policy')}}</a></li>
                              <li> <a href="#" data-abc="true">{{__('translation.Open dispute')}}</a></li>
                          </ul>
                      </aside>
                      <aside class="col-sm-3 col-md-2">
                          <h6 class="title">{{__('translation.For users')}}</h6>
                          <ul class="list-unstyled">
                              <li> <a href="#" data-abc="true"> {{__('translation.User Login')}} </a></li>
                              <li> <a href="#" data-abc="true"> {{__('translation.User register')}} </a></li>
                              <li> <a href="#" data-abc="true"> {{__('translation.Account Setting')}} </a></li>
                              <li> <a href="#" data-abc="true"> {{__('translation.My Orders')}} </a></li>
                          </ul>
                      </aside>
                      
                      <aside class="col-md-4 " style="margin-left:0px;" >
                      @foreach($socialmedia as $socialss)
                        <article class="mr-3"> <img src="{{asset('public/img/'.$socialss->Images[0])}}" style="width: 200px; height: 100px; margin-left: 4rem;" class="logo-footer">
                            <p class="mt-3 description">{{$socialss->Tittle}}</p>
                            <div style="margin-left:279px;">
                                <a class="btn btn-icon btn-light" title="Facebook" target="_blank" href="{{$socialss->facebook}}" data-abc="true">
                                    <i class="fab fa-facebook-f"></i>
                                </a> 
                                <a class="btn btn-icon btn-light" title="Instagram" target="_blank" href="{{$socialss->instgram}}" data-abc="true">
                                    <i class="fab fa-instagram"></i>
                                </a> 
                                <a class="btn btn-icon btn-light" title="whatsapp" target="_blank"  href="https://api.whatsapp.com/send?phone={{$socialss->whatsapp}}&text={{__('translation.whatsappMsg')}}" data-abc="true">
                                    <i class="fab fa-whatsapp"></i>
                                </a> 
                                <a class="btn btn-icon btn-light" title="Twitter" target="_blank" href="{{$socialss->twitter}}" data-abc="true">
                                    <i class="fab fa-twitter"></i>
                                </a> 
                        </div>
                        </article>
                        @endforeach
                    </aside>
                  </div>
              </section>
              <section class="footer-copyright border-top">
                  <p class="float-left text-muted"> © planing solutions </p>
                  <p target="_blank" class="float-right text-muted"> <a href="#" data-abc="true">{{__('translation.Privacy')}} &amp; {{__('translation.Cookies')}}</a> &nbsp; &nbsp; <a href="#" data-abc="true">{{__('translation.Accessibility')}}</a> </p>
              </section>
          </div>