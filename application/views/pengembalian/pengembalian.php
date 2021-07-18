<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <div class="col-md-12" style="margin-bottom: 8px;">
    
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
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Tanggal Pengembalian</th>
      </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach($pengembalian as $row): ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $row->nama_anggota; ?></td>
          <td><?= $row->judul_buku; ?></td>
          <td><?= $row->tgl_pinjam; ?></td>
          <td><?= $row->tgl_kembali; ?></td>
          <td><?= $row->tgl_pengembalian; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>