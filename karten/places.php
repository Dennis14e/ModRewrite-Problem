<?php
/* Laedt Content-File */
$kategorie = $_GET['kategorie'];
$name = $_GET['name'];

$pfad = "../content/places/$kategorie/$name";
if(!file_exists($pfad))
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

include $pfad;
?>

<body>

<?php echo $titel; ?></h1>

</body>
</html>
