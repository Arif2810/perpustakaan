<!-- right column -->
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('buku/simpan'); ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id Buku</label>
          <div class="col-sm-10">
            <input type="text" name="id_buku" value="<?= $id_buku ?>" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
          <div class="col-sm-10">
            <input type="text" name="judul_buku" class="form-control" required placeholder="Judul buku...">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
          <div class="col-sm-10">
            <select name="id_pengarang" class="form-control select2" id="" required>
              <option value="">-Pilih Pengarang-</option>
              <?php foreach($pengarang as $row): ?>
              <option value="<?= $row->id_pengarang ?>"><?= $row->nama_pengarang; ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
          <div class="col-sm-10">
            <select name="id_penerbit" class="form-control select2" id="" required>
              <option value="">-Pilih Penerbit-</option>
              <?php foreach($penerbit as $row): ?>
              <option value="<?= $row->id_penerbit ?>"><?= $row->nama_penerbit; ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
          <div class="col-sm-10">
            <select name="tahun_terbit" class="form-control select2" id="" required>
              <option value="">-Pilih tahun-</option>
              <?php for($tahun = 2000; $tahun <= 2020; $tahun++){ ?>
                <option value="<?= $tahun ?>"><?= $tahun; ?></option>
              <?php } ?>  
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

          <div class="col-sm-10">
            <input type="number" name="jumlah" class="form-control">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('buku'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>