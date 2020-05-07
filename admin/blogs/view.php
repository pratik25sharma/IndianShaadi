<?php
    include_once('../header/allHeader.php');
    // get banner data
    $active = 1;
    $stmt = $conn->prepare("SELECT id, blog_image, posted_by, blog_heading, blog_status, posted_on, display_order FROM blogs ORDER BY display_order asc");
    $stmt->execute();
    $result = $stmt->get_result();
?>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Blog Data</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Blog Image</th>
                                <th scope="col">Blog Heading</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Display Order</th>
                                <th scope="col">Blog Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($blog_data = $result->fetch_assoc()) {
                                    echo '<tr>
                                            <th scope="row"><a href="add.php?id=' . $blog_data['id'] . '">' . $blog_data['id'] . '</a></th>
                                            <td><img src="../../images/blogs/'.$blog_data['blog_image'].'" height="75px" width="50px"/></td>
                                            <td>' . $blog_data['blog_heading'] . '</td>
                                            <td>' . $blog_data['posted_by'] . '</td>
                                            <td>' . $blog_data['display_order'] . '</td>
                                            <td>' . (!$blog_data['blog_status'] ? 'Pending' : 'Approved') . '</td>
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