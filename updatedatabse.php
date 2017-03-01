<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
      <!-- HEAD SECTION-->
<head>
    <meta charset="utf-8">
    <title>ACME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
     <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- MAIN STYLE SECTION-->
    <link href="assets/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
    <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/about-achivements.css" rel="stylesheet" />
    <link id="mainStyle" href="assets/css/style1.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- END MAIN STYLE SECTION-->
</head>
<!-- END HEAD SECTION-->

     <!-- BODY SECTION-->
<body>

     <!-- HEADER SECTION-->
    <div class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars mobile-bars" style=""></span>
                </button>
                <a class="navbar-brand" href="index.html" >
                    DSATM <!-- logo here-->
                </a>
            </div>
            <div class="navbar-collapse collapse" data-scrollreveal="enter from the right 50px">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.html">Home</a></li><!-- menu links-->
                  
                </ul>
            </div>

        </div>
    </div>
     <!-- END HEADER SECTION-->

    <!--PAGE CONTENT--> 
    <!-- HOMEPAGE SECTION-->  

    <section id="Homepage">
        <div class="container">
       
    
    <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">Data-Base</li>
    </ol>     

                    <div class="align-center">
  <?php
$con = mysql_connect("localhost","user");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("tree", $con);
$id=0;



$ename1 = strtoupper($_POST[ename]);
$edes1 = strtoupper($_POST[edes]);
$rmng1 =strtoupper($_POST[rmng]);
$sql1="select empid from org where ename='$rmng1'";
$result=mysql_query($sql1,$con);
$row = mysql_fetch_array($result);
$parent_id=$row[empid];

$sql="INSERT INTO demo.org VALUES('$id','$ename1','$edes1','$rmng1','$parent_id')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo " <h2 class='main-text'>RECORD UPDATED!</h2>";
mysql_close($con);
?>

    </div>
</div>
</section>
</body>
</html>
        
