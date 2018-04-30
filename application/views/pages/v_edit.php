<!DOCTYPE html>
<html>
<head>
  <title>EDIT DATA</title>
</head>
<body>
  <div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
    <div class="card-header">Edit Data Siswa</div>
    <div class="card-body">
      <?php $r = $query->result()[0]; ?>
      <?php echo anchor('siswa','kembali','class="btn btn-secondary" style="margin:0 5px; margin-bottom:5px;"');?>
      <hr/>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="<?php echo base_url(). 'index.php/siswa/update'; ?>" method="post">
            <div class="form-group">
              <label>NISN</label>
              <input type="text" name="nisn" class="form-control"  value="<?php echo $r->nisn ?>">
              <small class="form-text text-muted">Isikan NISN sesuai data dari website : http://nisn.kemendikbud.go.id</small>
            </div>

            <div class="form-group">
              <label>NIS</label>
              <input type="text" name="nis" class="form-control"  value="<?php echo $r->nis ?>">
            </div>

            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control"  value="<?php echo $r->nama_lengkap ?>">
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <br/>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" value"L">
                <label class="form-check-label">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jk" value"P">
                <label class="form-check-label">Perempuan</label>
              </div>
              <br><br>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control"  value="<?php echo $r->tempat_lahir ?>">
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control"  value="<?php echo $r->tanggal_lahir ?>">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control" name="alamat"  value="<?php echo $r->alamat ?>" style="height: 100px;"></textarea>
              </div>

              <div class="form-group">
                <label>Jurusan</label>
                <?php
                $option = array(
                  ""=>"- Pilih Jurusan -",
                  "PG"=>"Persiapan Grafika",
                  "TPM"=>"Teknik Pemesinan",
                  "TSM"=>"Teknik Sepeda Motor",
                  "RPL"=>"Rekayasa Perangkat Lunak",
                  "TKJ"=>"Teknik Komputer Jaringan",
                  "AP"=>"Administrasi Perkantoran",
                  "PS"=>"Pemasaran",
                  "AK"=>"Akuntansi Keuangan Lembaga",
                );
                echo form_dropdown('jurusan',$option,'','class="form-control"');
                ?>
              </div>
              <button type="submit" class="btn btn-primarymb-2">Simpan</button>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>