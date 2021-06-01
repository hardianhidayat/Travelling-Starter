<div class="container-fluid">
    <a href="<?= base_url('admin/tguide') ?>">
        <button class="btn -btn-sm btn-primary mt-3 mb-3">
            <i class="fa fa-plus fa-sm"></i>
            Tambah Guide
        </button>
    </a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.HP</th>
                    <th>Rating</th>
                    <th>Gambar</th>
                    <!-- <th>Deskripsi</th> -->
                    <th colspan="2" class="text-center">AKSI</th>
                </tr>
                <?php foreach($guide as $tmp): ?>
                <tr  class="text-center">
                    <td><?= ++$start ?></td>
                    <td><?= $tmp['nama'] ?></td>
                    <td><?= $tmp['no_telp']?></td>
                    <td><?= $tmp['alamat'] ?></td>
                    <td><?= $tmp['rating'] ?></td>
                    <td><?= $tmp['gambar'] ?></td>
                    
                    <td>
                        <a href="<?= base_url('admin/editguide/') . $tmp['id'] ?>">
                        <div class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </div>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/hapusguide/') . $tmp['id'] ?>" class="hapusGuide">
                        <div class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </div>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
    <!-- <div class="modal fade" id="tambahdestinasi" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahlokasimodal">Add Destination</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            </div>
        </div>
    </div> -->
</div>