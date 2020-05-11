<?php

    include_once('../../admin/connection/connection.php');
    $currentLast = $_GET['currentLast'];
    $type = $_GET['type'];

    if($type == 'incr'){
        $page = $currentLast + 1;
    } else{
        $page = $currentLast - 1;
    }
    
    $currentLast = $page * 4; // 4

    $active = 1;
    $stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_status, posted_on FROM blogs WHERE blog_status = ? ORDER BY display_order asc limit ? , 4 ");
    $stmt->bind_param('ii', $active, $currentLast);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = 0;
    $str = '';

    while ($blog_data = $result->fetch_assoc()) {
        $count++;
        $time=strtotime($blog_data['posted_on']); 
        $str .= '<li>
            <a href="blog_detail.php?id='.$blog_data['id'].'">
            <span><img src="./images/blogs/'.$blog_data['blog_image'].'" /></span>
            <p>'.$blog_data['blog_heading'].'</p>
            <i>'.date("F",$time).', '.date("Y",$time).' by <strong>'.$blog_data['posted_by'].'</strong></i>
            </a>
        </li>';
    }
    $disabledValue = false;
    if($count <= 4){
       if($type == 'incr'){
            $disabledValue = 'next';
       } else {
            $disabledValue = 'prev';
       }
    }
    echo json_encode(array(
        'data' => $str,
        'currentCount' => $page,
        'disabledValue' => $disabledValue
    ));
    exit;

?>