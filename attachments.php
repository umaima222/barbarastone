<!-- header starts here -->
<?php session_start(); ?>
<?php include 'inc/app.php' ?>
<link rel="stylesheet" href="css/upload-dll.css">
<link rel="stylesheet" href="css/testimonial.css">
<?php
error_reporting(0);

$dir = "uploads/";

$files = [];

if (!is_dir_empty($dir)) {
    $files = scandir($dir);
    $files = array_diff(scandir($dir), array('.', '..'));
}

function is_dir_empty($dir)
{
    if (!is_readable($dir)) return null;
    return (count(scandir($dir)) == 2);
}
?>
<section class="attachment-sec">
    <div class="donation-heading">
        <h1>Upload Files</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="uploaded-files">
                    <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                    <?php } ?>
                    <form action="./upload.php" method="POST"
                          enctype="multipart/form-data">
                        <input type="file" name="file"/>
                        <button class="detail-btn" type="submit" name="submit">Submit</button>
                    </form>
                    <!-- Table starts here -->
                    <table id="table" class="table table-hover table-mc-light-blue">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th class="text-right">Link</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (count($files) > 0) { ?>
                            <?php foreach ($files as $key => $file) { ?>
                                <tr>
                                    <td data-title="ID" class="first"><?php echo $key-1; ?></td>
                                    <td data-title="Name"><?php echo $file; ?></td>
                                    <td data-title="Link" class="text-right">
                                        <a href="<?php echo 'uploads/'.$file; ?>" target="_blank">Link</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td>No documents found!</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>
<?php session_destroy(); ?>
<!-- footer ends here -->