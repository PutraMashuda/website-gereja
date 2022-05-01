<div class="container">
    <div class="row justify-content-center">

        <?php
require_once APPPATH . 'views/liturgi/partials/alert.php';
?>

        <div class="col col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Liturgi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <?=form_open_multipart('liturgi/store')?>
                            <span>Title</span><input class="form-control mb-2" type="text" name="title"
                                placeholder="Title"><span>Thumbnail</span><input class="form-control mb-2"
                                accept="image/*" type="file" name="image"><span>Liturgi</span><input
                                accept="application/pdf" class="form-control mb-2" type="file" name="pdf"><button
                                class="btn btn-primary mt-4" type="submit"><i
                                    class="far fa-plus-square"></i>&nbsp;Tambah</button><a name="" id=""
                                class="btn btn-outline-secondary mt-4 ms-1" href="<?=base_url("liturgi")?>"
                                role="button">Back</a>
                            </form>
                        </div>
                        <div class="col mt-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-muted card-subtitle mb-2"><i
                                            class="fas fa-info-circle"></i>&nbsp;Info</h6>
                                    <p class="card-text">Silahkan masukkan liturgi baru. Untuk thumbnail, hanya file
                                        gambar yang diperbolehkan. Untuk File liturgi, silahkan upload dalam format PDF.
                                        Selain format tersebut, maka tidak diperbolehkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>