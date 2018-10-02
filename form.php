<!doctype html>
<html>
<head>
<title>My first php website
</title>
<style>
.full{width: 1493px; height:520px;  background-color:gray; }
.fotter{height:60px; text-align:center; background-color:black; color:white; padding:21px;}
.header{height:60px; background-color:black;text-align:center; color:white; padding:21px;}
.mid{height:400px;color:white;}
.midin{padding:20px; font-size:20px;}
</style>
</head>
 

<body>
     <div class="full">
	   <div class="header">
	   <h2> Amezing website
		</h2>
	   </div>
	    <div class="mid">
		 <div class="midin">
		 
		 <form action="phpf.php" method="post">
		 USERNAME: <input type="text" name="amarna"/>
	
		 
		 
		  <br/>
		  <label> password:</label>
		  <input type="password" name="amarpass"><br>
		  
		  
		  <input type="checkbox" name="check" value="20">age 20<br>
		  <input type="checkbox" name="check" value="30">age 30<br>
           <input type="checkbox" name="check" value="40">age 40<br>
           <input type="checkbox" name="check" value="250">age 250<br>
		   
		   <select name="brand">
		          <option value="walton" name="bra">walton</option>
				   <option value="samsung" name="bra">samsung</option>
				    <option value="nokia" name="bra">nokia</option>
			</select>
			<input type="submit" value="submit">
		 
		 
		 
		 </form>
	<?php
	$use= $_POST['amarna'];

	 // echo $username;
	  
	  
	    $user= $_POST['amarna'];
	  $password=$_POST['amarpass'];
	  $age=$_POST['check'];
	   $ag=$_POST['brand'];
	  echo "my username $use  <br/> my password $password <br/> my age $age <br/>brand $ag<br>";
	  
	  
	
	?>	
   </div>
   </div>

     <div class="fotter">
	   <h2> Hot LIne: 01682786501<h2>
	 </div>

	  </div>
</body>   

</html>







