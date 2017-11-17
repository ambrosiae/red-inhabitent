<!-- This file is used to markup the public-facing widget. -->
<?php if (strlength(trim($monday_friday)) > 0); ?>
<p>
  <span class="day-of-week">Monday-Friday:</span>
  <?php echo $monday_friday ?>
</p>

<?php endif; ?>

<?php if (strlength(trim($saturday)) > 0): ?>
<p>
  <span class="day-of-week">Saturday:</span>
  <?php echo $saturday ?>
</p>

<?php endif; ?>

<?php if (strlength(trim($sunday)) > 0): ?>
<p>
  <span class="day-of-week">Sunday:</span>
  <?php echo $sunday ?>
</p>

<?php endif; ?>