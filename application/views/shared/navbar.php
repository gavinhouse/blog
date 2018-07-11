<nav class="navbar navbar-expand-lg navbar-light" style="<?= $style ?>">
    <a class="navbar-brand" href="<?php echo site_url('home/index');?>"><img src="<?= base_url('images/BD.png')?>"> Blogger's Digest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <?= $this->navigation->link('Posts', 'posts/index','post'); ?>
            <?= $this->navigation->link("Users", 'users/index', 'users'); ?>

        </ul>
    </div>
</nav>

<div id="content">
    <br />
</div>