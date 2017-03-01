<!--<![endif]-->
      <!-- HEAD SECTION-->
<head>
    <meta charset="utf-8">
    <title>DSATM</title>
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
                DSATM<!-- logo here-->
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
<section id="Homepage">
        <div class="container">
           

                    
<?php
mysql_connect('localhost', 'user');
mysql_select_db('demo');


 $qry="SELECT * FROM org";
 $result=mysql_query($qry);


 $arrayCategories = array();

 while($row = mysql_fetch_assoc($result)){ 
 $arrayCategories[$row['empid']] = array("parent_id" => $row['parent_id'], "ename" =>                       
 $row['ename'],"edes" =>                       
 $row['edes']);   
  }
//createTree($arrayCategories, 0);

 function createTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['parent_id']) {                       

    if ($currLevel > $prevLevel) echo " <ul> "; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li>'.$category['ename']."-".$category['edes'];

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTree ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </h5></li>  </ul> ";

}   
?>
<div id="content" class="general-style1">
<?php
 if(mysql_num_rows($result)!=0)
 {
?>
<?php 

createTree($arrayCategories, 0); ?>
<?php
}
?>
</div></div>
</div>
</body>
</html>
