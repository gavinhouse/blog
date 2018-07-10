<?php
if(!isset($_SESSION['isAdmin'])){
    header('Location: ' . site_url('users/login'));
}
?>
<div id="content">
    <div class="author listing">

        <div class="actions">
            <a class="action" href="<?php echo site_url('authors/create'); ?>">Add New Author</a>
        </div>

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <?php
                if($_SESSION['isAdmin']){
                    echo '<th> </th>';
                }
                ?>
            </tr>
            </thead>

            <?php foreach($authors as $subject){?>
                <tr>
                    <td><?php echo $subject['id'];?></td>
                    <td><?php echo $subject['name'];?></td>
                    <?php if($_SESSION['isAdmin']){?>
                    <td><a class="action" href="<?php echo site_url('authors/delete/'.$subject['id']) ?>">Delete</a></td>
                    <?php } ?>
                </tr>
            <?php }  ?>
        </table>
        <?php
        if($action === 'add'){
            echo '<p>Author added successfully!</p>';
        }
        elseif($action === 'delete'){
            echo '<p>Author deleted successfully!</p>';
        }
        elseif($action === 'failed'){
            echo '<p>This author has active posts. Please delete posts from this author before deleting author.</p>';
        }
        session_unset();
        ?>
    </div>
</div>
