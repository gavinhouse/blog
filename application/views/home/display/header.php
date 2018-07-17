<!doctype html>
<html lang="en" style="background-color: #CCFFFF">

<!-- Retrieve stylesheets and scripts -->
<?php $this->load->view('shared/headerHead'); ?>

<style>
    #content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        background-color: #CCFFFF;
    }
    div.footer {
        background:#CCEEFF;
    }
</style>

    <!-- Get code for shared navbar. -->
    <?php $this->load->view('shared/navbar', ['style' => 'background-color: #CCEEFF']) ; ?>



