<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= $title; ?></h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="row">


            <div class="col-xs-8">

                <div class="btn-group">
                    <button class="btn bg-olive" data-toggle="modal" data-target="#addRoleModal">Add New Role</button>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?= $subtitle; ?></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($role as $r) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $r['role']; ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-xs" href="<?= base_url('role/access/') . $r['id']; ?>">access</a>
                                            <a class="btn btn-primary btn-xs" href="<?= base_url('role/edit/') . $r['id']; ?>">edit</a>
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('role/delete/') . $r['id']; ?>">delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<!-- Add Role Modal -->

<div class="modal fade" id="addRoleModal">
    <div class="modal-dialog">
        <div class="modal-content border-primary">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white"> Add New Role</h5>
            </div>
            <form action="<?= base_url('role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--End Modal -->