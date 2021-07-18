<!-- right column -->
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('penerbit/update'); ?>">
      <div class="box-body">

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Penerbit</label>

          <div class="col-sm-10">
            <input type="hidden" name="id_penerbit" value="<?= $penerbit['id_penerbit'] ?>">
            <input type="text" name="nama_penerbit" value="<?= $penerbit['nama_penerbit'] ?>" class="form-control"  placeholder="Nama penerbit..." required>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('penerbit'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>