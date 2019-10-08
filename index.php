<?php
session_start();
ini_set('display_errors', '1');
$FAIL=false;
if(isset ($_FILES['file'])){
    if(isset ($_POST['mail']) && isset($_POST['pass'])){
        $mail=$_POST["mail"];
        $pass= $_POST["pass"];
         if (($mail == "jose.alberto.lara@gmail.com" && $pass = "1979Z;z@_-") || ($mail == "rzmayer" && $pass = "zecbf4um")){
            
        $_SESSION["mail"] = $mail;
                   echo $_SESSION["mail"]."sdlkjsadkjsa";
  
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
        }else{
            $FAIL = TRUE;
        }
    }
}
?>

<!DOCTYPE HTML>

<html class="no-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Factura</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- remove this if you use Modernizr -->
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
    <style>
        html{
            background: url("https://www.ecopoliticas.com/slider1.jpeg");
            background-size: 100%;
        }
        body{
            
            height: 100vh;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cdeb8e+0,a5c956+100 */
background: rgb(205,235,142); /* Old browsers */
background: -moz-linear-gradient(left, rgba(205,235,142,.2) 0%, rgba(165,201,86,.8) 50%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, rgba(205,235,142,.2) 0%,rgba(165,201,86,.8) 50%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, rgba(205,235,142,.2) 0%,rgba(165,201,86,.8) 50%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cdeb8e', endColorstr='#a5c956',GradientType=1 ); /* IE6-9 */
            background-size: 100%;
            font-family: 'Montserrat', sans-serif;
        }
        section{
            padding-top: 50px;
            margin: 0 auto;
            width: 30%;
        }
        form{
            
            border-radius: 20px;
            width: 400px;
            background: white;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
            }
        
         form label{
            width: 100%;
             margin: 10px 0;
        }
        form #submit {
            width: 50%;
            margin: 10px 0;
        }
        #submit{
            border: none;
            background: none;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cdeb8e+0,a5c956+100 */
background: #cdeb8e; /* Old browsers */
background: -moz-linear-gradient(left, #cdeb8e 0%, #a5c956 50%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #cdeb8e 0%,#a5c956 50%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #cdeb8e 0%,#a5c956 50%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cdeb8e', endColorstr='#a5c956',GradientType=1 ); /* IE6-9 */
            padding: 10px 5px;  
            border-radius: 20px;
            color: white;
        }
        .box{
            padding: 10px;
            background: none;
        }
        .inputfile + label{
            max-width: none;
        }
        
        #fail_data{
            color: red;
        }
    </style>
</head>

<body>

	<header>

	</header>
	
	<section class="container">
		<form action="index.php" method="post" enctype="multipart/form-data">
            <h1>Se requieren datos para generar factura</h1>
             <div class="box">
                <input type="file" name="file" id="file-6" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple />
                <label for="file-6"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span></label>
            </div>
            <label>Email:</label>
            <input type="text" name="mail" required>
            <label>Password:</label>
            <br>

            <input type="password" name="pass" required>
            <input type="submit" id="submit">
              <?php 
                if ($FAIL){
                    echo "<b class='fail_data'>DATOS INCORRECTOS</b>";
                }
            ?>
            
        </form>
	</section>
</body>
		<script src="js/custom-file-input.js"></script>

</html>
