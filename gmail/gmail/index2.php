<html>
<head>
	<title>create signup</title>
	<meta charset="UTF-8">
	<meta name="description" content="create">
	<meta name="keywords" content="HTML,CSS,gmail">
	<meta name="author" content="Krishna">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
      <link rel="icon" href="image/icon.jpg"/>
	<body>
		<div class="wrapper">
		 <div class="topwrapper">
		 <img src="image/logo.jpg">
		</div>
		<div class="banner">
		  <h1>

		  </h1>
		  <h2 class="small">
			Sign Up
			</h2>
		</div>
		<div class="main">
		   <div class="login-card">
			<div class="circle-mask">
			<img src="image/image.png">

			  </div>
                      <br><br>
				  <form>

       <tr><td>First Name</td><td><input type=text name=t1></td></tr>
	   <tr><td>Last Name</td><td><input type=text name=t2></td></tr>
	   <tr><td>Email</td><td><input type=text name=t3><span></span></td></tr>
	   <tr><td>Username</td><td><input type=text name=t3></td></tr>
	   <tr><td>Password</td><td><input type=password name=t4></td></tr>
	   <tr><td>Confirm Password</td><td><input type=password name=t14></td></tr>
	   <br>
	 &nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year
	   <br>&nbsp;&nbsp;<select name=t5><option>none</option>
	   	  <?php
	   	   for($i=1;$i<32;$i++)
	   	   {
	   		   echo"<option>$i</option>";
	   	   }
	   ?>
	   </select>
	   &nbsp;
	   <select name=t6><option>none</option>
	   <?php
	   for($i=2017;$i>1940;$i--)
	   {
		   echo"<option>$i</option>";
	   }
	   ?></select>
	   &nbsp;
	<select name=t7><option>none</option>
	   <?php
	   for($i=1;$i<=12;$i++)
	   {
		   echo"<option>$i</option>";
	   }
	   ?></select>
	   <br><br>Gender<br>&nbsp;&nbsp;Male&nbsp;<input type=radio name=t8 value='Male'>
	   &nbsp;&nbsp;&nbsp;Female&nbsp;<input type=radio name=t6 value='Female'>
	   &nbsp;&nbsp;&nbsp;&nbsp;Other&nbsp;<input type=radio name=t6 value='Other'></td></tr>
	   <br>
	   <br>Nationality</td> &nbsp;<td><input type=text name=t9></td></tr>
	   <br>Enter the captcha<td><input type=text name=t10>
	   <?php
		$std="6xyvk9";
		$c="";
		for($i=0;$i<6;$i++)
		{
		$a=rand(0,5);
		$b=$std[$a];
		$c=$c.$b;
		$d=$b.".jpg";
		echo"<img src=$d>";
		}

		$s=$c;
		echo"<input type=hidden name=t12 value=$c>";
		?>

					  <p><input type="submit" name="login" class="login login-submit" value="Create"></p>
				  </form>

				  </div>
                       <div class="one-google">


                      <div class="logo-strip">

                      </div>
                  </div>

    		      </div>


            </div>
    		      <div class="gmail-footer">
                    <div id="left-footer">

                    </div>
                    <div id="right-footer">

                    </div>
                  </div>

		</div>
		</body>
		</html>