<title>Request Estimate | Performance Heating</title>   
  
<?php include_once('header.php') ?>  
</head>       
<?php    
    $url = explode("/", $_SERVER['REQUEST_URI']);  
?>
<?php
 
 define('MAIL_TO','Sales@performancehcs.com , dan@performancehcs.com');
 //define('MAIL_TO','fizhar@cinnova.com');
 $errors = array();
 
 $name = '';
 $lname = '';
 $email = '';
 $subject = '';
 $tel = '';
 $address = '';
 $city = '';
 $message = '';
 
 
 
 /**
 * validate form data 
 * @return boolean return true if no error found, otherwise return false
 */
 function validate_form(){
 
 global $errors, $name, $lname, $email, $subject, $address, $city, $tel, $message;
 
 $address = $_POST['address'];
 $city = $_POST['city'];
 
 $subject = 'Resquest Estimate';
 // validate name
 if($_POST['name'] != ''){
 $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
 if($name == ''){
 $errors[] = 'Name is not valid';
 }
 }else{
 $errors[] = 'Name is required';
 }
 
 
  // validate address
 if($_POST['address'] != ''){
 $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
 if($address == ''){
 $errors[] = 'Address is not valid';
 }
 }else{
 $errors[] = 'Address is required';
 }
 
  // validate City
 if($_POST['city'] != ''){
 $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
 if($city == ''){
 $errors[] = 'city is not valid';
 }
 }else{
 $errors[] = 'city is required';
 }
 
//validate phone
  if($_POST['tel'] != ''){
 $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
     
 //if(!filter_var($tel,FILTER_VALIDATE_PHONE)){
 if($tel == ''){
 $errors[] = 'tel is not valid';
 }
 }else{
 $errors[] = 'tel is required';
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
 if($_POST['l-name'] != ''){
 $lname = filter_var($_POST['l-name'],FILTER_SANITIZE_STRING);
 if($lname == ''){
 $errors[] = 'Last name is not valid';
 }
 }else{
 $errors[] = 'Last name is required';
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
 global $errors, $name, $email, $subject, $address, $city, $tel, $message;
 
 $mail_msg = '';
 // if user submitted the form
 if(isset($_POST['submit']))
 {
 // validate form
 if(validate_form())
 {
 $mail_msg .= 'From: ' . $name . "\n";
 $mail_msg .= 'Last Name: ' . $lname . "\n";
 $mail_msg .= 'Email: ' . $email . "\n";
 $mail_msg .= 'Address: ' . $address . "\n";
 $mail_msg .= 'City: ' . $city . "\n";
 $mail_msg .= 'Phone: ' . $tel . "\n";
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
            <h1>Request Estimate</h1>
            <p><strong>If after normal business hours, emails wont be answered until the next business day, if you need emergency service please call 740.929.4328</strong></p>
              <form action="<?php echo $base_url;  ?>/request-estimate.php" method="POST" class="form-horizontal">
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
                    placeholder="First Name"/>
                 </div>
             </div>
             
             <div class="control-group">
                <label for="l-name" class="control-label">&nbsp;</label> 
                 <div class="controls">
                 <input type="text"  
                    name="l-name" 
                    id="l-name"
                    value="<?php display_value('l-name')?>" 
                    class="input-xlarge form-control" required 
                    placeholder="Last Name"/>
                 </div>
             </div>
              <div class="control-group">
             <label for="tel" class="control-label">&nbsp;</label>
             <div class="controls">
             <input type="tel" required
                    name="tel"
                    id="tel" 
                    value="<?php display_value('tel')?>" 
                    class="input-xlarge form-control" 
                    placeholder="telephone" />
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
             
             <!--<div class="control-group">
             <label for="subject" class="control-label">Subject:</label>
             <div class="controls">
             <input type="text" required
                    name="subject"
                    id="subject" 
                    value="<?php display_value('subject')?>" 
                    class="input-xlarge form-control" 
                    placeholder="Subject" />
             </div> 
             </div>-->
             
             
             
             <div class="control-group">
             <label for="address" class="control-label">&nbsp;</label>
             <div class="controls">
             <input type="text" required
                    name="address"
                    id="address" 
                    value="<?php display_value('address')?>" 
                    class="input-xlarge form-control" 
                    placeholder="Address" />
             </div> 
             </div>
             <div class="control-group">
             <label for="city" class="control-label">&nbsp;</label>
             <div class="controls">
             <input type="text" required
                    name="city"
                    id="city" 
                    value="<?php display_value('city')?>" 
                    class="input-xlarge form-control" 
                    placeholder="city" />
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
              </div>
             </div>
            
             </form>
        </div>        
      </div>              
      </div>        
</div><!-- new div end -->        
</div><!-- new div end -->        
      <?php include_once('footer.php'); ?>       
   