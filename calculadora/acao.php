<?php
    if(isset($_POST['num1'])){
        $_SESSION['numero']=$_POST['num1'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num2'])){
        $_SESSION['numero']=$_POST['num2'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num3'])){
        $_SESSION['numero']=$_POST['num3'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num4'])){
        $_SESSION['numero']=$_POST['num4'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num5'])){
        $_SESSION['numero']=$_POST['num5'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num6'])){
        $_SESSION['numero']=$_POST['num6'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num7'])){
        $_SESSION['numero']=$_POST['num7'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num8'])){
        $_SESSION['numero']=$_POST['num8'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num9'])){
        $_SESSION['numero']=$_POST['num9'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['num0'])){
        $_SESSION['numero']=$_POST['num0'];
        $_SESSION['visor'] = $_SESSION['visor'].$_SESSION['numero'];
    }
    if(isset($_POST['div'])){
        if($_SESSION['total']!=$_SESSION['visor']){
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            if($_SESSION['total']==0){
                $_SESSION['total'] = $_SESSION['aux'];     
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['div'];
            }else{
                $_SESSION['total'] = $_SESSION['total'] / $_SESSION['aux'];
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['div'];
            }
        }else{
            $_SESSION['visor']='';
            $_SESSION['refazer_no_igual']=$_POST['div'];
        }
    }
    if(isset($_POST['mult'])){
        if($_SESSION['total']!=$_SESSION['visor']){
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            if($_SESSION['total']==0){
                $_SESSION['total']=1;
                $_SESSION['total'] = $_SESSION['total'] * $_SESSION['aux'];     
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['mult'];
            }else{
                $_SESSION['total'] = $_SESSION['total'] * $_SESSION['aux'];
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['mult'];
            }
        }else{
            $_SESSION['visor']='';
            $_SESSION['refazer_no_igual']=$_POST['mult'];
        }
    }
    if(isset($_POST['soma'])){
        if($_SESSION['total']!=$_SESSION['visor']){
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            $_SESSION['total'] = $_SESSION['total'] + $_SESSION['aux'];
            $_SESSION['visor']='';
            $_SESSION['refazer_no_igual']=$_POST['soma'];
        }else{
            $_SESSION['refazer_no_igual']=$_POST['soma'];
            $_SESSION['visor']='';
        }
    }
    if(isset($_POST['subtrai'])){
        if($_SESSION['total']!=$_SESSION['visor']){
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            if($_SESSION['total']==0){
                $_SESSION['total'] = $_SESSION['aux'];
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['subtrai'];
            }else{
                $_SESSION['total']=$_SESSION['total'] - $_SESSION['aux'];
                $_SESSION['visor']='';
                $_SESSION['refazer_no_igual']=$_POST['subtrai'];
            }
        }else{
            $_SESSION['visor']='';
            $_SESSION['refazer_no_igual']=$_POST['subtrai'];
        }
    }
    if(isset($_POST['igual'])){
        if ($_SESSION['refazer_no_igual']=='+') {
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            $_SESSION['total'] = $_SESSION['total'] + $_SESSION['aux'];
            $_SESSION['refazer_no_igual']='';
            $_SESSION['visor']=(string)$_SESSION['total'];
        }elseif ($_SESSION['refazer_no_igual']=='-') {
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            $_SESSION['total'] = $_SESSION['total'] - $_SESSION['aux'];
            $_SESSION['refazer_no_igual']='';
            $_SESSION['visor']=(string)$_SESSION['total'];
        }elseif ($_SESSION['refazer_no_igual']=='X') {
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            $_SESSION['total'] = $_SESSION['total'] * $_SESSION['aux'];
            $_SESSION['refazer_no_igual']='';
            $_SESSION['visor']=(string)$_SESSION['total'];
        }elseif ($_SESSION['refazer_no_igual']=='/') {
            $_SESSION['aux'] = (int)$_SESSION['visor'];
            $_SESSION['total'] = $_SESSION['total'] / $_SESSION['aux'];
            $_SESSION['refazer_no_igual']='';
            $_SESSION['visor']=(string)$_SESSION['total'];
        }
    }
    if(isset($_POST['limpar'])){
        $_SESSION['visor']='';
        $_SESSION['total']=0;
    }
?>