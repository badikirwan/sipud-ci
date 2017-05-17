<!-- Breadcrumb -->
<?php echo $this->breadcrumb->output(); ?>
<!-- Breadcrumb -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title"><?php echo $title?> di kk no.<?php echo $no_kk?></h4>
        <ul class="panel-tool-options">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i>Options</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#" id="delete"><i class="icon-arrows-ccw"></i> Update data</a></li>
              <li><a href="<?php echo base_url('penduduk/add_penduduk/'.$id)?>"><i class="icon-plus"></i> Add data</a></li>
            </ul>
           </li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th >Aksi</th>
              </tr>
            </thead>
           <tbody>
           <?php
           $no = 0;
           foreach ($all as $key) :
             $no++; ?>
             <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $key->nik?></td>
              <td><?php echo $key->nama?></td>
              <td>
                <?php if ($key->jenis_kelamin== 'L') {
                  echo "LAKI - LAKI";
                } else {
                  echo "PEREMPUAN";
                }?>
              </td>
              <td><?php echo $key->tanggal_lahir?></td>
              <td>
                <?php if ($key->status == '1') {
                  echo "<label class='label label-success'> HIUP</label>";
                } else {
                  echo "<label class='label label-danger'> MENINGGAL</label>";
                }?>
              </td>
              <td>
                <button class="btn btn-info btn-sm" type="button"><i class="icon-eye"></i></button>
                <button class="btn btn-primary btn-sm" type="button"><i class="icon-pencil"></i></button>
                <button class="btn btn-warning btn-sm" type="button"><i class="icon-block"></i></button>
                <button onclick="delete_kk(<?php echo $key->nik?>)"class="btn btn-secondary btn-sm delete" type="button"><i class="icon-trash"></i></button>
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
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="save" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</form>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $("#save").click(function() {
    $.ajax({
      url : '<?php echo base_url('penduduk/add_kk')?>',
      data : $('#form').serialize(),
      type : 'POST',
      success : function(data) {
        location.reload();
      },
      error : function(data) {

      }
    });
  });
});

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
