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
  <a class="navbar-brand" href="<?php echo base_url() ?>books">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    Data Buku
  </a>
</nav>
  <div class="container" style="margin-top:30px">
<?php echo $this->session->flashdata('hasil'); ?>
<table class="table table-bordered">
    <tr><th>ID</th><th>TITLE</th><th>AUTHOR</th><th>FIRST SENTENCE</th><th>PUBLISHED</th></tr>
    <?php
    foreach ($books as $m){
        echo "<tr>
        <td>$m->id</td>
        <td>$m->title</td>
        <td>$m->author</td>
        <td>$m->first_sentence</td>
        <td>$m->published</td>
            ";
    }
    ?>
</table>
<a href="http://awanpc.pythonanywhere.com/books/<?php echo $m->id?>">Lihat JSON</span></a>
</div>
</body>
</html>