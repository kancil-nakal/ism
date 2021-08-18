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
                <div class="col-md-5">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>asset/img/profile/default.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $users['name']; ?></h3>

                            <h5 class="text-muted text-center"><?= $users['id_card']; ?></h5>
                            <p class="text-muted text-center"><?= $users['position']; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>NIK</b> <a class="float-right"><?= $users['nik']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Handphone</b> <a class="float-right"><?= $users['telp']; ?></a>
                                </li>

                                <li class="list-group-item">
                                    <?php if ($users['email1']) : ?>
                                        <b>Email</b> <small>tpm-facility</small> <a class="float-right"><?= $users['email1']; ?></a>
                                    <?php elseif (!$users['email1']) : ?>
                                        <b>Email </b> <small>tpm-security</small><a class="float-right"><?= $users['email2']; ?></a>
                                    <?php elseif ($users['email1'] == null and $users['email2'] == null) : ?>
                                        <b>Email</b><small>tpm-enterprise</small> <a class="float-right"><?= $users['email3']; ?></a>
                                    <?php elseif (!$users['email3']) : ?>
                                        <b>Email</b><small>mindotek</small> <a class="float-right"><?= $users['email4']; ?></a>
                                    <?php elseif (!$users['email4']) : ?>
                                        <b>Email</b><small>tpm-implementation</small> <a class="float-right"><?= $users['email5']; ?></a>
                                    <?php else : ?>
                                    <?php endif ?>
                                </li>

                                <!-- <li class="list-group-item">
                                    <b>Security</b> <a class="float-right"><?= $users['email2']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Enterprise</b> <a class="float-right"><?= $users['email3']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Mindotek</b> <a class="float-right"><?= $users['email4']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Implementation</b> <a class="float-right"><?= $users['email5']; ?></a>
                                </li> -->
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Print</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header p-2">
                            <h3 class="card-title ml-2">Settings</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="active tab-pane" id="settings">
                                    <form action="<?= base_url('listemail/updateprofile/'); ?>" class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="offset-sm-10">
                                                <a class="btn btn-info" href="<?= base_url(); ?>listemail/update/<?= $users['user_id']; ?>"><i class="fas fa-edit mr-2"></i>Update</a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 " for="is_active">Active</label>
                                            <div class="custom-control custom-switch ml-2 col-sm-8">
                                                <input type="checkbox" value="1" class="custom-control-input" id="is_active" name="is_active" checked disabled>
                                                <label class="custom-control-label" for="is_active"></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="name" class="form-control" id="name" name="name" value="<?= $users['name']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="nik" class="form-control" id="nik" name="nik" value="<?= $users['nik']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="id_card" class="col-sm-2 col-form-label">ID Card</label>
                                            <div class="col-sm-10">
                                                <input type="id_card" class="form-control" id="id_card" name="id_card" value="<?= $users['id_card']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="telp" class="col-sm-2 col-form-label">Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="telp" class="form-control" id="telp" name="telp" value="<?= $users['id_card']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-2 col-form-label">Email 1
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email1" name="email1" value="<?= $users['email1']; ?>" disabled>
                                            </div>
                                            <label for="pass1" class="col-sm-1 col-form-label">Pass
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="pass1" name="pass1" value="<?= $users['pass1']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email2" class="col-sm-2 col-form-label">Email 2
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email2" name="email2" value="<?= $users['email2']; ?>" disabled>
                                            </div>
                                            <label for="pass2" class="col-sm-1 col-form-label">Pass
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="pass2" name="pass2" value="<?= $users['pass2']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email3" class="col-sm-2 col-form-label">Email 3
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email3" name="email3" value="<?= $users['email3']; ?>" disabled>
                                            </div>
                                            <label for="pass3" class="col-sm-1 col-form-label">Pass
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="pass3" name="pass3" value="<?= $users['pass3']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email4" class="col-sm-2 col-form-label">Email 4
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email4" name="email4" value="<?= $users['email4']; ?>" disabled>
                                            </div>
                                            <label for="pass4" class="col-sm-1 col-form-label">Pass
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="pass4" name="pass4" value="<?= $users['pass4']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email5" class="col-sm-2 col-form-label">Email 5
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email5" name="email5" value="<?= $users['email5']; ?>" disabled>
                                            </div>
                                            <label for="pass5" class="col-sm-1 col-form-label">Pass
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="pass5" name="pass5" value="<?= $users['pass5']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="address" name="address" value="<?= $users['address']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dept" class="col-sm-2 col-form-label">Dept</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dept" name="dept" value="<?= $users['dept']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="position" class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="position" name="position" value="<?= $users['position']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="site" class="col-sm-2 col-form-label">Site</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="site" name="site" value="<?= $users['site']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="region" class="col-sm-2 col-form-label">Region</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="region" name="region" value="<?= $users['region']; ?>" disabled>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
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
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>