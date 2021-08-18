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
                        <li class="breadcrumb-item"><a href="<?= base_url('listemail/profile/') . $users['user_id']; ?>">Profile</a></li>
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
                        <div class="card-body">
                            <form action="<?= base_url('listemail/updateprofile'); ?>" class="form-horizontal">
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
                                        <input type="name" class="form-control" id="name" name="name" value="<?= $users['name']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="nik" class="form-control" id="nik" name="nik" value="<?= $users['nik']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_card" class="col-sm-2 col-form-label">ID Card</label>
                                    <div class="col-sm-10">
                                        <input type="id_card" class="form-control" id="id_card" name="id_card" value="<?= $users['id_card']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Handphone</label>
                                    <div class="col-sm-10">
                                        <input type="telp" class="form-control" id="telp" name="telp" value="<?= $users['id_card']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-2 col-form-label">Email<small>facility</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email1" name="email1" value="<?= $users['email1']; ?>">
                                    </div>
                                    <label for="pass1" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass1" name="pass1" value="<?= $users['pass1']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email2" class="col-sm-2 col-form-label">Email<small>security</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email2" name="email2" value="<?= $users['email2']; ?>">
                                    </div>
                                    <label for="pass2" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass2" name="pass2" value="<?= $users['pass2']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email3" class="col-sm-2 col-form-label">Email<small>enterprise</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email3" name="email3" value="<?= $users['email3']; ?>">
                                    </div>
                                    <label for="pass3" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass3" name="pass3" value="<?= $users['pass3']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email4" class="col-sm-2 col-form-label">Email<small>mindotek</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email4" name="email4" value="<?= $users['email4']; ?>">
                                    </div>
                                    <label for="pass4" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass4" name="pass4" value="<?= $users['pass4']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email5" class="col-sm-2 col-form-label">Email<small>implementation</small>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email5" name="email5" value="<?= $users['email5']; ?>">
                                    </div>
                                    <label for="pass5" class="col-sm-1 col-form-label">Pass
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control" id="pass5" name="pass5" value="<?= $users['pass5']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address" value="<?= $users['address']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dept" class="col-sm-2 col-form-label">Dept</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dept" name="dept" value="<?= $users['dept']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="position" name="position" value="<?= $users['position']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="site" class="col-sm-2 col-form-label">Site</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="site" name="site" value="<?= $users['site']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="region" class="col-sm-2 col-form-label">Region</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="region" name="region" value="<?= $users['region']; ?>">
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                        <div class="  card-footer">
                            <div class="  d-flex justify-content-end">
                                <button type="submit" class="btn btn-success"><i class="fas fa-edit mr-2"></i>Save</button>
                            </div>
                        </div>
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