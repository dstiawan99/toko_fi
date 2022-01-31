<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- begin slideshow -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('/assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button> -->
    </div>
    <!-- /begin slideshow-->

    <!-- Begin Card item -->
    <div class="row text-center mt-5">

        <?php foreach ($barang as $brg) : ?>
            <?php //echo $brg->nama_brg 
            ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/assets/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <a href="#" class="badge badge-success mb-3">Rp. <?php echo $brg->harga ?></a><br>
                    <a href="#" class="btn-sm btn-primary">Tambah Ke Keranjang</a>
                    <a href="#" class="btn-sm btn-success">Detail</a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <!-- /Begin Card item -->
</div>

<!-- /.container-fluid -->