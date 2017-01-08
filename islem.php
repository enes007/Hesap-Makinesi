<?php
$veri = @$_POST["sonuc"];
$islem = @$_POST["islem"];
if(empty($veri)){
	echo "Boş Gönderme";
}else{
	if($islem == "+"){
		$as = explode("+",$veri);
		echo ($as[0]+$as[1] == 0) ? "0" : $as[0]+$as[1];
    }elseif($islem == "-"){
		$as = explode("-",$veri);
		echo ($as[0]-$as[1] == 0) ? "0" : $as[0]-$as[1];
    }elseif($islem == "%"){
		$as = explode("%",$veri);
	echo ($as[0]%$as[1] == 0) ? "0" : $as[0]%$as[1];
	}elseif($islem == "*"){
		$as = explode("*",$veri);
		echo ($as[0]*$as[1] == 0) ? "0" : $as[0]*$as[1];
    }
	}
?>