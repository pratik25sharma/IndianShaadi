<?php
    $stmt = $conn->prepare("SELECT title FROM textbanner WHERE id = 1");
    $stmt->execute();
    $textResult = $stmt->get_result();
    $textbanner = $textResult->fetch_assoc();

    $stmt = $conn->prepare("SELECT banner_image FROM imagebanner WHERE `status` = 1");
    $stmt->execute();
    $imageResult = $stmt->get_result();

?>
<div class="banner">
    <ul class="fade slider">
        <?php 
            while($imagebanner = $imageResult->fetch_assoc()){ ?>
                <li>
                    <img src="./admin/images/imagebanner/<?= $imagebanner['banner_image']?>" alt="Home banner">
                    <div class="banner_head">
                        <span class="head"><?= $textbanner['title'] ?></span>
                        <a href="javascript:void(0);">Join Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
        <?php  }
        ?>
    </ul>
</div>