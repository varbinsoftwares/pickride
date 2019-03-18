<?php
$this->load->view('layout/header');
?>
<!--Services-->
<div class="options-wthree">
    <div class="container">
        <?php
        $session_data = $this->session->userdata('logged_in');
        if ($session_data) {
            ?>
            <ul>
                <li>
                    <a href="<?php echo site_url("Shop/pickride"); ?>" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
    <!--					<i class="fa fa-taxi" aria-hidden="true"></i>-->
                            <i class="fas fa-taxi"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Pick Ride</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("Shop/offerdrive"); ?>" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Offer Drive</h6>
                        </div>
                    </a>
                </li>


            </ul>
        <?php } else { ?>
            <div class="appointment">
                <div class="container">
                    <div class="form-agileits">
                        <h4>Please Login First For Offer Or Pick Dive</h4>
                    </div>
                </div>
            </div>
<!--            <ul>  <li>
                    <a href="<?php echo site_url("AccountController/login"); ?>" >Sign In </a>
                </li>
            </ul>-->
        <?php } ?>

    </div>

    <!--//Services-->

    <?php
    $this->load->view('layout/footer');
    ?>
    <style>

        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>