<script type="text/javascript" src="<?= PLUGLINK.'/ckeditor/ckeditor.js' ?>"></script>
<?= get_template('fine_upload'); ?>

<section class="content-header">
   <h1>
    Manajemen
      <small>Agenda</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class=""> <a href="<?= base_url('admin/agenda') ?>">Agenda</a></li>
      <li class="active">add</li>
   </ol>
</section>



<!-- Main content -->
<section class="content">
  <div class="row" >
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg- classes -->
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                     <a class="btn btn-flat btn-success" title="Kembali" href="<?= site_url('admin/agenda'); ?>"><i class="fa fa-reply" ></i> Kembali</a>                     
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET.'include/img/add2.png'; ?>" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Tambah data</h3>
                     <h5 class="widget-user-desc">Agenda<i class="label bg-yellow"></i></h5>
                  </div>

                 <?= form_open('', [
                    'name'    => 'form_user', 
                    'class'   => 'form-horizontal', 
                    'id'      => 'form_user', 
                    'enctype' => 'multipart/form-data', 
                    'method'  => 'POST'
                  ]); 

                  ?>
                  <div class="form-group ">
                      <label for="username" class="col-sm-2 control-label">Judul Kegiatan<i class="required"></i></label>
                      <div class="col-sm-8">
                         <input type="text" name="judul_kegiatan" id="judul_kegiatan" class="form-control" placeholder="Judul Kegiatan">
                        <small class="info help-block"></small>
                      </div>
                  </div>
                  <div class="form-group ">
                        <label for="username" class="col-sm-2 control-label">Jenis Kegiatan<i class="required"></i></label>
                        <div class="col-sm-8">
                           <input type="text" name="jenis_kegiatan" id="jenis_kegiatan" class="form-control" placeholder="Jenis Kegiatan">
                          <small class="info help-block required"><i class="required">*Seminar, Sidang, Workshop</i></small>
                        </div>
                    </div>
                    <div class="form-group ">

                        <label for="username" class="col-sm-2 control-label">Program Studi<i class="required"></i></label>
                        <div class="col-sm-8">
                          <?php echo cmb_dinamis('nama_prodi','ci_prodi','nama_prodi','id','', 'select2'); ?>

                          <small class="info help-block"></small>

                        </div>

                    </div>



                    <div class="form-group ">
                        <label for="fullname" class="col-sm-2 control-label">Jam <i class="required"></i></label>
                        <div class="col-sm-8">
                          <div class="row">
                              <div class="col-xs-6">
                                  <div class='input-group date timepicker' >
                                    <input type="text" class="form-control " id="timepicker" placeholder="Jam Mulai" name="jam_mulai" value="" />
                                      <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>   
                                      </span>
                                  </div>
                              </div>
                               <div class="col-xs-6">
                                   <small class="info help-block">S/d <i class="required">Selesai</i></small>
                                  
                                  <!-- <div class='input-group date timepicker' >
                                    <input type="text" class="form-control" id="timepicker2" placeholder="Jam Akhir" name="jam_berakhir" value="" />
                                      <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>   
                                      </span>
                                  </div>-->
                              </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="text" class="col-sm-2 control-label">Tanggal <i class="required"></i></label>
                        <div class="col-sm-8">
                          <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" name="tanggal" value="" class="form-control pull-right" id="datepicker">
                            </div>
                          <small class="info help-block required">
                            Hari ini Tanggal : <i class="required"><?= date('d-M-Y') ?></i>
                          </small>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="text" class="col-sm-2 control-label">Kegiatan <i class="required"></i></label>
                        <div class="col-sm-8">
                          <textarea name="kegiatan" id="content1" cols="30" rows="10" placeholder="Kegiatan..." class="form-control text-editor"></textarea>

                          <small class="info help-block"></small>
                        </div>
                    </div>
                    <div class="message">
                      
                    </div>

                    <div class="row-fluid col-md-7">
                        <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="save (Ctrl+s)"><i class="fa fa-save" ></i> Save</button>
                        <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="save and back to the list (Ctrl+d)"><i class="ion ion-ios-list-outline" ></i> Save and Go to The List</a>
                        <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="cancel (Ctrl+x)"><i class="fa fa-undo" ></i> Cancel</a>
                        <span class="loading loading-hide"><img src="<?= BASE_ASSET ?>include/img/loading-spin-primary.svg"> <i>Loading, Saving data</i></span>
                     </div>
                  <?= form_close(); ?>
               </div>
               <!-- /.widget-user -->
            </div>
            <!--/box body -->
         </div>
         <!--/box -->
      </div>
   </div>
</section>

<!-- Page script -->
<script>
  $(document).ready(function() {
    CKEDITOR.replace('content',{
      filebrowserUploadUrl : '',
      filebrowserUploadMethod : 'form',


    });
    $('.timepicker').datetimepicker({

           format: 'HH:mm'

          });

            //Date picker

    $('#datepicker').datepicker({

      autoclose: true,

      format: 'yyyy/mm/dd'

    });


    $('#btn_cancel').click(function() {
        swal({
                title: "Are you sure?",
                text: "the data that you have created will be in the exhaust!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                cancelButtonText: "No!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = BASE_URL + 'admin/agenda';
                }
            });

        return false;
    }); //end btn cancel/

    $('.btn_save').click(function() {
        $('.message').fadeOut();

        var form_user = $('#form_user');
        var data_post = form_user.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({
            name: 'save_type',
            value: save_type
        });

        $('.loading').show();


        $.ajax({
                url: BASE_URL + '/admin/agenda/add_save',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                if (res.success) {
                    if (res.message == false) {
                        window.location.href = BASE_URL + 'admin/agenda';
                        return;
                    }
                    $('.message').printMessage({
                        message: res.message
                    });
                    $('.message').fadeIn();
                    $('form input[type != hidden], form textarea, form select').val('');
                    $('.chosen').val('').trigger('chosen:updated');

                } else {
                    $('.message').printMessage({
                        message: res.message,
                        type: 'warning'
                    });
                    $('.message').fadeIn();
                }

            })
            .fail(function() {
                $('.message').printMessage({
                    message: 'Error save data',
                    type: 'warning'
                });
            })
            .always(function() {
                $('.loading').hide();
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 1000);
            });

        return false;
    }); //end btn save/

 
}); //end doc ready/
</script>
