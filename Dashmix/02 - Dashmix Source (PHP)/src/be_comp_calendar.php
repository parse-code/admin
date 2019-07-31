<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_m_content = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/fullcalendar/fullcalendar.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters flex-md-10-auto">
    <div class="col-md-4 col-lg-5 col-xl-3">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="d-md-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-hero-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                    Calendar Options
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-md-block push">
                <!-- Add Event Form -->
                <form class="js-form-add-event push">
                    <div class="input-group">
                        <input type="text" class="js-add-event form-control border-0" placeholder="Add Event..">
                        <div class="input-group-append">
                            <span class="input-group-text border-0 bg-white">
                                <i class="fa fa-fw fa-plus-circle"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <!-- END Add Event Form -->

                <!-- Event List -->
                <ul class="js-events list list-events">
                    <li class="bg-info-light">Codename X</li>
                    <li class="bg-success-light">Weekend Adventure</li>
                    <li class="bg-info-light">Project Mars</li>
                    <li class="bg-warning-light">Meeting</li>
                    <li class="bg-success-light">Walk the dog</li>
                    <li class="bg-info-light">AI schedule</li>
                    <li class="bg-success-light">Cinema</li>
                    <li class="bg-danger-light">Project X</li>
                    <li class="bg-warning-light">Skype Meeting</li>
                </ul>
                <div class="text-center">
                    <em class="font-size-sm text-muted">
                        <i class="fa fa-arrows-alt"></i> Drag and drop events on the calendar
                    </em>
                </div>
                <!-- END Event List -->
            </div>
            <!-- END Side Content -->
        </div>
    </div>
    <div class="col-md-8 col-lg-7 col-xl-9 bg-body-dark">
        <div class="content">
            <div class="block block-fx-pop">
                <div class="block-content block-content-full">
                    <!-- Calendar Container -->
                    <div class="js-calendar p-xl-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-ui/jquery-ui.min.js'); ?>
<?php $dm->get_js('js/plugins/moment/moment.min.js'); ?>
<?php $dm->get_js('js/plugins/fullcalendar/fullcalendar.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_calendar.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
