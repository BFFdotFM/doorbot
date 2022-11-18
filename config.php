<?php

# The domain you're running on; used for callbacks from Twilio
$domain = 'https://example.com';

# The timezone your door is located in
$timezone = 'America/Los_Angeles';

# The operator phone number is the human called when someone dials '0'
# set to null/false to disable operator dialling
$operatorPhoneNumber = '415-123-456';

# overnight time lock `hh:00`, start must be < end
# set to null/false to disable the time lock feature
$overnightStart = '01:00';
$overnightEnd = '05:00';

# The codes to allow access: `numericCode => Person Name`
$codeList = array(
  '1234' => 'Dark Helmet'
);
