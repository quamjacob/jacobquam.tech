<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Module 2: My Story</title>
<link rel = "stylesheet" type = "text/css" href = "myStory.css" />
</style>

</head>
<body>
<h1>My Little Story</h1>
<p>&nbsp;</p>

<?php 

$color = filter_input(INPUT_POST, "color");
$instrument = filter_input(INPUT_POST, "instrument");
$anim1 = filter_input(INPUT_POST, "anim1");
$anim2 = filter_input(INPUT_POST, "anim2");
$anim3 = filter_input(INPUT_POST, "anim3");
$place = filter_input(INPUT_POST, "place");
$vegetable = filter_input(INPUT_POST, "vegetable");
$structure = filter_input(INPUT_POST, "structure");
$action = filter_input(INPUT_POST, "action");

print <<<HERE
<h2>
Little boy $color, come blow your $instrument<br />
The $anim1 is in the $place, the $anim2 is in the $vegetable<br />
Where's teh boy that looks after the $anim3?<br />
He's under the $structure, $action.
</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>

HERE;
?>

</body>
</html>


