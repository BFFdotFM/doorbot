<?php
  require 'config.php';
  header('content-type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
  <Gather action="<?= $domain ?>/bff_codes.php" method="POST">
    <Pause length="1"/>
    <Say voice="woman">Press 0 for operator.</Say>
  </Gather>
</Response>
