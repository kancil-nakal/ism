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
                            <h3 class="card-title">user email list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped " style="width:100%">

                                <?= $this->session->flashdata('message'); ?>
                                <a href="<?= base_url('listemail/add'); ?>" class="btn btn-round btn-secondary"><i class="fas fa-plus-square mr-2"></i>Add</a>
                                <thead>
                                    <tr class="my-2">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email (facility)</th>
                                        <th scope="col">Email (security)</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Dept</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Site</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($users as $user) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td class="text-"><?= $user['name']; ?></td>
                                            <td class="text-"><?= $user['email1']; ?></td>
                                            <td class="text-"><?= $user['email2']; ?></td>
                                            <td class="text-"><?= $user['address']; ?></td>
                                            <td class="text-"><?= $user['dept']; ?></td>
                                            <td class="text-"><?= $user['position']; ?></td>
                                            <td class="text-"><?= $user['site']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a href="<?= base_url(); ?>listemail/profile/<?= $user['user_id']; ?>" class="dropdown-item">
                                                            <i class="fas fa-eye mr-2"></i>Detail
                                                        </a>
                                                        <a href="<?= base_url(); ?>listemail/update/<?= $user['user_id']; ?>" class="dropdown-item">
                                                            <i class="fas fa-edit mr-2"></i>Update
                                                        </a>
                                                    </div>
                                                </div>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- DataTables  & Plugins -->
<script src="<?= base_url('asset/vendor/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/vendor/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/vendor/'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/vendor/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>