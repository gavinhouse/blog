<nav class="navbar navbar-expand-lg navbar-light" style="<?= $style ?>">
    <a class="navbar-brand" href="<?php echo site_url('home/index');?>">Blogger's Digest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <?= $this->navigation->link('Posts Table', 'posts/index','post'); ?>
            <?= $this->navigation->link('Authors Table', 'authors/index','pen'); ?>

        </ul>
    </div>
</nav>

<div id="content">
    <br />
</div>