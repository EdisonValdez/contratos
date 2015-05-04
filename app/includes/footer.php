</div>
<div id="pie">Todos los derechos reservados. <?php
	date("Y");
?></div>
    	
</body>
</html>
<?php
	if(isset($conexion))
	{
		mysql_close($conexion);
	}
?>