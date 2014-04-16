<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Sistema de pagos</title>
<link rel="stylesheet" href="css/styles.css" />
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
        display: table;
    }
    #h_title{
        border:2px solid #000;
        cursor: pointer;
        text-align: center;
        width:max-content;
        height: 50px;
        background-color: #3366cc;
        margin-top: 10px;
        display: table-cell;
    }
    .h_title_lashes{
        border:2px solid #000;
        cursor: pointer;
        text-align: center;
        width: 34%;
        height: 50px;
        background-color: #fff;
        margin-top: 10px;
        display: table-cell;
    }
    .text_h_t{
        font-size: 20px;
    }
    #h_user_info{
        border:2px solid #000;
        cursor: pointer;
        text-align: center;
        width: 20%;
        height: 50px;
        background-color: #fff;
        margin-top: 10px;
        display: table-cell;
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
        margin-top: -10px;
    }
    #b_estado_de_cuenta{
        text-align: justify;
        width: 60%;
        margin-top: 20px;
    }
    #b_td_ciclo{
        width: 85%;
    }


    .b_tabla_datos_estado_cuenta{
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
        border-collapse: collapse;
        border-style: solid;
        border-width: 2px;
        border-color: #000;
        
    }
    .b_tabla_datos_estado_cuenta tr:first-child{
        background-color: #B3B4BD;
    }
    .b_tabla_datos_estado_cuenta tr:nth-child(even){
        background-color: #E0E0E0;
    }
    .b_tabla_datos_estado_cuenta th{
        background-color: #B3B4BD;
        border-right: 2px solid #000;
        border-left: 2px none #000;
    }
    
    .b_tabla_datos_estado_cuenta th:last-child{
        border-right: 2px none #000;
        border-left: 2px none #000;
    }
    .b_tabla_datos_estado_cuenta td{
        border-right: 2px solid #000;
        border-left: 2px none #000;
    }
    .b_tabla_datos_estado_cuenta td:last-child{
        border-right: 2px none #000;
        border-left: 2px none #000;
    }
    #menu_header{
        border:2px solid #000;
        border-top:2px none #000;
        position: relative;
        width: 19.7%;
        float: right;
        
    }
    .boton_header{
        margin-right: auto;
        margin-left: auto;
        cursor: pointer;
        width: 85%;
        height: 30px;
        background: #fff;
        font-size:18px;
        text-align: center;
        border-bottom:1px solid #E0E0E0;
        position: relative;
        margin-top: -18px;
    }
    .boton_header:hover{
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 30px;
        background:  skyblue;
        font-size:18px;
        text-align: center;
        border-bottom:1px solid  #E0E0E0;
        margin-top: -18px;
    }
    .t_form{
        width: 100%;
    }
    .estado_de_cuenta_admin{
        border:1px solid  #000;
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        top:30%;
        background-color: #fff;
        margin-left: 5%;
        margin-right: 5%;
        
    }
    #b_titulo_estado_cuenta_admin{
        width: 100%;
        text-decoration: underline;
        text-decoration-style: solid;
        font-size: 25px;
    }
    #datos_alumno_admin tr{
        cursor:pointer;
    }
    #datos_alumno_admin tr:hover{
        background-color:  skyblue;
    }
    #cont_cambia_pas{
        margin-left: 35%;
        margin-left: 35%;
        margin-top: 5%;
    }
    #cont_datos_personales{
        margin-left: 20%;
        margin-left: 20%;
        margin-top: 10px;
    }
    
    
</style>
<body>
    <header>
        <div id="h_contain">
           <div id="h_title">
               <p class="text_h_t"><b>Estado de Cuenta</b></p>
            </div>
            <div class="h_title_lashes">
                <p class="text_h_t"><b>Reportes</b></p>
            </div>
            <div id="h_user_info">
                <img id="img_user" src="../aaa.jpg" >
                <b id='name_alumno'>Diego Eduardo Macías Jasso</b><br>     
                <b id='name_alumno'>UP100224</b><br>
            </div>
        </div>
        <div id="menu_header">
            <div id="boton_cambia_pass" class="boton_header"><p class="text_boton_h" >Cambiar contraseña</p></div>
            <div id="boton_perfil" class="boton_header"><p class="text_boton_h" >Perfil</p></div>
            <div id="boton_salir" class="boton_header" ><p class="text_boton_h" >Salir</p></div>
        </div>    
    </header>
</head>

