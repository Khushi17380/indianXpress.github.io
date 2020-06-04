<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
<h1>Forgot Password?</h1>
  <?php if(!empty($success_message)) { ?>
  <div class="success_message"><?php echo $success_message; ?></div>
  <?php } ?>

  <div id="validation-message">
    <?php if(!empty($error_message)) { ?>
  <?php echo $error_message; ?>
  <?php } ?>
  </div>

  <div class="field-group">
    <div><label for="username">Username</label></div>
    <div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> Or</div>
  </div>
  
  <div class="field-group">
    <div><label for="email">Email</label></div>
    <div><input type="text" name="user-email" id="user-email" class="input-field"></div>
  </div>
  
  <div class="field-group">
    <div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
  </div>  
</form>
<?php
  if(!empty($_POST["forgot-password"])){
    $conn = mysqli_connect("localhost", "root", "", "mashlog_demo");
    
    $condition = "";
    if(!empty($_POST["user-login-name"])) 
      $condition = "username = '" . $_POST["user-login-name"] . "'";
    if(!empty($_POST["user-email"])) {
      if(!empty($condition)) {
        $condition = " and ";
      }
      $condition = " Email = '" . $_POST["user-email"] . "'";
    }
    
    if(!empty($condition)) {
      $condition = " where " . $condition;
    }

    $sql = "SELECT * from user_login " . $condition;
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result);
    
    if(!empty($user)) {
      require_once("try2.php");
    } else {
      $error_message = 'No User Found';
    }
  }
?>