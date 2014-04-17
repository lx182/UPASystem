<link href="<?php echo base_url();?>js/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>js/js/jquery-ui-1.10.4.js"></script>
<script>
    $(function(){
        
         $('#menuAccordion').accordion();
         
        $('#mainMenu').appendTo('#h_contain');
        
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
    .buttonMenu{
        width: 26.6%;
    }
</style>
    
<div id="mainMenu">
    <div id="estadoDeCuenta" class="buttonMenu">
        <span>Estado de Cuenta</span>
    </div>
    <div id="reportes" class="buttonMenu">
        <span>Reportes</span>
    </div>
    <div id="conceptos" class="buttonMenu">
        <span>Conceptos</span>
    </div>
</div>
<section id="main-content">
    
</section>
</div>
</section>