@extends('navbars.navbars')

@section('dashboard')
<style>
    .text-details {
        font-size: 22px;
        padding-bottom: 10px;
    }

    .text-average {
        font-size: 22px;
        color: darkred;
        font-weight: bold;
    }

    .head-style {
        padding-bottom: 70px;
    }

    .button {
        background-color: darkgreen;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
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
        <form action="/upload_data" method="get">
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
                <tr class="form-group">
                    <th>Submission before Deadline</th>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=0 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=1 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=2 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=3 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=4 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=5 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=6 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=7 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=8 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=9 name="optradio1"></td>
                    <td class="radio-inline"><input onclick="asessFunc1(this.value)" type="radio" value=10 name="optradio1"></td>
                    <!-- </form> -->
                </tr>
                <tr class="form-group">
                    <th>Attendance</th>
                    <!-- <form action="AssessmentController@func12" method="get"> -->
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=0 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=1 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=2 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=3 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=4 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=5 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=6 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=7 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=8 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=9 name="optradio2"></td>
                    <td class="radio-inline"><input onclick="asessFunc2(this.value)" type="radio" value=10 name="optradio2"></td>
                    <!-- </form> -->

                </tr>
                <tr class="form-group">
                    <th>Quality of Work</th>
                    <!-- <form action="AssessmentController@func3" method="get"> -->
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=0 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=1 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=2 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=3 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=4 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=5 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=6 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=7 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=8 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=9 name="optradio3"></td>
                    <td class="radio-inline"><input onclick="asessFunc3(this.value)" type="radio" value=10 name="optradio3"></td>
                    <!-- </form> -->

                </tr>
                <tr class="form-group">
                    <th>Work Ethic</th>
                    <!-- <form action="AssessmentController@func4" method="get"> -->
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=0 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=1 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=2 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=3 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=4 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=5 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=6 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=7 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=8 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=9 name="optradio4"></td>
                    <td class="radio-inline"><input onclick="asessFunc4(this.value)" type="radio" value=10 name="optradio4"></td>

                </tr>

            </table>
    </div>

    <div class="container">
        <button class="button" type="submit" onclick="calcavg()">Submit</button>
        <p class="text-right text-average">AVERAGE : <span id="avg">--</span></p>
    </div>
    </form>


    <script>
        var a, b, c, d;

        function asessFunc1(optradio1) {
            console.log(optradio1);
            a = parseInt(optradio1);
        }

        function asessFunc2(optradio2) {
            console.log(optradio2);
            b = parseInt(optradio2);
        }

        function asessFunc3(optradio3) {
            console.log(optradio3);
            c = parseInt(optradio3);
        }

        function asessFunc4(optradio4) {
            console.log(optradio4);
            d = parseInt(optradio4);
        }

        function calcavg() {
            var avr;
            avr = (a + b + c + d) / 4;
            console.log(avg);
            document.getElementById("avg").innerHTML = avr;
        }
    </script>
    <!-- /#assessment-->`
    @endsection