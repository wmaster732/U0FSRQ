<?php require_once("../protected/controlUnit.php"); ?>
<!doctype html>
<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="../css/Styles.css">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title;?></title>
    </head>
    <body>
            <div id="HE">
                <div id="CHE" class="CS">
                    <div id="LGYOPS">
                    	<div><img src="../img/BL.png"></div>
                        <div id="BRROPS">
                            <table border="0"><tbody><tr>
                            <!--
                            <td valign="middle">
                                <img id="IMOINI" src="img/BL-1.png"/>
                            </td>
                            -->
                            <td width="22px">&nbsp;</td>
                            <td>
                                <img id="IMOPAY" src="../img/BL-2.png"/>
                            </td>
                            <td width="22px">&nbsp;</td>
                            <td>
                                <img id="IMOSAL" src="../img/BL-3.png" onclick="location.href='../salir.php';"/>
                            </td></tr></tbody></table>
                        </div>
                    </div>
                    <div id="NUSER">
                    	<div><img src="../img/05.png"><?php echo $nameUsu; ?></div>
                    </div>
                </div>
            </div>
            <div id="SE">
            	<div class="CS" id="CTS">
                    <div class="IF" id="PLT">
                    	Plantel: 
                        <div><?php echo $info[1]; ?></div>
                    </div>
                    <div class="IF" id="ANES">
                    	Año Escolar: 
                        <div><?php echo $info[2];?></div>
                    </div>
                    <div class="IF" id="LPS">
                    	<!--Lapso: 
                        <div><?php// echo $info[3]; ?></div>-->
                    </div>
                    <div class="IF" id="HS">
                    	Hora de Sistema: 
                        <div><?php echo $info[4]; ?></div>
                    </div>
                </div>
            </div>
            <div class="CS" id="COT">
            	
                <div class="PGO MC" style=" margin-left: 22%;">
                    <div id="TTPGOPC">
                        <img id="IPPP" src="../img/S1OP6.png">
                        <div id="TTTXT">Personal</div>
                        <div id="BTRGRS">
                            <a href="S1OP6.php" id="CRRPPP">Regresar</a>
                        </div>
                    </div>              	
                    <div id="CTPG">
                    	<form method="post">
                            <div>
                              <label for="textfield">Cedula de Identidad:</label><br>
                              <select name="Nac" class="CDTL" style="width:60px;">
								<option value="<?php echo $Ns; ?>"><?php echo $Ns; ?></option>
  								<option value="<?php echo $Nn; ?>"><?php echo $Nn; ?></option>
                              </select>
                              <input class="NMTL" type="text" name="numCi" id="textfield"
                              	value="<?php echo  substr($ci,1,$nCi);?>"><br>
                              <label for="textfield2">Nombre:</label>
                              <input class="IPTxT" type="text" name="nombresPersonal" id="textfield2"
                              	value="<?php echo  $dtPrenl['nombresPersonal'];?>">
                              <label for="textfield3">Apellido:</label>
                              <input class="IPTxT" type="text" name="apellidosPersonal" id="textfield3"
                              	value="<?php echo  $dtPrenl['apellidosPersonal'];?>"><br><br>
                              <label for="select">Cargo:</label><samp style="font-weight:900;">
                              <?php  $cargo=idtfCargo($dtPrenl['idCargoPersona']); 
							  		echo $cargo['cargoPersonal']
							  ?></samp>
                              <br><br>
<input name="S1OP6Mof" type="submit" class="sbt" value="Guardar"> 
                          </div>
                        </form><br>
               	  </div>
                </div>
                
            </div>	
    </body>
</html>
