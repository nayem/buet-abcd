<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<!--    <title>Bootstrap, from Twitter</title>-->
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Khandokar Md. Nayem">

    <!-- Le styles -->
<!--    <link href="../assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="<?php echo base_url();?>docs/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
<!--    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">-->
    <link href="<?php echo base_url();?>docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    
    
    <script type="text/javascript">
    
        window.onload= function strt()
        {
            var butt= document.getElementById("sub_btn");
            //butt.disabled=true;
        }
        
        function uLen()
        {
            var uu= document.getElementById("input_Uname").value;
            var len= uu.length;
            
            var temp= document.getElementById("uCheck");
            
            if(uu==0)
            {
                temp.innerHTML="Username Not provided";
                temp.style.color="Red";
            }
            
            else
            {
                temp.innerHTML="";
            }
        }
        
        function checkLen()
        {
            var pp= document.getElementById('input_Password').value;
            var len= pp.length;
            
            var temp=document.getElementById('pCheck');
            
            if(len<4)
            { 
                temp.innerHTML= "Password must be at least 4 character";
                temp.style.color="Red";
            }
            else
            {
                temp.innerHTML= "";
            } 
        }
        
        var password_valid=false;
        var mail_valid=false;
        var repass_valid=false;

 function validateForm()
    {
        return mail_valid&&password_valid&&repass_valid;
    }
    
    function validateEmail() {
            var emailText = document.getElementById('email').value;
            var pattern =/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

            if (pattern.test(emailText)) {
                //return true;
                mail_valid=true;
                document.getElementById('mail').innerHTML="";
                document.getElementById('mail').innerHTML="<i class='icon-ok'></i>";
            } else {
               // alert('Bad email address: ' + emailText);
               //return false;
               //document.anchors[0].style.color="red";
               //document.anchors[0].innerHTML="Illegal Format !!!";
               mail_valid=false;
               document.getElementById('mail').style.color="red";
               document.getElementById('mail').innerHTML="Not a legal format !";

            }
   }

   function checkPassword()
   {
       if(document.getElementById('password').value.length <4)
       {
           document.getElementById('pass').style.color="red";
           document.getElementById('pass').innerHTML="Password too short !!!";
           password_valid=false;
       }

       else
       {
           document.getElementById('pass').innerHTML="";
           document.getElementById('pass').innerHTML="<i class='icon-ok'></i>";
           password_valid=true;
       }
   }

   function checkRePassword()
   {
       if(password_valid)
       {
           if(document.getElementById('password').value==document.getElementById('re_password').value )
            {
                     repass_valid=true;
                     document.getElementById('repass').style.color="green";
                     document.getElementById('repass').innerHTML="<i class='icon-ok'></i>   Password matched !";
            }

           else
           {
                     repass_valid=false;
                     document.getElementById('repass').style.color="red";
                     document.getElementById('repass').innerHTML="Password not matched !";
           }

       }
       
   }

   function clearMessage(id)
   {
      document.getElementById(id).innerHTML="";
   }
        
    </script>

    <!-- Le fav and touch icons -->
<!--    <link rel="shortcut icon" href="../assets/ico/favicon.ico">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
    <link rel="shortcut icon" href="<?php echo base_url();?>docs/assets/ico/icon1.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>docs/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>

