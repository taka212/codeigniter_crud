<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1><a href="<?php echo base_url().'ci_crud'; ?>">CRUD</a></h1>
    <a href="<?php echo base_url().'ci_crud/add'; ?>" class="btn btn-outline-primary btn-sm">Tambah Data</a>
    <hr>
    <?php echo $this->session->flashdata('item'); ?>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">NO HP</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($hasil as $k): ?>
        <tr>
          <th scope="row"><?php echo $k->id; ?></th>
          <td><?php echo $k->nama; ?></td>
          <td><?php echo $k->alamat; ?></td>
          <td><?php echo $k->no_hp; ?></td>
          <td>
            <a href="<?php echo base_url().'ci_crud/edit/'.$k->id; ?>" class="btn btn-outline-success btn-sm">Edit</a>
            <a href="<?php echo base_url().'ci_crud/delete/'.$k->id; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('apa anda yakin ?')">hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>