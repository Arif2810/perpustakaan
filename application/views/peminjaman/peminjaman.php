<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <div class="col-md-12" style="margin-bottom: 8px;">
    <a href="<?= base_url('peminjaman/tambahPeminjaman') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
    
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
          <th>Id Peminjaman</th>
          <th>Nama Peminjam</th>
          <th>Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Status</th>
          <th>Keterangan</th>
          <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach($peminjaman as $row): ?>
        <?php 
          $tgl_kembali = new DateTime($row->tgl_kembali);
          $tgl_sekarang = new DateTime();
          $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
        ?>
        <tr>
          <td><?= $row->id_pm; ?></td>
          <td><?= $row->nama_anggota; ?></td>
          <td><?= $row->judul_buku; ?></td>
          <td><?= $row->tgl_pinjam; ?></td>
          <td><?= $row->tgl_kembali; ?></td>

          <?php if($tgl_kembali <= $tgl_sekarang OR $selisih == 0){ ?>
          <td>
            <span class="label label-warning">Belum dikembalikan</span>
          </td>
          <td>
            Telat <b style="color: red;"><?= $selisih; ?></b> Hari <br> <span class="label label-danger">Denda perhari = Rp. 1000,-</span>
          </td>    
          <?php }
          else{ ?>
          <td></td>
          <td></td>
          <?php }?>

          <td>
            <a href="<?= base_url('peminjaman/kembalikan/').$row->id_pm ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin mau dikembalikan?')">Kembalikan</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>