<?php
    include_once('../header/allHeader.php');
    // get banner data
    $active = 1;
    $stmt = $conn->prepare("SELECT id, banner_header, `status` FROM banner ");
    $stmt->execute();
    $result = $stmt->get_result();
?>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Banner Data</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Banner</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($banner_data = $result->fetch_assoc()) {
                                echo '<tr>
                                        <th scope="row">' . $banner_data['id'] . '</th>
                                        <td>' . $banner_data['banner_header'] . '</td>
                                        <td>' . ($banner_data['status'] ? 'Active' : 'Deleted') . '</td>
                                        <td>
                                            <a href="add.php?id=' . $banner_data['id'] . '"><button type="button" class="btn btn-primary">Update</button></a>
                                            <a href="delete.php?id=' . $banner_data['id'] . '"><button type="button" class="btn btn-danger">Delete</button></a>
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