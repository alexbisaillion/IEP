<?
	require($_SERVER['DOCUMENT_ROOT'] . '/iep/database.php');

	if ($query=$pdo->prepare("truncate studentinfo" )) {
		$query->execute();
	}
	else {
		$error = $query->errorInfo();
		echo 'MySQL Error: ' . $error;
	}
?>