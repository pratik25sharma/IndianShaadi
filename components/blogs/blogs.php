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
            <button class="next arrow" type="button" id="prevBlog" disabled></button>
            <button class="prev arrow" type="button" id="nextBlog"></button>
            <input type="hidden" value="0" id="currentLastBlog"/>
        </span>
		<ul id="blogsData">
            <?php
                while ($blog_data = $result->fetch_assoc()) {
                    $time=strtotime($blog_data['posted_on']); 
                    echo '<li>
                        <a href="blog_detail.php?id='.$blog_data['id'].'">
                        <span><img src="./images/blogs/'.$blog_data['blog_image'].'" /></span>
                        <p>'.$blog_data['blog_heading'].'</p>
                        <i>'.date("F",$time).', '.date("Y",$time).' by <strong>'.$blog_data['posted_by'].'</strong></i>
                        </a>
                    </li>';
                }
            ?>
		</ul>
	</div>
</section>