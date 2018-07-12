<style>
    .post-listing{
        padding-left: 25%;
        padding-right: 25%;
    }
</style>
<div id="content">
    <div class="post-listing" align="center" >

        <div class="actions">
            <a class="action" href="<?php echo site_url('posts/create'); ?>">Add New Post</a>
        </div>



        <div class="w3-card-4 w3-margin w3-white">
            <img src="../../../images/author.jpg" alt="Nature" style="width:100%" height="320px">
            <div class="w3-container">
                <h3><b>TITLE HEADING</b></h3>
                <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
            </div>

            <div class="w3-container">
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                    tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                    tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla</p>
                <div class="w3-row">
                    <div class="w3-col m8 s12">
                        <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                    </div>
                    <div class="w3-col m4 w3-hide-small">
                        <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="/w3images/woods.jpg" alt="Nature" style="width:100%">
                <div class="w3-container">
                    <h3><b>TITLE HEADING</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="/w3images/bridge.jpg" alt="Norway" style="width:100%">
                <div class="w3-container">
                    <h3><b>BLOG ENTRY</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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