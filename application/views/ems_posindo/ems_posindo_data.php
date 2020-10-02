<section class="content-header">
    <h1>
        EMS Pos Indonesia
        <small>Kiriman Internasional</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"> EMS Pos Indonesia</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Link EMS Pos Indonesia</h3>
            <!-- <div class="pull-right">
                <a href="<?= site_url('ems_posindo/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>Create
                </a>
            </div> -->
        </div>
        <div class="box-body table-responsive">
            <!-- <?php print_r($row->result()) ?> -->
            <table class="table table-bordered table-striped " id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Aplikasi</th>
                        <th>User</th>
                        <th>Password</th>
                        <th>Link</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?= $no++ ?>.</td>
                            <td><?= $data->nama_aplikasi ?></td>
                            <td><?= $data->user ?></td>
                            <td><?= $data->password ?></td>
                            <td><a href="https://ems.posindonesia.co.id/" target='_blank'><?= $data->link ?></a></td>
                            <!-- <td class="text=center" width="180px">
                                <a href="<?= site_url('ems_posindo/edit/' . $data->ems_posindo_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Update
                                </a>
                                <a href="<?= site_url('ems_posindo/del/' . $data->ems_posindo_id) ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td> -->
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>