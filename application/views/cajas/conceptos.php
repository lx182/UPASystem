
<script>
    $(function(){
        
        
        $('#asignarCon').click(function(){
            $('#content').load("<?php echo base_url()?>index.php/vistas/asignarCon_view"); 
        });
        $('#agregarCon').click(function(){
            $('#content').load("<?php echo base_url()?>index.php/vistas/agregarCon_view"); 
        });
        
        
        
    });
   

</script>


<ul class="nav nav-tabs nav-justified">
  <li><a class="active" id="asignarCon" href="#">Asignar</a></li>
  <li><a id="agregarCon" href="#">Agregar</a></li>
</ul>
<div id="content">
    
</div>
    
    
