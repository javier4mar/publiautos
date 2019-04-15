<?php
$action = 0;
$titleInfo = "";

if(isset($_GET["about"])){
    $titleInfo = "Acerca de nosotros"; 
}else if(isset($_GET["contact"])){
    
        $titleInfo = "Contactenos"; 

}else if(isset($_GET["policy"])){
    
            $titleInfo = "Politica de privacidad"; 

}else if(isset($_GET["conditions"])){
    
                $titleInfo = "Terminos y condiciones"; 

}else if(isset($_GET["fees"])){
    
                    $titleInfo = "Tarifas"; 

}else if(isset($_GET["refunds"])){
    
                        $titleInfo = "Politica de reembolsos"; 

}else if(isset($_GET["security"])){
    
                            $titleInfo = "Consejos de seguridad"; 

}
 
 
 
  require_once "control/ctrl_info.php";

 
    
    
    
    



 