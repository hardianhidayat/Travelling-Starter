<div class="container-fluid">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb-4">Tambah Guide</h1>
                                </div>
                                <input type="hidden" class="baseurl" value="<?= base_url() ?>">
                                <form action="<?= base_url('admin/tambahguide') ?>" method="post" enctype="multipart/form-data" class="tGuide">
                                    <div class="form-group">
                                        <label for="">Nama Guide</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="text" name="no_telp" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Rating</label>
                                        <input type="text" name="rating" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar</label> <br>
                                        <input type="file" name="gambar" class="form-control" required>
                                    </div>
                                    <div class="form-gruup">
                                        <label>Alamat</label>     
                                        <textarea name="alamat" id="deskripsiD"></textarea>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('deskripsiD');
</script>