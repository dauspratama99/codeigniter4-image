<?= $this->extend('layout/blank') ?>

<?= $this->section('content') ?>
<!-- Page Heading -->


<div class="col-lg-12">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Image</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= site_url('save-image') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>

        </div>
    </div>

</div>


<?= $this->endSection() ?>