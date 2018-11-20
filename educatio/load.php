<html>
<head>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
	</script>
	<script type="text/javascript">
 	$(document).ready(function(){
   		$("#next").click(function(){
    		$("#tampung").load("page2.php");
    		//$("#page1").display = "none";
   		});
   		$("#previous").click(function(){
    		$("#tampung").load("materi.php");
    		//$("#page1").display = "none";
   		});
  	});
	</script>
</head>
<body>
	<div id="page1">
	<h1>Tampilan ini berasal dari halaman load</h1>
	<p>
		Requirements engineering adalah fase terdepan dari proses software engineering, dimana software requirements (kebutuhan) dari user (pengguna) dan customer (pelanggan) dikumpulkan, dipahami dan ditetapkan. Para pakar software engineering (rekayasa perangkat lunak) sepakat bahwa requirements engineering adalah suatu pekerjaan yang sangat penting, terutama berdasarkan fakta bahwa kebanyakan kegagalan pengembangan software disebabkan karena adaya ketidakkonsistenan (inconsistent), ketidaklengkapan (incomplete), maupun ketidakbenaran (incorrect) dari requirements specification (spesifikasi kebutuhan) [Romi-03]. The Standish Group mencatat bahwa prosentase akumulatif kegagalan sebuah project pengembangan software sebagian besar disebabkan oleh masalah requirements dan spesifikasinya [Standish-94].   

	</p>
	</div>
	<div id="tampung"></div>
	<ul class="pager">
    <li><a href="#" id="previous" onclick="this.style.display = 'none'">Previous</a></li>
    <li><a href="#" id="next" onclick="this.style.display = 'none'">Next</a></li>
  	</ul>
</body>
</html>