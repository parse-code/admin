<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_fixed               = false;
$dm->l_header_style               = 'light';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Static Light Header</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Layout</li>
                    <li class="breadcrumb-item">Header</li>
                    <li class="breadcrumb-item">Static</li>
                    <li class="breadcrumb-item active" aria-current="page">Light</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block block-rounded block-bordered">
        <div class="block-content text-center">
            <p>
                A static, light themed Header.
            </p>
        </div>
    </div>

    <!-- Dummy content -->
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <p class="text-center py-8">...</p>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
