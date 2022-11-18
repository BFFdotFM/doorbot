<?php
  require 'config.php';
  header('content-type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
  <Gather action="<?= $domain ?>/bff_codes.php" method="POST">
    <Pause length="1"/>
    <Say voice="woman">
      <?php if (!empty($operatorPhoneNumber)): ?>
        Welcome! Enter your access code, or press 0 for operator.
      <?php else: ?>
        Welcome! Enter your access code.
      <?php endif; ?>
    </Say>
  </Gather>
</Response>
