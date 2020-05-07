<?php

    $active = 1;
    $stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_status, posted_on FROM blogs WHERE blog_status = ? ORDER BY display_order asc limit 4");
    $stmt->bind_param('i', $active);
    $stmt->execute();
    $result = $stmt->get_result();

?>

<section class="blogs">
	<div class="wrapper">
		<ul>
            <?php
                while ($blog_data = $result->fetch_assoc()) {
                    echo '<li>
                        <img src="./images/blogs/'.$blog_data['blog_image'].'" />
                        <p>'.$blog_data['blog_heading'].'</p>
                        <span>'.$blog_data['posted_on'].' by <strong>'.$blog_data['posted_by'].'</strong></span>
                    </li>';
                }
            ?>
		</ul>
	</div>
</section>