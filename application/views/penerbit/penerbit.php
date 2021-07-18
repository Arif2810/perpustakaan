<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <div class="col-md-12" style="margin-bottom: 8px;">
    <a href="<?= base_url('penerbit/tambahPenerbit') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Penerbit</a>
    
    <?php if(!empty($this->session->flashdata('info'))){ ?>
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 8px;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?= $this->session->flashdata('info'); ?>
    </div>
    <?php } ?>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Id Penerbit</th>
        <th>Nama Penerbit</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <?php foreach($penerbit as $row): ?>
      <tr>
        <td><?= $row->id_penerbit; ?></td>
        <td><?= $row->nama_penerbit; ?></td>
        <td>
          <a href="<?= base_url('penerbit/edit/').$row->id_penerbit; ?>" class="btn btn-success btn-xs">Edit</a>
          <a href="<?= base_url('penerbit/delete/').$row->id_penerbit; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus?')">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
      <tbody>

      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>