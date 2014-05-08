
<script>
    $(function(){    
        
        $('#estadoDeCuenta').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/estado_de_cuenta_C_view"); 
        });
        $('#reportes').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/reportes_C_view"); 
        });
        $('#conceptos').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/conceptos_C_view"); 
            
        });
    });
    
</script>
<style>
    //navbar
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
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UPA</a>
        </div>
            
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="estadoDeCuenta"><a  class="liANav" href="#">Estado de Cuenta</a></li>
                <li id="reportes"><a  class="liANav" href="#">Reportes</a></li>
                <li id="conceptos"><a   class="liANav"href="#">Conceptos</a></li>
                    
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