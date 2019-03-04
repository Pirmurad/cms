<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">

            Yeni məhsul əlavə et

        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Məhsulun adı</label>
                        <input type="text" class="form-control" placeholder="Başlıq" name="title">
                    </div>
                    <div class="form-group">
                        <label>Məhsul haqqında</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Yadda saxla</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-danger btn-outline btn-md">Ləğv et</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->

</div>