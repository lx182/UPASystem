<?php
    
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
    $(function(){
        $( "#progressbar" ).progressbar({
            value: false
        });
        
    
        $('#radio').buttonset();
        $('#dialogGenerando').dialog({
            autoOpen: false
        });
        $( "[name*=radio]" ).click(function() {
            $( "#dialogGenerando" ).dialog( "open" );
        });
  
        $("#generarResultados").button();
        $('#generarResultados').click(function(){
            $('#contentTable').load("<?php echo base_url()?>index.php/vistas/generarTabla_view")
        });
        $('#listTables .tableFields .fieldsTable li').click(function(){
            if($('#contentFilter [nombre*='+$(this).attr('nombre')+']').length){
                
            }else{
                $('<label />').html($(this).html()+": ").attr('nombre',$(this).attr('nombre')).appendTo('#contentFilter'); 
                $('<input />').attr('type','text').val('').attr('name','algo').appendTo('#contentFilter');
                $('<br />').appendTo('#contentFilter');
            }
            
            return false;
        });
        $('#listTables .tableFields').click(function(){
            $(this).find(".fieldsTable").toggle('blind');
        });
        
        
     
    });
</script>
<style>
    #reportes{
       background-color: #7fa1ff;
       
    }
    #listTables{
        list-style-type: none;
        margin:0;
        padding:0;
    }
    li{
        cursor: pointer;
    }
    #listTables .tableFields div{
        width: 100%;
        height: 20px;
        border: 1px solid black;
        cursor: pointer;
    }
    #container{
        width: 100%;
        height: auto;
        min-height: 500px;
        border: 1px solid black;
        
        
    }
    #contentFilter{
        width: 79.5%;
        height: auto;
        min-height: 200px;
        border: 1px solid black;
        float: right;
    }
    #contentData{
        width: 20%;
        height: auto;
        min-height: 500px;
        border: 1px solid black;
        position: absolute;
    }
    #contentTable{
        width: 79.5%;
        height: auto;
        min-height: 300px;
        border: 1px solid black;
        float: right;
    }
    #generarResultados{
        position: relative;
        float: right;
        top: 100px;
    }
    #radio{
        float: right;
        
    }
</style>
<div id="container">
    <div id="contentData">
        <div id="menuAccordion">
            <ul id="listTables">
                <li class="tableFields"><div>Tabla 1</div>
                    <ul class="fieldsTable">
                        <li nombre='Nombre'>Nombre</li>
                        <li nombre='Fecha'>Fecha</li>
                        <li nombre='Correo'>Correo</li>
                    </ul>
                </li>
                <li class="tableFields"><div>Tabla 2</div>
                    <ul class="fieldsTable" hidden>
                        <li nombre='Nombre'>Nombre</li>
                        <li nombre='Fecha'>Fecha</li>
                        <li nombre='Correo'>Correo</li>
                    </ul>
                    
                </li>
                <li class="tableFields"><div>Tabla 3</div>
                    
                    <ul class="fieldsTable" hidden>
                        <li nombre='Nombre'>Nombre</li>
                        <li nombre='Fecha'>Fecha</li>
                        <li nombre='Correo'>Correo</li>
                    </ul>
                </li>
                <li class="tableFields"><div>Tabla 4</div></li>
            </ul> 
            
        </div>
    </div>
    <div id="contentFilter">
        <div id="radio">
            <input type="radio" id="radio1" name="radio"><label for="radio1">PDF</label>
            <input type="radio" id="radio2" name="radio"><label for="radio2">EXCEL</label>
            <input type="radio" id="radio3" name="radio"><label for="radio3">XML</label>
        </div>
        <input type="button" value="Generar" id="generarResultados"/>
    </div>
    <div id="contentTable">
        
    </div>
    <div id="dialogGenerando" title="Espere por favor">
        <h3>Generando reporte ...</h3>
        <div id="progressbar"></div>
    </div>
</div>
