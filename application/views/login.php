<?php
$this->load->view('layout/header');
?>

<div class="login-top sign-top">
    <div class="agileits-login">

        <h5>Login</h5>

        <form name="form1" action="#" method="post" onsubmit="phonenumber(document.form1.mobile_no)">
            <input type='text' name='mobile_no' placeholder="10 Digit Mobile No." required=""/>

            <div class="w3ls-submit"> 
                <input type="submit" name="signIn" value="signIn">  	
            </div>	
        </form>

    </div>  
</div>

<?php
$this->load->view('layout/footer');
?>
<script src="phoneno-all-numeric-validation.js"></script>
<script>

            function phonenumber(inputtxt)
            {
                var phoneno = /^\d{10}$/;
                if (inputtxt.value.match(phoneno))
                {
                    alert("valid Phone Number");

                    return true;

                } else
                {
                    alert("Not a valid Phone Number");
                    return false;
                }
            }
</script>