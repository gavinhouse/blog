<style>
    .post-listing{
        padding-left: 25%;
        padding-right: 25%;
    }
</style>
<div id="content">
    <div class="post-listing" align="center" >

        <div class="actions">
            <a class="action" href="<?php echo site_url('posts/create'); ?>">Add New Post</a>
        </div>

        <?php
        foreach ($posts as $post){
            $this->load->view('posts/display/entry');
        }

        ?>


        </div>
        <?php
        if($action === 'add'){
            echo '<p>Post added successfully!</p>';
        }
        elseif($action === 'delete'){
            echo '<p>Post deleted successfully!</p>';
        }
        elseif($action === 'edit'){
            echo '<p>Post edited successfully!</p>';
        }
        ?>
    </div>
</div>