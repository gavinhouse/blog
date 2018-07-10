<?php
$this->CI =& get_instance();
$this->load->library('Navigation');
?>
<a class="navbar-brand" href="<?php echo site_url('home/index');?>">Blogger's Digest</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

        <?= $this->CI->navigation->navbarLink('Posts Table', 'posts/index'); ?>
        <?= $this->CI->navigation->navbarLink('Authors Table', 'authors/index'); ?>

    </ul>
</div>
</nav>
<div id="content">
    <br />
</div>