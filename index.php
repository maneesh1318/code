<html>
<head>
<title>ProbSol</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script src="controller/probsol.js" >

</script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF" onload="loadXMLDoc('model/login.php','main_content')">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div align="center">
  <center>
  <table border="0" width="90%" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%"><img border="0" src="img/topleft.jpg" width="372" height="106"></td>
    </center>
    <td width="50%">
      <p align="right"><img border="0" src="img/logo.jpg" width="217" height="64"></td>
  </tr>
  </table>
</div>
<div align="center">
  <center>
  <table border="0" width="90%" cellspacing="0" cellpadding="0" background="img/bluebar.jpg">
    <tr>
      <td width="100%"><font size="1">&nbsp;</font></td>
    </tr>
  </table>
  </center>
</div>
<div align="center">
  <center>
  <table border="0" width="90%" cellspacing="0" cellpadding="0">
    <tr>
      <td width="99%" valign="top"><br>
        <div id="main_content">
		
		</div>
    <td width="1%" valign="top">
      <p align="right"><img border="0" src="img/but-top.jpg" width="136" height="22"><br>
      <a  href="#" onclick="loadXMLDoc('model/login.php','main_content')"><img border="0" src="img/button1.jpg" width="136" height="43"></a><br>
      <a  href="#" onclick="loadXMLDoc('model/login.php','main_content')"><img border="0" src="img/button2.jpg" width="136" height="50"></a><br>
      <a  href="#" onclick="logout()"><img border="0" src="img/button3.jpg" width="136" height="49"></a><br>
      <a  href="#" onclick="loadXMLDoc('model/talk.php','main_content')"><img border="0" src="img/button4.jpg" width="136" height="52"></a><br>
      <img border="0" src="img/butbot.jpg" width="136" height="40"></td>
  </tr>
  </table>
</div>
<div align="center">
  <center>
  <table border="0" width="90%" cellspacing="0" cellpadding="0" background="img/bluebar.jpg">
    <tr>
      <td width="100%"><font size="1">&nbsp;</font></td>
    </tr>
	
  </table>
  </center>
  <table border="0">
	<tr>
      <td width="33%"><div class="fb-like" data-href="https://www.facebook.com/Probsoll" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></td>
	  <td width="33%"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td>
	  <td width="34%"><div class="g-plusone" data-annotation="none" data-href="http://probsol.webuda.com"></div>
		<script type="text/javascript">
	(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	</script>
	  
	  </td>
    </tr>
	<tr>
	<!--<td><div class="fb-comments" data-href="http://localhost" data-numposts="5" data-colorscheme="light"></div></td>-->
	</tr>
  </table>
</div>

</body>

</html>
