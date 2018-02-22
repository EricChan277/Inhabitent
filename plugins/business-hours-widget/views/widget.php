<!-- This file is used to markup the public-facing widget. -->

<?php ( strlen( trim( $monday_friday)) > 0 ) : ?>
  <p>
    <spam class="day-of-the-week">Monday-Frday:</span>  <?php echo $monday_friday; ?>
  </p>
<php endif; ?>

