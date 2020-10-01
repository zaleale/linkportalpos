<section class="content-header">
    <h1>
        Product Knowledge
        <small>Informasi Produk</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Product Knowledge</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Product Knowledge</h3>
            <div class="pull-right">
                <a href="<?= site_url('product_knowledge') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-user-undo"></i>Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('product_knowledge/process') ?>" method="post">
                        <form>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $row->product_knowledge_id ?>">
                                <label>Nama Aplikasi</label>
                                <input type="text" name="nama_aplikasi" value="<?= $row->nama_aplikasi ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <input type="text" name="user" class="form-control" required><?= $row->user ?></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" required><?= $row->password ?></input>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <textarea name="link" class="form-control" required><?= $row->link ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Save</i></button>
                                <button type="reset" class="btn  btn-flat">Reset</button>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>