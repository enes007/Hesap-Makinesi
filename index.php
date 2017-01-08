<!DOCTYPE html>
<html>
<head>
<meta name="charset" content="utf8" />
<link rel="stylesheet" type="text/css" href="css/kaynak.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<title>Hesap Makinesi - 2017</title>
</head>
<script type="text/javascript">

	$(function(){
		$(".islem2").hide(500);
		$(".number").click(function(){
		var numara = $(this).html();
		$(".sonuc").append(numara);
		});
		$(".islem").click(function(){
			var sonuc = $(".sonuc").html();
			var islem = $(this).html();
			var deg = $(this).attr("value","secili");
			$(".sonuc").append(" "+islem+" ");
			$(".islem").attr("class","islem3");
				$(".islem2").show(500);
		
		});
		$(".islem2").click(function(){
			var islem = $("button[value=secili]").html();
			var sonuc = $(".sonuc").html();
				$(".islem2").hide(500);
			$.post("islem.php",{"sonuc":sonuc,"islem":islem},function(data){
			if(data == "Boş Gönderme"){
				$(".sonuc").html(data);
				setTimeout(function(){$(".sonuc").html("");},1000);
			
			}else{
				$(".sonuc").html(data);
			}
			$(".islem3").attr("class","islem");
			$("button[value=secili]").attr("value","islem");
		});
		
		});
		$(".temizle").click(function(){
			$(".sonuc").html("");
		});
		});

	

</script>
<body>
<center>
<div class="sonuc"></div>
<div class="numara">
<center><button class="temizle" type="button" >Temizle</button></center>
<button class="number" type="button" >0</button>
<button class="number" type="button" >1</button>
<button class="number" type="button" >2</button>
<button class="number" type="button" >3</button>
<button class="number" type="button" >4</button><br />
<button class="number" type="button" >5</button>
<button class="number" type="button" >6</button>
<button class="number" type="button" >7</button>
<button class="number" type="button" >8</button>
<button class="number" type="button" >9</button><br />
</div>
<button class="islem" type="button" >+</button>
<button class="islem" type="button" >-</button>
<button class="islem" type="button" >%</button>
<button class="islem" type="button" >*</button>
<button class="islem2" type="button" >=</button>
</center>
</body>
</html>