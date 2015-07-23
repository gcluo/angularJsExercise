<?PHP
	// $text = $_POST['text'];
	$text = file_get_contents('php://input',true);
	echo $text.'_post';
?>