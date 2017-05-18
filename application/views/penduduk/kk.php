<!-- Breadcrumb -->
<?php echo $this->breadcrumb->output(); ?>
<!-- Breadcrumb -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title"><?php echo $title?></h4>
        <ul class="panel-tool-options">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i>Options</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#" id="delete"><i class="icon-arrows-ccw"></i> Update data</a></li>
              <li><a href="#" data-toggle="modal" data-target="#modal-kk"><i class="icon-plus"></i> Add data</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
            <thead>
              <tr>
                <th>#</th>
                <th width="10%">No KK</th>
                <th>Desa</th>
                <th>Dusun</th>
                <th>Rt/Rw</th>
                <th width="20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($all as $key) :
                $no++; ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->no_kk?></td>
                  <td><?php echo $key->desa?></td>
                  <td><?php echo $key->dusun?></td>
                  <td><?php echo $key->rt?>/<?php echo $key->rw?></td>
                  <td>
                    <button onclick="location.href='<?php echo base_url('penduduk/detail_kk/'.$key->id_kk)?>'" class="btn btn-info btn-sm" type="button"><i class="icon-eye"></i> Detail</button>
                    <button onclick="get_id(<?php echo $key->id_kk?>)" class="btn btn-primary btn-sm" type="button"><i class="icon-pencil"></i> Edit</button>
                    <button onclick="delete_kk(<?php echo $key->id_kk?>)"class="btn btn-secondary btn-sm delete" type="button"><i class="icon-trash"></i> Delete</button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-kk" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <form action="#" id="form">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Add data</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" class="form-control">
          <div class="form-group">
            <label class="col-md-3">No KK</label>
            <div class="col-md-9">
              <input type="text" name="no_kk" placeholder="No KK" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Desa</label>
            <div class="col-md-9">
              <input type="text" name="desa" placeholder="Desa" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Dusun</label>
            <div class="col-md-9">
              <input type="text" name="dusun" placeholder="Dusun" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">RT</label>
            <div class="col-md-9">
              <input type="text" name="rt" placeholder="RT" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">RW</label>
            <div class="col-md-9">
              <input type="text" name="rw" placeholder="RW" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Kecamatan</label>
            <div class="col-md-9">
              <input type="text" name="kec" placeholder="Kecamatan" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Kab/Kota</label>
            <div class="col-md-9">
              <input type="text" name="kab_kota" placeholder="Kabupaten/Kota" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Kode Pos</label>
            <div class="col-md-9">
              <input type="text" name="kd_pos" placeholder="Kode Pos" class="form-control">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3">Provinsi</label>
            <div class="col-md-9">
              <input type="text" name="prov" placeholder="Provinsi" class="form-control">
            </div>
          </div>
        </div>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button onclick="save()" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</form>
</div>

<script type="text/javascript">
var methodku;
var url;

function get_id(id) {
  methodku = 'update';
  $.ajax({
    url : '<?php echo base_url('penduduk/get_id_kk/')?>'+ id,
    type : 'GET',
    dataType : 'JSON',
    success : function(data) {
      $('[name="id"]').val(data.id_kk);
      $('[name="no_kk"]').val(data.no_kk);
      $('[name="desa"]').val(data.desa);
      $('[name="dusun"]').val(data.dusun);
      $('[name="rt"]').val(data.rt);
      $('[name="rw"]').val(data.rw);
      $('[name="kec"]').val(data.kecamatan);
      $('[name="kab_kota"]').val(data.kab_kota);
      $('[name="kd_pos"]').val(data.kode_pos);
      $('[name="prov"]').val(data.provinsi);
      $('#modal-kk').modal('show'); // show bootstrap modal when complete loaded
      $('.modal-title').text('Edit Siswa');
    },
    error : function(jqXHR, textStatus, errorThrown) {
      alert('Error get data from ajax');
    }
  });
}

function save() {
  if (methodku == 'update') {
    url = '<?php echo base_url('penduduk/update_kk')?>';
  } else {
    url = '<?php echo base_url('penduduk/add_kk')?>';
  }
  $.ajax({
    url : url,
    data : $('#form').serialize(),
    type : 'POST',
    success : function(data) {
      location.reload();
    },
    error : function(data) {

    }
  });
}

function delete_kk(id) {
  bootbox.dialog({
    message: "Are you sure you want to delete ?",
    buttons: {
      success: {
        label: "No",
        className: "btn-default",
        callback: function() {
          $('.bootbox').modal('hide');
        }
      },
      danger: {
        label: "Yes",
        className: "btn-info",
        callback: function() {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url('penduduk/delete_kk')?>/'+id,
          }).done(function(response){
            location.reload();
          }).fail(function(){
            bootbox.alert('Something Went Wrong...');
          })
        }
      }
    }
  })
}
</script>
