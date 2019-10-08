<?php

session_start();

if(!isset($_SESSION["mail"])){

?>
<h2>Aceso no autorizado</h2>
<?php

    exit;

}
require_once 'vendor/autoload.php';
ob_start();
require_once "format.php";
$html_template = ob_get_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html_template);
$mpdf->Output("ECO".$Folio.".pdf", I);
?>
