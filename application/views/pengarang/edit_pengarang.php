<!-- right column -->
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('pengarang/update'); ?>">
      <div class="box-body">

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Pengarang</label>

          <div class="col-sm-10">
            <input type="hidden" name="id_pengarang" value="<?= $pengarang['id_pengarang'] ?>">
            <input type="text" name="nama_pengarang" value="<?= $pengarang['nama_pengarang'] ?>" class="form-control"  placeholder="Nama anggota..." required>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('pengarang'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>