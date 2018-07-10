<div id="content">
    <a class="back-link" href="<?php echo site_url('posts/index'); ?>">Back to Author List</a>


    <div class="post edit">
        <h1>Edit Post</h1>

        <?php echo validation_errors(); ?>
        <?php echo form_open('posts/edit/'.$post['id']); ?>
            <dl>
                <dt>Author</dt>
                <dd>
                    <select name="author_id">
                        <?php

                        foreach($authors as $author){
                            echo "<option value=\"" . $author['id'] . "\"";
                            if($post['author_id'] == $author['id']){
                                echo " selected";
                            }
                            echo ">" . $author['name'] . "</option>";
                        }
                        ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Title</dt>
                <dd><input type = "text" name="title" value="<?php echo $post['title']; ?>"/></dd>
            </dl>
            <dl>
                <dt>Content</dt>
                <textarea rows="5" cols="80" name="content"><?php echo $post['content'];?></textarea>
            </dl>
            <div id="operations">
                <input type="submit" value="Edit Post" />
            </div>
        </form>
    </div>
</div>