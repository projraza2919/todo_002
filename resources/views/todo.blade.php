@extends('layouts.todo')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 bg-light " style="height:100vh;">
            <div class="container pt-5">
                        <!--
                            <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        -->
                        <div class="row justify-content-center" style="background-color:#e1e3e3; border-radius: 3px; height: 40px;">
                                <div class="col-lg-11 ">
                                <input id="search_now" class="form-control" type="text" placeholder="Find your task..." style="background-color: transparent; border:none;display: block; width: 100%;" > 
                                </div>
                                <div class="col-lg-1 my-auto">
                                    <li class="fa fa-search" ></li>
                                </div>
                            </div>
                    </div>
                    <div class="container mt-4">
                        <div class="col-lg-12">
                            <h1 style="color:#289946; font-weight:1000;">Work</h1>
                        </div>
                        <div class="col-lg-12">
                            <p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.<p>
                        </div>
                        <div class="col-lg-12">
                            <!--task bars-->
                            <div class="card hov_card mb-3" style="border:none;">
                               
                                <div class="row card_style">
                                    <div class="col-lg-10">
                                        <h6 class="h6" style="color: black; font-weight:700;" >Send UI/UX presentation mail</h6>
                                        <p style="font-size:10px;">20 Apr,2021</p>
                                    </div>
                                    <div class="col-lg-2 my-auto">
                                        <p style="font-size:13px;"><span class="badge badge-primary" style="padding:6px;">Active Task</span></p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card hov_card mb-3" style="border:none;">
                               
                                <div class="row card_style">
                                    <div class="col-lg-10">
                                        <h6 class="h6" style="color: black; font-weight:700;" >Email presentation to clients</h6>
                                        <p style="font-size:10px;">22 Apr,2021</p>
                                    </div>
                                    <div class="col-lg-2 my-auto">
                                        <p style="font-size:13px;"><span class="badge badge-primary" style="padding:6px;">Active Task</span></p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card hov_card mb-3" style="border:none;">
                               
                                <div class="row card_style">
                                    <div class="col-lg-10">
                                        <h6 class="h6" style="color: black; font-weight:700;" >Draw & animate illustration for Anime Project</h6>
                                        <p style="font-size:10px;">2 Feb,2021</p>
                                    </div>
                                    <div class="col-lg-2 my-auto">
                                        <p style="font-size:13px;"><span class="badge badge-secondary" style="padding:6px;">Completed</span></p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card hov_card mb-3" style="border:none;">
                               
                                <div class="row card_style">
                                    <div class="col-lg-10">
                                        <h6 class="h6" style="color: black; font-weight:700;" >Creating Logo Design for Technology Company</h6>
                                        <p style="font-size:10px;">2 July,2021</p>
                                    </div>
                                    <div class="col-lg-2 my-auto">
                                        <p style="font-size:13px;"><span class="badge badge-info" style="padding:6px;">Upcoming</span></p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card hov_card mb-3" style="border:none;">
                               
                                <div class="row card_style">
                                    <div class="col-lg-10">
                                        <h6 class="h6" style="color: black; font-weight:700;" >Creating Business Strategy</h6>
                                        <p style="font-size:10px;">8 July,2021</p>
                                    </div>
                                    <div class="col-lg-2 my-auto">
                                        <p style="font-size:13px;"><span class="badge badge-danger" style="padding:6px;">Upcoming</span></p>
                                    </div>
                                </div>
                               
                            </div>




                            
                            
                        </div>
                    </div>
                
        </div>
        <div class="col-lg-5">
            <div class="container pt-5">
                        <!--
                            <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        -->
                        <div class="row justify-content-center">
                                <div class="col-lg-9 ">
                                 
                                </div>
                                <div class="col-lg-1 my-auto">
                                    <li class="fa fa-bell" ></li>
                                </div>
                                <div class="col-lg-2 my-auto">
                                    <img class="profile_img" src="assets/john.jpg" style="height: 35px;">
                                </div>
                            </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="h5 " style="font-weight:700;">Send UI/UX presentation mail</h5>
                                <p>20 Apr,2021&nbsp;&nbsp;<span class="badge badge-primary" style="padding:6px; font-size: 9px;">Active Task</span></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-3">
                                <h6 class="h6 text-left" style=" line-height: 32px; border-bottom: 3px solid black; color: #404040;" >Summary</h6>
                            </div>
                            <div class="col-lg-8">
                                
                            </div>
                            <div class="col-lg-1">
                                <h6 class="h6 text-right" style="line-height: 32px;"><li class="fa fa-edit fa-lg"></li></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 right_content">
                                <p>Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and
scrambled it to make a type specimen book. It has
survived not only five centuries.</p>
                                  <p>
                                      but also the leap into electronic typesetting, remaining
essentially unchanged. It was popularised in the 1960s
with the release of Letraset sheets containing Lorem
Ipsum passages,
                                  </p>
                            </div>
                        </div>
                        <div class="row justify-content-left mt-5">
                            <div class="col-lg-3">
                                <h5 class="h5" style="text-align: left; font-weight: 700; color: #c7c7c7;">Notes</h5>
                            </div>
                            <div class="col-lg-9 " style="background-color: #e3e3e3; 
                            border: 1px solid #918e8e;
                            border-radius: 2px;
                             height: 30px; width: 55%;">
                               <input id="search_now" class="form-control" type="text" placeholder="Add Notes..." style="background-color: transparent; border:none;display: block; width: 100%; height: 30px;" >
                            </div>
                        </div>
                    </div>
                    
        </div>
    </div>
</div>

                    
@endsection