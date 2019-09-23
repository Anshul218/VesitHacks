@extends('navbars.navbars')

@section('dashboard')
<style>

 /* body{
     background-color: #fff !important;
 } */
 #right-panel{
     background-color: #fff !important;
 }
 .container{
    background-color: #fff !important;
 }
.container1{
   position: relative;
   /*margin: 100px auto;*/
   width: 300px;
   height: 350px;
   perspective: 1000px;
   background-color: transparent;
}
.projectdetails{
   position: relative;
   width:100%;
   height: 100%;
   transition: all 0.8s linear;
   transform-style: preserve-3d;
}
.container1 .projectdetails:hover{
  transform: rotateY(180deg);
  box-shadow: -5px 5px 5px #555;
}
.front, .back {
   position: absolute;
   width: 100%;
   height: 100%;
   backface-visibility: hidden;
 }
 .front{
   z-index: 2;
   transform: rotateY(0deg);
   box-shadow: 5px 5px 5px #555;
 }
 .back {
   display: block;
   transform: rotateY(-180deg);
   box-sizing: border-box;
   padding: 10px;
   color: white;
   text-align: center;
   background-color: #555;
   backface-visibility: hidden;
   transform: rotateY(180deg);
   text-align: center;
   line-height: 31px;
   font-family: 'Titillium Web', sans-serif;
}

a:link, a:visited ,a{
   color: inherit;
}

.front-face{
   margin-left: 10%;
   margin-top: 20%
}

</style>
<div class="col-lg-3 col-md-6" style="margin-top:5%">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-1">
                      <i class="fa fa-plus"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-heading"><a href="/createproject">Create Project</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>            
<h1 style="background-color: #fff ; margin-top: 5%;margin-left:3%">Ongoing Projects</h1>
<!-- /#header -->                   
             <div class="container1" style="margin-top: 2%;margin-left: 10%;">
               <div class="card projectdetails" style="background-color:rgba(252,127,3,0.6)">
                 <div class="front face">
                    <h1>Project Name</h1>
                    <h3>Department</h3>
                 </div>
                 <div class="back face">
                    <h3>Team Leader</h3>
                    <h3>Number of employees</h3>
                   <a href="/dashboard"> <button type="button" class="btn btn-primary" style="margin-top:7%" onClick="alert('Project Submitted Successfully')">Submit</button></a>
                 </div>

            </div>
           </div> 
          <h1 style="background-color: #fff ; margin-top: 8%;margin-left:3%">Completed Projects</h1>
<!-- /#header --> 
            
              
           <div class="container1" style="background-color: #fff;margin-top: 2%;margin-left: 10%">                 
               <div class="card projectdetails" style="background-color: rgba(28,252,3,0.6);">
                 <div class="front face">
                    <h1>Project Name</h1>
                    <h3>Department</h3>
                 </div>
                 <div class="back face">
                    <h3>Team Leader</h3>
                    <h3>Number of employees</h3>
                 </div>

                </div>    
           </div>  

@endsection