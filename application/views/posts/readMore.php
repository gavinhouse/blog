<div id="content" align="center">
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