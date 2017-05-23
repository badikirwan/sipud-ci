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
            <thead class="">
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
                <a href="<?php echo base_url('penduduk/detail_penduduk/'.$key->nik)?>" class="btn btn-info btn-sm" type="button"><i class="icon-eye"></i></a>
                <a href="<?php echo base_url('penduduk/edit_penduduk/'.$key->nik)?>" class="btn btn-primary btn-sm" type="button"><i class="icon-pencil"></i></a>
                <button onclick="ubah_status()" class="btn btn-warning btn-sm" type="button"><i class="icon-block"></i></button>
                <button onclick="delete_penduduk(<?php echo $key->nik?>)"class="btn btn-secondary btn-sm delete" type="button"><i class="icon-trash"></i></button>
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

<script type="text/javascript">
function delete_penduduk(id) {
bootbox.dialog({
  message: "Apakah anda yakin ingin menghapusnya ?",
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
          url: '<?php echo base_url('penduduk/delete_penduduk')?>/'+id,
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

function ubah_status(id) {
bootbox.dialog({
  message: "Apakah anda yakin ingin merubah status ?",
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
          url: '<?php echo base_url('penduduk/delete_penduduk')?>/'+id,
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
