<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Educatio</title>



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
	</script>
	<script type="text/javascript">
 	$(document).ready(function(){
   		$("#next").click(function(){
    		$("#tampung").load("page2.php");
    		$("#page1").display = "none";
   		});
  	});
	</script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Educatio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="materi.php">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    	<center>
 		<!-- <a href="#" id="klikdata" onclick="this.style.display = 'none'">Tampil Data</a><br/> -->
 		<div id="tampung">
 			<br>
 			<br>
 			<br>
 			<h1>Requirements Engineering</h1>
			<p>
			Requirements engineering adalah fase terdepan dari proses software engineering, dimana software requirements (kebutuhan) dari user (pengguna) dan customer (pelanggan) dikumpulkan, dipahami dan ditetapkan. Para pakar software engineering (rekayasa perangkat lunak) sepakat bahwa requirements engineering adalah suatu pekerjaan yang sangat penting, terutama berdasarkan fakta bahwa kebanyakan kegagalan pengembangan software disebabkan karena adaya ketidakkonsistenan (inconsistent), ketidaklengkapan (incomplete), maupun ketidakbenaran (incorrect) dari requirements specification (spesifikasi kebutuhan) [Romi-03]. The Standish Group mencatat bahwa prosentase akumulatif kegagalan sebuah project pengembangan software sebagian besar disebabkan oleh masalah requirements dan spesifikasinya [Standish-94].   

			</p>
    		<a href="#" id="previous" onclick="this.style.display = 'none'"><button>Previous</button></a>
    		<a href="#" id="next" onclick="this.style.display = 'none'"><button>Next</button></a>
 		</div>
 		
		</center>
		</div>

</body>
</html>