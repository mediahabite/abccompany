<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		ul{
			display: block;
		}
		li{
			list-style: none;
			display: inline-block;
		}

		ul li a{
			padding: 5px
			color: brown;
		}
	</style>
</head>
<body>
	<ul>
	   <li><a href="home.php">Home</a></li>
	   <li><a href="contact_us.php">Contact Us</a></li>
	   <li><a href="blog.php">Blog</a></li>
	</ul>

	<title>contact us| Abc company</title>
</head>
<body>
	<h1>Welcome to Contact us</h1>
	<form action="submit.php" type="POST">
  <input type="text" name="email" placeholder="email"><br>
  <input type="text" name="subject" placeholder="subject"><br>
  <textarea name="message" placeholder="Your message"></textarea>
  <input type="submit" name="submit" value="Send">
 </form>

</body>
</html>