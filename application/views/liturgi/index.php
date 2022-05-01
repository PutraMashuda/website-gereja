<div class="container">

    <?php
require_once APPPATH . 'views/liturgi/partials/alert.php';
?>

    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>List Liturgi</h4>
                </div>
                <div class="card-body">
                    <?php if (IsLoggedIn()): ?>
                    <a class="btn btn-primary mb-3" href="<?=base_url("liturgi/create")?>" role="button"><i
                            class="far fa-plus-square"></i> Tambah
                        Liturgi</a>
                    <?php endif;?>
                    <a name="" id="" class="btn btn-outline-info mb-3"
                        href="<?=IsLoggedIn() ? base_url("admin") : base_url()?>" role="button">Back</a>
                    <?php if (!empty($liturgi)): ?>
                    <?php foreach ($liturgi as $data): ?>
                    <div class="row mt-2">
                        <div class="col">
                            <div class="card-group">
                                <?php foreach ($data as $item): ?>
                                <div class="card"><img class="img-fluid card-img-top w-100 d-block"
                                        src="<?=$item->image ? base_url("uploads/img/{$item->image}") : base_url() . "uploads/img/default.png"?>" />
                                    <div class="card-body">
                                        <h4 class="card-title"><?=$item->title?></h4>
                                        <!-- <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
                                            justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus.</p> -->
                                        <a class="btn btn-primary m-2"
                                            href="<?=base_url("liturgi/download/" . $item->slug)?>"
                                            role="button">Download</a>
                                        <a class="btn btn-outline-info m-2"
                                            href="<?=base_url("liturgi/read/" . $item->slug)?>" role="button">Read</a>
                                        <button class="btn btn-outline-danger" type="button"
                                            data-bs-target="#modal-delete" value="<?=$item->slug?>"
                                            data-bs-toggle="modal">Delete</button>
                                        <a class="btn btn-outline-warning m-2"
                                            href="<?=base_url("liturgi/edit/" . $item->slug)?>" role="button">Edit</a>
                                    </div>
                                </div>



                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php else: ?>
                    <div class="row mt-2">
                        <div class="col text-center text-white-50 align-self-center bg-black p-5 rounded m-4">
                            <h1 class="m-auto">Belum Ada Liturgi Terbuat</h1>
                        </div>
                    </div>
                    <?php endif;?>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk hapus data -->
<div id="modal-delete" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Liturgi</h4><button class="btn-close" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus liturgi ini? Seluruh file yang
                    bersangkutan dengan data ini juga akan
                    dihapus.
                </p>
            </div>
            <div class="modal-footer">
                <form method="post" action="<?=base_url('liturgi/delete')?>"><input type="hidden" name="slug"
                        value="<?=$item->slug?>"><button class="btn btn-light me-1" type="button"
                        data-bs-dismiss="modal">Batal</button><button class="btn btn-primary"
                        type="submit">Hapus</button></form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#modal-delete').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var slug = button.val();
        var modal = $(this);
        modal.find('.modal-body input[name="slug"]').val(slug);
    });
});
</script>