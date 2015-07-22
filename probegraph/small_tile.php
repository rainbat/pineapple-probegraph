<?php

global $directory, $rel_dir, $version, $name;
require($directory."includes/vars.php");

?>

<script type='text/javascript' src='/components/infusions/probegraph/includes/js/pouchdb-3.6.0.min.js'></script>
<script type='text/javascript' src='/components/infusions/probegraph/includes/js/infusion.js'></script>
<style>@import url('/components/infusions/probegraph/includes/css/infusion.css')</style>

<script type="text/javascript">
	$(document).ready(function(){ ProbeGraph_init_small(); });
</script>

<div style='text-align:right'><a href="#" id="ProbeGraph_loading" class="refresh" onclick='javascript:ProbeGraph_refresh_tile();'></a></div>

<?php



/*
if($is_SheepGraph_installed)
{
	if ($is_SheepGraph_running) 
	{
		echo "SheepGraph <span id=\"SheepGraph_status_small\"><font color=\"lime\"><strong>&#10004;</strong></font></span>";
		echo " | <a id=\"SheepGraph_link_small\" href=\"javascript:SheepGraph_toggle_small('stop');\"><strong>Stop</strong></a> ";
	}
	else
	{ 
		echo "SheepGraph <span id=\"SheepGraph_status_small\"><font color=\"red\"><strong>&#10008;</strong></font></span>";
		echo " | <a id=\"SheepGraph_link_small\" href=\"javascript:SheepGraph_toggle_small('start');\"><strong>Start</strong></a> "; 
	}

	if($is_SheepGraph_running)
		echo '<select class="SheepGraph" disabled="disabled" id="SheepGraph_interface_small" name="SheepGraph_interface_small">';
	else
		echo '<select class="SheepGraph" id="SheepGraph_interface_small" name="SheepGraph_interface_small">';

	for($i=0;$i<count($interfaces);$i++)
	{
		if($current_interface == $interfaces[$i])
			echo '<option selected value="'.$interfaces[$i].'">'.$interfaces[$i].'</option>';
		else
			echo '<option value="'.$interfaces[$i].'">'.$interfaces[$i].'</option>';
	}
	echo '</select><br /><br />';
	
	echo "<textarea readonly class='SheepGraph' id='SheepGraph_output_small' name='SheepGraph_output_small'>hello from sheep !</textarea>";
}
else
{
	echo "SheepGraph";
	echo "&nbsp;<font color=\"red\"><strong>&#10008;</strong></font><br /><br />";
	echo '<script type="text/javascript">notify("SheepGraph is not installed", "SheepGraph", "red");</script>';
}
*/
?>