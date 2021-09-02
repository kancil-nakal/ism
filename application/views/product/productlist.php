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
                            <h3 class="card-title">Asset list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="width:100%">

                                <?= $this->session->flashdata('message'); ?>
                                <a href="<?= base_url('product/add'); ?>" class="btn btn-round btn-secondary"><i class="fas fa-plus-square mr-2"></i>Add</a>
                                <thead>
                                    <tr class="my-2">
                                        <th scope="col">#</th>
                                        <th scope="col">Purchase Date</th>
                                        <th scope="col">Asset</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">SN/IMEI</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Condition</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($products as $product) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td class="text-"><?= date('d M Y', strtotime($product['purchase_date'])); ?></td>
                                            <td class="text-capitalize"><?= $product['asset']; ?></td>
                                            <td class="text-"><?= $product['type']; ?></td>
                                            <td class="text-"><?= $product['description']; ?></td>
                                            <td class="text-"><?= $product['sn']; ?></td>
                                            <td class="text-"><?= $product['product_age']; ?> day</td>
                                            <td class="text-center">
                                                <?php if ($product['cond'] == 'new') : ?>
                                                    <p class="badge badge-sm badge-success"><?= $product['cond']; ?></p>
                                                <?php elseif ($product['cond'] == 'second') : ?>
                                                    <p class="badge badge-sm badge-secondary"><?= $product['cond']; ?></p>
                                                <?php elseif ($product['cond'] == 'standby') : ?>
                                                    <p class="badge badge-sm badge-info"><?= $product['cond']; ?></p>
                                                <?php elseif ($product['cond'] == 'repair') : ?>
                                                    <p class="badge badge-sm badge-warning"><?= $product['cond']; ?></p>
                                                <?php else : ?>
                                                    <p class="badge badge-sm badge-danger"><?= $product['cond']; ?></p>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-switch ml-2">
                                                    <?php if ($product['is_active'] == null) : ?>
                                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" disabled>
                                                    <?php else : ?>
                                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" checked disabled>
                                                    <?php endif ?>
                                                    <label class="custom-control-label" for="is_active"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fas fa-eye mr-2"></i>Detail
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
