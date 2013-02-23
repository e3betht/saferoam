<?php

header("content-type: text/xml");

$returnDate = "Monday, February twenty-fifth";
$name = "Beth";

?>

<?xml version="1.0" encoding="UTF-8"?>
<Response>
<Gather numDigits="1" action="twilioRecord.php?o=<?php echo urlencode($returnDate); ?>&t=<?php echo urlencode($name); ?>" timeout="20" method="POST">
   <Say voice="woman">$name is currently out of the country and only able to respond to emergencies. If this is an emergency, please press 1. If this is not an emergency, but you need to get a message to $name before she returns on $returnDate, please press 2. If this is not urgent and can be handled after $returnDate, please press 3.</Say>
</Gather>

</Response>
