<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <div class="col-md-12" style="margin-bottom: 8px;">
    <a href="<?= base_url('anggota/tambahAnggota') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
    
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
        <th>Id Anggota</th>
        <th>Nama Anggota</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
      </tr>
      </thead>

      <tbody>

      <?php foreach($anggota as $row): ?>
      <tr>
        <td><?= $row->id_anggota; ?></td>
        <td><?= $row->nama_anggota; ?></td>
        <td><?= $row->jenis_kelamin; ?></td>
        <td><?= $row->alamat; ?></td>
        <td><?= $row->no_telp; ?></td>
        <td>
          <a href="<?= base_url('anggota/edit/').$row->id_anggota; ?>" class="btn btn-success btn-xs">Edit</a>
          <a href="<?= base_url('anggota/delete/').$row->id_anggota; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus?')">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>