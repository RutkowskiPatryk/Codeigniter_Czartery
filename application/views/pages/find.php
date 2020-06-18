<div class="container">
    <h3 class="display-6">Szukaj przejazdu</h3>

    <?php foreach($drives as $drive): ?>
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 text-center">
                <h5><?= $drive['start']; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?= $drive['end']; ?></h5>
                <p><?= $drive['date']; ?></p>
                <hr>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo base_url().'find/'.$drive['id'] ?>"><button type="button" class="btn btn-info">Info</button></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <?php
                    if(isset($this->session->userdata['logged_in']))
                    {
                       echo '<a href="'. base_url() . 'delete/'.$drive['id'] .'"><button type="button" class="btn btn-danger">Usuń</button></a>'; 
                    }
                ?>
                    </div>
                </div>
            </div>  
        </div>
    <?php endforeach; ?>
</div>