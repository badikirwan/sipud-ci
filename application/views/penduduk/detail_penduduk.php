<!-- Breadcrumb -->
<?php echo $this->breadcrumb->output(); ?>
<!-- Breadcrumb -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title">Detail Penduduk NIK.<?php echo $all->nik?></h4>
      </div>
      <div class="panel-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">NIK :</label>
            <div class="col-sm-10">
              <span class="help-block m-b-none"><?php echo $all->nik?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->nama?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Lahir :</label>
            <div class="col-sm-5">
              <span class="help-block m-b-none"><?php echo $all->tempat_lahir?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Lahir :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->tanggal_lahir?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin :</label>
            <div class="col-sm-6">
              <?php if ($all->jenis_kelamin == 'L') {
                echo '<span class="help-block m-b-none">LAKI - LAKI</span>';
              } else {
                echo '<span class="help-block m-b-none">PEREMPUAN</span>';
               } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Golongan Darah :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->golongan_darah?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Agama :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->agama?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->alamat?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Pekerjaan :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->pekerjaan?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kewarganegaraan :</label>
            <div class="col-sm-6">
              <span class="help-block m-b-none"><?php echo $all->kewarganegaraan?></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


</div>
