<?php include 'inc/app.php'; ?>

<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["submit"])) {

    $error = '';
    $successMsg = '';
    $name = $_POST["first_name"] . ' ' . $_POST['last_name'];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $case_number = $_POST["case_number"];
    $county = $_POST["county"];
    $state = $_POST["state"];
    $judges_involved = $_POST["judges_involved"];
    $message = $_POST["message"];
    $recaptcha = $_POST['g-recaptcha-response'];
    $secret_key = '6LeiwBEhAAAAABX3lzu3_PU0ILpZh8D8HSyeQbvi';
    $subject = "Registration Query";
    $toEmail = "barbara@peoplesrightsforum.com";
    try {

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
            . $secret_key . '&response=' . $recaptcha;
        $response = file_get_contents($url);
        $response = json_decode($response);

        if ($response->success == true) {
            $mail = new PHPMailer(true);
//        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Host = 'mail.peoplesrightsforum.com';
            $mail->SMTPAuth = true;
            $mail->Username   = 'barbara@peoplesrightsforum.com';
            $mail->Password   = 'Justice2024';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//        $mail->SMTPSecure = "ssl";
            $mail->Port = 26;
            $mail->SMTPSecure = false;

            $mail->setFrom("admin@peoplesrightsforum.com");
            $mail->addAddress($toEmail, 'Peoples Rights Forum');
            $mail->isHTML(true);
            $mail->Subject = $subject;

            $body = 'Hi Barbara,<br><br>';
            $body .= $name . ' has contacted via the registration form on Peoples rights forum. Please check the form details below:<br><br>';
            $body .= 'Name: ' . $name . '<br>';
            $body .= 'Email: ' . $email . '<br>';
            $body .= 'Contact Number: ' . $contact_number . '<br>';
            $body .= 'Case Number: ' . $case_number . '<br>';
            $body .= 'County: ' . $county . '<br>';
            $body .= 'State: ' . $state . '<br>';
            $body .= 'Names of Judges involved: ' . $judges_involved . '<br>';
            $body .= 'Comments: ' . $message . '<br><br>';
            $body .= 'Best Regards,<br>';
            $body .= 'Peoples Rights Forum';

            $mail->Body = $body;

            $mail->send();
            $successMsg = 'Your query has been submitted successfully.';
        } else {
            $error = 'Error in Google Recaptcha!';
        }

    } catch (Exception $e) {
        $error = "Error: {$mail->ErrorInfo}";
    }
}

?>
    <!-- css file starts here -->
    <link rel="stylesheet" href="css/sign-in.css">
    <!-- css file ends here -->
    <!-- sign up as a user section starts here -->
    <section class="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="sign-up-box-wrapper">

                        <div class="sign-up-heading-wrapper">
                            <h4>Registration Form</h4>
                            <!--                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>-->
                            <?php if (isset($successMsg) && !empty($successMsg)) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $successMsg ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($error) && !empty($error)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $error ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="sign-up-form-wrapper">
                            <form action="registration-form.php" method="POST" id="registration_form">
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="32" name="first_name"
                                           placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="32" name="last_name"
                                           placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" maxlength="100" name="email"
                                           placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" maxlength="20" name="contact_number"
                                           placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="20" name="case_number"
                                           placeholder="Case Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="11" name="county"
                                           placeholder="County" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="11" name="state"
                                           placeholder="State" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" maxlength="255" name="judges_involved"
                                           placeholder="Names of Judges involved" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="5000"
                                              name="message" rows="3" placeholder="Any Comments"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha"
                                         data-sitekey="6LeiwBEhAAAAAPnAAi4U6daQyc9ZLXRSnOpKOvVt">
                                    </div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                                <!--                                <div class="form-group">-->
                                <!--                                    <select id="myselect">-->
                                <!--                                        <option>Select Option</option>-->
                                <!--                                        <option value="Model 1">Guardianship</option>-->
                                <!--                                        <option value="Model 2">Family Court</option>-->
                                <!--                                    </select>-->
                                <!--                                </div>-->
                                <div class="form-group">
                                    <button class="form-control btn" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- sign up as a user section ends here -->
    <script type="text/javascript">
        document.getElementById("registration_form").addEventListener("submit", function (event) {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Please verify captcha.</span>';
                event.preventDefault();
                return false;
            } else {
                document.getElementById('g-recaptcha-error').innerHTML = '';
                return true;
            }
        });
    </script>
<?php include 'inc/footer.php'; ?>