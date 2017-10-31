<?php
    
    require_once APPPATH."models/Serianameable.php";
    interface Nameable extends Serianameable {
        
        function getClassName();
        
        
    }

?>

