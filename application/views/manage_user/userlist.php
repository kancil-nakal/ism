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
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <?= form_error(
                                    'menu',
                                    '<div style="opacity: 0.8" class="alert alert-danger alert-dismissible fade show" role="alert">',
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button></div>'
                                );
                                ?>

                                <?= $this->session->flashdata('message'); ?>
                                <a href="" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#newSubmenuModal">Add New User</a>
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($adminUser as $au) : ?>
                                        <tr>
                                            <td><?= $au['name']; ?></td>
                                            <td><?= $au['email']; ?></td>
                                            <td><?= $au['role']; ?></td>
                                            <td>
                                                <div class="form-check">
                                                    <?php if ($au['role'] == 'Administrator') : ?>
                                                        <input class="form-check-input" type="checkbox" value="<?= $au['is_active']; ?>" checked disabled>
                                                    <?php else : ?>
                                                        <input class="form-check-input" type="checkbox" value="<?= $au['is_active']; ?>" checked>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-xs btn-rounded btn-info"><i class="fas fa-eye mr-1"></i>access</a>
                                                <a href="" class="btn btn-xs btn-rounded btn-success"><i class="fas fa-edit mr-1"></i>edit</a>
                                                <a href="" class="btn btn-xs btn-rounded btn-danger"><i class="fas fa-times mr-1"></i>delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="newSubmenuModal" tabindex="-1" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('manage_submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['menu_id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon ">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="defaultCheck1">
                                Active
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- DataTables  & Plugins -->
<script src="<?= base_url('asset/vendor/'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/vendor/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>