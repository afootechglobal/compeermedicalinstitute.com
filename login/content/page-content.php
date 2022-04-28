


<?php if ($view_content=='login'){ ?>

                <div class="next_div" id="login_div">
                      <h1>LOG IN</h1>
        <form action="config/code.php" id="loginform"  method="post" enctype="multipart/form-data">
                      
                      <div class="title">EMAIL ADDRESS:<span>*</span></div>
                      <input type="email"  name="email"  id="email" required class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS"/>
                      
                      <div class="title">PASSWORD:<span>*</span></div>
                      <input type="password"  name="password" id="password" required class="text_field"  placeholder="ENTER YOUR PASSWORD" title="ENTER YOUR PASSWORD" />
                      
                      <div class="text-info">
                          Did you forget your password?
                          <span onclick="_get_reset_password_Panel('sent-email')">RESET PASSWORD</span>
                      </div>
                      <input name="action" value="login" type="hidden" />
                     <button class="btn" id="login-btn"  type="button" onclick="_log_in();" title="Login"><i class="fa fa-check-square-o"></i> Log In</button>
                   
                </form>
                    </div>
               


<?php } ?>






