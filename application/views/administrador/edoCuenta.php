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
        
        $('#estadoDeCuenta').addClass('active');
        $('#example').dataTable({
            "oLanguage": {
                "sUrl": "<?php echo base_url();?>css/media/espaniol.txt"
            }
        });
    } );
</script>
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