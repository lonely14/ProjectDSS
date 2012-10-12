<?
include("connectdb.php");

$objQueryMB = mysql_query("SELECT * FROM mainboard INNER JOIN mainboard_price ON mainboard_price.MB_ID = mainboard.MB_ID");
$objQueryCPU = mysql_query("SELECT * FROM cpu INNER JOIN cpu_price ON cpu_price.CPU_ID = cpu.CPU_ID");
$objQueryRAM = mysql_query("SELECT * FROM ram INNER JOIN ram_price ON ram_price.RAM_ID = ram.RAM_ID");
$objQueryVGA = mysql_query("SELECT * FROM vga INNER JOIN vga_price ON vga_price.VGA_ID = vga.VGA_ID");
$objQueryHDD = mysql_query("SELECT * FROM hdd INNER JOIN hdd_price ON hdd_price.HDD_ID = hdd.HDD_ID");
?>
<!-- Example row of columns -->
<div class="container">
	<div class="row">
		<div class="span3">
			<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
		</div>

		<div class="span8">
			<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#MB" data-toggle="tab">Mainboard</a></li>
					<li><a href="#CPU" data-toggle="tab">CPU</a></li>
					<li><a href="#RAM" data-toggle="tab">RAM</a></li>
					<li><a href="#VGA" data-toggle="tab">VGA Card</a></li>
					<li><a href="#HDD" data-toggle="tab">Harddisk</a></li>
				</ul>
						  
			<div class="tab-content">
				<div class="tab-pane active" id="MB">
					<p>MB</p>
					<?php while($row = mysql_fetch_array($objQueryMB)) { ?>
					<?php } ?>
				</div>
				
				<div class="tab-pane" id="CPU">
					<p>CPU</p>
					<?php while($row = mysql_fetch_array($objQueryCPU)) { ?>
					<?php } ?>
				</div>
				
				<div class="tab-pane" id="RAM">
					<p>RAM</p>
					<?php while($row = mysql_fetch_array($objQueryRAM)) { ?>
					<?php } ?>
				</div>
				
				<div class="tab-pane" id="VGA">
					<p>VGA</p>
					<?php while($row = mysql_fetch_array($objQueryVGA)) { ?>
					<?php } ?>
				</div>
				
				<div class="tab-pane" id="HDD">
					<p>Harddisk</p>
					<?php while($row = mysql_fetch_array($objQueryHDD)) { ?>
					<?php } ?>
				</div>
			</div>
		</div>
  	</div>
</div>