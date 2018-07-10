<!doctype html>
<html lang="en" style="background-color: #efcbbc">

<!-- Retrieve stylesheets and scripts -->
<?php $this->load->view('shared/headerHead'); ?>

<style>
    #content {
        background-color: #efcbbc;
    }
    div.footer {
        background:#E4C0B1;
    }
</style>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4C0B1">
      <!-- Get code for shared navbar. Line above is kept locally to change color. -->
     <?php $this->load->view('shared/navbar', ['style' => '']) ?>

      <div id="content">
          <h2>Authors</h2>
      </div>
