<?= $this->extend('layout/blank') ?>

<?= $this->section('content') ?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Crud Gambar</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= site_url('add-image') ?>" class="btn btn-sm btn-success"> Tambah Gambar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10%">Nomor</th>
                        <th style="text-align:center">Foto</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no = 1;
                        foreach ($image as $d) { ?>
                            <tr>
                                <td><?php echo $no . '.'; ?></td>
                                <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/berkas/" . $d->foto; ?>"></td>
                            </tr>
                        <?php $no++;
                        } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>