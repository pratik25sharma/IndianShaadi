<?php
    // include panel
    include_once('../panels/leftPanel.php');
    include_once('../panels/rightPanel.php');
    include_once('../connection/connection.php');
    include_once('../header/header.php'); 
    
    echo '<body>';
    echo printLeftPanel($allLeftPanels);
    echo '<div id="right-panel" class="right-panel">';
    echo rightPanelHeader($userOption, $adminAvatarImage);
    echo createBreadCrumbs($_SERVER['PHP_SELF']);
