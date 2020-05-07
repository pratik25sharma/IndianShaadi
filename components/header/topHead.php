
    <div class="top_head">
    <div id="example-1">
    <?php

        $active = 1;
        $stmt = $conn->prepare("SELECT  banner_header FROM banner WHERE `status` = ? ");
        $stmt->bind_param("i", $active);
        $stmt->execute();
        $result = $stmt->get_result();

        while($banner_data = $result->fetch_assoc()){
            echo '<span>'.$banner_data['banner_header'].'</span>';
        }
    ?>
    </div>
    </div>
