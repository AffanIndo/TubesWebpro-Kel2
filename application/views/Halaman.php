<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <link rel="icon" href="assets/bitmap.png">
    <title><?= $title ?></title>

    <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"></script>
</head>
<body>
  <?php $this->load->view($main_view); ?>
  
  <!-- Modal Tambah Mahasiswa -->
<!-- <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA PASIEN</h2></center>
      </div>
      <div class="modal-body"> -->
      <!-- isi form ini -->
      <!-- <form method="POST" action="<?= base_url('index.php/Web/tambahmahasiswa'); ?>">
        <div class="form-group">
          <label for="formGroupExampleInput">NIM</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nim" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Kelas</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div> -->

</body>
</html>