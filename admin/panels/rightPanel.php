<?php

$userOption = array(
    'My Profile' => '#',
    'Notifications<span class="count">12</span>' => '#',
    'Settings' => '#',
    'Logout' => '#'
);

$adminAvatarImage = '../images/admin.jpg';

function rightPanelHeader($userOption, $adminAvatarImage){

    $str = '<header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>';
    $str .= '<div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                <button class="search-trigger"><i class="fa fa-search"></i></button>
                                <div class="form-inline">
                                    <form class="search-form">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="'.$adminAvatarImage.'" alt="User Avatar">
                                </a>
                                <div class="user-menu dropdown-menu">';
    foreach($userOption as $userOptionTitle => $userOptionLink){
        $str .= '<a class="nav-link" href="'.$userOptionLink.'">'.$userOptionTitle.'</a>';
    }
    $str .= '</div>
    </div>
    </div>
    </div>
    </header>';
    return $str;
}


function createBreadCrumbs($urlLink){
    $urls = explode('/', $urlLink);
    [$currentUrl, ] = explode('.', array_pop($urls)); 
    $parentUrl = array_pop($urls);

    $str = '<div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="../">Dashboard</a></li>
                                        <li><a href="../">'.$parentUrl.'</a></li>
                                        <li class="active">'.$currentUrl.'</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    return $str;
}

?>