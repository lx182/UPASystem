<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login using google account</title>
    </head>
    <style>
        
        #entrar{
            display: block;
            margin-left: auto;
            margin-right: auto;
            color: white;
            font-size: 2em;
            width: 200px;
                
                
        }
        body{
            background-color: white;
        }
        #page-header{
            background-color: #002863;
            margin: 0 auto;
            text-align: center;
            color: white;
            font-size: 1.2em;
        }
    </style>
    <body>
        <div id="page-header" class="page-header">
            <span>SERVICIOS ESCOLARES EN LÍNEA</span><br>
            <span>UNIVERSIDAD POLITECNICA DE AGUASCALIENTES</span>
        </div>
        <br><br><br><br><br><br><br><br>
        
           <a id="entrar" class="btn btn-primary btn-lg" href = "<?php echo $openid->authUrl(); ?>" style="text-decoration: none; color:white;" > Acceder </a>
        
            
    </body>
    
</html>