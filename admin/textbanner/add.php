<?php
include_once('../header/allHeader.php');

if ($_POST) { // data for submission

    // prepare and bind
    $bannerText = $_POST['banner_text'];

    if(empty($_POST['data_update'])){
        $sql = 'INSERT INTO textbanner (title) VALUES ( ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $bannerText);
    } else {
        $updateId = 1;
        $sql = 'UPDATE textbanner set title = ? WHERE id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $bannerText, $updateId);
    }
    $stmt->execute();
}

if (!empty($_GET['id'])) {
    $dataId = 1;
    $stmt = $conn->prepare("SELECT id, title FROM textbanner WHERE  id = ?");
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
                        <strong>Text Banner</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Text Banner Data</p>
                                </div>
                            </div>
                                
                            <input type="hidden" name="data_update" value="<?php echo ($banner_data['id'] ?? 0) ?>" />
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="banner_text" placeholder="Text" class="form-control" value="<?php echo (!empty($banner_data['id']) ? $banner_data['title'] : '') ?>">
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