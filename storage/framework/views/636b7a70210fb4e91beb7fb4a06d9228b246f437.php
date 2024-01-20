<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h2>manage</h2>
        <p>This page shows details of registered students:</p>

        <?php if($users->count() > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->name); ?> -- </td>
                            <td><?php echo e($user->email); ?> -- </td>
                            <td><?php echo e($user->contact_no); ?></td>
                            <td>
                                <a href="<?php echo e(route('about.edit', $user->id)); ?>">Edit</a>
                                <form action="<?php echo e(route('about.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No registered students yet.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nte-826-vm/mylrvl/resources/views/about.blade.php ENDPATH**/ ?>