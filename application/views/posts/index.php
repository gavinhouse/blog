<div id="content">
    <div class="post listing">

        <div class="actions">
            <a class="action" href="<?php echo site_url('posts/create'); ?>">Add New Post</a>
        </div>

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Author Name</th>
                <th>Title</th>
                <th>Content</th>
                <th> </th>
                <th> </th>
            </tr>
            </thead>

            <?php foreach($posts as $subject){?>
                <tr>
                    <td><?php echo $subject['id'];?></td>
                    <?php foreach ($authors as $author){
                        if($author['id'] === $subject['author_id']){
                            echo '<td>'. $author['name'].'</td>';
                        }
                    }
                    ?>
                    <td><?php echo $subject['title'];?></td>
                    <td style="white-space:pre-wrap; word-wrap:break-word"><?php echo $subject['content'];?></td>
                    <td><a class="action" href="<?php echo site_url('posts/edit/'.$subject['id']) ?>">Edit</a></td>
                    <td><a class="action" href="<?php echo site_url('posts/delete/'.$subject['id']) ?>">Delete</a></td>
                </tr>
            <?php }  ?>
        </table>
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