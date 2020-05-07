<?php
include_once('../header/allHeader.php');

if ($_POST) { // data for submission

    // prepare and bind
    $blog_status = $_POST['blog_status'];
    $display_order = $_POST['display_order'];

    if (!empty($_POST['data_update'])) {
        // update the data
        $stmt = $conn->prepare("UPDATE blogs SET blog_status = ?, display_order = ? WHERE id = ? LIMIT 1 ");
        $stmt->bind_param("iii", $blog_status, $display_order, $_POST['data_update']);
    }
    $stmt->execute();
    
}

if (!empty($_GET['id'])) {
    $dataId = $_GET['id'];
    $stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_status, blog_text, posted_on, display_order FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $dataId);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog_data = $result->fetch_assoc();
}
?>

<!-- Add Banner starts here -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add Blogs</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="add.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Blog Data</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Heading</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="blog_header" placeholder="Text" class="form-control" value="<?= (!empty($blog_data['id']) ? $blog_data['blog_heading'] : '') ?>" disabled>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Blog Data</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control" disabled>
                                        <?= $blog_data['blog_text']; ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Display Order</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="display_order" placeholder="Text" class="form-control" value="<?= $blog_data['display_order'];  ?>" >
                                </div>
                            </div>

                            <input type="hidden" name="data_update" value="<?= ($blog_data['id'] ?? 0) ?>" />

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Blog Status</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="blog_status" value="1" <?php echo (!empty($blog_data) && $blog_data['blog_status'] == 1 ? 'checked' : '') ?> class="form-check-input">Approved
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio2" class="form-check-label ">
                                                <input type="radio" id="radio2" name="blog_status" value="0" <?php echo (!empty($blog_data) && $blog_data['blog_status'] == 0 ? 'checked' : '') ?> class="form-check-input">Pending
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