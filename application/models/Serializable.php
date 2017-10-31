<?php
    
    require_once APPPATH."models/Serianameable.php";
    interface Serializablee extends Serianameable {
        
        function toArray();
        
        
    }

?>

