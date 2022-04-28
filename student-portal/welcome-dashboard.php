<div class="right-sided-div">

<div class="image-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> Dashboard</h5><br clear="all">
                            <p>Student Portal</p>

                            <div class="time-dash-div">
                            <span>Current Time</span>
                            <h4 class="time" id="datetime"> <?php echo date("h:i:s") ?> <sup> <?php echo date("A") ?> </sup></h4>
                            <span> <?php $date = date("l, dS F, Y");
				                echo $date 
                                ?> 
                            </span>
                            </div>
                        </div>

                        <div class="picture-back-div">
                                <div class="picture-div">
                                <img src="image/cmi-img.jpg" alt="picture">
                                </div>
                              <h3>Welcome Back!</h3>
                <?php

                $view_staff_list_query= mysqli_query($conn,"SELECT * FROM student_tab WHERE student_id='CMI_STD_0013 '");
                $staff_list=mysqli_fetch_array($view_staff_list_query);
                $firstname=$staff_list['firstname'];
                $lastname=$staff_list['lastname'];

                ?>

                <h2><?php echo $firstname ?> <?php echo $lastname ?> </h2>
                              <span>Last Login Date | 2021-11-04 18:52:11 </span>
                        </div>
                  

                    
                    </div>

                </div>
            </div>
        </div>


               
<div class="dashboard-main-div">
    <div class="dash-div-in">
    <div class="main-div " onclick="_get_panel('my_Admission')">
        <div class="inner-div">
            <span class="number">0</span>
            <div class="icon-div">
                <i class="fa fa-graduation-cap"> </i>
            </div><br>
      My Admission
        </div>
    </div>



    <div class="main-div " onclick="_get_requirement('Admission_requirement')">
        <div class="inner-div">
            <div class="icon-div">
                <i class="fa fa-check-square-o"> </i>
            </div>
        
      <p>Admission Requirements</p> 
        </div>
    </div>


    </div>


  
         

</div>

</div>