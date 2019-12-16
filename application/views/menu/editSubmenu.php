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
                        <form class="form-horizontal" action="<?= base_url('submenu/edit'); ?>" method="post">
                            <input type="hidden" name="id" title="id" value="<?= $submenu['id']; ?>">
                            <div class="form-group">
                                <label for="Title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="menu" class="col-sm-2 control-label">Parent menu</label>
                                <div class="col-sm-10">

                                    <select name="menu_id" id="menu_id" class="form_control">
                                        <?php foreach ($menu as $m) : ?>
                                            <?php if ($m['id'] == $submenu['menu_id']) : ?>
                                                <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                                            <?php endif; ?>
                                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="menu" class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="menu" class="col-sm-2 control-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="menu" class="col-sm-2 control-label">is_active</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $submenu['is_active']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <a class="btn btn-danger" href="<?= base_url('submenu'); ?>">Cancel</a>
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