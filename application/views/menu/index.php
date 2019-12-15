<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= $title; ?><small></small></h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="row">


            <div class="col-xs-8">

                <div class="btn-group">
                    <button class="btn bg-olive" data-toggle="modal" data-target="#addMenuModal">Add New Menu</button>
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
                                    <th>Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMenuModal">edit</a>
                                                <a class="btn btn-danger btn-xs" href="<?= base_url('menu/delMenu/') . $m['id']; ?>">delete</a>
                                            </div>
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


<!-- Add Menu Modal -->

<div class="modal fade" id="addMenuModal">
    <div class="modal-dialog">
        <div class="modal-content border-primary">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white"><i class="fa fa-star"></i> New Menu</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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

<!-- Add Menu Modal -->

<div class="modal fade" id="editMenuModal">
    <div class="modal-dialog">
        <div class="modal-content border-primary">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white"><i class="fa fa-star"></i> New Menu</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/edit'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $m['menu']; ?>">
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