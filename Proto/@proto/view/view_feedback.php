<?php
    class FeedbackView{
        public static function initView($dir, $paths, $err_code){
            $auth = Session::getAuth();

            if(isset($err_code)) $err = "&err=$err_code";
            else $err = "";
?>
            <div class="container mt-5">
                <?php Breadcrumb::initBreadcrumb($dir, $paths) ?>
                <div class="card">
                    <form class="card-body" action="<?php Nav::echoURL($dir, App::$routeFeedback . '?m=submit' . $err) ?>" method="POST">
                        <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                            <?php if(Session::checkUserExisted()){ ?>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $auth->email; ?>" required="" readonly>
                            <?php }else{ ?>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="" required>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputTitle">Title (max 100 letters)</label>
                          <input value="" type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter the title" maxlength="100" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputDescription">Description (max 400 letters) (Optional)</label>
                          <textarea name="description" class="form-control" id="exampleInputDescription" placeholder="Tell us the problem you've founded or any opinion you would like to advise us." rows="6" maxlength="400"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
<?php
        }
    }