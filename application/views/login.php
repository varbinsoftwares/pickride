<?php
$this->load->view('layout/header');
?>
<div class="login-top sign-top">
    <div class="agileits-login">
        
        <h5>Login</h5>
      
        <form action="#" method="post">
            <input type="text" class="" name="mobile_no" placeholder="Mobile No." required=""/>
            <input type="password" class="password" name="password" placeholder="Password" required=""/>
            <div class="wthree-text"> 
               
                <div class="clearfix"> </div>
            </div>  
            <div class="w3ls-submit"> 
                <input type="submit" name="signIn" value="signIn">  	
            </div>	
        </form>

    </div>  
</div>

<?php
$this->load->view('layout/footer');
?>