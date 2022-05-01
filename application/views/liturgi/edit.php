<div class="container">
    <div class="row justify-content-center">

        <?php
require_once APPPATH . 'views/liturgi/partials/alert.php';
?>

        <div class="col col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Liturgi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <?=form_open_multipart('liturgi/update')?>
                            <span>Title</span>
                            <input class="form-control mb-2" type="text" value="<?=$liturgi->title?>" name="title"
                                placeholder="Title">

                            <span>Thumbnail</span>
                            <input class="form-control" accept="image/*" type="file" name="image">

                            <?php if ($liturgi->image !== "default.png"): ?>
                            <a id="remove_image" class="small text-danger d-block" href="#" onclick="remove_image()"><i
                                    class="far fa-trash-alt"></i> remove
                                thumbnail</a>
                            <?php endif;?>

                            <img id="image" class="img-fluid d-block mb-2 mt-2 rounded"
                                src="<?="/uploads/img/{$liturgi->image}"?>" />

                            <span>Liturgi</span>
                            <input accept="application/pdf" class="form-control mb-2" type="file" name="pdf">


                            <div class="d-block mt-2" id="pdf-js-viewer">
                                <iframe class="container-fluid" src="<?=base_url("uploads/pdf/{$liturgi->pdf}");?>"
                                    frameborder="0" width="500" height="800">
                                    <p>Oups..
                                        Sepertinya browser Anda tidak mendukung untuk membaca PDF ini. Silahkan download
                                        file
                                        sebagai alternatif.</p>
                                </iframe>
                            </div>

                            <button class="btn btn-primary mt-4" type="submit"><i
                                    class="fas fa-pen"></i>&nbsp;Edit</button><a name="" id=""
                                class="btn btn-outline-secondary mt-4 ms-1" href="<?=base_url("liturgi")?>"
                                role="button">Back</a>
                            <input type="hidden" name="slug" value="<?=$liturgi->slug?>">
                            </form>
                        </div>
                        <div class="col mt-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-muted card-subtitle mb-2"><i
                                            class="fas fa-info-circle"></i>&nbsp;Info</h6>
                                    <p class="card-text">Silahkan edit liturgi. Untuk thumbnail, hanya file
                                        gambar yang diperbolehkan. Untuk File liturgi, silahkan upload dalam format
                                        PDF.
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



<script>
/**
 * Make request POST to remove image
 * when user click on remove image link
 * with id "remove_image"
 */


/**
 * Make function to remove image
 */
function remove_image() {
    $.ajax({
        url: "<?=base_url('liturgi/remove_image')?>",
        type: "POST",
        data: {
            slug: "<?=$liturgi->slug?>"
        },
        success: function(response) {
            if (response.status) {
                // redirect to liturgi page
                window.location.href = "<?=base_url('liturgi/edit/')?>" + response.data.slug;
            }
        }
    });
}
</script>