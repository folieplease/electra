@extends('layouts.app')
@section('title', 'Dashboard')

@section('style')
@endsection

@section('breadcrumb')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
</ul>
@endsection

@section('page_title', 'Dashboard')

@section('content')

        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <div class="element-actions">
                        <form class="form-inline justify-content-sm-end">
                            <select class="form-control form-control-sm rounded">
                                <option value="Pending">Today</option>
                                <option value="Active">Last Week </option>
                                <option value="Cancelled">Last 30 Days</option>
                            </select>
                        </form>
                    </div>
                    <h6 class="element-header">Sales Dashboard</h6>
                    <div class="element-content">
                        <div class="row">
                            <div class="col-sm-4 col-xxxl-3">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">Products Sold</div>
                                    <div class="value">57</div>
                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xxxl-3">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">Gross Profit</div>
                                    <div class="value">$457</div>
                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xxxl-3">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">New Customers</div>
                                    <div class="value">125</div>
                                    <div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                </a>
                            </div>
                            <div class="d-none d-xxxl-block col-xxxl-3">
                                <a class="element-box el-tablo" href="#">
                                    <div class="label">Refunds Processed</div>
                                    <div class="value">$294</div>
                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-xxxl-6">
                <div class="element-wrapper">
                    <h6 class="element-header">New Orders</h6>
                    <div class="element-box">
                        <div class="table-responsive">
                            <table class="table table-lightborder">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Products</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nowrap">John Mayers</td>
                                        <td>
                                            <div class="cell-image-list">
                                                <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio2.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio12.jpg)"></div>
                                                <div class="cell-img-more">+ 5 more</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="text-right">$354</td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">Kelly Brans</td>
                                        <td>
                                            <div class="cell-image-list">
                                                <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio8.jpg)"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="text-right">$94</td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">Tim Howard</td>
                                        <td>
                                            <div class="cell-image-list">
                                                <div class="cell-img" style="background-image: url(img/portfolio16.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="text-right">$156</td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">Joe Trulli</td>
                                        <td>
                                            <div class="cell-image-list">
                                                <div class="cell-img" style="background-image: url(img/portfolio1.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                                                <div class="cell-img" style="background-image: url(img/portfolio6.jpg)"></div>
                                                <div class="cell-img-more">+ 2 more</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="text-right">$1,120</td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">Jerry Lingard</td>
                                        <td>
                                            <div class="cell-image-list">
                                                <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="text-right">$856</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-xxxl-none">
                <!--START - Top Selling Chart-->
                <div class="element-wrapper">
                    <h6 class="element-header">Top Selling Today</h6>
                    <div class="element-box">
                        <div class="el-chart-w">
                            <canvas height="120" id="donutChart" width="120"></canvas>
                            <div class="inside-donut-chart-label"><strong>142</strong><span>Total Orders</span></div>
                        </div>
                        <div class="el-legend condensed">
                            <div class="row">
                                <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto col-6">
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
                                        <div class="legend-value"><span>Prada</span>
                                            <div class="legend-sub-value">14 Pairs</div>
                                        </div>
                                    </div>
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
                                        <div class="legend-value"><span>Maui Jim</span>
                                            <div class="legend-sub-value">26 Pairs</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-lg-none d-xxl-block">
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #806ef9;"></div>
                                        <div class="legend-value"><span>Gucci</span>
                                            <div class="legend-sub-value">17 Pairs</div>
                                        </div>
                                    </div>
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
                                        <div class="legend-value"><span>Armani</span>
                                            <div class="legend-sub-value">12 Pairs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END - Top Selling Chart-->
            </div>
            <div class="d-none d-xxxl-block col-xxxl-6">
                <!--START - Questions per Product-->
                <div class="element-wrapper">
                    <div class="element-actions">
                        <form class="form-inline justify-content-sm-end">
                            <select class="form-control form-control-sm rounded">
                                <option value="Pending">Today</option>
                                <option value="Active">Last Week </option>
                                <option value="Cancelled">Last 30 Days</option>
                            </select>
                        </form>
                    </div>
                    <h6 class="element-header">Inventory Stats</h6>
                    <div class="element-box">
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Eyeglasses</span></div>
                                <div class="bar-label-right"><span class="info">25 items / 10 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 70%">
                                    <div class="bar-level-3" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Outwear</span></div>
                                <div class="bar-label-right"><span class="info">18 items / 7 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 40%">
                                    <div class="bar-level-3" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Shoes</span></div>
                                <div class="bar-label-right"><span class="info">15 items / 12 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 60%">
                                    <div class="bar-level-3" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Jeans</span></div>
                                <div class="bar-label-right"><span class="info">12 items / 4 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 30%">
                                    <div class="bar-level-3" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 border-top pt-3">
                            <div class="element-actions d-none d-sm-block">
                                <form class="form-inline justify-content-sm-end">
                                    <select class="form-control form-control-sm form-control-faded">
                                        <option selected="true">Last 30 days</option>
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>Today</option>
                                    </select>
                                </form>
                            </div>
                            <h6 class="element-box-header">Inventory History</h6>
                            <div class="el-chart-w">
                                <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="50" id="liteLineChartV3" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END - Questions per product                  -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xxxl-9">
                <div class="element-wrapper">
                    <h6 class="element-header">Unique Visitors Graph</h6>
                    <div class="element-box">
                        <div class="os-tabs-w">
                            <div class="os-tabs-controls">
                                <ul class="nav nav-tabs smaller">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_overview">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_sales">Sales</a></li>
                                </ul>
                                <ul class="nav nav-pills smaller d-none d-md-flex">
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a></li>
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">7 Days</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14 Days</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last Month</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_overview">
                                    <div class="el-tablo bigger">
                                        <div class="label">Unique Visitors</div>
                                        <div class="value">12,537</div>
                                    </div>
                                    <div class="el-chart-w">
                                        <canvas height="150px" id="lineChart" width="600px"></canvas>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_sales"></div>
                                <div class="tab-pane" id="tab_conversion"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-xxxl-block col-xxxl-3">
                <div class="element-wrapper">
                    <h6 class="element-header">Visitors by Browser</h6>
                    <div class="element-box less-padding">
                        <div class="el-chart-w">
                            <canvas height="120" id="donutChart1" width="120"></canvas>
                            <div class="inside-donut-chart-label"><strong>1,248</strong><span>Visitors</span></div>
                        </div>
                        <div class="el-legend condensed">
                            <div class="row">
                                <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto">
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
                                        <div class="legend-value"><span>Safari</span>
                                            <div class="legend-sub-value">17%, 12 Visits</div>
                                        </div>
                                    </div>
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
                                        <div class="legend-value"><span>Chrome</span>
                                            <div class="legend-sub-value">22%, 763 Visits</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 d-none d-xxxxl-block">
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #806ef9;"></div>
                                        <div class="legend-value"><span>Firefox</span>
                                            <div class="legend-sub-value">3%, 7 Visits</div>
                                        </div>
                                    </div>
                                    <div class="legend-value-w">
                                        <div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
                                        <div class="legend-value"><span>Explorer</span>
                                            <div class="legend-sub-value">15%, 45 Visits</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">Recent Orders</h6>
                    <div class="element-box-tp">
                        <div class="controls-above-table">
                            <div class="row">
                                <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                <div class="col-sm-6">
                                    <form class="form-inline justify-content-sm-end">
                                        <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text">
                                        <select class="form-control form-control-sm rounded bright">
                                            <option selected="selected" value="">Select Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Active">Active</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </th>
                                        <th>Customer Name</th>
                                        <th>Country</th>
                                        <th>Order Total</th>
                                        <th>Referral</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>John Mayers</td>
                                        <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                        <td class="text-right">$245</td>
                                        <td>Organic</td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>Mike Astone</td>
                                        <td><img alt="" src="img/flags-icons/fr.png" width="25px"></td>
                                        <td class="text-right">$154</td>
                                        <td>Organic</td>
                                        <td class="text-center">
                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>Kira Knight</td>
                                        <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                        <td class="text-right">$23</td>
                                        <td>Adwords</td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>Jessica Bloom</td>
                                        <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                        <td class="text-right">$112</td>
                                        <td>Organic</td>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-control" type="checkbox">
                                        </td>
                                        <td>Gary Lineker</td>
                                        <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                        <td class="text-right">$64</td>
                                        <td>Organic</td>
                                        <td class="text-center">
                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                        </td>
                                        <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="controls-below-table">
                            <div class="table-records-info">Showing records 1 - 5</div>
                            <div class="table-records-pages">
                                <ul>
                                    <li><a href="#">Previous</a></li>
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
@endsection

@section('script')
@endsection