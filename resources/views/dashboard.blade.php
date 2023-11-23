@extends('layouts.master')
@section('con')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Dashboard One</h2>
                                    <p>Welcome to KaiWan Ban Sushi Admin<span class="bread-ntd"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="section-admin container-fluid">
<div class="row admin text-center">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="col-xs-3 mar-bot-15 text-left">
                            <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">100</h2>
                        </div>
                    </div>
                    <div class="progress progress-mini">
                        <div style="width: 78%;" class="progress-bar bg-green"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                    <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="text-left col-xs-3 mar-bot-15">
                            <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">200 ฿</h2>
                        </div>
                    </div>
                    <div class="progress progress-mini">
                        <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                    <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                    <div class="row vertical-center-box vertical-center-box-tablet">
                        <div class="text-left col-xs-3 mar-bot-15">
                            <label class="label bg-blue">60% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-xs-9 cus-gh-hd-pro">
                            <h2 class="text-right no-margin">2,000 ฿</h2>
                        </div>
                    </div>
                    <div class="progress progress-mini">
                        <div style="width: 60%;" class="progress-bar bg-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="product-sales-chart">
                <div class="portlet-title">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="caption pro-sl-hd">
                                <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="actions graph-rp">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-grey active">
                                        <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                    <label class="btn btn-grey">
                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic"></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part-sp">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">2,435</span></li>
                </ul>
            </div>
            <div class="white-box analytics-info-cs mg-b-30">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part-sp">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">4,469</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="calender-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="calender-inner">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
