@extends('nk1/layouts/nk5layout')

@section('content')
         <!-- content @s -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <!-- <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div> -->
                                            <h2 class="nk-block-title fw-normal">Refer</h2>
                                        </div>
                                    </div>
                                    
                                                
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Refer and earn profits</h4>
                                                <!-- <p>You can customize it ton of ways.</p> -->
<!-- 

<p class="bold"><em class="icon ni ni-arrow-right"></em> Below are some of the companies that will be traded shortly
<br/>
<em class="icon ni ni-arrow-right"></em>What triggers an upward or downwards move is the earnings call (date) or an event
<br/>
<em class="icon ni ni-arrow-right"></em>With options trading, we can still profit if the stocks goes up or down.
<br/>
<em class="icon ni ni-arrow-right"></em>Join any of the groups below
<br/>
<em class="icon ni ni-arrow-right"></em>Profit is shared among group members as soon as the the expiration is complete </p> -->
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row">

                                                <div class="col-md-12 col-lg-12 mt-2">
                                                        <div class="card card-bordered pricing">
                                                            <div class="pricing-head">
                                                                <div class="pricing-title">
                                                                    <h4 class="card-title title">Referral link</h4>
                                                                    <div class="col-12">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="https://accounts.data collection.com/register?ref={{ auth()->user()->name }}" placeholder="Recipient's username" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">Copy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                      

                                                                    
                                                                    <p class="sub-text"></p>
                                                                    <em class="icon ni ni-sign-usd"></em>
                                                                </div>
                                                                <div class="card-text">
                                                                    <div class="row">
                                                                        
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                    <li><span class="w-50">We offer a very generous referral bonus for every referred user who signs up and invests</span> <span class="ml-auto"> <p style="visibility:hidden;"> You can enjoy these benefits as long as a user signs up and invests</p> <h1 class="ml-4">5% referral bonus</h1></span></li>
                                                                    
                                                                    <br/>
                                                                    
                                                                    <li><span class="w-20">Referral Bonus</span> <span class="ml-auto"> <p style="visibility:hidden;"> </p> <h1 class="ml-4">${{ Auth::user()->referral_bonus ?? 0 }}</h1></span></li>
                                                                    
                                                                    <br/>
                                                                    <li class="list-group-item">Referral link: https://accounts.data collection.com/register?ref={{ auth()->user()->name }}</li>
                                                                    <br/>
        <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
        
        <br/>
        <li class="list-group-item">Referral count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
        
        
        
        <!--<br/>Referred users deposit amounts :-->
        <!--@foreach(Auth::user()->referrals as $name)-->
        <!--${{ $name->deposits->where('status',1)->sum('amount') }},-->
        <!--@endforeach-->
        
        
        
        <!--<li class="list-group-item">Confirmed deposits count: {{ count(Auth::user()->referrals->where('deposits', '>=', 0)) ?? 0 }}</li>-->
        
        
        <br/>
        
        
                                                                  
                                                                </ul>
                                                                <div class="pricing-action">
                                                                    
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div><!-- .col -->
                   
                                                    <!-- <div class="col-md-6 col-lg-4 mt-2">
                                                        <div class="card card-bordered pricing">
                                                            <div class="pricing-head">
                                                                <div class="pricing-title">
                                                                    <h4 class="card-title title"><em class="icon ni ni-sign-btc"></em>Bitcoin</h4>
                                                                    
                                                                    <p class="sub-text">Enjoy entry level of invest &amp; earn.</p>
                                                                    <em class="icon ni ni-sign-eth"></em>
                                                                </div>
                                                                <div class="card-text">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">{{ number_format(auth()->user()->bitcoin_balance,0) }}</span>
                                                                            <span class="sub-text">Bitcoin balance</span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">{{number_format(auth()->user()->bitcoin_balance,0) }}</span>
                                                                            <span class="sub-text">bitcoin balance</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                    <li><span class="w-50">Min Deposit</span> - <span class="ml-auto">$250</span></li>
                                                                    <li><span class="w-50">Max Deposit</span> - <span class="ml-auto">$1,999</span></li>
                                                                    <li><span class="w-50">Deposit Return</span> - <span class="ml-auto">Yes</span></li>
                                                                    <li><span class="w-50">Total Return</span> - <span class="ml-auto">125%</span></li>
                                                                </ul>
                                                                <div class="pricing-action">
                                                                    <button class="btn btn-outline-light">Choose this plan</button>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div><!-- .col -->


                                                    <!-- <div class="col-md-6 col-lg-4 mt-2">
                                                        <div class="card card-bordered pricing">
                                                            <div class="pricing-head">
                                                                <div class="pricing-title">
                                                                    <h4 class="card-title title"><em class="icon ni ni-sign-eth"></em>Ethereum</h4>
                                                                    
                                                                    <p class="sub-text">Enjoy entry level of invest &amp; earn.</p>
                                                                    <em class="icon ni ni-sign-eth"></em>
                                                                </div>
                                                                <div class="card-text">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">{{ number_format(auth()->user()->ethereum_balance,0) }}</span>
                                                                            <span class="sub-text">Ethereum balance</span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">{{ number_format(auth()->user()->ethereum_balance,0) }}</span>
                                                                            <span class="sub-text">Ethereum balance</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->


                                                            
                                                            <!-- <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                    <li><span class="w-50">Min Deposit</span> - <span class="ml-auto">$250</span></li>
                                                                    <li><span class="w-50">Max Deposit</span> - <span class="ml-auto">$1,999</span></li>
                                                                    <li><span class="w-50">Deposit Return</span> - <span class="ml-auto">Yes</span></li>
                                                                    <li><span class="w-50">Total Return</span> - <span class="ml-auto">125%</span></li>
                                                                </ul>
                                                                <div class="pricing-action">
                                                                    <button class="btn btn-outline-light">Choose this plan</button>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div><!-- .col -->

<!-- 
                                                    <div class="col-md-6 col-lg-4 mt-2">
                                                        <div class="card card-bordered pricing">
                                                            <div class="pricing-head">
                                                                <div class="pricing-title">
                                                                    <h4 class="card-title title"><em class="icon ni ni-sign-btc"></em>Starter</h4>
                                                                    
                                                                    <p class="sub-text">Enjoy entry level of invest &amp; earn.</p>
                                                                    <em class="icon ni ni-sign-eth"></em>
                                                                </div>
                                                                <div class="card-text">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">1.67%</span>
                                                                            <span class="sub-text">Daily Interest</span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">30</span>
                                                                            <span class="sub-text">Term Days</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                    <li><span class="w-50">Min Deposit</span> - <span class="ml-auto">$250</span></li>
                                                                    <li><span class="w-50">Max Deposit</span> - <span class="ml-auto">$1,999</span></li>
                                                                    <li><span class="w-50">Deposit Return</span> - <span class="ml-auto">Yes</span></li>
                                                                    <li><span class="w-50">Total Return</span> - <span class="ml-auto">125%</span></li>
                                                                </ul>
                                                                <div class="pricing-action">
                                                                    <button class="btn btn-outline-light">Choose this plan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- .col -->
                                   
                                                </div>
                                            </div>
                                        </div>
                                               
                                                      
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022  <a href="https://data collection.com" target="_blank">data collection</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
   @endsection