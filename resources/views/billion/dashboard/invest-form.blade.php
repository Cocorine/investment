@extends('billion.dashboard.include.header')

@section('title','Investment')

@section("content")

            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-content">
                                    <div class="nk-block-head-sub"><a href="{{route('plans')}}"
                                            class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to
                                                plans</span></a></div>
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">Ready to get started?</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block invest-block">
                                <form action="#" class="invest-form">
                                    <div class="row g-gs">
                                        <div class="col-lg-7">
                                            <div class="invest-field form-group"><input type="hidden" value="silver"
                                                    name="iv-plan" id="invest-choose-plan">
                                                <div class="dropdown invest-cc-dropdown"><a href="#"
                                                        class="invest-cc-chosen dropdown-indicator"
                                                        data-toggle="dropdown">
                                                        <div class="coin-item">
                                                            <div class="coin-icon"><em
                                                                    class="icon ni ni-offer-fill"></em></div>
                                                            <div class="coin-info"><span class="coin-name">Silver
                                                                    Plan</span><span class="coin-text">Invest for 21
                                                                    days and get daily profit 4.76%</span></div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                        <ul class="invest-cc-list">
                                                            <li class="invest-cc-item selected"><a href="#"
                                                                    class="invest-cc-opt" data-plan="silver">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-offer-fill"></em>
                                                                        </div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">Silver
                                                                                Plan</span><span
                                                                                class="coin-text">Invest for 21 days and
                                                                                get daily profit 4.76%</span></div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="invest-cc-item selected"><a href="#"
                                                                    class="invest-cc-opt" data-plan="starter">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-offer-fill"></em>
                                                                        </div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">Starter
                                                                                Plan</span><span
                                                                                class="coin-text">Invest for 30 days and
                                                                                get daily profit 1.67%</span></div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="invest-cc-item"><a href="#" class="invest-cc-opt"
                                                                    data-plan="dimond">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-offer-fill"></em>
                                                                        </div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">Dimond
                                                                                Plan</span><span
                                                                                class="coin-text">Invest for 14 days and
                                                                                get daily profit 14.29%</span></div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invest-field form-group">
                                                <div class="form-label-group"><label class="form-label">Choose Quick
                                                        Amount to Invest</label></div>
                                                <div class="invest-amount-group g-2">
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-1"><label class="invest-amount-label"
                                                            for="iv-amount-1">$ 100</label></div>
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-2"><label class="invest-amount-label"
                                                            for="iv-amount-2">$ 250</label></div>
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-3"><label class="invest-amount-label"
                                                            for="iv-amount-3">$ 500</label></div>
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-4"><label class="invest-amount-label"
                                                            for="iv-amount-4">$ 1,000</label></div>
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-5"><label class="invest-amount-label"
                                                            for="iv-amount-5">$ 1,500</label></div>
                                                    <div class="invest-amount-item"><input type="radio"
                                                            class="invest-amount-control" name="iv-amount"
                                                            id="iv-amount-6"><label class="invest-amount-label"
                                                            for="iv-amount-6">$ 2,000</label></div>
                                                </div>
                                            </div>
                                            <div class="invest-field form-group">
                                                <div class="form-label-group"><label class="form-label">Or Enter Your
                                                        Amount</label>
                                                    <div class="dropdown"><a href="#" class="link py-1"
                                                            data-toggle="dropdown">Change Currency</a>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-xxs dropdown-menu-right">
                                                            <ul class="link-list-plain sm text-center">
                                                                <li><a href="#">USD</a></li>
                                                                <li><a href="#">EUR</a></li>
                                                                <li><a href="#">CAD</a></li>
                                                                <li><a href="#">BTC</a></li>
                                                                <li><a href="#">ETH</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-control-group">
                                                    <div class="form-info">USD</div><input type="text"
                                                        class="form-control form-control-amount form-control-lg"
                                                        id="custom-amount" value="100.00">
                                                    <div class="form-range-slider" id="amount-step"></div>
                                                </div>
                                                <div class="form-note pt-2">Note: Minimum invest 100 USD and upto 2,000
                                                    USD</div>
                                            </div>
                                            <div class="invest-field form-group">
                                                <div class="form-label-group"><label class="form-label">Choose Payment
                                                        Method</label></div><input type="hidden" value="wallet"
                                                    name="iv-wallet" id="invest-choose-wallet">
                                                <div class="dropdown invest-cc-dropdown"><a href="#"
                                                        class="invest-cc-chosen dropdown-indicator"
                                                        data-toggle="dropdown">
                                                        <div class="coin-item">
                                                            <div class="coin-icon"><em
                                                                    class="icon ni ni-wallet-alt"></em></div>
                                                            <div class="coin-info"><span
                                                                    class="coin-name">NioWallet</span><span
                                                                    class="coin-text">Current balance: 2.014095 BTC (
                                                                    $18,934.84 )</span></div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                        <ul class="invest-cc-list">
                                                            <li class="invest-cc-item selected"><a href="#"
                                                                    class="invest-cc-opt" data-plan="silver">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-wallet-alt"></em>
                                                                        </div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">NioWallet</span><span
                                                                                class="coin-text">Current balance:
                                                                                2.014095 BTC ( $18,934.84 )</span></div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="invest-cc-item selected"><a href="#"
                                                                    class="invest-cc-opt" data-plan="starter">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-sign-btc"></em></div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">BTC Wallet</span><span
                                                                                class="coin-text">Current balance:
                                                                                2.014095 BTC</span></div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="invest-cc-item"><a href="#" class="invest-cc-opt"
                                                                    data-plan="dimond">
                                                                    <div class="coin-item">
                                                                        <div class="coin-icon"><em
                                                                                class="icon ni ni-sign-usd"></em></div>
                                                                        <div class="coin-info"><span
                                                                                class="coin-name">USD Wallet</span><span
                                                                                class="coin-text">Current balance:
                                                                                $18,934.84</span></div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invest-field form-group">
                                                <div class="custom-control custom-control-xs custom-checkbox"><input
                                                        type="checkbox" class="custom-control-input"
                                                        id="checkbox"><label class="custom-control-label"
                                                        for="checkbox">I agree the <a href="#">terms and &amp;
                                                            conditions.</a></label></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5 offset-xl-1">
                                            <div class="card card-bordered ml-lg-4 ml-xl-0">
                                                <div class="nk-iv-wg4">
                                                    <div class="nk-iv-wg4-sub">
                                                        <h6 class="nk-iv-wg4-title title">Your Investment Details</h6>
                                                        <ul class="nk-iv-wg4-overview g-2">
                                                            <li>
                                                                <div class="sub-text">Name of scheme</div>
                                                                <div class="lead-text">Silver Plan</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Term of the scheme</div>
                                                                <div class="lead-text">21 days</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Daily profit</div>
                                                                <div class="lead-text">$ 11.99</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Daily profit %</div>
                                                                <div class="lead-text">4.76 %</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Total net profit</div>
                                                                <div class="lead-text">$ 249.99</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Total Return</div>
                                                                <div class="lead-text">$ 499.99</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Term start at</div>
                                                                <div class="lead-text">Today (12-04-2019)</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Term end at</div>
                                                                <div class="lead-text">12 - 25 - 2019</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg4-sub">
                                                        <ul class="nk-iv-wg4-list">
                                                            <li>
                                                                <div class="sub-text">Payment Method</div>
                                                                <div class="lead-text">NioWallet</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg4-sub">
                                                        <ul class="nk-iv-wg4-list">
                                                            <li>
                                                                <div class="sub-text">Amount to invest</div>
                                                                <div class="lead-text">$ 250.00</div>
                                                            </li>
                                                            <li>
                                                                <div class="sub-text">Conversion Fee <span>(0.5%)</span>
                                                                </div>
                                                                <div class="lead-text">$ 1.25</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg4-sub">
                                                        <ul class="nk-iv-wg4-list">
                                                            <li>
                                                                <div class="lead-text">Total Charge</div>
                                                                <div class="caption-text text-primary">$ 251.25</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg4-sub text-center bg-lighter"><a href="#"
                                                            class="btn btn-lg btn-primary ttu" data-toggle="modal"
                                                            data-target="#invest-plan">Confirm &amp; proceed</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection