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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?= $subtitle; ?></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?= base_url('role/edit'); ?>" method="post">
                            <input type="hidden" name="id" value="<?= $roleById['id']; ?>">
                            <div class="form-group">
                                <label for="menu" class="col-sm-2 control-label">Menu name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="role" name="role" value="<?= $roleById['role']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <a class="btn btn-danger" href="<?= base_url('role'); ?>">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->