<?php
  require 'config.php';
  header('content-type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<?php if (!empty($operatorPhoneNumber)): ?>
<Response>
  <Say voice="woman">Connecting you to the operator.</Say>
  <Dial><?= $operatorPhoneNumber ?></Dial>
</Response>
<?php else: ?>
<Response>
  <Say voice="woman">Sorry, the operator is not available.</Say>
</Response>
<?php endif; ?>
