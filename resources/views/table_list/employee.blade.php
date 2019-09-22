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
<div class="content">
    <div class="container">
        <h1>Employee Records</h1>
        <br>
        <!-- Search Bar -->
        <form>
            <div class="input-group">
                <input type="text" class="form-control ml-auto search-bar" placeholder="Search..">
                <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                </div>
            </div>
        </form>
        <!-- /.search bar -->

        <!-- Records -->
        <table class="table" style="margin-top: 30px; text-align: center;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Ongoing Projects</th>
                <th>Performance</th>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="#" style="color: black;">Jatin Acharya</a></td>
                <td>Techincal</td>
                <td>-</td>
                <td>6.44</td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="#" style="color: black;">Prithvi Amin</a></td>
                <td>Operations</td>
                <td>Ongoing Projects</td>
                <td>8.56</td>
            </tr>
        </table>
        <!-- /.records -->
    </div>
</div>
<!-- /.content -->
<div class="clearfix"></div>
<!-- Footer -->
<!-- /.site-footer -->
</div>

@endsection