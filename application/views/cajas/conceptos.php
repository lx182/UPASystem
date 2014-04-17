<?php
    
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style type="text/css" title="currentStyle">
    @import "<?php echo base_url();?>css/media/css/demo_page.css";
    @import "<?php echo base_url();?>css/media/css/demo_table.css";
</style>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>css/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable({
            "oLanguage": {
                "sUrl": "<?php echo base_url();?>css/media/espaniol.txt"
            }
        });
    } );
</script>
<style>
    #conceptos{
        background-color: #7fa1ff;
    }
</style>
<script>
    $(function() {
        $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    });
</script>
<style>
    .ui-tabs-vertical { width: 55em; }
    .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
    .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
    .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
    .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
</style>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Asignar concepto</a></li>
        <li><a href="#tabs-2">Nuevo concepto</a></li>
        
    </ul>
    <div id="tabs-1">
        <h2>Entrada</h2>
        <br>
        <label>Nombre: </label><input type="text"/><br>
        <label>Matrícula: </label><input type="text"/><br><br>
            
        <label>Alumno seleccionado: </label>
            
        <br>
        <br>
        <hr>
        <br>
        <br>
        <table id="example" class="display" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
            
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$3,120</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Director</td>
                    <td>Edinburgh</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$3,600</td>
                </tr>
            </tbody>
        </table>
    
    </div>
    <div id="tabs-2">
        <h2>Nuevo Concepto</h2>
        <br>
        <form>
            <label>Clave: </label><input type="text"/><br>
            <label>Nombre: </label><input type="text"/><br>
            <label>Descripción: </label><textarea placeholder="Descripción del concepto ..."></textarea><br>
            <label>Unidad de medida: </label><input type="text"/><br>
            <label>Monto: </label><input type="text"/><br>
            <input type="submit" value="Guardar"/>
        </form>
    </div>
</div>