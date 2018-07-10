<div id="content">
    <a class="back-link" href="<?php echo site_url('posts/index'); ?>">Back to Post List</a>



    <div class="post delete">
        <h1>Are you sure you want to delete <?php echo $post['title']; ?>?</h1>
        <br />

        <?php echo validation_errors(); ?>
        <?php echo form_open('posts/delete/'.$post['id']); ?>
        <div id="operations">
            <input type="submit" name="commit" value="I'm sure!" />
        </div>
        </form>
    </div>

</div>