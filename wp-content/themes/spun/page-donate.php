<?php
  //response generation function
  $response = "";

  //gets stickers selected
 $sticker = $_POST['sticker'];
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;

    //adds commas to the stickers array 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div> ";

  }



  //response messages
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thank you, your message has been sent";
 
//user posted variables
$their_stickers = implode(", ", $sticker);
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$address = $_POST['message_address'];
$message = $name."  (".$email."),  wants: ".$their_stickers."  sent to: ".$address;

 
//php mailer variables
$to = get_option('admin_email');
$subject = "Sticker Donation! ".get_bloginfo('name');
$headers = 'From: '. $email . "rn" .
  'Reply-To: ' . $email . "rn";
  $to = "dfgranadosreyes@gmail.com";

 
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  my_contact_form_generate_response("error", $email_invalid);
else //email is valid
{
	if(empty($name) || empty($message)){
  			my_contact_form_generate_response("error", $missing_content);
		}
	else //ready to go!
		{
			  $sent = wp_mail($to, $subject, strip_tags($message), $headers);
			if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
			else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
		}
	}
 if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);


?>

<?php
/**
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php 
					require_once 'Mobile_Detect.php';
					$detect = new Mobile_Detect;
					
					if ( $detect->isMobile() ) {
					 include("donation-page-mobile.html");
					}

					else{
					include("donation-page.html");
					}
					?>
					<div id="respond">
					<?php 
						echo $response;

						  // $sticker = $_POST['sticker'];
						  if(empty($sticker)) 
						 {
							//     echo("You didn't select any stickers.");
						  } 
						  else
						{
							   /* $N = count($sticker);
							 
							    echo("You selected $N sticker(s): ");
							    $their_stickers = implode(", ", $sticker);
							echo $their_stickers;*/
						    
						  }
					?>
					</div>

					<?php get_template_part( 'content', 'page' ); ?>
					
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>