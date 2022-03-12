<?php
include '../layout/header.php';
?>
<div class="container">
<h1 class="mx-3 my-3 text-center mb-3">Form Pengisian Biodata</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_panggilan" class="col-4 col-form-label">Nama Panggilan</label> 
    <div class="col-8">
      <input id="nama_panggilan" name="nama_panggilan" placeholder="Nama Panggilan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="perempuam"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat Lengkap</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="makanan" class="col-4 col-form-label">Makanan Kesukaan</label> 
    <div class="col-8">
      <select id="makanan" name="makanan" class="custom-select" multiple="multiple">
        <option value="bakso">Bakso</option>
        <option value="nasigoreng">Nasi Goreng</option>
        <option value="soto">Soto</option>
        <option value="nasiuduk">Nasi Uduk</option>
        <option value="ayamgoreng">Ayam Goreng</option>
        <option value="nasipadang">Nasi Padang</option>
        <option value="seafood">Seafood</option>
        <option value="gulai">Gulai</option>
        <option value="spaghetti">Spaghetti</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kritiksaran" class="col-4 col-form-label">Kritik & Saran</label> 
    <div class="col-8">
      <textarea id="kritiksaran" name="kritiksaran" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</div>
<?php
include '../layout/footer.php';
?>