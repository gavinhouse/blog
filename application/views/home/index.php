<div id="content" >
    <div>
        <img src="<?= base_url('images/blog.jpg') ?>">
    </div>
    <div id="main-menu" align="center">
        <br />
        <h1>Welcome to The Blogger's Digest!</h1>
        <br />
        <br />
        <h4>Log in or create an account to view blogs</h4>
        <br />
        <br />
        <form method="GET" action="<?= site_url('users/login');?>">
            <input type="submit" value="Log in">
        </form>
        <br />
        <br />
        <form method="GET" action="<?= site_url('users/create');?>">
            <input type="submit" value="Create Account">
        </form>

    </div>
</div>

