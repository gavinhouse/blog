<div id="content">

    <?php if($_SESSION['username'] == $post['authorName'] || $_SESSION['username'] == 'admin'){ ?>
        <a href="<?= site_url('posts/edit/' . $post['id'])?>">Edit Post</a>
        <br />
        <a href="<?= site_url('posts/delete/' . $post['id'])?>">Delete Post</a>
        <br />
    <?php } ?>

    <div align="center">
        <img src="../../../images/uploads/<?= $post['imageName']?>" alt="<?=$post['title']?>" style="width:40%">
        <div style="text-align: justify">
            <h1><?= $post['title'] ?></h1><p>By <?= $post['authorName']?></p>
            <br />
            <?php
            foreach(explode("\n", $post['content']) as $paragraph){
                echo '<p>' . $paragraph . '</p>';
            }
            ?>
        </div>
    </div>
</div>