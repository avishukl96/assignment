<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Dashboard - Setup Framework Structure
    </title>
    <link href="<?= base_url() ?>assets/images/favicon.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900" rel="stylesheet">

    <!-- VENDORS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/font-feathericons/dist/feather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/font-linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/owl.carousel/dist/<?= base_url() ?>assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/jquery-steps/demo/css/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">




    <!-- AIR UI HTML ADMIN TEMPLATE MODULES-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/vendors/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/core/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/widgets/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/system/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/menu-left/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/menu-top/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/footer/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/footer-dark/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/topbar/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/topbar-dark/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/subbar/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/sidebar/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/chat/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/apps/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/apps/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/apps/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/extra-apps/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/ecommerce/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/components/dashboards/crypto-terminal/style.css">




    <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?= base_url() ?>assets/vendors/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.usa.js"></script>
    <script src="<?= base_url() ?>assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/d3/d3.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/d3-dsv/dist/d3-dsv.js"></script>
    <script src="<?= base_url() ?>assets/vendors/d3-time-format/dist/d3-time-format.js"></script>
    <script src="<?= base_url() ?>assets/vendors/c3/c3.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/peity/jquery.peity.min.js"></script>
    <script type="text/javascript"
        src="<?= base_url() ?>assets/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="<?= base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <script src="<?= base_url() ?>assets/vendors/summernote/dist/summernote.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/nestable/jquery.nestable.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap-show-password/dist/bootstrap-show-password.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/d3-dsv/dist/d3-dsv.js"></script>
    <script src="<?= base_url() ?>assets/vendors/d3-time-format/dist/d3-time-format.js"></script>
    <script src="<?= base_url() ?>assets/vendors/techan/dist/techan.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/Stickyfill/dist/stickyfill.min.js"></script>



    <script src="<?= base_url() ?>assets/components/core/index.js"></script>
    <script src="<?= base_url() ?>assets/components/menu-left/index.js"></script>
    <script src="<?= base_url() ?>assets/components/menu-top/index.js"></script>
    <script src="<?= base_url() ?>assets/components/sidebar/index.js"></script>
    <script src="<?= base_url() ?>assets/components/topbar/index.js"></script>
    <script src="<?= base_url() ?>assets/components/chat/index.js"></script>
  


<script src="<?= base_url() ?>assets/components/menu-left/OrgChart.js"></script>


    <!-- PRELOADER STYLES-->
    <style>
        .popover{max-width:300px!important}
        .air__initialLoading {
            position: fixed;
            z-index: 99999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDFweCIgIGhlaWdodD0iNDFweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciPiAgICA8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBuZy1hdHRyLXN0cm9rZT0ie3tjb25maWcuY29sb3J9fSIgbmctYXR0ci1zdHJva2Utd2lkdGg9Int7Y29uZmlnLndpZHRofX0iIG5nLWF0dHItcj0ie3tjb25maWcucmFkaXVzfX0iIG5nLWF0dHItc3Ryb2tlLWRhc2hhcnJheT0ie3tjb25maWcuZGFzaGFycmF5fX0iIHN0cm9rZT0iIzAxOTBmZSIgc3Ryb2tlLXdpZHRoPSIxMCIgcj0iMzUiIHN0cm9rZS1kYXNoYXJyYXk9IjE2NC45MzM2MTQzMTM0NjQxNSA1Ni45Nzc4NzE0Mzc4MjEzOCIgdHJhbnNmb3JtPSJyb3RhdGUoODQgNTAgNTApIj4gICAgICA8YW5pbWF0ZVRyYW5zZm9ybSBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iIHR5cGU9InJvdGF0ZSIgY2FsY01vZGU9ImxpbmVhciIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSIgZHVyPSIxcyIgYmVnaW49IjBzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSI+PC9hbmltYXRlVHJhbnNmb3JtPiAgICA8L2NpcmNsZT4gIDwvc3ZnPg==);
            background-color: #fff;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.air__initialLoading').delay(200).fadeOut(400)
        })
    </script>
</head>

<body class="air__menu--gray"  onload="init()">
    <div class="air__initialLoading"></div>
    <div class="air__layout air__layout--hasSider">
        <div class="air__menuLeft">
            <div class="air__menuLeft__outer">
                <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
                    <span></span>
                </div>
                <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
                    <span></span>
                    <span></span>
                </div>
                <a href="javascript: void(0);" class="air__menuLeft__logo">
                    <img src="<?= base_url() ?>assets/images/logo.png" alt="Logo" />
                    </a>
                <!-- <a href="javascript: void(0);" class="air__menuLeft__user">
            <div class="air__menuLeft__user__avatar">
              <img src="<?= base_url() ?>assets/images/user.jpg" alt="User" />
            </div>
            <div class="air__menuLeft__user__name">
              Kalpesh
            </div>
            <div class="air__menuLeft__user__role">
              Administrator
            </div>
          </a> -->
                <div class="air__menuLeft__container air__customScroll">
                    <ul class="air__menuLeft__list">
                        <li class=" air__menuLeft__item">
                            <a href="javascript:void(0);" class="air__menuLeft__link">
                                <i class="fas fa-newspaper air__menuLeft__icon"></i>
                                <span>Setup Structure</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="air__menuLeft__backdrop air__menuLeft__mobileActionToggle"></div>


        <div class="air__layout">
            <div class="air__layout__header">
                <div class="air__utils__header">
                    <div class="air__topbar">
                        <div class="air__topbar__searchDropdown dropdown mr-md-4 mr-auto">
                            <div class="air__topbar__search dropdown-toggle" data-toggle="dropdown" data-offset="5,15">
                                <div class="air__topbar__searchContainer">
                                    <i class="air__topbar__searchIcon fe fe-search"></i>
                                    <input class="air__topbar__searchInput" type="text" placeholder="Search here..." />
                                </div>
                            </div>
                        </div>

                        <div class="dropdown notification-dropdown mr-4 ml-auto d-none d-sm-block">
                            <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" data-offset="5,15">
                                <span class="dropdown-toggle-text"><i class="fas fa-bell font-size-18"></i> <span
                                        class="noti-count">14</span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <div class="noti-header">Latest Notifications <span class="noti-count">14</span></div>
                                <div class="height-300 air__customScroll">
                                    <ul class="width-250 list-unstyled">
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Update Status:
                                                        <strong class="text-black">New</strong>
                                                    </p>
                                                    <time class="air__l2__time">5 min ago <span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    Mary has approved your quote.
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Update Status:
                                                        <strong class="text-danger">Rejected</strong>
                                                    </p>
                                                    <time class="air__l2__time">15 min ago<span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    Mary has declined your quote.
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Payment Received:
                                                        <strong class="text-black">$5,467.00</strong>
                                                    </p>
                                                    <time class="air__l2__time">15 min ago<span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    GOOGLE, LLC AUTOMATED PAYMENTS
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Notification:
                                                        <strong class="text-danger">Access Denied</strong>
                                                    </p>
                                                    <time class="air__l2__time">5 Hours ago<span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    The system prevent login to your account
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Payment Received:
                                                        <strong class="text-black">$55,829.00</strong>
                                                    </p>
                                                    <time class="air__l2__time">1 day ago<span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    GOOGLE, LLC AUTOMATED PAYMENTS
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="air__l2__head">
                                                    <p class="air__l2__title">
                                                        Notification:
                                                        <strong class="text-danger">Access Denied</strong>
                                                    </p>
                                                    <time class="air__l2__time">5 Hours ago<span
                                                            class="delete-notification-span"><i
                                                                class="far fa-times-circle"></i></span></time>
                                                </div>
                                                <p class="air__l2__content">
                                                    The system prevent login to your account
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="view-all-notofications"><a href="javascript:void(-);"> All Notifications</a></div> -->
                            </div>
                        </div>


                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false"
                                data-offset="5,15">
                                <img class="dropdown-toggle-avatar rounded-circle" src="<?= base_url() ?>assets/images/user.jpg"
                                    alt="User avatar" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="dropdown-icon fe fe-user"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">
                                    <i class="dropdown-icon fe fe-log-out"></i> Logout
                                </a>
                            </div>
                        </div>
                        <p class="mb-0 ml-4 mr-4 help-link text-light">
                            <a href="" class="font-size-18" data-toggle="tooltip" data-placement="bottom" title=""
                                data-original-title="Need Help?"><i class="fa fa-question-circle"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="air__layout__content">

                <div class="air__utils__content">
                    <div class="air__utils__heading">
                        <h5>Setup Framework Structure</h5>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="setup-structure-wrapper">
                                        <div class="row">
                                        <div class="col-lg-5">
                                            <div class="add-edit-structure h-100">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6 class="mb-0">Add/Edit Structure Item</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <form  method="post" id="structure_form">
                                                            <div class="form-group">
                                                                <label for="stru-parent">Select Parent (optional)</label>
                                                                <select id="stru-parent" name="parent_id" class="form-control">
                                                                    <option value="">Select Parent</option>
                                                                    <option value="">User Name 1</option>
                                                                    <option value="">User Name 2</option>
                                                                    <option value="">User Name 3</option>
                                                                    <option value="">User Name 4</option>
                                                                    <option value="">User Name 5</option>
                                                                    <option value="">User Name 6</option>
                                                                    <option value="">User Name 8</option>
                                                                    <option value="">User Name 9</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="stru-name">Name *</label>
                                                                <input type="text" id="name" name="name" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="stru-code">Code *</label>
                                                                <input type="text" id="code" name="code" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Description </label>
                                                                <textarea class="summernote" id="summernote" name="description"></textarea>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit"   id="submit_btn" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="preview-structure h-100">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6 class="mb-0">Structure</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="prev-structure-scroll air__customScroll w-100">
                                                <div class="dd" id="nestable1">
                                                    <ol class="dd-list dd-level-1">
                                                      <li class="dd-item" data-id="2">
                                                          <div class="dd-outer">
                                                        <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                            <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                <div class="dd-structure-img">
                                                                    <figure>
                                                                        <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="dd-structure-content">
                                                                    <div class="dd-structure-name">User name1</div>
                                                                    <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                    <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ol class="dd-list dd-level-2">
                                                          <li class="dd-item" data-id="3">
                                                            <div class="dd-outer">
                                                                <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                             
                                                            <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content='' >
                                                                <div class="dd-structure-img">
                                                                    <figure>
                                                                        <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="dd-structure-content">
                                                                    <div class="dd-structure-name">User name2</div>
                                                                    <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                    <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </li>
                                                          <li class="dd-item" data-id="4">
                                                            <div class="dd-outer">
                                                                <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                                <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                    <div class="dd-structure-img">
                                                                        <figure>
                                                                            <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="dd-structure-content">
                                                                        <div class="dd-structure-name">User name3</div>
                                                                        <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                        <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </li>
                                                          <li class="dd-item" data-id="5">
                                                            <div class="dd-outer">
                                                                <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                                <div class="dd-structure-item"  data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                    <div class="dd-structure-img">
                                                                        <figure>
                                                                            <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="dd-structure-content">
                                                                        <div class="dd-structure-name">User name4</div>
                                                                        <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                        <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ol class="dd-list dd-level-3">
                                                              <li class="dd-item" data-id="6">
                                                                <div class="dd-outer">
                                                                    <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                                <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                    <div class="dd-structure-img">
                                                                        <figure>
                                                                            <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="dd-structure-content">
                                                                        <div class="dd-structure-name">User name5</div>
                                                                        <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                        <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                    </div>
                                                                </div>
                                                              </div></li>
                                                              <li class="dd-item" data-id="7">
                                                                <div class="dd-outer">
                                                                    <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                                <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                    <div class="dd-structure-img">
                                                                        <figure>
                                                                            <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="dd-structure-content">
                                                                        <div class="dd-structure-name">User name6</div>
                                                                        <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                        <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                    </div>
                                                                </div>
                                                              </div></li>
                                                              <li class="dd-item" data-id="8">
                                                                <div class="dd-outer">
                                                                    <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                                <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                    <div class="dd-structure-img">
                                                                        <figure>
                                                                            <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="dd-structure-content">
                                                                        <div class="dd-structure-name">User name7</div>
                                                                        <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                        <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                    </div>
                                                                </div>
                                                              </div></li>
                                                            </ol>
                                                          </li>
                                                          <li class="dd-item" data-id="9">
                                                              <div class="dd-outer">
                                                            <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                            <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                <div class="dd-structure-img">
                                                                    <figure>
                                                                        <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="dd-structure-content">
                                                                    <div class="dd-structure-name">User name8</div>
                                                                    <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                    <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                </div>
                                                            </div>
                                                          </div></li>
                                                          <li class="dd-item" data-id="10">
                                                            <div class="dd-outer">
                                                                <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
                                                            <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
                                                                <div class="dd-structure-img">
                                                                    <figure>
                                                                        <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="dd-structure-content">
                                                                    <div class="dd-structure-name">User name9</div>
                                                                    <div class="dropdown">
                                                                        <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
                                                                          <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                          <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                                                        </div>
                                                                      </div>
                                                                    <div class="dd-structure-code">#1234</div>
                                                                    <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
                                                                </div>
                                                            </div>
                                                          </div></li>
                                                        </ol>
                                                      </li>
                                                    </ol>
                                                  </div>
                                                </div>
                                                  </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <!-- <div id="tree"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="air__layout__footer w-100">
                            <div class="air__footer">
                                <div class="air__footer__inner">
                                    <div class="row pt-3">
                                        <div class="col-md-8">
                                            <p class="website-tagline">
                                                Learning Dashboard - Best Solution for Your Next Big App!
                                            </p>

                                            <p class="website-copyright">
                                                &copy; 2020 Dashboard Name
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="goTop"><i class="lnr lnr-chevron-up"></i></div>
                <style type="text/css">
                    .error{color: red;}
                </style>
</body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<!-- Structure -->
<script>
    ;(function($) {
      'use strict'
      $(function() {
        $('#nestable1').nestable()
        $('#nestable2').nestable()
      })
    })(jQuery)
  </script>
<script>
    
window.onload = function () { 
    var chart = new OrgChart(document.getElementById("tree"), {
        template: "ula",
        enableDragDrop: true,
        menu: {
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" },
            csv: { text: "Export CSV" }
        },
        nodeMenu: {
            details: { text: "Details" },
            add: { text: "Add New" },
            edit: { text: "Edit" },
            remove: { text: "Remove" },
        },
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img",
            field_description: "description"
        },
        nodes: [
            { id: 1, name: "Denny Curtis", title: "CEO", img: "https://cdn.balkan.app/shared/2.jpg", description:"test" },
            { id: 2, pid: 1, name: "Ashley Barnett", title: "Sales Manager", img: "https://cdn.balkan.app/shared/3.jpg" },
            { id: 3, pid: 1, name: "Caden Ellison", title: "Dev Manager", img: "https://cdn.balkan.app/shared/4.jpg" },
            { id: 4, pid: 2, name: "Elliot Patel", title: "Sales", img: "https://cdn.balkan.app/shared/5.jpg" },
            { id: 5, pid: 2, name: "Lynn Hussain", title: "Sales", img: "https://cdn.balkan.app/shared/6.jpg" },
            { id: 6, pid: 3, name: "Tanner May", title: "Developer", img: "https://cdn.balkan.app/shared/7.jpg" },
            { id: 7, pid: 3, name: "Fran Parsons", title: "Developer", img: "https://cdn.balkan.app/shared/8.jpg" }
        ]
    });
};

</script>

<!-- gotop script -->
<script>

 








    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 500) {
            $('.goTop').fadeIn();
        } else {
            $('.goTop').fadeOut();
        }
    });
    $('.goTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
</script>

<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("body").addClass("air__layout--fixedHeader");
        } else {
            $("body").removeClass("air__layout--fixedHeader");
        };
    });
</script>
<script>
    ;(function($) {
      'use strict'
      $(function() {
        $('.summernote').summernote({
          height: 140,
          toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    //['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    // ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    //['height', ['height']]
  ]
        })
      })
    })(jQuery)
</script>

 
<script>
    $(document).ready(function () {
            $(".dd-structure-item").popover({ trigger: "manual", html: true, animation: false })
                .on("mouseenter", function () {
                    var _this = this;
                    $(this).popover("show");
                    $(".popover").on("mouseleave", function () {
                        $(_this).popover('hide');
                    });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide");
                        }
                    }, 300);
                });
        });
</script>



<script type="text/javascript">
    //Avanish changes

 $(document).ready(function($){


 
   
        $('#structure_form').validate({
            rules: {
               // parent_id: "required",
                name: "required",
                code: "required",
            },
            messages: {
               //  parent_id: "required",
                name: "required",
                code: "required",
            },
            submitHandler: function(form) {
               // form.preventDefault()
                 var formData = $('#structure_form').serialize();
                //console.log(formData);return false;
                $.ajax({
                    type : 'POST',
                    url : "<?php echo site_url('indexs/setData'); ?>",
                    data : formData,
                    dataType: "Json",
                     success: function (response) {   
                       console.log(response['parent_option']);
                        $('#stru-parent').html(' ').html(response['parent_option']);

                         console.log(response);return false;
                            },

                })

                console.log('form');return false;
              //  form.submit();
            }
    
            // any other options and/or rules
        });
 





    /*$(document).on('click','#submit_btn',function(e){
        e.preventDefault();

        var formData = $('#structure_form').serialize();
        console.log(formData);return false;
        $.ajax({
            type : 'POST',
            url : '<?php echo base_url('indexs/insertData'); ?>',
            data : formData
        })
    });*/
 });

</script>


</html>