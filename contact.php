<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpiderWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>


<body id="page-top" data-spy="scroll" data-target="">

<div class="container center text-center bg-gray box" style="padding:50px;margin-top:100px;">
	<?php
	//gather data from the form
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

			//add name and information to file
			
			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
			$filename = $DOCUMENT_ROOT.'SpiderWeb/data/'.'messages.txt';
			
			$fp = fopen($filename, 'a');
			$contact_date = date('Y-m-d');
			$output_line = $name. '|'.$email.'|'.$subject.'|'.$contact_date.'|'.$message."\n";
			fwrite($fp, $output_line);
			fclose($fp);
			
			
			//display new page
			
			print "<p>Thank u . we will contact u soon</p>";
			print "<p>Information submitted for $name</p>";
			print "<p>your email is $email </p>";
			print "<p>And u said :</p>";
			
			if (empty($message))
			{
				print "<p>nothing</p>";
			}else{
				print "<p>......$message</p>";
			}
		
		
		
	?>	
</div>

<!-- JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/agency.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/AnimOnScroll.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>
<script>
	new AnimOnScroll( document.getElementById( 'grid' ), {
		minDuration : 0.4,
		maxDuration : 0.7,
		viewportFactor : 0.2
	} );
</script>

</body>

</html>
