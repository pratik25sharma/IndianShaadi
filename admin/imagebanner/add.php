<?php
include_once('../header/allHeader.php');

if ($_POST) { // data for submission

    // prepare and bind
    $bannerFile = $_FILES['banner_file'];
    $status = $_POST['status'];

    if(empty($_POST['data_update'])){
        // insert section
        // get file extension
        $extension = explode('.', $_FILES['banner_file']['name']);
        $extension = array_pop($extension);
        $uploadDir = '../images/imagebanner/';
        $fileName = time().'.'.$extension;
        $uploadFile = $uploadDir.$fileName;
        move_uploaded_file($_FILES['banner_file']["tmp_name"], $uploadFile);

        $sql = 'INSERT INTO imagebanner (banner_image, `status`) VALUES ( ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $fileName, $status);
    } else {

        //update section
        if(!empty($_POST['image_exist']) && empty($_FILES['banner_file']["tmp_name"])){
            
            $sql = 'UPDATE imagebanner set `status` = ? WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $status, $_POST['data_update']);

        } else if(!empty($_POST['image_exist']) && !empty($_FILES['banner_file']["tmp_name"])){

            // get file extension
            $extension = explode('.', $_FILES['banner_file']['name']);
            $extension = array_pop($extension);
            $uploadDir = '../images/imagebanner/';
            $fileName = time().'.'.$extension;
            $uploadFile = $uploadDir.$fileName;
            move_uploaded_file($_FILES['banner_file']["tmp_name"], $uploadFile);

            $sql = 'UPDATE imagebanner set `status` = ?, banner_image = ? WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isi", $status, $fileName, $_POST['data_update']);
        }   
    }
    $stmt->execute();
}

if (!empty($_GET['id'])) {
    $dataId = $_GET['id'];

    $stmt = $conn->prepare("SELECT id, banner_image, `status` FROM imagebanner WHERE  id = ?");
    $stmt->bind_param("i", $dataId);
    $stmt->execute();
    $result = $stmt->get_result();
    $banner_data = $result->fetch_assoc();
}
?>

<!-- Add Banner starts here -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add Image Banner</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Image Banner Data</p>
                                </div>
                            </div>
                            <?php if(!empty($banner_data['banner_image'])) {?>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Old Image</label></div>
                                    <div class="col-12 col-md-9">
                                        <img src="../images/imagebanner/<?= $banner_data['banner_image'] ?>" height="200px"/>
                                    </div>
                                </div>
                                <input type="hidden" value="1" name="image_exist" />
                            <?php }?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><?= !empty($_GET['id'] )? 'Change Image' : 'Upload Image'?></label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="text-input" name="banner_file" >
                                </div>
                            </div>
                                
                            <input type="hidden" name="data_update" value="<?php echo ($banner_data['id'] ?? 0) ?>" />

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="1" <?php echo (!empty($banner_data) && $banner_data['status'] == 1 ? 'checked' : '') ?> class="form-check-input">Active
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio2" class="form-check-label ">
                                                <input type="radio" id="radio2" name="status" value="0" <?php echo (!empty($banner_data) && $banner_data['status'] == 0 ? 'checked' : '') ?> class="form-check-input">Deactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../footer/footer.php'); ?>