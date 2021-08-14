<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}} " rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style type="text/css">
        .right_content p{
            font-size: 13.5px;
            font-weight: 500;
        }
        .profile_img{
            border-radius: 50%;
            box-shadow:6px 6px 20px #76de92;
        }
        .badge-primary{
           background-color: #39198a; 
        }
        .badge-secondary{
           background-color: #c96928; 
        }
        .badge-info{
           background-color: #222a45; 
        }
        .badge-danger{
           background-color: #959596; 
        }
        .hov_card:hover{
            background-color: #5cbf77;
            box-shadow:6px 6px 20px #76de92;
        }
        .card_style{
            margin-left: 25px; 
            margin-right: 20px; 
            margin-top: 10px;
        }
            .maincolor{
                color: #20a825;
            }
            .nav-link{
                color: #111212;
            }
            .nav-link .active{
                color: #20a825;
            }
            .shade{
                background-color: #52c471;
                box-shadow:10px 10px 20px #afb3b3;
                color: #232423;
                font-weight: bolder;
                border: none;
            }
            #input_container {
    position:relative;
    padding:0 0 0 20px;
    margin:0 20px;
    direction: rtl;
    
}
#input_container input{
    border-color: #dee0e0;
    border-width: 1px;
    border-radius: 2px;

    background-color: #dee0e0;
    height: 40px;
}
#input {
    
    margin:0;
    padding-right: 30px;
    width: 100%;
}
#input_img {
    position:absolute;
    margin-top: 10px;
    right:5px;
    margin-right: 5px;
    color: #262929;
    font-size: 22px;
    
}
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading  bg-light mt-3"><img src="{{asset('assets/logo.png')}}" style="height: 40px; width: auto; display: inline-block; margin-left:20px; float: left;"><h3 class="maincolor" style="font-weight: bolder; display: inline-block; margin-right:20px; float: right;">To-Do</h3></div>
                <div class="list-group list-group-flush">
                    <ul class="nav justify-content-center mt-2" style="font-weight: bold;">
                        <li class="nav-item">
                          <a class="nav-link active" href="#" style="color:#20a825; border-bottom: 3px solid currentColor; ">List</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Tags</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Custom</a>
                        </li>
                         
                    </ul>
                    <div style="margin-top: 10px;margin-left: 30px;">
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-suitcase"></li>&nbsp;&nbsp;Work</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-laptop"></li>&nbsp;&nbsp;Personal</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-users"></li>&nbsp;&nbsp;Social</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-bars"></li><span style="color: green;">&nbsp;&nbsp;Create list &nbsp;+</span></a>
                    </div>
                    <div style=" margin-top: 40px;margin-left: 30px;">
                        <ul class="nav justify-content-left " style="font-weight: bold;">
                        <li class="nav-item">
                          <a class="nav-link active" href="#" style="color:#20a825; border-bottom: 3px solid currentColor; ">Filters</a>
                        </li>

                        
                         
                    </ul>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fa fa-dot-circle"></li>&nbsp;&nbsp;Active Task</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-certificate"></li>&nbsp;&nbsp;Assigned to me</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-arrow-up"></li>&nbsp;&nbsp;Upcoming</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-calendar"></li>&nbsp;&nbsp;Overdue</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-1 " href="#!" style="color:black; font-weight: bold;"><li class="fas fa-check"></li>&nbsp;&nbsp;Completed</a>
                        
                    </div>
                    
                    <button class="btn btn-success m-5 shade">Add task +</button>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                @yield('content')
                
                <!-- Page content-->
                
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
