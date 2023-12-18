<?php include_once "db.php";

if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號或密碼錯誤");
}

