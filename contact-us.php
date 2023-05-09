<title>Contact us | Performance Heating</title>   
<?php include_once('header.php') ?>  
</head>       
<?php    
    $url = explode("/", $_SERVER['REQUEST_URI']);  
?>
<?php
 
 define('MAIL_TO','info@performancehcs.com , dan@performancehcs.com');
 //define('MAIL_TO','fizhar@cinnova.com');
 $errors = array();
 
 $name = '';
 $email = '';
 $subject = '';
 $message = '';
 
 /**
 * validate form data 
 * @return boolean return true if no error found, otherwise return false
 */
 function validate_form(){
 
 global $errors, $name, $email, $subject, $message;
 
 // validate name
 if($_POST['name'] != ''){
 $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
 if($name == ''){
 $errors[] = 'Name is not valid';
 }
 }else{
 $errors[] = 'Name is required';
 }
 
 // validate email
 if($_POST['email'] != ''){
 $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
 
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 $errors[] = 'Email is not valid';
 }
 }else{
 $errors[] = 'Email is required';
 }
 
 // validate subject
 if($_POST['subject'] != ''){
 $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
 if($subject == ''){
 $errors[] = 'Subject is not valid';
 }
 }else{
 $errors[] = 'Subject is required';
 }
 
 // validate message
 if($_POST['message'] != ''){
 $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
 if($message == ''){
 $errors[] = 'Message is not valid';
 }     
 }else{
 $errors[] = 'Message is required';
 }  
 //validat message
     if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['message'])){
     // prevent form from saving code goes here
     $errors[] = 'Please remove URLs';
     /*echo "<script>alert('Please remove URLs');</script>";   */ 
    }
    
 
 if(count($errors)){
 return false;
 }else{
 return true;
 }
 }
 
 /**
 * display field value
 * @param string $fieldName
 */
 function display_value($fieldName){
 echo isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
 }
 
 /**
 * display message to users
 * @param array $errors array of errors
 */
 function display_message($errors){
 if(!isset($_POST['submit'])){
 return;
 }
 // 
 if(count($errors) === 0){
 ?>
 <div class="alert alert-success">
 <p>Thank you! your message has been sent.</p>
 </div> 
 <?php 
 }else{
 ?>
 <div class="alert alert-block alert-error fade in">
 <p>The following error(s) occurred:</p>
 <ul>
 <?php 
 foreach ($errors as $error) {
 echo "<li>$error</li>";
 }
 ?>
 </ul>
 </div>
 <?php
 } 
 }
 
 /**
 * start form processing
 */
 function start_form(){
 global $errors, $name, $email, $subject, $message;
 
 $mail_msg = '';
 // if user submitted the form
 if(isset($_POST['submit']))
 {
 // validate form
 if(validate_form())
 {
 $mail_msg .= 'From: ' . $name . "\n";
 $mail_msg .= 'Email: ' . $email . "\n";;
 $mail_msg .= 'Message: ' . $message . "\n";
 
 // send email to the MAIL_TO email address
 if(!@mail(MAIL_TO, $subject, $mail_msg)){
 $errors[] = 'Error sending email';
 }
 }
 } 
 }
 if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $recaptcha_secret = "6LfxLtoZAAAAACjJqGke286se5nNIKtF3cf_JHu4";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($response, true);
     if($response["success"] === true)
    {
         start_form();
           $errors[] = "Thank you";
       
 
          
        $errors = array();
         $name = '';  
         $email  = '';
         $subject =  'Contact To Riverway';
         $phone =  '';
         $state =  '';
         $address =  '';
         $message = '';           
 
    }  else{
        $errors[] = "You are a robot";
    }
}   
 // start form processing
 start_form();
 
?> 

<body class="internal page page-id-9 page-template page-template-home-php">     
<div id="mainWrapper" style=" background-color:white;">  
  <div id="outerWrapper">   
    <div id="wrapper" class="container" style="background-color:white;">
       <div class="container content-main" style="border-bottom-right-radius: 10px !important; border-bottom-left-radius: 10px !important; margin-bottom: 20px;">
       <div class="row">
        <div class="col-sm-8 col-xs-12 content-area">               
            <h1>Contact Us</h1>
			<p><strong>If after normal business hours, emails wont be answered until the next business day, if you need emergency service please call 740.929.4328</strong></p>
			<br>
		     <form action="<?php echo $base_url;  ?>/contact-us.php" method="POST" class="form-horizontal">
               <?php
             display_message($errors);
             ?>
             <div class="control-group">
             <label for="name" class="control-label">&nbsp;</label> 
             <div class="controls">
             <input type="text"  
                name="name" 
                id="name"
                value="<?php display_value('name')?>" 
                class="input-xlarge form-control" required 
                placeholder="Name"/>
             </div>
             </div>
             
             <div class="control-group">
             <label for="email" class="control-label">&nbsp;</label>
             <div class="controls">
             <input type="email" required
                name="email"
                id="email" 
                value="<?php display_value('email')?>"
                class="input-xlarge form-control" 
                placeholder="Email"/>
             </div> 
             </div>
             
             <div class="control-group">
             <label for="subject" class="control-label">&nbsp;</label>
             <div class="controls">
             <input type="text" required
                    name="subject"
                    id="subject" 
                    value="<?php display_value('subject')?>" 
                    class="input-xlarge form-control" 
                    placeholder="Subject" />
             </div> 
             </div>
             
             
             
             <div class="control-group">
             <label for="message" class="control-label">&nbsp;</label>
             <div class="controls">
             <textarea rows="7" 
                       cols="25" 
                       name="message" 
                       id="message"
                       class="input-xlarge form-control"><?php display_value('message')?></textarea>
             </div>
             </div>

              <div class="control-group">
                     <label for="captcha" class="control-label">&nbsp;</label>
                         <div class="controls">
                                  <div class="g-recaptcha" data-sitekey="6LfxLtoZAAAAACdiaqT3TIEnTW5WdMo4oEqiP3ug"></div>
                         </div>
                 </div>  
                 <br>
             
             <div class="control-group"> 
             <div class="controls" style="margin-top: 10px;">
             <input type="submit" name="submit" value="Send" class="btn btn-primary"> 
             <!--<input type="reset" name="reset" value="Reset" class="btn  btn-primary" >-->
             </div>
             </div>
            
             </form>
        </div>        
      </div>              
      </div>        
</div><!-- new div end -->        
</div><!-- new div end -->        
      <?php include_once('footer.php'); ?>       
   