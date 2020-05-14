<?php
    $stmt = $conn->prepare("SELECT banner_image, banner_text FROM imagebanner WHERE `status` = 1");
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
                        <span class="head"><?= $imagebanner['banner_text'] ?></span>
                        <a href="javascript:void(0);">Join Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </li>
        <?php  }
        ?>
    </ul>
</div>