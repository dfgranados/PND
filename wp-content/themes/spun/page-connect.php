<?php
  
  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $missing_content = "Please fill in a message.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! I'll get back to you as soon as possible.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $text = $_POST['message_text'];
  $message = $name." said :".$text;

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  $to = "paulaipavlova@gmail.com";

if (isset($_POST['submit']))
{


      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
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

  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);


?>

<?php get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div id="respond">
					<?php 
						echo $response;
					?>
					<br />
					</div>
					<?php 
					require_once 'Mobile_Detect.php';
					$detect = new Mobile_Detect;
					

					if ( $detect->isMobile() ) {
					 echo "E-Mail me at paulaipavlova@gmail.com or follow me on Facebook or Instagram";
					 $response = " ";
					}

					else{
					include("connect-page.html");
					}
					?>

					<?php get_template_part( 'content', 'page' ); ?>
					
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>