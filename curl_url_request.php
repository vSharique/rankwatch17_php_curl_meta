<html>
<head>
<style type="text/css">
body {background-color:azure;}
h3{color:red;text-align:center;}
p {color:blue;}
</style>
<title> SEO Details of the entered URL  </title>
</head>
<body>

<?php 
$webaddress = $_POST["website"];
echo "<h3> Page details of the URL : $webaddress</h3>";
echo "<br/><br/>";
?>
<?php include("function_title_desc_keyword.php"); #gtting mta keyword, description and title?> 
<?php include("function_ipaddress.php");  #gtting ip address?>
<?php include("function_httpcode.php"); #getting status code?> 
<?php include("function_url_load_time.php"); #getting load time?> 
<?php include("function_url_list.php"); #getting internal and extrnal links?> 

</body>
</html>
