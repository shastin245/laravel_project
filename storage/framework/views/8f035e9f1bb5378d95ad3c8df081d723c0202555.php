
<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update <?php echo e($data->title); ?>

        <a href="<?php echo e(url('admin/roomtype')); ?>" class="float-right btn btn-success btn sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
         <?php if(Session::has('success')): ?>
         <p class="text-success"><?php echo e(session('success')); ?></p>
         <?php endif; ?>


        <div class="table-responsive">
            <form enctype="multipart/form-data" method="post" action="<?php echo e(url('admin/roomtype/'.$data->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
            <table class="table table-bordered" >
            <tr>
            <tr>
                <th>Title</th>
                <td><input value="<?php echo e($data->title); ?>" name="title" type="text" class="form-control" /></td>
                </tr>
                <th>Price  $  </th>
                 <td><input value="<?php echo e($data->price); ?>" name="price" type="number" class="form-control" /></td>
                </tr>
                <tr>
                <th>Detail</th>
                <td><textarea name="detail" class="form-control"><?php echo e($data->detail); ?></textarea></td>
                </tr>
                <tr>
                <td colspan="2">
                <input type="submit" class="btn btn-primary" value="Submit" />
                </td> 
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotelmanagement\resources\views/roomtype/edit.blade.php ENDPATH**/ ?>