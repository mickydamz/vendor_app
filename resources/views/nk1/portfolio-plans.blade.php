@extends('nk1/layouts/nk5layout')

@section('content')
         <!-- content @s -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                        
                                        <div class="nk-block-des text-soft">

                                        <div class="nk-block-head-content">
                                            <!-- <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div> -->
                                            <h2 class="nk-block-title fw-normal">Investment History</h2>
                                        </div>
                                               
                                                
                                            </div>
                                            <!--<h5 class="nk-block-title page-title">Investment history</h5>-->
                                            <p>A look at all the investments you have made </p>
                                           
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="/planing" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-portfolio"></em><span>Invest and Earn</span></a></li>
                                                        <li><a href="/deposit-create" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-wallet"></em><span>Investment Amount</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- .toggle-expand-content -->
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                        <div class="card card-preview">
                                            @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
          @endif
                                            <div class="card-inner">
                                                <div class="row">
                                                   
                                                    @foreach($todos as $todo)
                                                    <div class="col-md-6 col-lg-4 mt-2">
                                                        <div class="card card-bordered pricing">
                                                            <div class="pricing-head">
                                                                <div class="pricing-title">
                                                                    <h4 class="card-title title">{{ $todo->todo_id ?? '' }}</h4>
                                                                    <p class="sub-text">The investment plan is  {{ $todo->todo_id ?? '' }}.</p>
                                                                    @if(isset($todo->filename))
                                                                   <img width="50" height="50" src="{{ asset('storage/'.$todo->filename) }}" />
                                                                    @endif
                                                                </div>
                                                                <div class="card-text">
                                                                    <div class="row">
                                                                        <!-- <div class="col-6">
                                                                            <span class="h4 fw-500">1.67%</span>
                                                                            <span class="sub-text">Daily Interest</span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <span class="h4 fw-500">30</span>
                                                                            <span class="sub-text">Term Days</span>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-body">
                                                                <ul class="pricing-features">
                                                                <li><span class="w-50">Investment Amount</span> : <span class="ml-auto"> ${{ $todo->amount ?? 'no amount'}}</span></li>
                                                                    <!--<li><span class="w-50">Option type</span> - <span class="ml-auto">{{ $todo->payment }}</span></li>-->
                                       
                                                                    <li><span class="w-50">Start date</span> : <span class="ml-auto"> @if($todo->status == '1') {{  \Carbon\Carbon::parse($todo->start_time)->diffForHumans() ?? 'no start time' }}@else pending @endif</span></li>
                                                                    <li><span class="w-50">End date</span> : <span class="ml-auto">@if($todo->status == '1') {{  \Carbon\Carbon::parse($todo->end_time)->diffForHumans() ?? 'no start time' }}@else pending @endif</span></li>
                                                                    
                                                                        <li><span class="w-50">Status</span> : <span class="ml-auto">  @if($todo->status == '1')
                                                                <span class="badge badge-dot badge-success">Confirmed</span>
                                                                @else
                                                                  <span class="badge badge-dot badge-warning">Pending</span>
                                                                  
                                                                  @endif
</span></li>
                                                                    


                                                                </ul>
                                                                <div class="pricing-action">
                                                                    <!-- <button class="btn btn-outline-light"><a href="/btc-trade">Choose this plan</a></button> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @endforeach
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