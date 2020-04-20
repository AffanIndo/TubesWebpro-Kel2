<?php $this->load->view('template/atas'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="container-fluid "  >
  <div class="row">
    <div style="height: 90vh; width: 100%" class="d-flex align-items-stretch">
      <div class="col-6 d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/doctor3.jpg') ?>"alt="logo" width='100%' height='450'></div>
      <div class="p-3 mb-2 text-black col-6 d-flex align-items-center justify-content-center flex-column">
        <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;">Register</h1>
      <form class='p-5' method="POST" action="<?php echo site_url('Welcome/login') ?>" style= 'background-color: #FF4F5A; border-radius: 25px'>
        <div class="form-row">
    <div class="form-group col-md-6">
      <label class='text-light'for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label class='text-light'for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label class='text-light'for="inputAddress">Nama</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Nama">
  </div>
  <div class="form-group">
    <label class='text-light'for="inputAddress2">Alamat</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Alamat">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label class='text-light'for="inputAddress2">Usia</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Usia">
  </div>
  <div class="form-group col-md-6">
      <label class='text-light'for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control">
        <option>Laki-Laki</option>
        <option>Perempuan</option>
      </select>
    </div>
  </div>
    <button type="submit" class="btn btn-light mr-auto">Register</button>
      </form>
      <?= $this->session->userdata('username')?>
      </div>
    </div>
  </div>