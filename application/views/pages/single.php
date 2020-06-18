<div class="container">
    <div class="row">
            <div class="col-lg-10">
                <h3>Szczególy przejazdu</h3>
                <hr>
            </div>
            <div class="col-lg-2 back">
                <a href="<?php echo base_url() ?>find"><button type="button" class="btn btn-info">Powrót</button></a>
            </div>  
        </div>
    

    <h3 class="display-6 text-center"><?php echo $info['start']; ?>  <i class="fa fa-arrow-right" aria-hidden="true"></i> <?= $info['end']; ?></h3>

    <table class="table table-borderless text-center">
  <tbody>
    <tr>
      <th>Data</th>
      <td><?php echo $info['date'] ?></td>
    </tr>
    <tr>
      <th>Godzina</th>
      <td><?php echo $info['time'] ?></td>
    </tr>
    <tr>
      <th>Telefon</th>
      <td><?php echo $info['phone'] ?></td>
    </tr>
    <tr>
      <th>Uwagi</th>
      <td><?php echo $info['content'] ?></td>
    </tr>
  </tbody>
</table>
</div>
