<?php

if(!isset($this->session->userdata['logged_in']))
{
    redirect('/login');
}
?>

<div class="container">
    <h3 class="display-6">Zostałeś zalogowany jako administrator</h3>
    <p>Możesz dodawać nowe przejazdy jak każdy użytkownik i możesz również usuwać każde ogłoszenie przejazdu.</p>
    <a href="<?= base_url() ?>find"><button type="button" class="btn btn-primary">Zarządzaj</button></a>