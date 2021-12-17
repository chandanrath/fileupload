
  <?PHP
     
$action=$_REQUEST['action'];

if($action=='category')					{  include_once 'pages/category.php'; }
if($action=='product')					{  include_once 'pages/product.php'; }
if($action=='keywordsapi')					{  include_once 'pages/keywordsApi.php'; }

if($action=='createpage')					{  include_once 'pages/createpage.php'; }
if($action=='imageupload')					{  include_once 'pages/imageupload.php'; }
if($action=='downloadpg')					{  include_once 'pages/downloadpg.php'; }


?>