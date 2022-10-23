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
    
	<link rel="stylesheet" type="text/css" href="theme/jquery.css" media="screen">
	<script src="js/modernizr.custom.js"></script>
	<script src="theme/jquery-3.js"></script>
	<script src="theme/scripts.js"></script>
	<script src="theme/jquery.js"></script>
</head>


<body id="page-top" data-spy="scroll" data-target="">

<div class="container center text-center bg-gray box" style="padding:50px;margin-top:100px;">	
	<h2>Messages From Clients</h2>
	<table class="messages_table" border="1" width="100%" >
		<?php
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username=='ashoyon' && $password=='bs546496')
			{
				print "<tr>";
					print "<th style='text-align:center;'>Name</th>";
					print "<th style='text-align:center;'>Email</th>";
					print "<th style='text-align:center;'>Subject</th>";
					print "<th style='text-align:center;'>Contact Date</th>";
					print "<th style='text-align:center;'>Message</th>";
				print "</tr>";
				
				//read guestbook information from file 
			
			$display = "";
			$line_ctr = 0;
			
			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
			$filename = $DOCUMENT_ROOT.'SpiderWeb/data/'.'messages.txt';
			
			if(file_exists($filename))
			{
				$fp = fopen($filename, 'r');
					while(true)
				{
					$line = fgets($fp);
					
					if (feof($fp))
					{
						break;
					}
					$line_ctr++;
					$line_ctr_remainder = $line_ctr % 2;
					
					if ($line_ctr_remainder == 0)
					{
						$style = "style='background-color: #FFFFCC;'";
					}
					else
					{
						$style = "style='background-color: #fff;'";
					}
					list($name, $email, $subject, $contact_date, $message) = explode('|',$line);
					$display .="<tr $style>";
						$display .="<td>".$name."</td>";
						$display .="<td>".$email."</td>";
						$display .="<td>".$subject."</td>";
						$display .="<td>".$contact_date."</td>";
						
						if(empty($message))
						{
							$message = '&nbsp';
						}
						$display .="<td>".$message."</td>";
					$display .="</tr>\n";
				}
				fclose($fp);
				print $display;
			}else{
				print "<p>There are no names in the guestbook</p>";
			}
				
			}else{
				print "Sorry, its for admin only";
			}
			
			
			
		?>
	</table>
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
