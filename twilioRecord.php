<?php

header("content-type: text/xml");

$returnDate = urldecode($_GET['o']);
$name = urldecode($_GET['t']);

if ($_REQUEST['Digits'] == 1) {

?>

<Response>
<Dial>+16087706677</Dial>
<Say>We're sorry, your call could not be completed. Please try again later.</Say>
</Response>

<?php

}
elseif ($_REQUEST['Digits'] == 2) {

?>



<?xml version="1.0" encoding="UTF-8"?>
<Response>
<Say voice="woman">Thank you for being patient while <?php echo $name; ?> is traveling. Please leave a message after the tone. There is a two minute limit for your message.</Say>
<Record maxLength="120" transcribeCallback="http://play.treelinedesign.com/twilioEmail.php" />

</Response>

<?php

}
else {

<?xml version="1.0" encoding="UTF-8"?>
<Response>
<Say voice="woman">Thank you for being patient while <?php echo $name; ?> is traveling. A reminder, your message will not be handled until <?php echo $returnDate; ?>. Please leave a message after the tone. There is a ten minute limit for your message.</Say>
<Record maxLength="600" />

</Response>

}

