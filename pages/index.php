<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container">
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border text-center">
                            <h3>Perfil do eleitorado de Caicó-RN - 
                                eleições municipais de 2016</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Goal Completion</strong>
                                    </p>

                                    <div class="progress-group">
                                        <span class="progress-text">Add Products to Cart</span>
                                        <span class="progress-number"><b>160</b>/200</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Complete Purchase</span>
                                        <span class="progress-number"><b>310</b>/400</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Visit Premium Page</span>
                                        <span class="progress-number"><b>480</b>/800</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Send Inquiries</span>
                                        <span class="progress-number"><b>250</b>/500</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">TOTAL REVENUE</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">TOTAL COST</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">TOTAL PROFIT</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">GOAL COMPLETIONS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom" style="cursor: move;">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right ui-sortable-handle">
                        <li class="active"><a href="#revenue-chart" data-toggle="tab" aria-expanded="true">Area</a></li>
                        <li class=""><a href="#sales-chart" data-toggle="tab" aria-expanded="false">Donut</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Gráfico</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg height="300" version="1.1" width="608" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                            <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                            <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                            <text x="49.515625" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                            </text>
                            <path fill="none" stroke="#aaaaaa" d="M62.015625,261H583" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="49.515625" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan>
                            </text>
                            <path fill="none" stroke="#aaaaaa" d="M62.015625,202H583" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            </path>
                            <text x="49.515625" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan>
                            </text>
                            <path fill="none" stroke="#aaaaaa" d="M62.015625,143H583" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan>
                            </text>
                            <path fill="none" stroke="#aaaaaa" d="M62.015625,84.00000000000003H583" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            </path><text x="49.515625" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan>
                            </text>
                            <path fill="none" stroke="#aaaaaa" d="M62.015625,25.00000000000003H583" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="487.4123443195626" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                            </text>
                            <text x="255.72305969015795" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                            </text>
                            <path fill="#74a5c2" stroke="none" d="M62.015625,219.05493333333334C76.57533414337789,219.56626666666668,105.69475243013366,222.62345,120.25446157351155,221.10026666666667C134.81417071688944,219.57708333333335,163.9335890036452,209.13558251366123,178.4932981470231,206.86946666666668C192.8947495823208,204.6279825136612,221.69765245291615,204.88215,236.09910388821385,203.06986666666666C250.50055532351155,201.25758333333332,279.3034581941069,194.9129178506375,293.7049096294046,192.3712C308.26461877278246,189.80155118397084,337.3840370595383,182.51721666666668,351.94374620291615,182.6244C366.503455346294,182.73158333333333,395.62287363304984,204.18057122040074,410.1825827764277,193.22866666666667C424.5840342117254,182.39580455373408,453.38693708232074,101.94395359116024,467.78838851761844,95.48533333333336C482.03158224483593,89.09768692449357,510.51796969927096,135.13802307692308,524.7611634264885,141.8436C539.3208725698663,148.69818974358975,568.4402908566221,147.7554,583,149.726L583,261L62.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                            </path>
                            <path fill="none" stroke="#3c8dbc" d="M62.015625,219.05493333333334C76.57533414337789,219.56626666666668,105.69475243013366,222.62345,120.25446157351155,221.10026666666667C134.81417071688944,219.57708333333335,163.9335890036452,209.13558251366123,178.4932981470231,206.86946666666668C192.8947495823208,204.6279825136612,221.69765245291615,204.88215,236.09910388821385,203.06986666666666C250.50055532351155,201.25758333333332,279.3034581941069,194.9129178506375,293.7049096294046,192.3712C308.26461877278246,189.80155118397084,337.3840370595383,182.51721666666668,351.94374620291615,182.6244C366.503455346294,182.73158333333333,395.62287363304984,204.18057122040074,410.1825827764277,193.22866666666667C424.5840342117254,182.39580455373408,453.38693708232074,101.94395359116024,467.78838851761844,95.48533333333336C482.03158224483593,89.09768692449357,510.51796969927096,135.13802307692308,524.7611634264885,141.8436C539.3208725698663,148.69818974358975,568.4402908566221,147.7554,583,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <circle cx="62.015625" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="120.25446157351155" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="178.4932981470231" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="236.09910388821385" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="293.7049096294046" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="351.94374620291615" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="410.1825827764277" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="467.78838851761844" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="524.7611634264885" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="583" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <path fill="#eaf3f6" stroke="none" d="M62.015625,240.02746666666667C76.57533414337789,239.8072,105.69475243013366,241.35496666666666,120.25446157351155,239.1464C134.81417071688944,236.93783333333334,163.9335890036452,223.33676429872497,178.4932981470231,222.35893333333334C192.8947495823208,221.39173096539162,221.69765245291615,233.23263333333333,236.09910388821385,231.36626666666666C250.50055532351155,229.4999,279.3034581941069,209.2890577413479,293.7049096294046,207.428C308.26461877278246,205.54649107468123,337.3840370595383,214.43916666666667,351.94374620291615,216.39600000000002C366.503455346294,218.35283333333336,395.62287363304984,232.37947613843355,410.1825827764277,223.08266666666668C424.5840342117254,213.88690947176687,453.38693708232074,148.2268241252302,467.78838851761844,142.42573333333334C482.03158224483593,136.68839079189686,510.51796969927096,170.47037838827842,524.7611634264885,176.92893333333336C539.3208725698663,183.53101172161175,568.4402908566221,190.23343333333335,583,194.66826666666668L583,261L62.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                            <path fill="none" stroke="#a0d0e0" d="M62.015625,240.02746666666667C76.57533414337789,239.8072,105.69475243013366,241.35496666666666,120.25446157351155,239.1464C134.81417071688944,236.93783333333334,163.9335890036452,223.33676429872497,178.4932981470231,222.35893333333334C192.8947495823208,221.39173096539162,221.69765245291615,233.23263333333333,236.09910388821385,231.36626666666666C250.50055532351155,229.4999,279.3034581941069,209.2890577413479,293.7049096294046,207.428C308.26461877278246,205.54649107468123,337.3840370595383,214.43916666666667,351.94374620291615,216.39600000000002C366.503455346294,218.35283333333336,395.62287363304984,232.37947613843355,410.1825827764277,223.08266666666668C424.5840342117254,213.88690947176687,453.38693708232074,148.2268241252302,467.78838851761844,142.42573333333334C482.03158224483593,136.68839079189686,510.51796969927096,170.47037838827842,524.7611634264885,176.92893333333336C539.3208725698663,183.53101172161175,568.4402908566221,190.23343333333335,583,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <circle cx="62.015625" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="120.25446157351155" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="178.4932981470231" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="236.09910388821385" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="293.7049096294046" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="351.94374620291615" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="410.1825827764277" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="467.78838851761844" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="524.7611634264885" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="583" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            </svg>
                            <div class="morris-hover morris-default-style" style="left: 521.953px; top: 109px; display: none;">
                                <div class="morris-hover-row-label">2013 Q2</div>
                                <div class="morris-hover-point" style="color: #a0d0e0">
                                    Item 1:
                                    8,432
                                </div>
                                <div class="morris-hover-point" style="color: #3c8dbc">
                                    Item 2:
                                    5,713
                                </div>
                            </div>

                        </div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="638" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3c8dbc" d="M319,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,407.2277551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3c8dbc" stroke="#ffffff" d="M319,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,410.06364732624417,181.4248826052307L446.6151459070204,194.03833029452744A135,135,0,0,1,319,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f56954" d="M407.2277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,235.28484627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#f56954" stroke="#ffffff" d="M410.06364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,232.59400205154566,107.40757544301087L193.42726941747117,88.10097469226493A140,140,0,0,1,451.3416327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M235.28484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,318.97067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M232.59400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,318.96973599126824,246.3333285794739L318.9575884998742,284.9999933380171A135,135,0,0,1,197.9120097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="319" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="319" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1,0,0,1,0,0)"><tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
                    </div>
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <!-- solid sales graph -->
                <div class="box box-solid bg-teal-gradient">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-th"></i>
                        <h3 class="box-title">Gráfico</h3>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart" style="height: 250px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg height="250" version="1.1" width="588" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.90625px; top: -0.59375px;">
                            <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                            <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                            <text x="43.8125" y="211" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                            <tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                            </text>
                            <path fill="none" stroke="#efefef" d="M56.3125,211H563" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="43.8125" y="164.5" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                            <tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan></text>
                            <path fill="none" stroke="#efefef" d="M56.3125,164.5H563" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="43.8125" y="118.00000000000001" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                            <tspan dy="3.500000000000014" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan></text>
                            <path fill="none" stroke="#efefef" d="M56.3125,118.00000000000001H563" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="43.8125" y="71.5" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                            <tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text>
                            <path fill="none" stroke="#efefef" d="M56.3125,71.5H563" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="43.8125" y="25.00000000000003" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal">
                            <tspan dy="3.5000000000000284" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan></text>
                            <path fill="none" stroke="#efefef" d="M56.3125,25.00000000000003H563" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <text x="470.03546476306195" y="223.5" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text>
                            <text x="244.70420716889427" y="223.5" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text>
                            <path fill="none" stroke="#efefef" d="M56.3125,186.2062C70.47266099635479,185.9458,98.7929829890644,187.775575,112.95314398541919,185.1646C127.11330498177398,182.553625,155.4336269744836,166.4743950819672,169.59378797083838,165.3184C183.60003417375455,164.17497008196722,211.61252657958687,178.173325,225.61877278250304,175.9669C239.62501898541922,173.760475,267.63751139125156,149.8671487704918,281.6437575941677,147.667C295.80391859052247,145.4426737704918,324.1242405832321,155.955625,338.28440157958687,158.269C352.4445625759417,160.582375,380.76488456865127,177.16471967213116,394.9250455650061,166.174C408.93129176792223,155.30274467213115,436.9437841737546,77.67916919889502,450.9500303766707,70.8211C464.80236178614825,64.03839419889503,492.50702460510325,103.97557445054947,506.3593560145808,111.61090000000002C520.5195170109356,119.41589945054947,548.8398390036452,127.33952500000001,563,132.5824" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                            <circle cx="56.3125" cy="186.2062" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="112.95314398541919" cy="185.1646" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="169.59378797083838" cy="165.3184" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="225.61877278250304" cy="175.9669" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="281.6437575941677" cy="147.667" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="338.28440157958687" cy="158.269" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="394.9250455650061" cy="166.174" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="450.9500303766707" cy="70.8211" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="506.3593560145808" cy="111.61090000000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            <circle cx="563" cy="132.5824" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            </svg>
                            <div class="morris-hover morris-default-style" style="left: 404.591px; top: 3px; display: none;">
                                <div class="morris-hover-row-label">2012 Q4</div>
                                <div class="morris-hover-point" style="color: #efefef">
                                    Item 1:
                                    15,073
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas>
                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                                <div class="knob-label">Mail-Orders</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas>
                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                                <div class="knob-label">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center">
                                <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas>
                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                                <div class="knob-label">Gráfico</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
                <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </section>
            <!-- right col -->
        </div>
    </section>
</div>

<?php include(FOOTER_TEMPLATE); ?>