<?php
$fileContents = file_get_contents("quotes");

$quote = explode("\n", $fileContents);

$randomIndex = random_int(0, sizeof($quote) - 1);

if (isset($_GET['format']) && $_GET['format'] == 'json') {
	header('Content-Type: application/json');
	echo json_encode(array('quote' => $quote[$randomIndex]));
}
else
	echo $quote[$randomIndex];

?>
