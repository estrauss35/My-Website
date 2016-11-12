<?php
include("validate.php");

/*setting date*/

/* formatting the message */
$finalMessage = '<html><body>';
$finalMessage .= '<strong>Category: </strong>' . strip_tags($_POST['category']);
$finalMessage .= '<strong>Message: </strong>' . strip_tags($_POST['userMessage']);
$finalMessage .= '<strong>Date Sent: </strong>' .strip_tags($finalDate);
 























?>