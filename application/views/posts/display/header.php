<!doctype html>
<html lang="en" style="background-color: #CFFEF0">

<!-- Retrieve stylesheets and scripts -->
<?php include('C:\Apache24\htdocs\frameworkPractise\application\views\shared\headerHead.php'); ?>

<style>
    #content {
        background-color: #CFFEF0;
    }
    div.footer {
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        text-align: center;
        position: relative;
        z-index: 10;
        height: 3em;
        background-color: #62FDCE;
    }
    html, body {
        margin: 0;
        height: 100%;
    }

</style>

    <!-- Get code for shared navbar. -->
    <?php $this->load->view('shared/navbar', ['style' => 'background-color: #62FDCE']) ; ?>

      <div id="content">
          <h2>Posts</h2>
      </div>
