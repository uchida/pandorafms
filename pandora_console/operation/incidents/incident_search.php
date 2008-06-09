<?php

// Pandora FMS - the Free monitoring system
// ========================================
// Copyright (c) 2004-2008 Sancho Lerena, <slerena@gmail.com>
// Copyright (c) 2005-2008 Artica Soluciones Tecnologicas

// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation version 2
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// Load global vars
require("include/config.php");

if (comprueba_login() == 0) {

echo "<h2>".$lang_label["incident_manag"]." &gt; ";
echo $lang_label["find_crit"]."</h2>";
echo "<div style='width:645'>";
echo "<div style='float:right;'><img src='images/pulpo_lupa.png' class='bot' align='left'></div>";	
?>
<div style='float:left;'>
<table width="500" cellpadding="4" cellspacing="4" class='databox'>
<form name="busqueda" method="post" action="index.php?sec=incidencias&sec2=operation/incidents/incident">
<tr>
<td class="datos"><?php echo $lang_label["user"] ?>
<td class="datos">
<select name="usuario" class="w120">
	<option value=""><?php echo $lang_label["all"] ?></option>
	<?php 
	$sql1='SELECT * FROM tusuario ORDER BY id_usuario';
	$result=mysql_query($sql1);
	while ($row=mysql_fetch_array($result)){
		echo "<option>".$row["id_usuario"]."</option>";
	}
	?>
</select>
<tr><td class="datos2"><?php echo $lang_label["free_text_search"] ?>
<td class="datos2"><input type="text" size="45" name="texto"></tr>
<tr><td class="datos" colspan="2"><i><?php echo $lang_label["free_text_search_msg"] ?></i></td></tr>
</table>
<table width="500">
<tr><td align="right" colspan="3">
<?php echo "<input name='uptbutton' type='submit' class='sub search' value='".$lang_label["search"]."'>"; ?>

</form>
</table>
</div>
</div>
<?php 

} // end page
?>