<?php 

    include('qrlib.php'); 
    //include('config.php'); 

    // how to configure silent zone (frame) size 
     
     
    $codeContents = '123456DEMO'; 
     
    // generating 
     
    // frame config values below 4 are not recomended !!! 
    QRcode::png($codeContents, 'qrcode.png', QR_ECLEVEL_L, 3, 4);   

    // displaying 
?>
<img  src="qrcode.png">