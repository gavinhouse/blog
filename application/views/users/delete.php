<div id="content">
    <div class="user delete">
        <h1>Are you sure you want to delete <?= $user['username']; ?>?</h1>
        <br/>

        <?= validation_errors(); ?>
        <?= form_open('users/delete/' . $user['username']); ?>
            <div id="operations">
                <input type="submit"name="commit" value="I'm sure!" />
            </div>
        </form>
    </div>
</div>