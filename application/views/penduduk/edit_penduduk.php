<?php echo $this->breadcrumb->output(); ?>
<?php if ($this->session->flashdata('error') <> '') { ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Oh snap!</strong> <?php echo $this->session->flashdata('error')?>
  </div>
<?php } else {
  # code...
} ?>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title">Edit penduduk NIK.<?php echo $id?></h4>
      </div>
      <div class="panel-body form-horizontal">
        <?php echo form_open_multipart('penduduk/proc_add_penduduk')?>
        <input type="hidden" value="<?php echo $id; ?>" name="no_kk">
          <div class="form-group">
            <label class="col-sm-2 control-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" name="nik" value="<?php echo $all->nik?>" placeholder="Nik" class="form-control" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama"  value="<?php echo $all->nama?>" class="form-control" placeholder="Nama" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" name="tmp_lahir" value="<?php echo $all->tempat_lahir?>" class="form-control" placeholder="Tempat lahir" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" name="tgl_lahir" value="<?php echo $all->tanggal_lahir?>" class="form-control" placeholder="Tanggal lahir" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <div class="radio radio-replace">
                <div class="col-md-3">
                  <input type="radio" name="jk" id="radio1" value="L" <?php if($all->jenis_kelamin=='L'){echo 'checked';}?> required>
    								<label for="radio1">Laki - laki</label>
                </div>
                <div class="col-md-3">
                  <input type="radio" name="jk" id="radio1" value="P" <?php if($all->jenis_kelamin=='P'){echo 'checked';}?> required>
    								<label for="radio1">Perempuan</label>
                </div>
							</div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Golongan Darah</label>
            <div class="col-sm-10">
              <select class="form-control" id="golongan_darah" name="golongan_darah" data-placeholder="Select a state" required=>
                <option value="">Select a state</option>
                <option value="A" <?php if($all->golongan_darah=='A'){echo 'selected';}?>>A</option>
                <option value="B" <?php if($all->golongan_darah=='B'){echo 'selected';}?>>B</option>
                <option value="AB"<?php if($all->golongan_darah=='AB'){echo 'selected';}?>>AB</option>
                <option value="O" <?php if($all->golongan_darah=='O'){echo 'selected';}?>>O</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea  name="alamat" class="form-control" placeholder="Alamat" required><?php echo $all->alamat?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" name="pekerjaan" value="<?php echo $all->pekerjaan?>" class="form-control" placeholder="Pekerjaan" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Kewarganegaraan</label>
            <div class="col-sm-10">
              <input type="text" name="negara" class="form-control" value="indonesia" placeholder="INDONESIA" readonly="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-control" id="agama" name="agama" data-placeholder="Select a state" required>
                <?php foreach ($agama as $key) :?>
                  <option value="">Select a state</option>
                  <option value="<?php echo $key->agama?>" <?php if($all->agama==$key->agama){echo 'selected';}?>><?php echo $key->agama?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
              <input type="file" id="field-file" name="gambar" class="form-control">
            </div>
          </div>
          <br>

          <div class="form-group">
            <div class="col-md-12">
              <div class="user-info pull-right">
                <button onclick="window.location='<?php echo base_url('penduduk/detail_kk/'.$id)?>';" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-blue" type="submit">Save</button>
              </div>

            </div>
          </div>
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function () {
  $("#golongan_darah").select2({
    placeholder: "Please Select"
  });

  $("#agama").select2({
    placeholder: "Please Select"
  });
});
</script>
