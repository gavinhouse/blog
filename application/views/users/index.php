<div id="content">
    <h1>Users</h1>
    <div class="users listing">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>Username</th>
                <th>Display Name</th>
                <?php
                if($_SESSION['username'] === 'admin'){
                    echo '<th> </th>';
                }
                ?>
            </tr>
            </thead>

            <?php foreach($users as $user){ ?>
                <tr>
                    <td><?= $user['username']?></td>
                    <td><?= $user['displayName'];?></td>
                    <?php if($_SESSION['username'] === 'admin'){ ?>
                        <td><a class="action" href="<?php echo site_url('users/delete/'.$user['username']); ?>">Delete</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <?php
        if($action === 'delete'){
            echo '<p>User deleted successfully!</p>';
        }
        elseif($action === 'failed'){
            echo '<p>This user has active posts. Please delete posts from this author before deleting author.</p>';
        }
        ?>

    </div>
</div>