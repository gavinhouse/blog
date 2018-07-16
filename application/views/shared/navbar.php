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
        <?php if(!isset($_SESSION['username'])){?>
            <form class="form-inline my-2 my-lg-0" action="<?= site_url('users/login')?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log In</button>
            </form>
        <?php } ?>
        <?php if(isset($_SESSION['username'])){?>
            <form class="form-inline my-2 my-lg-0" action="<?= site_url('users/logout')?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
            </form>
        <?php } ?>
    </div>
</nav>
