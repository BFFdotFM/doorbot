<?php
  require 'config.php';
  header('content-type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Say voice="woman">Access granted.</Say>
<Play><?= $domain ?>/bff/9.wav</Play>
</Response>
