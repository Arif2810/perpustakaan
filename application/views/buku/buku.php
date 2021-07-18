<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <div class="col-md-12" style="margin-bottom: 8px;">
    <a href="<?= base_url('buku/tambahBuku') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data Buku</a>
    
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
          <th>Id Buku</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach($buku as $row): ?>
        <tr>
          <td><?= $row->id_buku; ?></td>
          <td><?= $row->judul_buku; ?></td>
          <td><?= $row->pengarang; ?></td>
          <td><?= $row->penerbit; ?></td>
          <td><?= $row->tahun_terbit; ?></td>
          <td><?= $row->jumlah; ?></td>
          <td>
          <a href="<?= base_url('buku/edit/').$row->id_buku; ?>" class="btn btn-success btn-xs">Edit</a>
          <a href="<?= base_url('buku/delete/').$row->id_buku; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus?')">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>