<?php
$fileContents = file_get_contents("quotes");

$quote = explode("\n", $fileContents);

$randomIndex = random_int(0, sizeof($quote));

if ($_GET['format'] == 'json') {
	header('Content-Type: application/json');
	echo json_encode(array('quote' => $quote[$randomIndex]));
}
else
	echo $quote[$randomIndex];

?>
