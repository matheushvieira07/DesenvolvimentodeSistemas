<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .box{
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
            display: flex;
            font-size: 30px;
            padding-top: 10px;
           
        }
        .sair{
            padding-left:1300px ;
        }
        .lc{
            padding-left:50px ;
        }
        .rodape{
            width: 100%;
            height: 50px;           
            text-align: center;
            background-color: black;
            color: white;
            display: flex;
        }
        .corpo{
            width: 100%;
            height: 700px;
            background-image: linear-gradient(90deg,black,red);
            color: white;
            display: flex;
            font-size: 30px;
            padding-top: 10px; 
        }
    </style>


    <header>
    <div class="box">
        <a class="lc">LC Pisants</a>
        <a  href="index.php" class="sair" style="color:white">Sair</a>
    </div> 
    </header>  


    <div class="corpo">


    </div>
    
    
    <footer>
        <div class="rodape">
            <p>@copyright LC Pisants</p>
            <p class="telefone">Contato(47)9999-9999</p>
         </div>   
    </footer>            
           
    
</body>
</html>