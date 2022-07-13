<!-- header starts here -->
<?php include 'inc/app.php' ?>
<link rel="stylesheet" href="css/upload-dll.css">
<link rel="stylesheet" href="css/testimonial.css">

<section>
    <div class="donation-heading">
        <h1>Upload Files</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="uploaded-files">
                    <form action="" method="">
                        <input type="file">
                        <button class="detail-btn">Submit</button>
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
                        <tr>
                            <td data-title="ID" class="first">1</td>
                            <td data-title="Name">File Name</td>
                            <td data-title="Link" class="text-right">
                                <a href="javascript:void(0);" target="_blank">Link</a></td>
                        </tr>
                        <tr>
                            <td data-title="ID">2</td>
                            <td data-title="Name">File Name 2</td>
                            <td data-title="Link" class="text-right">
                                <a href="javascript:void(0);" target="_blank">Link</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php' ?>
<!-- footer ends here -->