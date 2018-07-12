<?php $title = ""; ?>

<div id="content">
    <a class="back-link" href="<?php echo site_url('posts/index'); ?>">Back to Author List</a>

    <div class="page new">
        <h1>Add Post</h1>

        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('posts/create'); ?>
            <dl>
                <dt>Title</dt>
                <dd><input type = "text" name="title" value=<?php echo $title ?>></dd>
            </dl>
            <dl>
                <dt>Content</dt>
                <textarea rows="5" cols="80" name="content"></textarea>
            </dl>
            <dl>
                <dt>Image</dt>
                <input type="file" name="userfile" size="20" />
            </dl>
            <div id="operations">
                <input type="submit" value="Add Post" />
            </div>
        </form>
    </div>
</div>