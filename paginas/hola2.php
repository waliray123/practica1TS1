<?php
header("Pragma: no-cache");
?>
<html>
    <head>
        <title>Hola PHP!?</title>
        <link rel="stylesheet" href="../css/estilo1.css">
        <meta name="template" content="none">
    </head>
    <body>
        <div class="header">
		    <header>
		        <ul>
		            <a href="../index.html">
		                <img src="../images/planet-earth.png" width="50" height="50">
		            </a>                            
		        </ul>
		    </header>        
	    </div>
        <div class="estilo2">
            <table>
                <tr>
                    <td>       
                        <div class="texto1">
                            HO
                            LA
                        </div>                                                       
                    </td>
                    <td ROWSPAN=2>
                        <div class="texto1">
                            PHP
                        </div>                                                       
                    </td>
                    <td>
                        <div class="texto1" >
                            !?
                        </div>                    
                    </td>
                </tr>
            </table>
        </div>
        <div class="estilo1">
            <div class="texto1">
            <?php echo "ENSERIO PHP!?"; ?>
            </div> 
        </div>
    </body>
</html>
