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
                        <li class="breadcrumb-item"><a href="<?= base_url('listemail'); ?>">List Email</a></li>
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                        </div><!-- /.card-header -->
                        <!-- <?= form_error(
                                    'product',
                                    '<div style="opacity: 0.8" class="alert alert-danger alert-dismissible fade show" role="alert">',
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button></div>'
                                );
                                ?> -->
                        <form action="<?= base_url('listemail/add'); ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 " for="is_active">Active</label>
                                    <div class="custom-control custom-switch ml-2 col-sm-8">
                                        <input type="checkbox" value="1" class="custom-control-input" id="is_active" name="is_active" checked>
                                        <label class="custom-control-label" for="is_active"></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" id="name" name="name">
                                        <?= form_error('name', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="nik" class="form-control" id="nik" name="nik">
                                        <?= form_error('nik', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_card" class="col-sm-2 col-form-label">ID Card</label>
                                    <div class="col-sm-10">
                                        <input type="id_card" class="form-control" id="id_card" name="id_card">
                                        <?= form_error('id_card', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Handphone</label>
                                    <div class="col-sm-10">
                                        <input type="telp" class="form-control" id="telp" name="telp">
                                        <?= form_error('telp', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-2 col-form-label">Email<small>facility</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email1" name="email1">
                                        <?= form_error('email1', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                    <label for="pass1" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass1" name="pass1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email2" class="col-sm-2 col-form-label">Email<small>security</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email2" name="email2">
                                        <?= form_error('email2', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                    <label for="pass2" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass2" name="pass2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email3" class="col-sm-2 col-form-label">Email<small>enterprise</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email3" name="email3">
                                        <?= form_error('email3', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                    <label for="pass3" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass3" name="pass3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email4" class="col-sm-2 col-form-label">Email<small>mindotek</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email4" name="email4">
                                        <?= form_error('email4', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                    <label for="pass4" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass4" name="pass4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email5" class="col-sm-2 col-form-label">Email<small>implementation</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email5" name="email5">
                                        <?= form_error('email5', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                    <label for="pass5" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass5" name="pass5">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dept" class="col-sm-2 col-form-label">Dept</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dept" name="dept">
                                        <?= form_error('dept', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="position" name="position">
                                        <?= form_error('position', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="site" class="col-sm-2 col-form-label">Site</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="site" name="site">
                                        <?= form_error('site', '<small class="text-danger ">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="region" class="col-sm-2 col-form-label">Region</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="region" name="region">
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                            <div class="card-footer">
                                <div class=" d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-edit mr-2"></i>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- bs-custom-file-input -->
<script src="<?= base_url('asset/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>