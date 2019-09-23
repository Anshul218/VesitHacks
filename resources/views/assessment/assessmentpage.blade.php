@extends('navbars.navbars')

@section('dashboard')

<style>
    

        .search-bar{
            max-width: 30%;
        }

       .input-group .form-control{
            margin-bottom: 20px;
        }

        .table-hover{
            cursor: pointer;
        }
    </style>
        <!-- Content -->
        <div class="content">
            <div class="container">
                <h1>Performance Evaluation</h1>
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
                <table class="table table-hover" style="text-align: center;">
                    
                    <tr>
                        <th>Incharge Name</th>
                        <th>Department</th>
                    </tr>
                    <tr>
                        <td><a href="/assessment/assessing">Acharya</a></td>
                        <td>Technical Head</td>
                    </tr>
                    <tr>
                        <td><a href="/assessment/assessing">Prithvi Amin</a></td>
                        <td>Operations Head</td>
                    </tr>
                </a>
                </table>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <!-- /.site-footer -->
    </div>


@endsection