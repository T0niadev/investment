<?php ($wd = search_withdrawal()); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php echo $__env->make('admin.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    <?php echo $__env->make('admin.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div id="prnt"></div>  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card_header_bg_blue" >
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white"> <i class="fas fa-arrow-alt-circle-down"></i> <?php echo e(__('User Withdrawal')); ?> </h4>
                                        <div class="card-tools">
                                            <form action="/admin/search/Withdrawal" method="post">
                                                <div class="input-group">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <?php echo e(__('Search:')); ?> </span>
                                                    </div>
                                                    <input type="text" name="search_val" class="form-control" placeholder="Search by username, amount, bank details, date or status">
                                                    <div class="input-group-append">
                                                        <button class="btn"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                                                                             
                                    </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                   <?php echo $__env->make('admin.temp.user_withdrawal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                                </div>
                                <div class="" align="">
                                    <span>
                                        <?php echo e($wd->links()); ?>

                                    </span>  
                                </div> 
                                <br><br>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tonia/profit-investment/upload/core/resources/views/admin/user_withdrawals.blade.php ENDPATH**/ ?>