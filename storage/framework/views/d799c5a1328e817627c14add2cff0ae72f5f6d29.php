<div class="row mt--2">
	<div class="col-md-6">
		<div class="card full-height">
			<div class="card-body">
				<div class="card-title">Statistics Summary</div>
				<div class="card-category">Statistics of the system</div>
				<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-1"></div>
						<h6 class="fw-bold mt-3 mb-0">Users</h6>
            <span>Inactive: <?php echo e(count($users->where('status', '!=', '1'))); ?></span>
					</div>
					<div class="px-2 pb-2 pb-md-0 text-center">
            <?php
                $inv = App\investment::orderby('id', 'desc')->get();
                $cap = 0;
                $cap2 = 0;
            ?>                        
						<div id="circles-2"></div>
						<h6 class="fw-bold mt-3 mb-0">Investments</h6>
            <span>Inactive: <?php echo e(count($inv->where('status', '!=', 'Active'))); ?></span>
					</div>
					<div class="px-2 pb-2 pb-md-0 text-center">
            <?php
                $deposits = App\deposits::orderby('id', 'desc')->get();
                $dep = 0;
                $dep2 = 0;
            ?>           
						<div id="circles-3"></div>
						<h6 class="fw-bold mt-3 mb-0">Deposits</h6>
            			<span>Inactive: <?php echo e(count($deposits->where('status', '!=', '1'))); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

  <?php $__currentLoopData = $inv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
    <?php ($cap = $cap + intval($in->capital) ); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

 <?php
 $deposits = App\deposits::where('status', 1)-> orderby('id', 'desc')->get();
 ?>        
  <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($dep += $in->amount); ?>  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php
 $wd = App\withdrawal::where('status', 'Approved')-> orderby('id', 'desc')->get();
 ?> 
  <?php $__currentLoopData = $wd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <?php ($wd_bal += $in->amount ); ?>       
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

	<div class="col-md-6">
		<div class="card full-height">
			<div class="card-body">
				<div class="card-title"><h2>Balance Summary</h2></div>
				<div class="row py-3 <?php if($adm->role < 2): ?> <?php echo e('blur_cnt'); ?><?php endif; ?>" style="position: relative;">
					<div class="col-md-6 d-flex flex-column justify-content-around">						
						<div style="border-bottom: 1px solid #CCC;">							
							<h4 class="fw-bold text-uppercase text-success op-8">Investment</h4>
							<h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e($cap); ?></h3>
							<div class="colhd" style="font-size: 10px; margin-top: -10px;">&emsp;</div>
							<br>						
						</div>						
					  <div class="clearfix"><br></div>						
						<div>					
						   
							<h4 class="fw-bold text-uppercase text-success op-8">Deposits</h4>
							<h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e($dep); ?></h3>
							<div class="colhd" style="font-size: 10px; margin-top: -10px;">&emsp;</div>
							<br>									
						</div>
					</div>

					<div class="col-md-6">
						<div style="border-bottom: 1px solid #CCC;">
							<h4 class="fw-bold text-uppercase text-success op-8">Withdrawals</h4>
							<h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e($wd_bal); ?></h3>
							<div class="colhd" style="font-size: 10px; margin-top: -10px;">&emsp;</div>	
							<br>	
						</div>
					</div>
				</div>		       
			</div>
		</div>
	</div>
</div><?php /**PATH /home/tonia/profit-investment/upload/core/resources/views/admin/atlantis/overview.blade.php ENDPATH**/ ?>