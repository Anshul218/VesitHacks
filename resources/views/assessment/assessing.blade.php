@extends('navbars.navbars')

@section('dashboard')
<style>
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

    .button {
    background-color: darkgreen; /* Green */
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
                <th>Submission before Deadline</th>
                <form>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=0 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=1 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=2 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=3 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=4 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=5 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=6 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=7 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=8 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=9 name="optradio"></td>
                    <td class="radio-inline"><input onclick = "assesFunc1(this.value)" type="radio" value=10 name="optradio"></td>
                </form>
            </tr>
            <tr>
                    <th>Attendance</th>
                    <form>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=0 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=1 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=2 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=3 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=4 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=5 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=6 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=7 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=8 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=9 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc2(this.value)" type="radio" value=10 name="optradio"></td>
                    </form>                  
                                            
            </tr>
            <tr>
                    <th>Quality of Work</th>
                    <form>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=0 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=1 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=2 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=3 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=4 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=5 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=6 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=7 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=8 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=9 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc3(this.value)" type="radio" value=10 name="optradio"></td>
                    </form>                   
                                            
            </tr>
            <tr>
                    <th>Work Ethic</th>
                    <form>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=0 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=1 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=2 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=3 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=4 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=5 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=6 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=7 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=8 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=9 name="optradio"></td>
                        <td class="radio-inline"><input onclick = "assesFunc4(this.value)" type="radio" value=10 name="optradio"></td>
                    </form>                   
                                            
            </tr>
        </table>
    </div>

    <div class="container">
        <button class="button" type = "submit" onclick="calcavg()">Submit</button>
        <p class="text-right text-average">AVERAGE : <span id="avg">8.56</span></p>
    </div>

    <script>
        var a,b,c,d;
        
        function assesFunc1(optradio){
            console.log(optradio);
            a = parseInt(optradio);
        }
        function assesFunc2(optradio){
            console.log(optradio);
            b = parseInt(optradio);
        }
        function assesFunc3(optradio){
            console.log(optradio);
            c = parseInt(optradio);
        }
        function assesFunc4(optradio){
            console.log(optradio);
            d = parseInt(optradio);
        }

        function calcavg(){
        var avg ;
        avg =  (a + b + c+ d)/4;
        // console.log(avg);
        document.write(ge)
        }
    </script>
    <!-- /#assessment-->`
@endsection