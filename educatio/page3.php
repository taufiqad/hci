<html>
<head>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
	</script>
	<script type="text/javascript">
 	$(document).ready(function(){
   		$("#next").click(function(){
    		$("#tampung").load("page4.php");
    		//$("#page2").display = "none";
   		});
   		$("#previous").click(function(){
    		$("#tampung").load("page2.php");
    		//$("#page2").display = "none";
   		});
  	});
	</script>
</head>
<body>

	<div id="tampung">
	<br>
 	<br>
 	<br>
	<h1>Requirements Engineering</h1>
	<div class="embed-responsive embed-responsive-16by9">
  	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_llqRnlrzWw" allowfullscreen></iframe>
	</div>

	<a href="#" id="previous" onclick="this.style.display = 'none'"><button>Previous</button></a>
    <a href="#" id="next" onclick="this.style.display = 'none'"><button>Next</button></a>
	</div>
	
</body>
</html>