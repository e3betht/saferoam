<?php

header("content-type: text/xml");

$message = "Callback number: {$_REQUEST['From']}

{$_REQUEST['transcription_text']}

This transcription cost you {$_REQUEST['price']}.
";

$subject = "Urgent voicemail from {$_REQUEST['From']}";

mail('beth@treelinedesign.com', $subject, $message);


