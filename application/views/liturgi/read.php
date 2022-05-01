<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4><?=$title?></h4>
                </div>
                <div class="card-body p-0">
                    <div id="pdf-js-viewer">
                        <iframe class="container-fluid" src="<?=$pdf;?>" frameborder="0" width="500" height="800">
                            <p>Oups..
                                Sepertinya browser Anda tidak mendukung untuk membaca PDF ini. Silahkan download file
                                sebagai alternatif.</p>
                        </iframe>
                    </div>
                </div>
                <a name="" id="" class="btn btn-primary" href="<?=base_url("liturgi")?>" role="button">Back</a>
            </div>
        </div>
    </div>
</div>