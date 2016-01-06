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
                    	Lapso: 
                        <div><?php echo $info[3]; ?></div>
                    </div>
                    <div class="IF" id="HS">
                    	Hora de Sistema: 
                        <div><?php echo $info[4]; ?></div>
                    </div>
                </div>
            </div>
            <div class="CS" id="COT">
            	
                <div class="PGO MC" style=" margin-left: 18%; width:800px;">
                    <div id="TTPGOPC">
                        <img id="IPPP" src="../img/<?php echo $pg; ?>.png">
                        <div id="TTTXT">Planes de Estudios</div>
                        <div id="BTRGRS">
                            <a href="../inicio.php" id="CRRPPP">Regresar</a>
                        </div>
                    </div>              	
                    <div id="CTPG">
                    	
                        <div class="titleTable">Listado de Planes de Estudio</div>
                        <div class="tableMost" style="">
                            <div class="rows header">
                                <div class="column" style="width:10%">Cod. Plan</div>
                                <div class="column" style="width:25%">Plan de Estudio </div>
                                <div class="column" style="width:10%">Mencion</div>
                                <div class="column" style="width:31%">Titulo</div>
                                <div class="column" style="width:10%">Aciones</div>
                            </div>
                            <?php while ($array = mysqli_fetch_array($PlanEst)){ ?>
                            <div class="rows ">
                                <div class="column" style="width:10%">
									<?php echo $array['idPlanEstudio']; ?></div>
                                <div class="column" style="width:25%">
									<?php echo $array['nombrePlanEstudio']; ?></div>
                                <div class="column" style="width:10%">
									<?php if($array['mencionPlanEstudio'] == ''){echo '&nbsp;';} 
									else{echo $array['mencionPlanEstudio'];}?></div>
                                <div class="column" style="width:31%">
									<?php echo $array['tituloPlanEstudio']; ?></div>
                                <div class="column" style="width:10%">
                                <a href="S1OP3MDF.php?idPE=<?php echo $array['idPlanEstudio']; ?>">
                                Modificar</a></div>
                            </div>
                            <?php }?>
                        </div>
                        
               	  </div>
                </div>
                
            </div>	
    </body>
</html>
