<?php
if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case 1:
            echo 'abcdef<br>';
            break;
        case 2:
            echo '2<br>';
            break;
		 case 3:
            echo 'value3<br>';
            break;
        case 4:
            echo 'value4<br>';
            break;	
		 case 5:
            echo 'this is value5<br>';
            break;
        case 6:
            echo 'value6<br>';
            break;	
		 case 7:
            echo 'this is value7<br>';
            break;
        case 8:
            echo 'value8<br>';
            break;
		 case 9:
            echo 'this is value9<br>';
            break;
        case 10:
            echo 'value10<br>';
            break;	
			 case 11:
            echo 'this is value11<br>';
            break;
        case 12:
            echo 'value12<br>';
            break;
        default:
           
            break;
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
   <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  
     <title>AstroViewer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  
    <style>
    html{
	background : url('https://images.unsplash.com/photo-1506272517965-ec6133efee7a?auto=format&fit=crop&w=889&q=80') no-repeat center center fixed ;
	background-size :cover;
	}
    body{
	  background : none;
	}
	.container{
	   text-align :center;
	   margin-top :180px;
	   color:darkgoldenrod;
	   font-size:40px;
	}
	.options{
	   marign-top:20px;
	   text-align :center;
       font-size:20px;
	}
  </style>
  </head>
 
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
    <form>
	<p style="color:darkgoldenrod;text-align:center;margin-top:60px;font-size:20px"; >Browse through the signs of astrology here to learn their deeper meaning—and how you can use their powers to your advantage.Since,No matter what your Sun sign, we are all affected by the 12 signs of the zodiac, as the Sun and other planets cycle through the horoscope over the course of a year.</p>
     <div class="container" for="select1">
	 Select Your Astro Sign here : 
	  </div>
	  <div class="options">
	<form method="post" action="?" >
      <select name="select1">
          <option value="1">Aries</option>
          <option value="2">Taurus</option>
          <option value="3">Gemini</option>
	      <option value="4">Aries</option>
           <option value="5">Cancer</option>
           <option value="6">Virgo</option>
	       <option value="7">Libra</option>
           <option value="8">Scorpio</option>
           <option value="9">Sagittarius</option>
           <option value="10">Capricorn</option>
          <option value="11">Aquarius</option>
          <option value="12">Pises</option>
       </select>
      <input type="submit"  value="Go"\>
    </form>
  </div>	
	
  </body>
</html>
