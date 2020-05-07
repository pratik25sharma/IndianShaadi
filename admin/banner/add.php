<?php
include_once('../header/allHeader.php');

if ($_POST) { // data for submission

    // prepare and bind
    $bannerText = $_POST['banner_text'];
    $status = $_POST['status'];

    if (empty($_POST['data_update'])) {
        // insert the data
        $stmt = $conn->prepare("INSERT INTO banner (banner_header, `status`) VALUES (?, ?)");
        $stmt->bind_param("si", $bannerText, $status);
    } else {
        // update the data
        $stmt = $conn->prepare("UPDATE banner SET banner_header = ? , `status` = ? WHERE id = ? LIMIT 1");
        $stmt->bind_param("sii", $bannerText, $status, $_POST['data_update']);
    }
    $stmt->execute();
}

if (!empty($_GET['id'])) {
    $dataId = $_GET['id'];

    $stmt = $conn->prepare("SELECT id, banner_header, `status` FROM banner WHERE  id = ?");
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
                        <strong>Add Banner</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Banner Data</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="banner_text" placeholder="Text" class="form-control" value="<?php echo (!empty($banner_data['id']) ? $banner_data['banner_header'] : '') ?>">
                                    <small class="form-text text-muted">This is a banner text</small>
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