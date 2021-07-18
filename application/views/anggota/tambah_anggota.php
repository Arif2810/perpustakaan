<!-- right column -->
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('anggota/simpan'); ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>

          <div class="col-sm-10">
            <input type="text" name="id_anggota" value="<?= $id_anggota ?>" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>

          <div class="col-sm-10">
            <input type="text" name="nama_anggota" class="form-control"  placeholder="Nama anggota..." required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

          <div class="col-sm-10">
            <select name="jenis_kelamin" class="form-control" required>
              <option value="">-Pilih Jenis Kelamin-</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

          <div class="col-sm-10">
            <textarea name="alamat" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>

          <div class="col-sm-10">
            <input type="text" name="no_telepon" class="form-control"  placeholder="Nomor telepon" required>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('anggota'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>