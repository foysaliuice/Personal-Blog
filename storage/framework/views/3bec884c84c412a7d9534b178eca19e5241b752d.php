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
                        <th class="hidden-phone">Publication Status</th>
                        <th class="hidden-phone">created at</th>
                        <th class="hidden-phone">Updated at</th>
                        <th class="hidden-phone">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        
                        <td>01</td>
                        <td class="hidden-phone">Latest news</td>
                        <td class="hidden-phone">1</td>
                        <td class="center hidden-phone">02.03.2013</td>
                        <td class="center hidden-phone">02.03.2013</td>
                        <td class="hidden-phone">
                        	<p>
                        		<a href="" class="btn  btn-primary"><i class="icon-edit"></i></a>
                        		<a href="" class="btn  btn-primary"><i class="icon-remove"></i></a>
                            </p>
                        </td>
                    </tr>
                    
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE widget-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MyBlog\resources\views//admin/Pages/viewCategory.blade.php ENDPATH**/ ?>