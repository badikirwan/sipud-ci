$(document).ready(function() {
  $("#save").click(function() {
    $.ajax({
      url : '<?php echo base_url('agama/add')?>',
      data : $('#form').serialize(),
      type : 'POST',
      success : function(data) {

      },
      error : function(data) {

      }
    });
  });

  $(".delete").click(function() {
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
              url: '<?php echo base_url('user/delete_user')?>/',
            }).done(function(response){
              location.reload();
            }).fail(function(){
              bootbox.alert('Something Went Wrong...');
            })
          }
        }
      }
    })
  });
});
