<?php
    class ExAPIView{
        public static function initView($dir, $paths, $items){
?>
            <div class="container padding-top">
                <?php Breadcrumb::initBreadcrumb($dir, $paths) ?>
                <h2><i class="fas fa-server mr-3"></i>Money Saving App</h2>
                <h5 class="mt-4">Proto API example (Back-End version)</h5>

                <form action="<?php Nav::echoURL($dir, "router/example.php" . '?m=add') ?>" method="POST" class="input-group mb-3 mt-4">
                  <input name="text" type="text" class="form-control" placeholder="description" aria-label="description" aria-describedby="button-addon2">
                  <input name="value" type="number" class="form-control" placeholder="saving / spending (&#3647;)" aria-label="saving / spending (&#3647;)" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fas fa-plus"></i>&nbsp; Add
                    </button>
                  </div>
                </form>
                
                <div class="list-group">
                    <?php foreach ($items as $key => $value) { ?>
                        <a href="<?php Nav::echoURL($dir, "router/example.php" . "?m=remove&id=$value->ID") ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <h6><?php echo $value->text ?>
                                <div class="pt-2"><small class="text-muted"><?php echo $value->date ?></small></div>
                            </h6>
                            <h5>
                                <?php if($value->value >= 0){ ?>
                                    <span class="badge badge-success badge-pill">&#3647; +<?php echo $value->value ?></span>
                                <?php }else{ ?>
                                    <span class="badge badge-danger badge-pill">&#3647; <?php echo $value->value ?></span>
                                <?php } ?>
                                <span class="close ml-3 text-danger" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </span>
                            </h5>
                        </a>                        
                    <?php } ?>

                    <li class="list-group-item d-flex justify-content-between align-items-center bg-info">
                        <h5 class="text-light">Total</h5>
                        <h5><span class="badge badge-light badge-pill">&#3647; <?php echo self::sumValue($items) ?></span></h5>
                    </li>
                </div>

            </div>
<?php
        }

        public static function sumValue($items){
            $sum = 0;
            foreach ($items as $key => $value) {
                $sum = $sum + $value->value;
            }
            return $sum;
        }
    }