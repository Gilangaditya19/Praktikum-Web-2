<?php 
require_once '../dbkoneksi.php';
?>

<?php 
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        $sql = "SELECT * FROM kartu WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        $row = [];
    }
?>

<form method="POST" action="proses.php">
  <div class="form-group row mt -2">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode" name="kode" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="nama" class="col-4 col-form-label">Nama Kartu</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Diskon</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="tmp_lahir" name="diskon" value=""
        type="number" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Iuran</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="tmp_lahir" name="iuran" value=""
        type="number" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>