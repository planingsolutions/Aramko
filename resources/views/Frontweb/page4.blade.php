@extends('layout.page3')
@section('tittle', 'Jobs Forms')

@section('content')
<section class="u-align-center u-clearfix u-section-8" style="margin-top:30px ; margin-bottom: 30px;" id="carousel_782e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <div class="u-expanded-width u-form u-form-1">
                                    <form action="{{url('admin/storeJobforms')}}" method="POST" style="padding: 0;" source="email" name="form">
                                    @csrf

                                        @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                                </div>
                                        @endif
                                        @if(Session::has('fail'))
                                            <div class="alert alert-danger" role="alert" >
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif    
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
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Address')}}</label>
                                            <input type="text" placeholder="{{__('Forms.Main.Placeholder.Address')}}" id="email-daf4" name="Address" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Age')}}</label>
                                            <input type="number" placeholder="{{__('forms.Main.Placeholder.Age')}}" id="email-daf4" name="Age" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Educational qualification')}}</label>
                                            <input type="text" placeholder="{{__('forms.Main.Placeholder.Educational qualification')}}" id="email-daf4" name="EQ" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.Graduation Year')}}</label>
                                            <input type="number" placeholder="{{__('forms.Main.Placeholder.Graduation Year')}}" id="email-daf4" name="GY" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-daf4" class="u-label">{{__('translation.years of experience')}}</label>
                                            <input type="number" placeholder="{{__('forms.Main.Placeholder.years of experience')}}" id="email-daf4" name="YOE" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="cars" class="u-label">{{__('translation.Applying for')}}</label>
                                            
                                            <select id="cars" name="cars" style="text-align:center; color:gray ;" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                                                <option>{{__('translation.civil engineer')}}</option>
                                                <option>{{__('translation.Technical office engineer')}}</option>
                                                <option>{{__('translation.Accountant')}}</option>
                                                <option>{{__('translation.Purchase Officer')}}</option>
                                                <option>{{__('translation.Drivers')}}</option>
                                                <option>{{__('translation.Location supervisor')}}</option>
                                                <option>{{__('translation.Worker (part-time)')}}</option>
                                                <option>{{__('translation.Worker (full-time)')}}</option>
                                                <option>{{__('translation.office boy')}}</option>
                                            </select>
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label class="u-label custom-file-upload" style="margin-top: 18px;">
                                            {{__('translation.Upload Your C.V')}}
                            <input type="file" name="cv" accept=".doc,.docx,.pdf" oninvalid="this.setCustomValidity('{{ __('translation.homeAreaV')}}')" oninput="setCustomValidity('')" required="">
                          </label>
                                        </div>



                                        <div class="u-align-left u-form-group u-form-submit">
                                            <a href="#" class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-custom-font u-font-merriweather u-hover-black u-radius-20 u-btn-1">{{__('forms.Main.Placeholder.Submit')}}</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success"> {{__('translation.EndOfForm')}}</div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-radius-20 u-shape-round u-size-27 u-layout-cell-2" style="background-color:#fff;">
                            <div class="u-container-layout u-valign-middle u-container-layout-2" style="height:800px">
                                <img src="{{asset('assets/images/eric-prouzet-B3UFXwcVbc4-unsplash.jpg')}}" style="height:100%; position:absolute; top:25px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection