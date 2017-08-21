<?php
// for redirection to subdomain
$siteName='';
if($_GET['siteName'] )
{
$sitePostName=$_GET['siteName'];
$siteNameCheck = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $sitePostName);
   if($siteNameCheck)
   {
     //Do something. Eg: Connect database and validate the siteName.
   }
   else
  {
    header("Location: http://yourwebsite.com/404.php");
   }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Project Title</title>
</head>
<body>
<?php
 if($siteNameCheck) { 
    
    header("Location: http://localhost:8085");

 } else { 
     ?>
//Redirect to Subdomain Page.
<?php 
} 
s?>
</body>
</html>