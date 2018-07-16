<style>
    .post-listing{
        padding-left: 10%;
        padding-right: 10%;
    }
</style>
<div id="content">
    <div class="post-listing" align="center" >

        <form action="<?= site_url('posts/create')?>">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">     Create New Post     </button>
        </form>

        <?php
        foreach ($posts as $post){
            $this->load->view('posts/display/entry',$post);
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