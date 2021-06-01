<div class="container-fluid">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb-4">Edit Guide</h1>
                                </div> 
                                
                                <form action="<?= base_url('admin/updateguide/') . $guide['id'] ?>" method="post" enctype="multipart/form-data" class="tGuide">
                                    <div class="form-group">
                                        <label for="">Nama Guide</label>
                                        <input type="text" name="nama" class="form-control" required value="<?= $guide['nama'] ?>">
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="text" name="no_telp" class="form-control" required value="<?= $guide['no_telp'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Rating</label>
                                        <input type="text" name="rating" class="form-control" required value="<?= $guide['rating'] ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Gambar</label> <br>
                                        <img src="<?= base_url('assets/img/place/') . $guide['gambar'] ?>" alt="" width="500" height="250" class="text-center">
                                        <input type="hidden" value="<?= $guide['gambar'] ?>" name="gambar_lama">
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                    <div class="form-gruup">
                                        <label>Alamat</label>     
                                        <textarea name="alamat" id="deskripsiD" value="<?= $guide['alamat'] ?> "></textarea>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-block">EDIT</button>
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