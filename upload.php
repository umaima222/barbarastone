<?php
session_start();

$dir = "uploads/";
if (isset($_POST['submit'])) {
    if (isset($_FILES["file"]["name"]) && empty($_FILES["file"]["name"])) {
        $_SESSION['error'] = "Please select a file to upload.";
//        header('Location: attachments.php');
    } else {
        if (isset($_FILES['file'])) {
            if ($_FILES['file']['type'] == "application/pdf") {
                $source_file = $_FILES['file']['tmp_name'];
                $dest_file = $dir . str_replace(' ', '-', strtolower($_FILES['file']['name']));
                if (file_exists($dest_file)) {
                    $_SESSION['error'] = "The file name already exists.";
//                    header('Location: attachments.php');
//                    exit();
                } else {
                    move_uploaded_file($source_file, $dest_file)
                    or die ("Error!!");
                    if ($_FILES['file']['error'] == 0) {
                        $_SESSION['success'] = "File has been uploaded successfully.";
//                    print "<b><u>Details : </u></b><br/>";
//                    print "File Name : " . $_FILES['file']['name'] . "<br.>" . "<br/>";
//                    print "File Size : " . $_FILES['file']['size'] . " bytes" . "<br/>";
//                    print "File location : upload/" . $_FILES['file']['name'] . "<br/>";\
//                        header('Location: attachments.php');
//                        exit();
                    }
                }
            } else {
                if ($_FILES['file']['type'] != "application/pdf") {
                    $_SESSION['error']  = "Error occurred while uploading file : " . $_FILES['file']['name'] . "<br/>";
                    $_SESSION['error'] .= "Invalid  file extension, should be pdf !!" . "<br/>";
//                $error .= "Error Code : " . $_FILES['file']['error'] . "<br/>";
//                    exit();
                }
            }
        }
    }
    header('Location:attachments.php');
}

?>
