<?php 

require_once("config.php");

/* This file contains instructions for three different states of the form:
 *   - Displaying the initial contact form
 *   - Handling the form submission and sending the email
 *   - Displaying a thank you message
 */

// a request method of post indicates that
// we are receiving a form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // the form has fields for name, email, and message
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, and message.";
    }

    // this code checks for malicious code attempting
    // to inject values into the email header
    if (!isset($error_message)) {
        foreach( $_POST as $value ) {
            if( stripos($value,'Content-Type:') !== FALSE ) {
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    // the field named address is used as a spam honeypot
    // it is hidden from users, and it must be left blank
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)) {
        $error_message = "You must specify a valid email address.";
    }

    // if, after all the checks above, there is no message, then we
    // have a valid form submission; let's send the email
    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Message: " . $message;

        $mail->SetFrom($email, $name);
        $address = "robert.mews@gmail.com";
        $mail->AddAddress($address, "FreelanceWebsite");
        $mail->Subject    = "Freelance Website Form Submission | " . $name;
        $mail->MsgHTML($email_body); 

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            header("Location: " . BASE_URL . "?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }
    }
}

?>

	<!-- Modal Structure -->
  	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4 class="col s12 light-blue-text text-darken-2" id="modal_head">Let&#39;s Chat</h4>
			<div class="row">
				<?php // if status=thanks in the query string, display an thank you message instead of the form ?>
				<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
						<p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
				<?php } else { ?>
					<?php if (!isset($error_message)) {
							echo '';
							} else {
								echo '<p class="message">' . $error_message . '</p>';
							} ?>
				<form class="col s12" method="post" action="<?php echo BASE_URL; ?>">
					<div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-account-circle light-blue-text text-darken-2 prefix"></i>
							<label for="icon_prefix">Name</label>
							<input id="icon_prefix" class="validate" type="text" name="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
						</div>
						<div class="input-field col s12">
							<i class="mdi-communication-email light-blue-text text-darken-2 prefix"></i>
							<label for="email">Email</label>
							<input id="email" class="validate" type="email" name="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
						</div>
						<div class="input-field col s12">
							<i class="mdi-editor-mode-edit light-blue-text text-darken-2 prefix"></i>
							<label for="icon_prefix2">Message</label>
							<textarea id="icon_prefix2" class="validate materialize-textarea" name="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
						</div>
					</div>
						<div style="display: none;">
							<?php // the field named address is used as a spam honeypot ?>
							<?php // it is hidden from users, and it must be left blank ?>
							<i class="mdi-editor-mode-edit light-blue-text text-darken-2 prefix"></i>
							<label for="address">Address</label>
							<input type="text" name="address" id="address"><p>Humans: please leave this field blank.</p>
						</div>
					<div class="modal-footer"> 
						<button class="btn waves-effect waves-light light-blue darken-2" type="submit" name="action" value="Send">Submit<i class="mdi-content-send right"></i></a></button>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
  	</div>



            