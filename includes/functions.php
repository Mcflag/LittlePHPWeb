<?php

function is_administrator($name='Chen',$value='Chen'){
	if(isset($_COOKIE[$name])&&($_COOKIE[$name]==$value)){
		return true;
	}else{
		return false;
	}
}

?>