@extends('nk1/layouts/nk5layout')

@section('content')
         <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                              @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
                                                <p>Welcome </p>
                                            </div>
                                            <h3 class="nk-block-title page-title">{{ auth()->user()->name }}</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome Admin</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                   
                                                </div><!-- .toggle-expand-content -->
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Deposits</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Deposited"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> {{ Auth::user()->deposits->where('status',1)->sum('amount') }} <span class="currency currency-usd">USD</span>
                                                        </span>
                                                        <!--<span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>-->
                                                    </div>
                                                    <div class="invest-data">
                                                        
                                                        <a  href="/deposit-create" class="btn btn-primary mt-1 mr-1" style="background:#006600;border-color:#006600">Deposit</a>
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Month</div>-->
                                                                <!--<div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Week</div>-->
                                                                <!--<div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Withdraw</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Withdraw"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> {{ Auth::user()->withdraws->sum('amount') }} <span class="currency currency-usd">USD</span>

                                                        
                                                        </span>
                                                        <!--<span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>-->
                                                    </div>
                                                    <div class="invest-data">
                                                        
                                                        <a  href="/withdraw-create" class="btn btn-primary mt-1 mr-1" style="background:#880000;border-color:#880000">Withdraw</a>
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Month</div>-->
                                                                <!--<div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Week</div>-->
                                                                <!--<div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Balance in Account</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Balance in Account"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount">
                                        @if(is_numeric(auth()->user()->us_balance))
                                                            
                                          {{number_format(auth()->user()->us_balance,2) ?? 0 }}
                                                    @else
                                                    0.00
                                                
                                                            
                                                        
                                                        @endif <span class="currency currency-usd">USD</span>
                                                        </span>
                                                    </div>
                                                    
                                                    <div class="invest-data">
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-coin-alt-fill"></em>Invest and Earn</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="/investing"><em class="icon ni ni-money"></em><span>Trade Stocks</span></a></li>
                                                                        <li><a href="/coining"><em class="icon ni ni-coin-alt-fill"></em><span>Trade Cryptos</span></a></li>
                                                                        <li><a href="/nfting"><em class="icon ni ni-note-add-fill-c"></em><span>Trade NFTs</span></a></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                        
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Month</div>-->
                                                                <!--<div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <!--<div class="title">This Week</div>-->
                                                                <!--<div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        
                                        
                                        <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-coin-alt-fill"></em>Enter Live Trading</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="/btc-trade"><em class="icon ni ni-money"></em><span>Bitcoin (BTC)</span></a></li>
                                                                        <li><a href="/eth-trade"><em class="icon ni ni-coin-alt-fill"></em><span>Ethereum (ETH)</span></a></li>
                                                                        <li><a href="/ltc-trade"><em class="icon ni ni-note-add-fill-c"></em><span>Litecoin (LTC)</span></a></li>
                                                                        <li><a href="/bnb-trade"><em class="icon ni ni-note-add-fill-c"></em><span>BNB</span></a></li>
                                                                        <li><a href="/user-options"><em class="icon ni ni-note-add-fill-c"></em><span>View trade history</span></a></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                            
                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="width:100%;height:80% !important;">
  <div id="tradingview_7fd27" style="height:400px;"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Chart</span></a> by data collection.com</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "height": 600,
  "symbol": "BINANCE:BTCUSDT",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": false,
  "hide_side_toolbar": true,
  "allow_symbol_change": true,
  "container_id": "tradingview_7fd27"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

                  <div class="ml-auto mr-auto">
                  <video width="100%"  controls>
  <source src="https://stockmarketly.com/assets/uploads/voices/Options%20Trading%20For%20Beginners%20(2X%20Money%20FAST%20Ultimate%20in-depth%20Guide).mp4" type="video/mp4">
  <source src="https://stockmarketly.com/assets/uploads/voices/Options%20Trading%20For%20Beginners%20(2X%20Money%20FAST%20Ultimate%20in-depth%20Guide).mp4" type="video/ogg">
Your browser does not support the video tag.
</video> 
 

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
                       
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="198" id="gmap_canvas" src="https://maps.google.com/maps?q=499%20WASHINGTON%20BLVD%20JERSEY%20CITY%20NJ%2007310&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:198px;width:100%;}</style><a href="https://www.embedgooglemap.net">get google maps embed code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:198px;width:100%;}</style></div></div>
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2005  <a href="https://data collection.com" target="_blank">data collection</a>
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

    <!-- <script src="{{ asset('nk2/assets/js/bundle.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('nk2/assets/js/scripts.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('nk2/assets/js/charts/gd-default.js?ver=2.9.1') }}"></script> -->
@endsection