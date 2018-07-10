<?php
if(!isset($_SESSION['login'])){
    header('Location: ' . site_url('users/login'));
}
?>
<div id="content">
    <a class="back-link" href="<?php echo site_url('authors/index'); ?>">Back to Author List</a>



    <div class="author delete">
        <h1>Are you sure you want to delete <?php echo  $author['name'].'?'; ?></h1>
        <br />

        <?php echo validation_errors(); ?>
        <?php echo form_open('authors/delete/'.$author['id']); ?>
            <div id="operations">
                <input type="submit" name="commit" value="I'm sure!" />
            </div>
        </form>
    </div>

</div>