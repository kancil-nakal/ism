<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('listemail/listemail'); ?>">New List Email</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <!-- <?= form_error(
                                    'product',
                                    '<div style="opacity: 0.8" class="alert alert-danger alert-dismissible fade show" role="alert">',
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button></div>'
                                );
                                ?> -->
                        <!-- form start -->
                        <form action="<?= base_url('listemail/add'); ?>" method="post">
                            <div class="card-body row">
                                <div class="card-header">
                                </div>
                                <!-- /.card-header -->
                                <div class="col-sm-6">
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="name">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="name">
                                            <?= form_error('name', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="nik">NIK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik" name="nik">
                                            <?= form_error('nik', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="telp">Telp</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="telp" name="telp">
                                            <?= form_error('telp', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="email1">Email (Facility)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email1" name="email1">
                                            <?= form_error('email1', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="email2">Email (Security)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email2" name="email2">
                                            <?= form_error('email2', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="email3">Email (Enterprise)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email3" name="email3">
                                            <?= form_error('email3', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="email4">Email (Mindotek)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email4" name="email4">
                                            <?= form_error('email4', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="email5">Email (Implementation)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email5" name="email5">
                                            <?= form_error('email5', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="address">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="address" name="address">
                                            <?= form_error('Address', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="dept">Dept</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="dept" name="dept">
                                            <?= form_error('dept', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="position">Position</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="position" name="position">
                                            <?= form_error('position', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="site">Site</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="site" name="site">
                                            <?= form_error('site', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-3 col-form-label" for="region">Region</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="region" name="region">
                                            <?= form_error('site', '<small class="text-danger ">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label class="col-sm-3 " for="is_active">Active</label>
                                        <div class="custom-control custom-switch ml-2">
                                            <input type="checkbox" value="1" class="custom-control-input" id="is_active" name="is_active" checked>
                                            <label class="custom-control-label" for="is_active"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class=" card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Select2 -->
<script src="<?= base_url('asset/vendor/'); ?>plugins/select2/js/select2.full.min.js"></script>



<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>