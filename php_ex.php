<!DOCTYPE html>
<html lang=en>
	<head>
    		<meta charset="UTF-8">
    		<title>Project</title>
	</head>

<h1>PHP Reference</h1>

<body>

<h2>Basic String Functions</h2>
	<?php

		$first = "This is the first string.";
		$second = " This is the second string";

		$third = $first; 
		$third .= $second;
		echo $third;


	?>
<br />

Lowercase :           <?php echo strtolower ($third); ?><br />
Uppercase :           <?php echo strtoupper ($third); ?><br />	
Uppercase First :     <?php echo ucfirst ($third); ?><br />
Upercase First Word : <?php echo ucwords ($third); ?><br />

<br />

Length: <?php echo strlen($third); ?><br />
Trim:   <?php echo "A" . trim(" B C D") . "E"; ?><br />
Find:   <?php echo strstr($third, "the"); ?><br />
Replace:<?php echo str_replace("This", "That", $third); ?><br />

<br />

Repeat:    <?php echo str_repeat($third, 2); ?><br />
Substring: <?php echo substr($third, 2, 10); ?><br /> 
Find pos:  <?php echo strpos($third, "first"); ?><br />
Find char: <?php echo strchr($third, "o"); ?><br />

<br /> 

<h2>Basic Math</h2>

	<?php

		$var1 = 3;
		$var2 = 4;

	?>

Basic Math:  <?php echo ((1 + 2 + $var1) * $var2) / 2-5; ?><br />

<br />

Absolute Value:     <?php echo abs(0-100); ?><br />
Expo:               <?php echo pow(2,4); ?><br />
Square Root:        <?php echo sqrt(100); ?><br />
Modulo:             <?php echo fmod(20,7); ?><br />	
Random:             <?php echo rand(); ?><p>---| Refresh the page! Holly crap, its random!!!</p><br />
Random (min, manx): <?php echo rand(1,20); ?><p>--- Here too!!!</p><br />


<h2>Incrament and Decrament</h2>

+=:  <?php $var2 += 4; echo $var2; ?><br />
-+:  <?php $var2 -= 4; echo $var2; ?><br />
*=:  <?php $var2 *= 4; echo $var2; ?><br />
/=:  <?php $var2 /- 4; echo $var2; ?><br />


<h2>Incrament by one</h2>

Incrament by one: <?php $var2++; echo $var2; ?><br />


<h2>Floating Point Numbers</h2>

Float:          <?php $float1 = 3.14; echo $float1; ?><br />
Non Float:      <?php $var3 = 4; echo $var3; ?><br />
Devide:         <?php echo $var3/$float1; ?><br />


<h2>Rounding Floats</h2>

Round:         <?php echo round($float1, 1); ?><br />
Ceiling:       <?php echo ceil($float1); ?><br />
Floot:         <?php echo floor($float1); ?><br />

</body>
</html>


