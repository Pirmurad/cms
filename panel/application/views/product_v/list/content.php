<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">

            Məhsulların siyahısı

            <a href="<?php echo base_url("product/new_form");  ?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i>Yeni əlavə et</a>

        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) {?>

            <div class="alert alert-info text-center">
                <p>Burada hər hansı bir məhsula ayıd qeydlər mövcud deyil ! Əlavə etmək üçün <a href="<?php echo base_url("product/new_form");  ?>">klik edin</a></p>
            </div>
            <?php } else { ?>
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>url</th>
                    <th>başlıq</th>
                    <th>açıqlama</th>
                    <th>vəziyyəti</th>
                    <th>əməliyyat</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item) { ?>

                    <tr>
                        <td># <?php echo $item->id; ?></td>
                        <td><?php echo $item->url; ?></td>
                        <td><?php echo $item->title; ?></td>
                        <td><?php echo $item->description; ?></td>
                        <td>
                            <input
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked":""; ?>
                            />
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i> Sil</a>
                            <a href="#" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square"></i> Düzəlt</a>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->

</div>