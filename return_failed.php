<?php
  require 'config.php';
  header('content-type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
  <Say voice="woman">I'm sorry, but the person you attempted to reach is unavailable.  Please try again later.</Say>
</Response>
