<?php
$this->load->view('layout/header');
?>

<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="<?php echo site_url("Shop/index"); ?>">Home</a><span>«</span></li>

                <li>Offer Drive</li>
            </ul>
        </div>
    </div>
</div>		
<!-- //breadcrumbs -->
<!-- Appointment -->
<div class="appointment">
    <div class="container">
        <div class="form-agileits">
            <h3>Offer Drive</h3>
            <p>Providing Transportation Solution</p>
            <?php
            $session_data = $this->session->userdata('logged_in');
            ?>
            <div class="form-agileits">
                <div class="">
                        User Name <h3><?php echo $session_data['user_name']; ?></h3>
                        Mobile No.<h6><?php echo $session_data['mobile_no']; ?></h6>


                    </div>
                    <div class="clearfix"></div>
             
            </div>

            <form action="#" method="post">
                <input  class="name" type="hidden" name="person_name"  value="<?php echo $session_data['user_name']; ?>"/>
                <input  class="name" type="hidden" name="contact_no" value="<?php echo $session_data['mobile_no']; ?>"/>
                <input type="text" name="vehicle_name" placeholder="Vehicle Name" required=""/>

                <input type="text" name="vehicle_no" placeholder="Vehicle Number" required=""/>

                <input  id="datepicker1" name="off_date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'mm/dd/yyyy';
                        }" placeholder="mm/dd/yyyy" required="">

                <input   type="text" name="start_point" placeholder="Start Point" required=""/>
                <input   type="text" name="end_point" placeholder="End Point" required=""/>
                <input  type="text" name="pickup_point" placeholder="Pickup Point" required=""/>
                <input  class="name" type="text" name="pickup_time" placeholder="Pickup Time" required=""/>
                <input  class="name" type="text" name="offer_amount" placeholder="Amount" required=""/>
                <?php
                $session_data = $this->session->userdata('logged_in');

                if ($session_data) {
                    ?>
                    <input type="submit" value="Save Detail" name="submit">
                <?php } else { ?>
                    <h2>Please Login First</h2>
                <?php } ?>
            </form>
        </div>


    </div>

    <div class="clearfix"> </div>
</div>
<!-- //Appointment --> 




<?php
$this->load->view('layout/footer');
?>
<!-- Calendar -->

<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->