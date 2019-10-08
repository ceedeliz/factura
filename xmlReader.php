<!DOCTYPE  html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="author" content="Ecopolíticas">
        <meta name="description" content="En esta página podras generar un PDF  partir de un XML.">
        <meta name="keywords" content= "">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="main.css" rel="stylesheet">
        <title>Generador PDF</title>
        <style>
            body{
                font-family: arial;
                background: #525659;
                font-size: .5em;
            }
            .container{
                width: 612px;
                height: 792px;
                margin: 0 auto;
                background: white;
                padding: 10px;
            }
            .data-1, .data-2, .data-3{
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .sec-1{
                width: 50%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .sec-2{
                width: 70%;
            }
            .qr-code{
                background: black;
                width: 25%;
                height: 150px;
            }
            p{
                word-wrap: break-word;
                overflow: auto;
            }
            .cadena {
                word-break: break-all;
            }
            table{
                font-size: .6em;
                width: 100%;
                border-collapse: collapse;

            }
            th, .t-desc{
                background: #bfbfbf;
            }
            th,td{
                border: 1px solid;
                margin: 0;
          
                padding: 3px;
                
            }
            .no-border{
                border: none;
            }
            img{
                width: 20%;
            }
            .linea-logo{
                width: 100%;
                color: green;
                border: 1px solid #c0cb5e;
    
            }
            .col-1{
                width: 25%;
                height: 100%;   
            }
            .col-1 b, .col-2 span{
                width: 100%;
                float: left;
            }
            .col-1 b, .col-2 span{
                margin: 2px 0;
            }
            .col-2{
                width: 70%;
                height: 100%;
            }
            div:nth-child(5) > div:nth-child(2) > div.col-1{
                width: 40%;    
            }
            div:nth-child(5) > div:nth-child(2) > div.col-2{
                width: 55%;    
            }
            div:nth-child(5) > div:nth-child(2) > div.col-2 > span:nth-child(3) {
                margin: 6px 0;
            }
            div:nth-child(9) > div:nth-child(2) > div.col-1{
                width: 30%;
            }
            .col-3{
                
            }
            .col-4{
                
            }
        </style>
	</head>
	<body>
        <?php 
            $xml = simplexml_load_file("001.xml");
            print_r($xml);
        ?>
        
        <h1><?php echo ($xml["Total"]); ?></h1>
        
        <div class="container">
            <img src="img/logo.png">
            <hr class="linea-logo">
            <br>
            <br>
                <div class="data-1">
                    <div class="sec-1">
                        <div class="col-1">
                        <b>RFC emisor:</b>
                        <b>Nombre emisor:</b> 
                        <b>Folio:</b>
                        <b>RFC receptor:</b>
                        <b>Nombre receptor:</b> 
                        <b>Uso CFDI:</b>
                        </div>
                        <div class="col-2">
                        <span>ECO1803098C4</span>
                        <span>ECOPOLITICAS SC</span>
                        <span>002</span>
                        <span>UIB540920IT3</span>
                        <span>UNIVERSIDAD IBEROAMERICANA A.C.</span>
                        <span>Gastos en general</span>
                        </div>

                    </div>
                    <div class="sec-1">
                          <div class="col-1">
                              <b>Folio fiscal:</b>
                              <b>No. de serie del CSD:</b>
                              <b>Código postal, fecha y hora de emisión: </b>
                              <b>Efecto de comprobante:</b> 
                              <b>Régimen fiscal:</b>
                          </div>
                          <div class="col-2">
                              <span>AC9B73AD-6B13-4DD6-B615-04CD64734D4F</span>
                            <span>00001000000410291656</span>
                            <span>06300 2018-05-18 17:59:07</span><br><br>
                            <span>Ingreso</span>
                            <span>General de Ley Personas Morales</span>
                          </div>
      
                    </div>
                </div>
                <h2><b>Conceptos</b></h2>
                <div class="data-2">
                    <table border="0" cellspacing="0" cellpadding="0"  >
                      <tr>
                        <th>Clave del producto y/o servicio</th>
                        <th>No. identificación</th>
                        <th>Cantidad </th>
                        <th>Clave de unidad</th>
                        <th>Unidad</th>
                        <th>Valor unitario</th>
                        <th>Importe</th>
                        <th>Descuento</th>
                        <th>No. de pedimento</th>
                        <th colspan="2" >No. de cuenta predial</th>
                        
                      </tr>
                      <tr>
                        <td>81131500 </td>
                        <td></td>
                        <td>1</td>
                        <td>E48</td>
                        <td></td>
                        <td>68965.52 </td>
                        <td>68965.52 </td>
                        <td></td>
                        <td></td>
                        <td colspan="2"></td>
                        
                      </tr>
                      <tr>
                        <td class="t-desc">Descripción </td>
                        <td colspan="4">Elaboración de un policy brief para el análisis y desarrollo de propuestas de
                            mejora al diseño institucional del cambio climático en México.</td>

                        <td class="no-border"><b>Impuesto </b><br>IVA</td>
                        <td class="no-border"><b>Tipo </b><br>traslado</td>
                        <td class="no-border"><b>Base </b><br>68965.52</td>
                        <td class="no-border"><b>Tipo Factor </b><br> tasa</td>
                        <td class="no-border"><b>Tasa o Cuota</b> <br>16.0000%</td>
                        <td class="no-border"><b>Importe </b><br>11034.48</td>
                      </tr>
                    </table>    
                </div>
            <br>
                <div class="data-1">
                    <div class="sec-1">
                        <div class="col-1">
                        <b>Moneda:</b> 
                        <b>Forma de pago:</b>
                        <b>Método de pago: </b>
                        </div>
                        <div class="col-2">
                         <span>Peso Mexicano</span>
                         <span>Transferencia electrónica de fondos (incluye SPEI)</span>
                         <span>Pago en una sola exhibición</span>
                        </div>
                
                    </div>
                    <div class="sec-1">
                        <div class="col-1">
                            <b>Subtotal</b>
                            <b>Impuestos Trasladados</b>
                            <b>Total </b>
                        </div>
                        <div class="col-2">
                        <span>$ 68,965.52</span>  
                        <span> IVA 16.0000%  $ 11,034.48</span> 
                        <span> <b>$ 80,000.00</b> </span>
                        </div>
                    </div>
                </div>
            <br>
            <br>
                <div class="data-3">
                    <b>Sello digital del CFDI:</b>
                 <div class="cadena">
                     c91Hi07TLfU6w4L1d0clorVzfb/49aZ53QxjwwnYc7hwWk+vMb67/D9xFRv9BvCfjj6+xg3GG7puZ2+p8VtggPYr70W2izNCSHXZvHxHwlRhxulgA/HzigFLTw+nNpVf44F6vywAv15r1wXaYFKjh8ShhEturO1GVx1NbE0L1ZIA0H3bvHyS1ZIu1fv4J8tiUoGqVLCTGqt5d78irhw8OgA2JCNL2XJDSLAIIXbgrEpTB5l7Q1UQFqfvTGR/nvl/tv+7VObh9JK24R0PiN7SKiR3gFCCs/ai0jBwRvyNGpYy83qWMcZPmURHLjp+QJl4vKavkhbEtAZ9hRa9UN2W/Q==</div>
                </div>
                <br>
                <div class="data-3">
                    <b>Sello digital del SAT:</b>
          <div class="cadena">
              jPWCMC/yRngQA1bQQOWTqVgFwSeoHSPiNsHEhAvGP6k84aAomg+jPRk8o9Nx+dPbJAR+KqDa0JadV8p4rIQRN5UeeCkWq6culj4mLUJe+1q+7nRbN6ysTv+gKKZicBWEipFuagmlQhkMRx64hB3S8SmOAH7M9RTk/TQBkeGhK0bVo4CCUC83eNaeClr9sl7akf9q7NIs90+NP3De+MQOt1bIT7gxeOBpEHI8oBTUlb89ac8Mcfp/tZQQSlQF9POYeUCOzr+0tlKeQv6zZM6pqbbIaQkt
                    VoTEAo1/0P1AaeWDmcfkAy9QxM8tHWCK/4gOosG3O1Dbo5IoE70E7uievw==</div>
                </div>
            <br>
            <br>
                <div class="data-3">
                    <div class="qr-code">
                    </div>
                    <div class="sec-2">
                       <b> Cadena Original del complemento de certificación digital del SAT: </b>
<div class="cadena">
||1.1|AC9B73AD-6B13-4DD6-B615-04CD64734D4F|2018-05- 18T18:02:02|SAT970701NN3|c91Hi07TLfU6w4L1d0clorVzfb/49aZ53QxjwwnYc7hwWk+vMb67/D9xFRv9BvCfjj6+xg3GG7puZ2+p8VtggPYr70W2izNCSHXZvHxHwlRhxulgA/HzigFLTw+nNpVf44F6vywAv15r1wXaYFKjh8ShhEturO1GVx1NbE0L1ZIA0H3bvHyS1ZIu1fv4J8tiUoGqVLCTGqt5d78irhw8OgA2JCNL2XJDSLAIIXbgrEpTB5l7Q1UQFqfvTGR/nvl/tv+7VObh9JK24R0PiN7SKiR3gFCCs/ai0jBwRvyNGpYy83qWMcZPmURHLjp+QJl4vKavkhbEtAZ9hRa9UN2W/Q==|00001000000403258748||</div>
                        <br>
                        <div class="col-3">
                        <b>RFC del proveedor de certificación:</b> SAT970701NN3
                        <b>No. de serie del certificado SAT</b> 00001000000403258748
                        </div>
                        <div class="col-4">
                        <b>Fecha y hora de certificación: </b> 2018-05-18 18:02:02
                        </div>

                    </div>
                </div>
        </div>
        
        <?php 
            
        ?>
	</body>
</html>