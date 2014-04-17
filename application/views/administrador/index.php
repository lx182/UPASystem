<script>
$(function(){
    $('#mainMenu').appendTo('#h_contain');
    
    $('#estadoDeCuenta').click(function(){
       $('#main-content').load("<?php echo base_url()?>index.php/vistas/estado_de_cuenta_view"); 
    });
});

</script>
<style>
    
</style>
    
<div id="mainMenu">
    <div id="estadoDeCuenta" class="buttonMenu">
        <span>Estado de Cuenta</span>
    </div>
    <div id="reportes" class="buttonMenu">
        <span>Reportes</span>
    </div>
</div>
<section id="main-content">
    
</section>