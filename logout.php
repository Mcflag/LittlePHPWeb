<?php
if(isset($_COOKIE['Chen'])){
	setcookie('Chen',false,time()-300);
}

define('TITLE', 'Logout');
include('templates/header.html');

echo '<p>you are now logged out.</p>';

include('templates/footer.html');
?>