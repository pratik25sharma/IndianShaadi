<?php

$allLeftPanels = array(
    'Blogs' => array(
        'View Blogs' => '../blogs/view.php'
    ),
    'Header Banner' => array(
        'Add Banner' => '../banner/add.php', 
        'View Banner' => '../banner/view.php'
    ),
    'Image Banner' => array(
        'Add Banner' => '../imagebanner/add.php', 
        'View Banner' => '../imagebanner/view.php'
    )
);


// echo out the left panel
function printLeftPanel($allLeftPanels){
    $str = '<aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">
                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="../index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                            </li>
                            <li class="menu-title">UI elements</li>';
                            foreach($allLeftPanels as $headerTitle => $childTitles){
                                $str .= 
                                '<li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '.$headerTitle.'</a>
                                    <ul class="sub-menu children dropdown-menu">';
                                    foreach($childTitles as $childHeader => $childLink){
                                        $str .= '<li><a href="'.$childLink.'">'.$childHeader.'</a></li>';
                                    }
                                    $str .='</ul>
                                </li>';
                            }
                $str .= '</ul>
                    </div>
                </nav>
        </aside>';
    return $str;
}

?>