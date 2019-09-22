   @extends('navbars.navbars')
   
   @section('dashboard')
   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
    </style>    
        <div class="clearfix"></div>
        <!-- Footer -->
        <!-- /.site-footer -->
        <section class="hero-section spad">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        
                        <div class="row" id="row1">
                            <div class="col-lg-6">
                                <div class="hero-text">
                                    <h2>Maria Williams</h2>
                                    <p>I’m a digital designer in love with photography, painting and discovering new worlds and cultures.</p>
                                </div>
                            </div> 
                            <!--<div class="col-lg-1">

                            </div>   
                        -->
                            
                                <div class="col-lg-6">
                                <div class="hero-info">
                                    <h2>General Info</h2>
                                    <ul>
                                        <li><span>E-mail:</span>mariawilliams@company.com</li>
                                        <li><span>Date of Birth:</span>Aug 25, 1988</li>
                                        <li><span>Address:</span>Rosia Road 55, Gibraltar, UK</li>
                                        <li><span>Phone: </span>+43 5266 22 345</li>
                                    </ul>
                                </div>
                            </div>
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->



    </div>
    <!-- /#right-panel -->
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>
    
@endsection