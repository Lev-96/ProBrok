<?php
/** @var  $selected */
/** @var  $remainLang */
/** @var  $ml */
?>

<footer class="text-center text-lg-start text-white footer">
    <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <!-- Map Section -->
            <div class="col-lg-6 col-md-12 mb-4 mapFrame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.259909694719!2d44.50666767612675!3d40.20328106860278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd3844502d8f%3A0xeba0eb8c45a865c3!2s27%2017th%20Street%2C%20Yerevan!5e0!3m2!1sru!2sam!4v1732377472676!5m2!1sru!2sam"
                    width="100%"
                    height="450px"
                    style="border:0; border-radius: 10px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
