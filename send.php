<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La Poveda Formación y Desarrollo</title>
<meta name="keywords" content="psicología, psiquiatría, contacto" />
<meta name="description" content="Psicología" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

function trim(str){
	if(!str || typeof str != 'string'){
		return "";
	}
	return str.replace(/^[\s]+/,'').replace(/[\s]+$/,'').replace(/[\s]{2,}/,' ');
}
</script>



<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.html">Home</a></li>
          		<li><a href="about.html">About</a>
                    <ul>
                        <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                  	</ul>
             	</li>
          		<li><a href="portfolio.html">Portfolio</a>
                    <ul>
                        <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                        <li><a href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                        <li><a href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
                  	</ul>
              	</li>
              	<li><a href="blog.html">Blog</a></li>
              	<li><a href="contact.html" class="selected">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">La Poveda Formación y Desarrollo</div>
    
        <div class="cleaner"></div>
    </div>  
  
  <a href="https://twitter.com/Lights_of_NYC" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @Lights_of_NYC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>      
       

<?php 
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
   
  if (isset($_REQUEST['email']))
 
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "El e-mail no es válido";
    }
  else
    {//send email
	$remitente = $_REQUEST['author'] ;
    $email = $_REQUEST['email'] ;
   // $subject = $_REQUEST['subject'] ; no hay subject
    $message = $_REQUEST['text'] ;
    mail("fjbanezares@gmail.com, javiaxel@hotmail.com", "Subject: texto recibido de $remitente",
    $message, "From: $email" );
$mensajefinal = '<p style="color:blue; ";>'.$remitente.',queremos agradecerte que nos hayas contactado mediante nuestra página Web</p> <p>Desde la Poveda Formación y Desarrollo daremos respuesta a tu mensaje lo antes posible</p> ';
    echo $mensajefinal;
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<form method='post' action='send.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>";
  }
?>
</body>
</html>