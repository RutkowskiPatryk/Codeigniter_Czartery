<?php
  if(isset($this->session->userdata['logged_in']))
  {
      redirect('pages/panel');
  }
?>
<div class="container">
<h3 class="display-6">Logowanie administratora</h3>

<?php
   if(isset($error))
   {
      echo '<div class="alert alert-danger" role="alert">';
      echo $error;
      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
   }
?>

<div class="form_error">
<?php echo validation_errors(); ?>
</div>


<?php echo form_open('login/loginAdmin') ?>
  <div class="form-group">
    <label >Login</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label >Hasło</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="add">Zaloguj</button>
</form>
</div>