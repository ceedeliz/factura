

<?php 
include("text.php"); 
// email jose.alberto.lara@gmail.com
// pass 1979zzz@
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Factura</title>
    <link rel="stylesheet" href="example1/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png">
      </div>
      <div id="company" class="clearfix">
        <div><span>RFC emisor: </span> <?php echo  $RFCemisor ?></div>
        <div><span>Nombre emisor: </span> <?php echo $NombreEmisor ?></div>
        <div><span>Folio: </span> <?php echo $Folio ?></div>
        <div><span>RFC receptor: </span> <?php echo $RFCreceptor  ?></div>
        <div><span>Nombre receptor: </span> <?php echo   $NombreReceptor?></div>
        <div><span>Uso CFDI: </span><?php echo $CFDI["$UsoCFDI"] ?></div>
      </div>
      <div id="project">
        <div><span>Folio fiscal: </span><?php echo $UUID ?></div>
        <div><span>No. de serie del CSD: </span> <?php echo  $NoCertificado ?></div>
        <div><span>Código postal, fecha y hora de
emisión: </span> <?php echo "06300 ".str_replace("T", " ", $Fecha) ?></div>
        <div><span>Efecto de comprobante: </span> <?php echo $EfectoComprobante["$TipoComprobante"] ?></div>
        <div><span>Régimen fiscal: </span> <?php echo $TipoRegimenFiscal["$RegimenFiscal"] ?></div>
      </div>
     </header>
     <h3>Conceptos</h3>
    
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">
                <p>Clave del producto</p>
<p>y/o servicio</p> </th>
            <th class="desc">No. identificación</th>
            <th>Cantidad</th>
            <th>Clave de unidad</th>
            <th>Unidad</th>
            <th>Valor unitario</th>
            <th>Importe</th>
            <th>Descuento</th>
            <th>No. de pedimento</th>
            <th>no. de cuenta predial</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td ><?php echo $ClaveProdServ  ?></td>
            <td ><?php  ?></td>
            <td ><?php echo $Cantidad?></td>
            <td ><?php   echo $ClaveUnidad  ?></td>
            <td><?php ?> </td>
            <td><?php echo number_format(intval($ValorUnitario ),2); ?></td>
            <td><?php echo number_format(intval($Importe),2); ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
          </tr>
          <tr>
            <td>Descripción</td>
            <td colspan= "3" class="desc"><p><?php echo $DomDesc;  ?></p></td>
            <td><b>Impuesto</b> <?php echo $TipoImpuesto["$Impuesto"]; ?></td>
            <td><b>Tipo</b><br>Traslado</td>
            <td><b>Base</b> <?php echo number_format(intval($SubTotal),2); ?></td>
            <td><b>Tipo Factor</b> <?php echo   $TipoFactor;  ?></td>
            <td><b>Tasa o cuota</b> <?php echo "16.0000% "?></td>
            <td><b>Importe</b> <?php echo  number_format(intval($ImporteTraslado),2);  ?></td>
            
          </tr>
   <?php 

$FormatoTotal = number_format(intval($Total),2);
$FormatoImporteTraslado = number_format(intval($ImporteTraslado),2);
$FormatoSubTotal = number_format(intval($SubTotal),2); 

?>
            
          <tr>
            <td colspan="1"><b>Moneda</b></td>
            <td  colspan="2"><?php echo $TipoMoneda["$Moneda"] ?></td>
            <td colspan="6"><b>SUBTOTAL</b></td>
            <td>$ <?php echo $FormatoSubTotal ?></td>
          </tr>
          <tr>
            <td colspan="1"><b>Forma de pago</b> </td>
            <td  colspan="2"><?php echo $TipoFormaPago["$FormaPago"]; ?></td>
            <td colspan="6"><b>Impuestos</b> Trasladados IVA 16.0000%</td>
            <td >$<?php echo $FormatoImporteTraslado ?></td>
          </tr>
          <tr>
            <td colspan="1" ><b>Método de pago</b></td>
            <td  colspan="2"><?php echo $TipoMetodoPago["$MetodoPago"]; ?></td>
            <td colspan="6" ><b>TOTAL</b></td>
            <td >$ <?php echo $FormatoTotal; ?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div><b>sello digital del CFDI</b></div>
        <div class="notice"> <p><?php echo $SelloCFD; ?></p>
          </div>
      </div>
      <div id="notices">
        <div><b>sello digital del SAT</b></div>
        <div class="notice"><p><?php echo  $SelloSAT; ?></p>
          </div>
      </div>      
        <div id="notices" class="bi-col">
            <div class="qr-code">
            <?php 
            //$qr_code = explode(" ", $SelloSat);
            $Code6= substr($SelloCFD, -8);
            $qr_code = "https://verificacfdi.facturaelectronica.sat.gob.mx/default.aspx?id=$UUID&re=$RFCemisor&rr=$RFCreceptor&tt=$Total&fe=$Code6";
            include('phpqrcode/qrlib.php'); 
            $codeContents = $qr_code; 
            QRcode::png($codeContents, 'qrcode.png', QR_ECLEVEL_L, 3, 4);   
            ?>
            <img src="qrcode.png">      
            </div>
        <div class="notice qr-box"><b>Cadena Original del complemento de certificación digital del SAT:</b>
            <p class="final-code">
            <?php echo  "||$Version|$UUID|$FechaTimbrado| $RfcProvCertif|$SelloCFD|$NoCertificadoSAT||";  ?></p>
            <p><b>RFC del proveedor de certificación:</b><?php echo $RfcProvCertif  ?></p>
            <p><b>No. de serie del certificado SAT</b> <?php echo $NoCertificadoSAT ?></p>
            <p><b>Fecha y hora de certificación:</b> <?php echo "06300 ".str_replace("T", " ", $FechaTimbrado) ?> </p>
          </div>
      </div>
    </main>
    <footer>
        <p>Este documento es una representación impresa de un CFDI </p>
    </footer>
  </body>
</html>
