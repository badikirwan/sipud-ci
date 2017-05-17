<?php 
function menuaktif($aktif,$menu){
	if($aktif==$menu){
		return "active";
	}else{
		return "";
	}
}
