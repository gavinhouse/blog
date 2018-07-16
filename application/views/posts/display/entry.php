<div class="w3-card-4 w3-margin w3-white" align="left" style="width: 60%">
    <img src="../../../images/uploads/<?= $imageName?>" alt="<?=$title?>" style="width:100%" >
    <div class="w3-container">
        <h3><b><?=$title?></b></h3>
        <h5><?=$author?>, <span class="w3-opacity"><?= $date ?></span></h5>
    </div>
    <div class="w3-container">
        <p><?= $content ?></p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <form action="<?= site_url('posts/readMore/' . $id)?>">
                    <p><button type="submit" class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                </form>
            </div>
        </div>
    </div>
</div>

<hr>