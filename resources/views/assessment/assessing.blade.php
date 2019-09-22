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

    .text-details{
        font-size: 22px;
        padding-bottom: 10px;
    }

    .text-average{
        font-size: 22px;
        color: darkred;
        font-weight: bold;
    }

    .head-style {
        padding-bottom:70px;
    }
    </style>
<div class="content">
    <!-- Assessment -->
    <div class="container">
        <h1 class="head-style">Performance Evalutaion</h1>
        <div class="row">
            <div class="col-3">
                <p class="text-details">Name:</p>
                <p class="text-details">Project:</p>
            </div>
            <div class="col-md-3">
                <p class="text-details">ABCD</p>
                <p class="text-details">ABCD</p>
            </div>
            
            <div class="col-md-3">
                <p class="text-details">Post:</p>
                <p class="text-details">Department:</p>
            </div>
            <div class="col-md-3">
                    <p class="text-details">ABCD</p>
                    <p class="text-details">ABCD</p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <table class="table">
            <tr>
                <th></th>
                <th>0</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
            </tr>
            <tr>
                <th>Assessment Date</th>
                <form>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                    <td class="radio-inline"><input type="radio" name="optradio"></td>
                </form>
            </tr>
            <tr>
                    <th>Attendance</th>
                    <form>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                    </form>                  
                                            
            </tr>
            <tr>
                    <th>Quality of Work</th>
                    <form>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                    </form>                   
                                            
            </tr>
            <tr>
                    <th>Work Ethic</th>
                    <form>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                            <td class="radio-inline"><input type="radio" name="optradio"></td>
                    </form>                   
                                            
            </tr>
        </table>
    </div>

    <div class="container">
        <p class="text-right text-average">AVERAGE : 8.56</p>
    </div>
    <!-- /#assessment-->
@endsection