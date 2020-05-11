<?php
    include_once('../header/allHeader.php');
    // get banner data
    $active = 1;
    $stmt = $conn->prepare("SELECT id, banner_image, `status` FROM imagebanner ORDER BY id desc");
    $stmt->execute();
    $result = $stmt->get_result();
?>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Banner Image Data</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Banner Image</th>
                                <th scope="col">Image Banner Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($blog_data = $result->fetch_assoc()) {
                                    echo '<tr>
                                            <th scope="row">' . $blog_data['id'] . '</th>
                                            <td><img src="../images/imagebanner/'.$blog_data['banner_image'].'" height="75px" width="50px"/></td>
                                            <td>' . (!$blog_data['status'] ? 'Pending' : 'Approved') . '</td>
                                            <td>
                                                <a href="add.php?id=' . $blog_data['id'] . '"><button type="button" class="btn btn-primary">Update</button></a>
                                                <a href="delete.php?id=' . $blog_data['id'] . '"><button type="button" class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- .content -->
<?php include_once('../footer/footer.php'); ?>