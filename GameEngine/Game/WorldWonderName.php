<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       WorldWonderName.php                                         ##
##  Developed by:  Dzoki                                                       ##
##  License:       Novaterra Project                                            ##
##  Copyright:     Novaterra (c) 2010-2026. All rights reserved.                ##
##                                                                             ##
##  URLs:          https://novaterra.example                                        ##
##                 https://github.com/YOUR-ORG/Novaterra                        ##
##                                                                             ##
#################################################################################

include("../Village.php");
if(isset($_POST['wwname']) && !empty($_POST['wwname']) && $village->natar){
    $database->submitWWname($village->wid,$_POST['wwname']);
    header("Location: ../../build.php?id=99&n");
}else{
    header("Location: ../../dorf2.php");
}


?>