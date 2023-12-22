<?php
	$fonts     = 'Tahoma';
	$bgcolor   = '#FDD35B';
	$fontcolor = '#4B53BC';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Fundamentals</title>
	<style>
		body{font-family: <?php echo 'Tahoma'; ?>;}
		.phpcoding {width: 900px; margin: 0 auto; background: <?php echo '#ddd'; ?>; min-height: 400px}
		.headeroption, .footeroption {background: <?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>; text-align: center; padding: 20px;}
		.maincontent {min-height: 400px; padding: 20px;}
		.headeroption h2, .footeroption h2 {margin: 0}
	</style>
</head>
<body>

<div class="phpcoding">
<section class="headeroption">
	<h2><?php echo 'PHP Fundamentals'; ?></h2>
</section>

<section class="maincontent">

<!-- code here -->
<!-- NUmber 5 Tutorial -->
Show output in PHP - 

<?php
	echo 'I love PHP';
	echo '<br/>';
	echo $fonts;
	echo '<br/>';
	$a = 5;
	$b = 10;
	$c = $a + $b;
	echo 'Toatl value = ' . $c . ' Ok fine';
?>

<?php echo '<br/>'; ?>
<?php echo '<br/>'; ?>

<?php
	echo 'PHP ', ' is', ' nice';
	echo '<br/>';
	print 'PHP is nice';

?>

<?php
	// echo 'PHP ', ' is', ' nice';
	// echo '<br/>';
	// print 'PHP is nice';

	echo '<br/>';

	$a = print( 'Hridoy' );
	var_dump( $a );
?>
<hr>


</section>

<section class="footeroption">
	<h2><?php echo 'Techearty'; ?></h2>
</section>
</div>
</body>
</html>

<?php echo '<br/>'; ?>
