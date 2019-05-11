<?php $__env->startSection('content'); ?>
	<div class="row-fluid">
        <div class="span12">
        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget red">
            <div class="widget-title">
                <h4>All Category</h4>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered" id="sample_1">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th class="hidden-phone">Category Name</th>
                        <th class="hidden-phone">Status</th>
                        <th class="hidden-phone">created at</th>
                        <th class="hidden-phone">Updated at</th>
                        <th class="hidden-phone">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX">
                            <td><?php echo e($single_cat->category_id); ?></td>
                            <td class="hidden-phone"><?php echo e($single_cat->category_name); ?></td>
                            <td class="hidden-phone">
                                <?php 
                                    if ($single_cat->publication_status == '1') {
                                        echo "Published";
                                    }else{
                                        echo "Unpublished";
                                    }
                                ?>
                            </td>
                            <td class="center hidden-phone"><?php echo e($single_cat->created_at); ?></td>
                            <td class="center hidden-phone"><?php echo e($single_cat->updated_at); ?></td>
                            <td class="hidden-phone">
                            	<p>
                                    <?php if($single_cat->publication_status == '1'): ?>
                                    <a href="<?php echo e(URL::to('unpublish_category/'.$single_cat->category_id)); ?>" class="btn  btn-danger"><i class="icon-thumbs-down"></i></a>
                                    <?php else: ?>
                                    <a href="<?php echo e(URL::to('publish_category/'.$single_cat->category_id)); ?>" class="btn  btn-primary"><i class="icon-thumbs-up"></i></a>
                                    <?php endif; ?>
                            		<a href="" class="btn  btn-primary"><i class="icon-edit"></i></a>
                            		<a href="<?php echo e(URL::to('/delete_category/'.$single_cat->category_id)); ?>" class="btn  btn-danger"><i class="icon-trash"></i></a>
                                </p>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE widget-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MyBlog\resources\views/admin/Pages/viewCategory.blade.php ENDPATH**/ ?>