<?php $__env->startSection('content'); ?>
    <div class="widget green">
        <div class="widget-title">
            <h4>Add Category </h4>
        </div>
        <div class="widget-body">
            <!-- BEGIN FORM-->
            <form action="<?php echo e(url('/category-check')); ?>" method="post" class="form-horizontal">
                <?php echo csrf_field(); ?>
            <div class="control-group">
                <?php
                    $warning = Session::get('warning');
                    if ($warning) { ?>
                        <div class="alert alert-warning cus_warning_alert" role="alert">
                            <?php
                                echo $warning;
                                Session::put('warning','');
                             ?>
                        </div>

                <?php }?>
                <?php
                    $message = Session::get('message');
                    if ($message) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php
                                echo $message;
                                Session::put('message','');
                             ?>
                        </div>

                <?php }?>
                <label class="control-label">Category name</label>
                <div class="controls">
                    <input type="text" name="category_name" class="span6 " />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                    <select name="publication_status" class="span6 " data-placeholder="Choose a Category" tabindex="1">
                        <option value="">Select...</option>
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn">Cancel</button>
            </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MyBlog\resources\views/admin/Pages/category.blade.php ENDPATH**/ ?>