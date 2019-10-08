<?php
ini_set('display_errors', '1');
if(isset ($_FILES['file'])){
 //  var_dump($_FILES['file']);
if ($_FILES['file']['error'] > 0) {
		$nom_arch = '001.xml';
		//echo "error	". $_FILES ['file']['error']."<br/>";
	} else {
   
		$nom_temp=$_FILES['file']['tmp_name'];
		$timestamp = time();
		$nom_arch=$_FILES['file']['name'];
		$info_arch = pathinfo($nom_arch);
		//$nom_arch = basename($nom_arch, '.'.$info_arch['extension']);
		//$nom_arch .= $timestamp . '.' . $info_arch['extension'];
		if($_FILES['file']['size'] < 4000000) { 
          
			$movido = move_uploaded_file($nom_temp, "001.xml");
             var_dump($movido);
             $xml = simplexml_load_file('001.xml');
            //print_r($xml["Total"]);
            header("Location: output.php");
		}else{
			$movido=false;
			echo "error";
		}
        
	}
    
}
?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
</head>

<body>

	<header>

	</header>
	
	<section>
	
		<form action="xmlGen.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit">
        </form>
		
	</section>

	<footer>
		<p>Copyright 2009 Your name</p>
	</footer>

</body>

</html>
