<div class="container add">
<h3 class="display-6">Dodaj nowy przejazd</h3>

<div class="form_error">
<?php echo validation_errors(); ?>
</div>

<?php 
if(isset($add)) 
{
    echo '<div class="alert alert-success" role="alert">';
    echo 'Twój przejazd został dodany';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>';
    echo '</div>';
}
?>


<?php echo form_open('form') ?>
  <div class="form-group">
    <label >Wyjazd</label>
    <input type="text" class="form-control" placeholder="Podaj misto wyjazdu" name="start">
  </div>
  <div class="form-group">
    <label >Cel</label>
    <input type="text" class="form-control" placeholder="Podaj misto docelowe" name="end">
  </div>
  <div class="form-group">
    <label >Data</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group">
    <label >Godzina</label>
    <input type="time" class="form-control" name="time">
  </div>
  <div class="form-group">
    <label >Kontakt</label>
    <input type="text" class="form-control" placeholder="Podaj numer telefonu" name="phone">
  </div>
  <div class="form-group">
    <label>Uwagi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="add">Dodaj</button>
</form>
</div>