<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style type="text/css">
    .tgl-akhir{
      margin-left: -20px;
    }
    
    .btn-filter{
      margin-left: -40px;
    }
    
    .btn-refresh{
      margin-left: -60px;
    }
    
    .btn-pdf{
      margin-left: -80px;
    }
  </style>
</head>
<body>
  <div class="box">
    <div class="box-header">
      <form method="post" action="<?= base_url('laporan'); ?>">
        <div class="row">
          <div class="col-md-3">
            <h4 class="text-primary"><b>Filter Laporan Peminjaman</b></h4>
          </div>
          <div class="col-md-2">
            <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal awal" onfocus="(this.type = 'date')">
          </div>
          <div class="col-md-2">
            <input type="text" name="tgl_akhir" class="form-control tgl-akhir" placeholder="Tanggal akhir" onfocus="(this.type = 'date')">
          </div>
          <div class="col-md-1">
            <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fa fa-filter"></i> Filter</button>
          </div>
          <div class="col-md-2">
            <a href="" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i> Refresh</a>
          </div>
          <div class="col-md-2">
            <a href="<?= base_url('laporan/pdf_report'); ?>" class="btn btn-danger btn-block btn-pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> View PDF</a>
          </div>
        </div>
      </form>
    </div>
  
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id Peminjaman</th>
            <th>Peminjam</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
          </tr>
        </thead>
  
        <tbody>
          <?php foreach($laporan as $row): ?>
          <tr>
            <td><?= $row->id_pm; ?></td>
            <td><?= $row->nama_anggota; ?></td>
            <td><?= $row->judul_buku; ?></td>
            <td><?= mediumdate_indo($row->tgl_pinjam); ?></td>
            <td><?= mediumdate_indo($row->tgl_kembali); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div> 
</body>
</html>

