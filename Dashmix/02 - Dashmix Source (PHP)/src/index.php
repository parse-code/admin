<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/landing/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15@2x.jpg');">
    <div class="hero hero-lg bg-white-90 overflow-hidden">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="row">
                    <div class="col-lg-5 text-center text-lg-left">
                        <h1 class="h2 font-w700 mb-3 invisible" data-toggle="appear">
                            <span class="text-primary">Professional</span> and <span class="text-primary">Premium</span> Dashboard Framework
                        </h1>
                        <p class="font-size-h4 font-w300 text-muted mb-5 invisible" data-toggle="appear">
                            Super high quality admin dashboard solution, built with Bootstrap 4, Sass and ES6 for refreshing and modern user experiences.
                        </p>
                        <span class="ml-2 mr-2 mb-2 ml-lg-0 d-inline-block invisible" data-toggle="appear" data-timeout="150">
                            <a class="btn btn-hero-success" href="https://1.envato.market/r6y">
                                <i class="fa fa-fw fa-shopping-cart mr-1"></i> Purchase
                            </a>
                        </span>
                        <span class="d-inline-block invisible" data-toggle="appear" data-timeout="150">
                            <a class="btn btn-hero-primary" href="be_pages_dashboard.php">
                                <i class="fa fa-fw fa-rocket mr-1"></i> Live Preview
                            </a>
                        </span>
                    </div>
                    <div class="d-none d-lg-block col-lg-6 offset-lg-1 invisible" data-toggle="appear" data-timeout="300">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_hero.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_hero@2x.png 2x"  alt="Hero Promo">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-meta">
            <div class="invisible" data-toggle="appear" data-timeout="450">
                <span class="d-inline-block animated bounce infinite">
                    <i class="si si-arrow-down text-muted fa-2x"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Laravel Starter Kit  -->
<div id="dm-laravel" class="bg-body-light">
    <div class="content content-full">
        <div class="py-5 push text-center">
            <div class="push">
                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/laravel-logo.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/laravel-logo@2x.png 2x" alt="Hosting Dashboard">
            </div>
            <h2 class="mb-2">
                Laravel Starter Kit
            </h2>
            <h3 class="font-w300 text-muted mb-2">
                Rocket start your custom Laravel project with the included starter kit!
            </h3>
            <h3 class="font-w300 text-muted mb-0">
                It includes page examples and main assets ready to work with Laravel Mix out of the box.
            </h3>
        </div>
    </div>
</div>
<!-- END Laravel Starter Kit -->

<!-- Inspiring Dashboards -->
<div id="dm-dashboards" class="bg-white">
    <div class="content content-full">
        <div class="py-5 push">
            <h2 class="mb-2 text-center">
                18 Inspiring Dashboards
            </h2>
            <h3 class="font-w300 text-muted mb-0 text-center">
                Get inspired and create the perfect dashboard design for your new project.
            </h3>
        </div>
        <div class="row py-3 invisible" data-toggle="appear">
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_analytics.php">
                    <div class="block-content bg-xpro-dark ribbon ribbon-success ribbon-bottom">
                        <div class="ribbon-box">New!</div>
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics@2x.png 2x" alt="Analytics Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Analytics
                        </h4>
                        <p class="text-muted mb-0">
                            Web analytics interface
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_chat.php">
                    <div class="block-content bg-xdream-light ribbon ribbon-success ribbon-bottom">
                        <div class="ribbon-box">New!</div>
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat@2x.png 2x" alt="Chat Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Chat
                        </h4>
                        <p class="text-muted mb-0">
                            Communication interface
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_social_compact.php">
                    <div class="block-content bg-xmodern-light ribbon ribbon-success ribbon-bottom">
                        <div class="ribbon-box">New!</div>
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact@2x.png 2x" alt="Social Compact Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Social Compact
                        </h4>
                        <p class="text-muted mb-0">
                            UI similar to Facebook
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_travel.php">
                    <div class="block-content bg-gd-sea">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel@2x.png 2x" alt="Travel Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Travel
                        </h4>
                        <p class="text-muted mb-0">
                            Hotel/Apartment renting interface
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_medical.php">
                    <div class="block-content bg-gd-sublime">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical@2x.png 2x" alt="Medical Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Medical
                        </h4>
                        <p class="text-muted mb-0">
                            Hospital based interface
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_tasks.php">
                    <div class="block-content bg-gd-aqua">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks@2x.png 2x" alt="Tasks Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Tasks
                        </h4>
                        <p class="text-muted mb-0">
                            Todo list web application
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_hosting.php">
                    <div class="block-content bg-xmodern">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting@2x.png 2x" alt="Hosting Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Hosting
                        </h4>
                        <p class="text-muted mb-0">
                            Perfect for custom web hosting
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_booking.php">
                    <div class="block-content bg-xinspire-darker">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking@2x.png 2x" alt="Booking Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Booking
                        </h4>
                        <p class="text-muted mb-0">
                            Building a travel business
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_gaming.php">
                    <div class="block-content bg-xeco-darker">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming@2x.png 2x" alt="Gaming Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Gaming
                        </h4>
                        <p class="text-muted mb-0">
                            Minecraft server custom dashboard
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_classic_boxed.php">
                    <div class="block-content bg-default-lighter">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed@2x.png 2x" alt="Classic Boxed Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Classic Boxed
                        </h4>
                        <p class="text-muted mb-0">
                            Corporate analytics dashboard
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_crypto.php">
                    <div class="block-content bg-dark">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto@2x.png 2x" alt="Crypto Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Crypto
                        </h4>
                        <p class="text-muted mb-0">
                            Dashboard for crypto management
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_banking.php">
                    <div class="block-content bg-xwork-light">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking@2x.png 2x" alt="Banking Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Banking
                        </h4>
                        <p class="text-muted mb-0">
                            Modern money dashboard
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="be_pages_dashboard.php">
                    <div class="block-content bg-default-dark">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_default.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_default@2x.png 2x" alt="Default Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Corporate
                        </h4>
                        <p class="text-muted mb-0">
                            The default dashboard
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_social.php">
                    <div class="block-content bg-xmodern-dark">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social@2x.png 2x" alt="Social Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Social
                        </h4>
                        <p class="text-muted mb-0">
                            For your new social network
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_dark.php">
                    <div class="block-content bg-dark">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark@2x.png 2x" alt="Dark Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Dark
                        </h4>
                        <p class="text-muted mb-0">
                            Utility based design shows its power
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_modern.php">
                    <div class="block-content bg-gd-dusk">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern@2x.png 2x" alt="Modern Dashboard">                            </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Modern
                        </h4>
                        <p class="text-muted mb-0">
                            Creative and media oriented
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_minimal.php">
                    <div class="block-content bg-xwork-lighter">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal@2x.png 2x" alt="Minimal Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Minimal
                        </h4>
                        <p class="text-muted mb-0">
                            For super clean and artistic apps
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="block block-rounded block-link-pop text-center" href="db_messages.php">
                    <div class="block-content bg-xsmooth">
                        <div class="pt-4 px-4 pull-b">
                            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages@2x.png 2x" alt="Messages Dashboard">
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <h4 class="h5 mb-2">
                            Messages
                        </h4>
                        <p class="text-muted mb-0">
                            Perfect starting point for your inbox
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="py-5 text-center">
            <h3 class="font-w300 text-muted mb-4">
                Dashmix comes packed with tons of features, elements, widgets, components and ready pages!
            </h3>
            <div class="invisible" data-toggle="appear" data-class="animated fadeInUp">
                <a class="btn btn-hero-primary" href="be_pages_dashboard.php">
                    <i class="far fa-fw fa-paper-plane mr-1"></i> Explore it!
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Inspiring Dashboards -->

<!-- Widgets Collection -->
<div id="dm-widgets" class="bg-body-light">
    <div class="content content-full">
        <div class="py-5 push">
            <h2 class="mb-2 text-center">
                Widgets Collection
            </h2>
            <h3 class="font-w300 text-muted mb-0 text-center">
                Tons of premade widget designs to power your dashboards.
            </h3>
        </div>
        <div class="row py-3">
            <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                <div>
                    <h4 class="h5 mb-2">
                        Tile Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        Super clean and effective tile design which can help you present statistics, create your custom menus or showcase vital information to your users.
                    </p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                <div class="row w-100 gutters-tiny my-3">
                    <div class="col-sm-6 invisible" data-toggle="appear" data-timeout="200">
                        <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-gd-fruit-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="far fa-2x fa-user-circle text-white"></i>
                                    <div class="font-w600 mt-3 text-uppercase text-white">Accounts</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 invisible" data-toggle="appear" data-timeout="400">
                        <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-gd-dusk-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fa fa-2x fa-inbox text-white"></i>
                                    <div class="font-w600 mt-3 text-uppercase text-white">Inbox (2)</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                <div>
                    <h4 class="h5 mb-2">
                        User Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        A vast collection of user related widgets can help you create all kind of cards with information, perfect for user centric dashboards and web applications.
                    </p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded block-link-shadow text-center w-100 my-3 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-white-90">
                        <?php $dm->get_avatar(15, false, 96, true); ?>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-white-95">
                        <p class="font-size-lg font-w600 mb-0"><?php $dm->get_name('male'); ?></p>
                        <p class="font-italic text-muted mb-0">
                            Web Developer
                        </p>
                    </div>
                    <div class="block-content block-content-full bg-white">
                        <div class="row gutters-tiny my-2">
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-boxes text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    7 Projects
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-user-tie text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    98 Clients
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-money-bill-wave text-black"></i>
                                </p>
                                <p class="font-size-sm text-muted mb-0">
                                    1.6k Sales
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                <div>
                    <h4 class="h5 mb-2">
                        Statistic Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        All web applications need to present statistics to its users at some point, so we’ve made sure to provide many options to fulfil your project’s requirements.
                    </p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded w-100 my-3 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex justify-content-between bg-primary-dark-op">
                        <div class="mr-3">
                            <p class="text-white font-size-h2 font-w300 mb-0">
                                +150%
                            </p>
                            <p class="text-white-75 font-size-sm font-w700 text-uppercase mb-0">
                                Sales
                            </p>
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-2x fa-coins text-white-50"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-hidden bg-primary-dark-op">
                        <!-- Sparkline Container -->
                        <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
                        <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[25,36,25,36,48,29,53,64]"
                                                    data-width="100%"
                                                    data-height="150px"
                                                    data-line-color="#fff"
                                                    data-chart-range-min="15"
                                                    data-fill-color="transparent"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#fff"
                                                    data-highlight-line-color="#fff"
                                                    data-tooltip-suffix="Sales"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="py-5 text-center">
            <h3 class="font-w300 text-muted mb-4">
                Clean design and thoughtful decisions helped us craft an awesome widget collection.
            </h3>
            <div class="invisible" data-toggle="appear" data-class="animated fadeInUp">
                <a class="btn btn-hero-primary" href="be_widgets_tiles.php">
                    <i class="fa fa-fw fa-box-open mr-1"></i> Explore them all!
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Widgets Collection -->

<!-- Info -->
<div class="bg-image bg-image-fixed" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg');">
    <div class="bg-black-75">
        <div class="content content-full">
            <div class="py-5 py-md-6 text-center">
                <h2 class="mb-3 text-white">
                    Crafted with <i class="fa fa-fw fa-heart text-danger"></i> by <a class="text-primary-lighter link-fx" href="https://1.envato.market/ydb">pixelcave</a>
                </h2>
                <h3 class="font-w300 text-white-75 mb-0">
                    Over-profit by choosing one of our products. They are crafted with passion to help you build better projects.
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- END Info -->

<!-- Sophisticated Layout -->
<div id="dm-layout" class="bg-body-light overflow-hidden">
    <div class="content content-full">
        <div class="py-5 push">
            <h2 class="mb-2 text-center">
                Sophisticated Layout
            </h2>
            <h3 class="font-w300 text-muted mb-0 text-center">
                Created to work fluently and help you create without limitations.
            </h3>
        </div>
        <div class="row py-3 invisible" data-toggle="appear">
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_page_default.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_default.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_default@2x.png 2x" alt="Default Layout">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Default Layout
                </h4>
                <p class="mb-0 text-muted">
                    Left Sidebar, right Side Overlay and a fixed Header.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_page_flipped.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_flipped.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_flipped@2x.png 2x" alt="Flipped Layout">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Flipped Layout
                </h4>
                <p class="mb-0 text-muted">
                    Right Sidebar, Left Side Overlay and a fixed Header.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_sidebar_hidden.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_hidden.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_hidden@2x.png 2x" alt="Hidden Sidebar">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Hidden Sidebar
                </h4>
                <p class="mb-0 text-muted">
                    You can hide the main sidebar by default.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_content_side_left.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_left.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_left@2x.png 2x" alt="Left Side Content">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Left Side Content
                </h4>
                <p class="mb-0 text-muted">
                    You can have an inner left side content.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_content_side_right.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_right.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_right@2x.png 2x" alt="Right Side Content">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Right Side Content
                </h4>
                <p class="mb-0 text-muted">
                    You can have an inner right side content.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_page_native_scrolling.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_native_scrolling.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_native_scrolling@2x.png 2x" alt="Native Scrolling">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Native Scrolling
                </h4>
                <p class="mb-0 text-muted">
                    Custom Sidebar and Side Overlay scrolling functionality is disabled.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_sidebar_dark.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_dark.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_dark@2x.png 2x" alt="Dark Sidebar">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Dark Sidebar
                </h4>
                <p class="mb-0 text-muted">
                    You can have a dark themed Sidebar.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_header_static_dark.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_header_static.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_header_static@2x.png 2x" alt="Static Header">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Static Header
                </h4>
                <p class="mb-0 text-muted">
                    You can have a static Header as well.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_side_overlay_visible.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_side_overlay_visible.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_side_overlay_visible@2x.png 2x" alt="Visible Side Overlay">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Visible Side Overlay
                </h4>
                <p class="mb-0 text-muted">
                    You can make the Side Overlay visible by default.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_content_main_full_width.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_full_width.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_full_width@2x.png 2x" alt="Main Content Full Width">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Main Content Full Width
                </h4>
                <p class="mb-0 text-muted">
                    Content always takes up all the available width of the main container.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_content_main_narrow.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_narrow.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_narrow@2x.png 2x" alt="Main Content Narrow">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Main Content Narrow
                </h4>
                <p class="mb-0 text-muted">
                    Content uses a percentage width, so it is smaller than the available on larger screens.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5 text-center">
                <div class="mb-3">
                    <a class="img-link" href="be_layout_content_main_boxed.php">
                        <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_boxed.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_boxed@2x.png 2x" alt="Main Content Boxed">
                    </a>
                </div>
                <h4 class="h5 mb-2">
                    Main Content Boxed
                </h4>
                <p class="mb-0 text-muted">
                    Content has a max-width set, so it is boxed on larger screens.
                </p>
            </div>
        </div>
        <div class="pt-4 pb-5 text-center">
            <h3 class="font-w300 text-muted mb-4">
                This is just a glimpse of all the available layout options! Check them all out!
            </h3>
            <div class="invisible" data-toggle="appear" data-class="animated fadeInUp">
                <a class="btn btn-hero-primary" href="be_layout_api.php">
                    <i class="fa fa-fw fa-magic mr-1"></i> Layout API
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Sophisticated Layout -->

<!-- Smart Toolkit -->
<div id="dm-toolkit" class="bg-white">
    <div class="content content-full">
        <div class="py-5">
            <h2 class="mb-2 text-center">
                Smart Toolkit
            </h2>
            <h3 class="font-w300 text-muted pb-5 push text-center">
                Automation tools which handle everything and let you focus on the development.
            </h3>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            Web Server with Browsersync
                        </h4>
                        <p class="mb-0 text-muted">
                            Just a console command away from having a ready to use web server and serve your Dashmix project. It auto reloads on file changes and synchronizes your browsers for easy testing on multiple devices as you work.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row gutters-tiny w-100 py-4 my-3">
                        <div class="col-6 invisible" data-toggle="appear">
                            <div class="item item-2x item-rounded ml-auto bg-xwork">
                                <i class="fa fa-2x fa-server text-white"></i>
                            </div>
                        </div>
                        <div class="col-6 invisible" data-toggle="appear" data-timeout="300">
                            <div class="item item-2x item-rounded mr-auto bg-xwork">
                                <i class="fa fa-2x fa-redo fa-spin text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            Sass to CSS with Autoprefixer
                        </h4>
                        <p class="mb-0 text-muted">
                            Fully automated Sass to CSS compilation (on demand or on the fly) for a fluid and efficient workflow. Autoprefixer adds any required browser prefixes, so you can focus on your creativity.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="col-4 invisible" data-toggle="appear">
                            <div class="item item-2x item-rounded mx-auto bg-xsmooth">
                                <i class="fab fa-2x fa-sass text-white-75"></i>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="600">
                            <div class="item item-circle bg-body-dark">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-4 invisible" data-toggle="appear" data-timeout="300">
                            <div class="item item-2x item-rounded mx-auto bg-info">
                                <i class="fab fa-2x fa-css3 text-white-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            ES6 to ES5 with webpack and Babel
                        </h4>
                        <p class="mb-0 text-muted">
                            Write ES6 JS code with a modular approach and let webpack with Babel do its magic. It will bundle and compile everything to ES5 which most current browsers support and run.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="col-4 invisible" data-toggle="appear">
                            <div class="item item-2x item-rounded mx-auto bg-warning">
                                <span class="font-size-lg font-w700 text-white">ES6</span>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="600">
                            <div class="item item-circle bg-body-dark">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-4 invisible" data-toggle="appear" data-timeout="300">
                            <div class="item item-2x item-rounded mx-auto bg-muted">
                                <span class="font-size-lg font-w700 text-white">ES5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            Production Ready
                        </h4>
                        <p class="mb-0 text-muted">
                            A build task is included which will produce a clean and ready for production project by including only minimized vital files.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="item item-2x item-rounded mx-auto bg-xeco invisible" data-toggle="appear">
                            <i class="fa fa-2x fa-wrench text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Smart Toolkit -->

<!-- Handcrafted Design -->
<div id="dm-design" class="bg-body-light overflow-hidden">
    <div class="content content-full">
        <div class="py-5">
            <h2 class="mb-2 text-center">
                Handcrafted Design
            </h2>
            <h3 class="font-w300 text-muted pb-5 push text-center">
                Built with care and attention to detail to help you work more efficiently.
            </h3>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            Passion
                        </h4>
                        <p class="mb-0 text-muted">
                            We are passionate with what we do and love crafting products that can make your life easier and help you succeed. We pay attention to small details and always aiming for the best.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3 overflow-hidden">
                        <div class="row no-gutters text-center w-100 mb-2">
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-badge text-info"></i>
                                </div>
                                <strong>Quality</strong>
                            </div>
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight" data-timeout="300">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-chemistry text-xsmooth"></i>
                                </div>
                                <strong>Creativity</strong>
                            </div>
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight" data-timeout="600">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-heart text-danger"></i>
                                </div>
                                <strong>Passion</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center invisible" data-toggle="appear">
                    <div>
                        <h4 class="h5 mb-2">
                            Commitment
                        </h4>
                        <p class="mb-0 text-muted">
                            We are committed to our work and stand by our projects. Our aim is to improve them in every update and offer the most full-featured packages with the smallest possible footprint
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3 overflow-hidden">
                        <div class="row no-gutters text-center w-100 mb-2">
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-compass text-success"></i>
                                </div>
                                <strong>Motivation</strong>
                            </div>
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight" data-timeout="300">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-energy text-warning"></i>
                                </div>
                                <strong>Simplicity</strong>
                            </div>
                            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInRight" data-timeout="600">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-vector text-xinspire"></i>
                                </div>
                                <strong>Design</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Handcrafted Design -->

<!-- Full Featured -->
<div id="dm-features" class="bg-white">
    <div class="content content-full">
        <div class="py-5">
            <h2 class="mb-2 text-center">
                Full Featured
            </h2>
            <h3 class="font-w300 text-muted push text-center">
                Tons of features included in Dashmix with the minimum performance cost.
            </h3>
        </div>
        <div class="row py-3 invisible" data-toggle="appear">
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-fire text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Bootstrap 4
                </h4>
                <p class="mb-0 text-muted">
                    Dashmix is based on the latest version of world's most popular front-end component library.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-sass text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Sass
                </h4>
                <p class="mb-0 text-muted">
                    Dashmix was built with Sass, overriding and extending Bootstrap in an intelligent way to ensure a perfect and modular workflow.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-file-code text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    ES6
                </h4>
                <p class="mb-0 text-muted">
                    Dashmix was built with ES6, the new major JavaScript release which enables us writing cleaner and better code.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-node-js text-primary"></i>
                    <i class="fab fa-2x fa-npm text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Node.js &amp; npm
                </h4>
                <p class="mb-0 text-muted">
                    All development and production related dependencies can be installed through npm and used in any way you like.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-boxes text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    webpack
                </h4>
                <p class="mb-0 text-muted">
                    Module bundler already setup to work with Dashmix. Use it as much or as little as you want, it’s completely up to you.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-gulp text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Gulp
                </h4>
                <p class="mb-0 text-muted">
                    Fully automated tasks to let you build your project faster. Web server with browser-sync, ES6 to ES5 and Sass to CSS compilation on the fly as you work.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-cubes text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Modular Design
                </h4>
                <p class="mb-0 text-muted">
                    Everything was built with modularity in mind. You can choose to include and use only what you need specifically for your project.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-bolt text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Extendability
                </h4>
                <p class="mb-0 text-muted">
                    You can easily extend or override both JS custom code as well as Sass styles without touching the original files, ensuring that updating will be easy.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-trophy text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Widgets
                </h4>
                <p class="mb-0 text-muted">
                    Tons of ready designed widgets and tiles are included to help you build all kind of dashboard pages.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-pallet text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Utility Based Design
                </h4>
                <p class="mb-0 text-muted">
                    Top class utility based design ensures reusability of existing styles to create new and unique pages.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-html5 text-primary"></i>
                    <i class="fab fa-2x fa-css3-alt text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    HTML5 &amp; CSS3
                </h4>
                <p class="mb-0 text-muted">
                    Using the latest technologies, following the best practices. W3C valid code.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-desktop text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Fully Responsive
                </h4>
                <p class="mb-0 text-muted">
                    User Interface auto adjusts and looks great to any screen size.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-eye text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Retina Ready
                </h4>
                <p class="mb-0 text-muted">
                    User Interface looks crispy clear on high resolution screens.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-globe text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Cross Browser Support
                </h4>
                <p class="mb-0 text-muted">
                    It plays nice with all modern browsers including IE (11 and up).
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-rocket text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Fast &amp; Lightweight
                </h4>
                <p class="mb-0 text-muted">
                    It was handcrafted to be as fast and lightweight as possible.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-cog text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Custom JS APIs
                </h4>
                <p class="mb-0 text-muted">
                    Powerful JavaScript APIs are included. Layout or blocks manipulation is just a JS call away.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-html5 text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    HTML Version
                </h4>
                <p class="mb-0 text-muted">
                    The generic and abstract version which can be used with any framework or language.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fab fa-2x fa-php text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    PHP Version
                </h4>
                <p class="mb-0 text-muted">
                    A PHP version is included to assist you with your custom PHP project.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-cogs text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Components
                </h4>
                <p class="mb-0 text-muted">
                    Carefully picked and integrated to enhance and enrich your project with great functionality.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-eye-dropper text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Creative Color Themes
                </h4>
                <p class="mb-0 text-muted">
                    6 carefully picked and integrated to enhance and enrich the UX of your users based on your project.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-gamepad text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    1550+ Font Based Icons
                </h4>
                <p class="mb-0 text-muted">
                    Tons of icons to choose from including the latest Font Awesome 5 icon pack.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-fighter-jet text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Super-Fast UI
                </h4>
                <p class="mb-0 text-muted">
                    GPU powered sidebar animations and smart CSS styles will ensure a great experience.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-columns text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Flexible Side Areas
                </h4>
                <p class="mb-0 text-muted">
                    Multiple available layouts and completely adjustable by using the powerful layout API.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-file text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Designed Pages
                </h4>
                <p class="mb-0 text-muted">
                    All kinds of pages, carefully designed, to get inspired and create your own.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-check-square text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Easy Updating
                </h4>
                <p class="mb-0 text-muted">
                    Updating a template can be hard but we made customizations and updating a simple process.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="fa fa-2x fa-arrow-up text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Free Updates
                </h4>
                <p class="mb-0 text-muted">
                    All updates are free for existing customers to download. Great new features and updates at no extra cost.
                </p>
            </div>
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="my-3">
                    <i class="far fa-2x fa-life-ring text-primary"></i>
                </div>
                <h4 class="h5 mb-2">
                    Support
                </h4>
                <p class="mb-0 text-muted">
                    By purchasing a license, you are eligible to email support. We are here to help!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END Full Featured -->

<!-- Call To Action -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22@2x.jpg');">
    <div class="bg-black-75">
        <div class="content content-full">
            <div class="py-5 py-md-8 text-center">
                <h2 class="mb-3 text-white">
                    Crafted with <i class="fa fa-fw fa-heart text-danger"></i> by <a class="text-primary-lighter link-fx" href="https://1.envato.market/ydb">pixelcave</a>
                </h2>
                <h3 class="font-w300 text-white-75 mb-4">
                    Passionate web design and development with over 12.000 customers worldwide.
                </h3>
                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp">
                    <a class="btn btn-hero-success" href="https://1.envato.market/r6y">
                        <i class="fa fa-fw fa-shopping-cart mr-1"></i> Purchase
                    </a>
                </span>
                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp">
                    <a class="btn btn-hero-primary" href="be_pages_dashboard.php">
                        <i class="fa fa-fw fa-rocket mr-1"></i> Live Preview
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- END Call To Action -->

<!-- Footer -->
<footer id="page-footer" class="bg-white">
    <div class="content py-5">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/r6y" target="_blank"><?php echo $dm->name . ' ' . $dm->version; ?></a> &copy; <span data-toggle="year-copy">2018</span>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugin) -->
<script>jQuery(function(){ Dashmix.helpers(['sparkline']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
