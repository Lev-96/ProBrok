<?php
/** @var  $selected */
/** @var  $remainLang */
/** @var  $ml */
?>

<footer class="text-center text-lg-start text-white footer">
    <div class="container-fluid text-center text-md-start mt-5">
        <div class="row mt-3">
            <!-- Map Section -->
                <div class="col-lg-6 col-md-8 mb-4 mb-md-0 mapFrame">
                    <div class="position-relative" style="overflow:hidden; max-width:100%; border-radius: 10px;">
                        <div class="mt-4">
                            <iframe src="https://yandex.com/map-widget/v1/?ll=44.495053%2C40.175058&mode=whatshere&whatshere%5Bpoint%5D=44.495182%2C40.174424&whatshere%5Bzoom%5D=17&z=16"
                                    width="100%" height="380" frameborder="1" allowfullscreen="true"
                                    style="border:0; border-radius: 10px;">
                            </iframe>
                        </div>
                    </div>
                </div>

            <!-- Form Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <h6 class="text-uppercase fw-bold"><?= $ml->tr('contact_us') ?></h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                <form method="POST" action="mailer.php">
                    <div class="mb-3">
                        <label for="name" class="form-label"><?= $ml->tr('name') ?></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="<?= $ml->tr('name_placeholder') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><?= $ml->tr('email') ?></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="<?= $ml->tr('email_placeholder') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"><?= $ml->tr('message') ?></label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="<?= $ml->tr('message_placeholder') ?>" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-auto d-flex justify-content-center"><?= $ml->tr('submit') ?></button>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<div class="container-fluid">
    <button id="scrollToTopBtn" class="btn btn-primary" style="display: none;">
        <i class="bi bi-arrow-up-circle"></i>
    </button>
</div>
