<!doctype html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<html>

<head>
	<title>image</title>
	<style type="text/css">
		ul li {
			list-style: none;
			margin-bottom: 15px;
		}

		ul li img {
			display: block;
		}

		ul li span {
			display: block;
		}
	</style>
</head>

<body>

	<?php

	// open this directory 
	$myDirectory = opendir("image");

	// get each entry
	while ($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);

	?>
	<div class="col-md-4">
<ul>
		<?php
		// loop through the array of files and print them all in a list
		for ($index = 0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg' && $dirArray[$index] != 'name.jpg') { // list only jpgs and don't do name.jpg
				echo '<li><img src="image/' . $dirArray[$index] . '" alt="Image" /><span>' . $dirArray[$index] . '</span>';
			}
		}
		?>
</ul>

	</div>

</body>

</html>