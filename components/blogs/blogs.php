<?php

    $active = 1;
    $stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_status, posted_on FROM blogs WHERE blog_status = ? ORDER BY display_order asc limit 4");
    $stmt->bind_param('i', $active);
    $stmt->execute();
    $result = $stmt->get_result();

?>

<section class="blogs">
	<div class="wrapper">
        <span class="bttns">
            <button class="next arrow" type="button"></button>
            <button class="prev arrow" type="button"></button>
        </span>
		<ul>
            <?php
                while ($blog_data = $result->fetch_assoc()) {
                    echo '<li>
                        <span><img src="./images/blogs/'.$blog_data['blog_image'].'" /></span>
                        <p>'.$blog_data['blog_heading'].'</p>
                        <i>'.$blog_data['posted_on'].' by <strong>'.$blog_data['posted_by'].'</strong></i>
                    </li>';
                }
            ?>
		</ul>
	</div>
</section>