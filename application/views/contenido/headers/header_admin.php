<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Sistema de pagos</title>
<link rel="stylesheet" href="localhost:8080/upa/application/css/styles.css" />
</head>
<style>
    
    #h_contain{
        width: 100%;
        height: 70px;
        border-width: 1px;
        border-style: solid;
        border-color:#000;
        background: #000;
        margin-top: 20px;
        text-align:left;
    }
    #h_title{
        text-align: center;
        width: 45%;
        height: 50px;
        background-color: #3366cc;
        margin-top: 10px;
        display: inline-block;
    }
    #h_title_report{
        text-align: center;
        width: 34%;
        height: 50px;
        background-color: #fff;
        margin-top: 10px;
        display: inline-block;
    }
    .text_h_t{
        font-size: 20px;
    }
    #h_user_info{
        text-align: center;
        width: 20%;
        height: 50px;
        background-color: #fff;
        margin-top: 10px;
        display:  inline;
        position: absolute;
        margin-left: 5px;
    }
    #name_alumno{
        vertical-align: top;
        margin-left: 50px
            
    }
    #img_user{
        height: 50px;
        width: 42px;
        position: absolute;
    }
    #b_estado_de_cuenta{
        text-align: justify;
        width: 60%;
        margin-top: 20px;
    }
    #b_td_ciclo{
        width: 85%;
    }


    #b_tabla_datos{
        border-collapse: collapse;
        border-style: solid;
        border-width: 2px;
        border-color: #000;
        
    }
    #b_tabla_datos tr:first-child{
        background-color: #B3B4BD;
    }
    #b_tabla_datos tr:nth-child(even){
        background-color: #E0E0E0;
    }
    #b_tabla_datos th{
        background-color: #B3B4BD;
        border-right: 2px solid #000;
        border-left: 2px none #000;
    }
    
    #b_tabla_datos th:last-child{
        border-right: 2px none #000;
        border-left: 2px none #000;
    }
    #b_tabla_datos td{
        border-right: 2px solid #000;
        border-left: 2px none #000;
    }
    #b_tabla_datos td:last-child{
        border-right: 2px none #000;
        border-left: 2px none #000;
    }
</style>
<body>
    <header>
        <div id="h_contain">
           <div id="h_title">
               <p class="text_h_t"><b>Estado de Cuenta</b></p>
            </div>
            <div id="h_title_report">
                <p class="text_h_t"><b>Reportes</b></p>
            </div>
            <div id="h_user_info">
                <img id="img_user" src="../aaa.jpg" >
                <b id='name_alumno'>Diego Eduardo Macías Jasso</b><br>
                <b id='name_alumno'>UP100224</b><br>
            </div>
        </div>
    </header>
</head>

