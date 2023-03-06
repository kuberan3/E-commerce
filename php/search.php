<html>
<body>
<center>
<?php
	$product =  $_REQUEST['product']; 
	if ( $product == 'shoe' ) 
	{ 
		header("Location: shoes.html");
		exit();
    	}
	 else if( $product == 'mobile')
	 { 
      		header("Location: mobile.html");
		exit();
    	 } 
	else if( $product == 'dress')
	 { 
      		header("Location: dress.html");
		exit();
    	 } 
	else if( $product == 'laptop')
	 { 
      		header("Location: laptop.html");
		exit();
    	 }
	else if( $product == 'tv')
	 { 
      		header("Location: tvs.html");
		exit();
    	 }
	else if( $product == 'watches')
	 { 
      		header("Location: shoes.html");
		exit();
    	 } 
	else if( $product == 'glossery')
	 { 
      		header("Location: glossery.html");
		exit();
    	 } 
	else if( $product == 'homeapplience')
	 { 
      		header("Location: homeapp.html");
		exit();
    	 } 
	else if( $product == 'furniture')
	 { 
      		header("Location: furniture.html");
		exit();
    	 }
	else
	{
		header("Location: main.html");
		exit();
	}   
      
 ?> 
</center>
</body>
</html>