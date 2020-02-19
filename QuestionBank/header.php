
<?php
// Start the session
session_start();
if(!$_SESSION["user"] || $_SESSION["user"]!='user' ){
	
	//echo "<script>console.log('Debug Objects: " . $_SESSION["user"]  . "' );</script>";
	header("location:/a3j/login/login.php");
}
?>
<!DOCTYPE html>

<html>

    <head>
   

        <title>Question Bank </title>
        <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/folder.png">

        <!-- STYLES -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/directorylister.js"></script>

        <!-- FONTS -->
        <link rel="stylesheet" type="text/css"  href="//fonts.googleapis.com/css?family=Cutive+Mono">

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <?php file_exists('analytics.inc') ? include('analytics.inc') : false; ?>
        <script>
          <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

        </script>

    </head>

    <body>

        <div id="page-content" class="container">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/a3j/QuestionBank/">A3J Q-BANK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/a3j/QuestionBank/">Home</a></li>
     
      <li><a href="http://results.uoc.ac.in/">EXAMINATION RESULT</a></li>
      <li><a href="https://pareekshabhavan.uoc.ac.in/index.php/2016-06-16-10-20-34/2018-07-13-06-54-05">NOTIFICATIONS</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="../ContactFrom/ContactFrom/index.php">CONTACT</a></li>
    </ul>
    <ul class="nav navbar-nav" style="float:right;">

        <li ><a href="../../../a3j/logout.php">SIGN OUT</a></li>
    </ul>
    
  </div>
</nav>