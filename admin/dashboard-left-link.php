
<div class="left-sided-div animated animated fadeInLeft animated">

<!-- PROFILE INDEX -->
        <div class="profile-div">
                <div class="picture-div">
                <img src="../image/cmi-img.jpg" alt="picture">
                </div>
                <h6>  DR DAVID</h6>
                <p> <i>Role</i><span>: STUDENT </span></p>
                <a href="myprofile.php"><button name="submitpassport"><i class="fa fa-edit" ></i> Edit Profile</button></a>
            </div>
            



<!-- DASHBOARD INDEX -->
<div class="dashboard-list">
    <ul>
        <li  id="dashboard" class="active"  onClick="_get_panel('dashboard', 'dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
      <li  id="admin"  onclick="_expand_link('Adminstrators');" title="Adminstrators"><i class="li-icon fa fa-user-circle-o" alt=" My Admission"></i> Adminstrators <i class="arrow fa fa-chevron-down"></i> 
      <div class="toggle" id="Adminstrators" style="display: none;">
           <div  id="admin" class="sub-link active" onClick="_get_panel('all_staff', 'admin')"><i class="li-icon fa fa-users" ></i> View All Staff</div>
		<div class="sub-link"  onClick="_get_panel('active_staff')"><i class="li-icon fa fa-user-plus"></i> Active Staff </div>
			<div class="sub-link" onClick="_get_panel('suspended_staff')"><i class="li-icon fa fa-user-times"></i> Suspended Staff</div>
		
        </div>
    
    
    </li>
      <li onclick="_expand_link('Student');"><i class="li-icon fa fa-users" alt=" My Admission"></i> Student <i class="arrow fa fa-chevron-down"></i>
      <div class="toggle" id="Student" style="display: none;">
           <div class="sub-link"  onClick="_get_panel('student_check_list')"><i class=" li-icon fa fa-users" ></i> Registered Student</div>
			<a href="active-staff.php"><div class="sub-link"><i class="li-icon fa fa-check"></i> Applicant Student </div></a>
		
        </div>
    
    </li>
      <li onclick="_expand_link('staff');"><i class="li-icon fa fa-book" alt=" My Admission"></i> Courses </li>
      <li onclick="_expand_link('staff');"><i class="li-icon fa fa-gears (alias)" alt=" My Admission"></i> Settings </li>   
        <li><i class="li-icon fa fa-sign-out" alt="Sign-out"></i> Sign-out</li>
      
    </ul>
</div>

</div>