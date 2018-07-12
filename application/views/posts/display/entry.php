<div class="w3-card-4 w3-margin w3-white">
    <img src="../../../images/<?= $imageName?>" alt="<?=$title?>" style="width:100%" height="320px">
    <div class="w3-container">
        <h3><b><?=$title?></b></h3>
        <h5><?=$author?>, <span class="w3-opacity"><?= $date ?></span></h5>
    </div>
    <div class="w3-container">
        <p><?= $content ?></p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
            </div>
        </div>
    </div>
</div>

<hr>