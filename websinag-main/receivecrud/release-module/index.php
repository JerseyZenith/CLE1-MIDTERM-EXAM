<!doctype html>
<html>
	<body>
<div class="txtbox">
<form method="POST" action="">	
	<div class="payinput">	
			<h2>Payroll</h2>
<?php
$days_work=$rate=$g_sal=$deduct=$n_sal=0;
if(isset($_POST['compute'])){
	$days_work=$_POST['days_work'];
	$rate=$_POST['interest_rate'];
	$g_sal=$days_work*$rate;
	$deduct=$g_sal*.1;
	$n_sal=$g_sal-$deduct;
}
?>	
			<p>Number of Days Work: <input type="text" name="days_work" size="8" value="<?=$days_work;?>"/></p>
			<p>Rate Per Day: <input type="text" name="interest_rate" size="8" value="<?=$rate;?>"/></p>
			<p><input type="submit" name="compute" value="Compute Salary"/></p>
			<p>
</div>
				<div class="total">
				Gross Salary: <?=number_format($g_sal, 2);?><br/>
				Deduction: <?=number_format($deduct, 2);?><br/>
				Net Salary: <?=number_format($n_sal, 2);?>
</div>
</div>
			</p>
		</form>
	</body>
</html>