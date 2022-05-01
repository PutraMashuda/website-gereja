<?php

if ($this->session->flashdata("success")) {
    ?>
<div class="row justify-content-center">
    <div class="col col-md-10">
        <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close" type="button"
                data-bs-dismiss="alert" aria-label="Close"></button><span>
                <ul><?=$this->session->flashdata("success")?></ul>
            </span>
        </div>
    </div>
</div>
<?php
} else if ($this->session->flashdata("danger")) {
    ?>
<div class="row justify-content-center">
    <div class="col col-md-10">
        <div class="alert alert-danger alert-dismissible" role="alert"><button class="btn-close" type="button"
                data-bs-dismiss="alert" aria-label="Close"></button><span>
                <ul><?=$this->session->flashdata("danger")?></ul>
            </span>
        </div>
    </div>
</div>
<?php
} elseif ($this->session->flashdata("warning")) {
    ?>
<div class="row justify-content-center">
    <div class="col col-md-10">
        <div class="alert alert-warning alert-dismissible" role="alert"><button class="btn-close" type="button"
                data-bs-dismiss="alert" aria-label="Close"></button><span>
                <ul><?=$this->session->flashdata("warning")?></ul>
            </span>
        </div>
    </div>
</div>
<?php
} elseif ($this->session->flashdata("info")) {
    ?>
<div class="row justify-content-center">
    <div class="col col-md-10">
        <div class="alert alert-info alert-dismissible" role="alert"><button class="btn-close" type="button"
                data-bs-dismiss="alert" aria-label="Close"></button><span>
                <ul><?=$this->session->flashdata("info")?></ul>
            </span>
        </div>
    </div>
</div>
<?php
}