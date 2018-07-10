<?= $author_name = '' ?>

<div id="content">
    <a class="back-link" href="<?php echo site_url('authors/index'); ?>">Back to Author List</a>

    <div class="page new">
        <h1>Add Author</h1>

        <?php echo validation_errors(); ?>
        <?php echo form_open('authors/create'); ?>

            <dl>
                <dt>Author Name</dt>
                <dd><input type="text" name="name" value="<?php echo $author_name; ?>"/> </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Create Page" />
            </div>
        </form>
    </div>
</div>