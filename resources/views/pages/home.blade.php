@extends('layout.default')
@section('title', 'Home')

@section('content')
    <div class="landing-hero">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2>A trusted and secure cryptocurrency exchange.</h2>
                    <p>Crypo is the most advanced UI kit for making the Blockchain platform.
                        This kit comes with 4 different exchange page, market, wallet and many more</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email"
                               aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid no-fluid">
        <div class="row sm-gutters">
            <div class="col-md-12 mb15">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                            async>
                        {
                            "symbols": [
                            {
                                "description": "",
                                "proName": "BINANCE:SOLUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:BTCUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:GRTUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:BNBUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:AXSUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BITFINEX:BTCUSD"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:DOTUSDT"
                            },
                            {
                                "description": "",
                                "proName": "BINANCE:ICPUSDT"
                            }
                        ],
                            "showSymbolLogo": true,
                            "displayMode": "compact",
                            "colorTheme": "dark",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>

    <div class="landing-info-one landing-info-one-bg mtb100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>The most advance and secure cryptocurrency platform.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam iusto, nisi illo nulla alias fugiat
                        repudiandae unde ab maxime placeat facere, dicta deleniti ipsam animi expedita quam minus perferendis
                        veniam?</p>
                    <ul>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Technical Analysis</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Market Data</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Cryptocurrency Price</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Deposit & Withdraw</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Buy & Sell</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Coin Listing</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Manage Wallets</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Market depth</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/landing/dash-preview-dark.png" class="visible-mobile" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="landing-info-one mtb100">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container tradingview-gain-and-loser">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js"
                                async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "12M",
                                "exchange": "US",
                                "showChart": true,
                                "locale": "en",
                                "width": "100%",
                                "height": "600",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "plotLineColorGrowing": "rgba(28, 217, 121, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 222, 95, 0.12)",
                                "belowLineFillColorFalling": "rgba(255, 0, 0, 0.12)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="offset-md-1 col-md-6">
                    <h2>Live Market Gainers and Losers tracking</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam iusto, nisi illo nulla alias fugiat
                        repudiandae unde ab maxime placeat facere, dicta deleniti ipsam animi expedita quam minus perferendis
                        veniam?</p>
                    <ul>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Gainers Tracking</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Losers Tracking</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Market Data</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Live Cryptocurrency Price</li>
                        <li><i class="icon ion-ios-checkmark-circle"></i> Past Coin Price check</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Here are a few reasons why <br> you should choose Crypo</h2>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/stroge.svg" alt="">
                        <h3>Secure storage</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi quaerat, quidem ut, fugiat blanditiis
                            facere</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/backup.svg" alt="">
                        <h3>Protected by insurance</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi quaerat, quidem ut, fugiat blanditiis
                            facere</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/managment.svg" alt="">
                        <h3>Industry best practices</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi quaerat, quidem ut, fugiat blanditiis
                            facere</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-number">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>$657B</h2>
                    <p>Quarterly volume traded</p>
                </div>
                <div class="col-md-4">
                    <h2>100+</h2>
                    <p>Countries supported
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>56+M</h2>
                    <p>Verified users
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-feature landing-start">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Get started in a few steps</h2>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/user.svg" alt="">
                        <span>1</span>
                        <h3>Create an account </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/bank.svg" alt="">
                        <span>
              2
            </span>
                        <h3>Link your bank account </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="landing-feature-item">
                        <img src="assets/img/landing/trade.svg" alt="">
                        <span>3</span>
                        <h3>Start buying & selling</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-sub">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="landing-sub-content">
                        <h2>Become part of a global community of people who have found their path to the crypto world with Crypo
                        </h2>
                        <a href="signup-dark.html">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
