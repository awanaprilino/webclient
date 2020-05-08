<?php echo form_open('books/create');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    Create Data
  </a>
</nav>
  <div class="container" style="margin-top:30px">
<?php echo $this->session->flashdata('hasil'); ?>
<table class="table">
    <tr><td>TITLE</td><td><?php echo form_input('title');?></td><td></td></tr>
    <tr><td>AUTHOR</td><td><?php echo form_input('author');?></td><td></td></tr>
    <tr><td>FIRST SENTENCE</td><td><?php echo form_input('first_sentence');?></td><td></td></tr>
    <tr><td>PUBLISHED</td><td><?php echo form_input('published');?></td><td></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('books','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
</div>
</body>
</html>