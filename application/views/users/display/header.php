<?php
/**
 * @var Layout $layout
 */

?>
<!doctype html>
<html lang="en" style="background-color: #efcbbc">

<!-- Retrieve stylesheets and scripts -->
<?php include('C:\Apache24\htdocs\frameworkPractise\application\views\shared\headerHead.php'); ?>

<style>
    #content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        background-color: #efcbbc;
    }
    div.footer {
        background:#E4C0B1;
    }
</style>

    <!-- Get code for shared navbar. -->
    <?php $this->load->view('shared/navbar', ['style' => 'background-color: #E4C0B1']) ; ?>