<?php
// Check if a feedback message is set in the session
    if (isset($_SESSION['feedback_message'])) { ?>
        <div class="alert alert-<?= $_SESSION['feedback_message_style'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['feedback_message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
    unset($_SESSION['feedback_message']);
}
?>