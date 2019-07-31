<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/cropperjs/cropper.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Image Cropper</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active" aria-current="page">Image Cropper</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Image Cropper demo functionality is initialized in js/pages/be_comp_image_cropper.min.js which was auto compiled from _es6/pages/be_comp_image_cropper.js -->
<!-- For more info and examples you can check out https://fengyuanchen.github.io/cropperjs/ -->
<div class="content">
    <!-- Toolbar -->
    <div class="block block-rounded block-bordered mb-2">
        <div class="block-content text-center">
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setDragMode" data-option="move" title="Set drag mode to move">
                    <i class="fa fa-arrows-alt"></i>
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setDragMode" data-option="crop" title="Set drag mode to crop">
                    <i class="fa fa-crop"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="zoom" data-option="0.1" title="Zoom In">
                    <i class="fa fa-search-plus"></i>
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="zoom" data-option="-0.1" title="Zoom Out">
                    <i class="fa fa-search-minus"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="rotate" data-option="-45" title="Rotate Left">
                    <i class="fa fa-undo-alt"></i>
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="rotate" data-option="45" title="Rotate Right">
                    <i class="fa fa-redo-alt"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                    <i class="fa fa-arrows-alt-h"></i>
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="scaleY" data-option="-1" title="Flip Vertical">
                    <i class="fa fa-arrows-alt-v"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio">
                    16:9
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
                    4:3
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
                    1:1
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
                    2:3
                </button>
            </div>
            <button type="button" class="js-tooltip btn btn-sm btn-secondary push" data-toggle="cropper" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
                Free
            </button>
            <div class="btn-group push">
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="clear" title="Clear">
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="js-tooltip btn btn-sm btn-secondary" data-toggle="cropper" data-method="crop" title="Crop">
                    <i class="fa fa-check"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- END Toolbar -->

    <!-- Image Cropper -->
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <div class="row items-push">
                <div class="col-xl-8">
                    <div>
                        <img id="js-img-cropper" class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg" alt="photo">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="overflow-hidden mb-2">
                        <div class="js-img-cropper-preview overflow-hidden" style="height: 200px;"></div>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <div class="js-img-cropper-preview overflow-hidden" style="height: 180px;"></div>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <div class="js-img-cropper-preview overflow-hidden" style="height: 150px;"></div>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <div class="js-img-cropper-preview overflow-hidden" style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Cropper -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/cropperjs/cropper.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_image_cropper.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
