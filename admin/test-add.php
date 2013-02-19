<?php

$acctAdmin = $_GET['id'];
$inputProdID = $_POST['inputProdID'];
$inputAcct_id = $_POST['inputAcct_id'];
$inputAddress = $_POST['inputAddress'];
$editUserName = $_POST['editUserName'];
$editEmail = $_POST['editEmail'];
$editPhone1 = $_POST['editPhone1'];
$editPhone2 = $_POST['editPhone2'];
$editPhone3 = $_POST['editPhone3'];
$editPassword = $_POST['editPassword'];

echo '<h3>Data Recieved:</h3>';
echo 'acctAdmin= '.$acctAdmin.'<br />';
echo 'inputProdID= '.$inputProdID.'<br />';
echo 'inputAcct_id= '.$inputAcct_id.'<br />';
echo 'inputAddress= '.$inputAddress.'<br />';
echo 'editUserName= '.$editUserName.'<br />';
echo 'editEmail= '.$editEmail.'<br />';
echo 'editPhone1= '.$editPhone1.'<br />';
echo 'editPhone2= '.$editPhone2.'<br />';
echo 'editPhone3= '.$editPhone3.'<br />';
echo 'editPassword= '.$editPassword.'<br />';
?>