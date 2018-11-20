<html>
<head>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
	</script>
	<script type="text/javascript">
 	$(document).ready(function(){
   		$("#next").click(function(){
    		$("#tampung").load("page3.php");
    		//$("#page2").display = "none";
   		});
   		$("#previous").click(function(){
    		$("#tampung").load("materi.php");
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
	<p>
		Customer (pelanggan) yang datang kepada kita untuk mengerjakan sebuah proyek pengembangan software, adalah ibarat seseorang yang mengatakan kepada kita, “Tolong buatkan saya batu”. Ketika kita memberikan kepadanya sebuah batu, dia akan melihatnya sebentar dan mengatakan kepada kita, “Ya terima kasih, tapi sebenarnya yang saya inginkan adalah sebuah batu kecil berwarna biru”. Dan ketika kita bawakan untuknya batu kecil berwarna biru, dia mengatakan bahwa yang diinginkan adalah yang “bentuknya bulat”. Demikian seterusnya proses iterasi (iteration) terjadi berulangkali sampai akhirnya kita dapatkan yang sebenarnya diinginkan customer kita adalah “batu pualam kecil berwarna biru”. Meskipun mungkin sebenarnya bukan “tepat yang diinginkan”, tapi paling tidak “paling dekat” dengan yang diinginkan customer. Dan mungkin saja terjadi, customer kita mengubah pikiran tentang requirements pada saat proses interaksi dengan pengembang terjadi (dari iterasi pertama yang sekedar batu, sampai iterasi terakhir yang menghasilkan batu pualam kecil berwarna biru). 

	</p>
	<a href="#" id="previous" onclick="this.style.display = 'none'"><button>Previous</button></a>
    <a href="#" id="next" onclick="this.style.display = 'none'"><button>Next</button></a>
	</div>
	
</body>
</html>