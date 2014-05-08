<script>
    $(function(){
        $('#mainMenu').appendTo('#h_contain');
        
        $('#estadoDeCuenta').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/estado_de_cuenta_A_view"); 
        });
         $('#reportes').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/reportes_C_view"); 
            $(this).addClass("active");
            $('#estadoDeCuenta').removeClass("active");
            $('#conceptos').removeClass("active");
        });
    });
    
</script>
<style>
    //navbar

.navbar-default {
    background-color: #002863;
    border-color: #4f76ad;
}
.navbar-default .navbar-brand {
    color: #ecf0f1;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
    color: #f0f0f0;
}
.navbar-default .navbar-text {
    color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
    color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #f0f0f0;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #f0f0f0;
    background-color: #4f76ad;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #f0f0f0;
    background-color: #4f76ad;
}
.navbar-default .navbar-toggle {
    border-color: #4f76ad;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
    background-color: #4f76ad;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
    border-color: #ecf0f1;
}
.navbar-default .navbar-link {
    color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
    color: #f0f0f0;
}

@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #ecf0f1;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #f0f0f0;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #f0f0f0;
        background-color: #4f76ad;
    }
}
.active a{
    height: 70px !important;
}

//Termina navbar
</style>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UPA</a>
        </div>
            
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="estadoDeCuenta"><a class="liANav" href="#">Estado de Cuenta</a></li>
                <li id="reportes"><a class="liANav" href="#">Reportes</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img id="img_user" width="50" src="<?php echo base_url()?>/images/user-default.png" > 
                        <span id='nombre'><?php echo $this->session->userData('nombre')?></span><br>     
                        <span id='matricula'><?php echo $this->session->userData('matUser')?></span> <b class="caret" style="float: right"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cambiar contraseña</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/vistas/logout">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    
<section id="main-content">
    
</section>