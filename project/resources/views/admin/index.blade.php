<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <link rel="stylesheet" href="asset/css/gride.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>admin-panel</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  -->
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/cjs/popper-base.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
    <header class="header">
            <section class="sidebar_header bg-gray">
                <section class="d-flex justify-content-between flex-md-row-reverse px-2">
                    <span  id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
                    <span id="sidbar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
                    <span><img  class="logo" src="asset/images/logo.png" alt="logo"></span>
                    <span class="d-md-none pointer" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
                </section>
            </section>
        <section class="body-header" id="body-header">
            <section class="d-flex justify-content-between">
                <section>
                    <span >
                        <span id="search-area" class="search-area p-1 mr-5 d-none">
                            <i  id="search-area-hide" class="fas fa-times pointer"></i>
                            <input id="search-input" type="text" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                        <i id="search-toggle" class="fas fa-search p-1 d-none d-md-inline pointer"></i>

                    </span>
                    <span id="full-screan" class="mr-5 pointer p-1 d-none d-md-inline ">
                        <i id="screan-compress" class="fas fa-compress d-none"></i>
                        <i id="screan-expand" class="fas fa-expand"></i>

                    </span>

                </section>

                <section>
                    <span class="ml-2 ml-md-5 position-relative">
                        <span id="header-notification-toggle" class="pointer">
                            <i   class="far fa-bell"></i>
                            <sup class="badge badge-danger">4</sup>
                        </span>
                        <section id="header-notification" class=" header-notification rounded">
                            <section class="d-flex justify-content-between">
                                <span class="px-2">
                                    نوتیفیکیشن ها 
                                </span>
                                <span >
                                جدید

                                </span>

                            </section>
                            <ul class="list-group rounded px-0">
                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img  class="notification-img" src="asset/images/avatar-2.jpg" alt="">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">علی پورفریدون</h5>
                                            <p class="notification-text">test</p>
                                            <p class="notification-time">5دقیقه قبل</p>

                                        </section>

                                    </section>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img class="notification-img" src="asset/images/avatar-2.jpg" alt="">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">علی پورفریدون</h5>
                                            <p class="notification-text">test</p>
                                            <p class="notification-time">5دقیقه قبل</p>

                                        </section>

                                    </section>
                                </li>
                                    <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img class="notification-img" src="asset/images/avatar-2.jpg" alt="">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">علی پورفریدون</h5>
                                            <p class="notification-text">test</p>
                                            <p class="notification-time">5دقیقه قبل</p>

                                        </section>

                                    </section>
                                </li>

                            </ul>
                        </section>
                    </span>
<!-- the next notification------ -->
<span class="ml-2 ml-md-4 position-relative">
    <span id="header-comment-toggle" class="pointer">
        <i class="far fa-comment-alt"> <sup >3</sup></i>
    </span>
    <section id="header-comment" class="header-comment">
        <section class="border-bottom px-4">
            <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو ...">
        </section>
        <section class="header-comment-wrapper">
            <ul class="list-group rounded px-0">
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
                <li class="list-group list-group-item-action">
                    <section class="media">
                        <img src="asset/images/avatar-2.jpg" alt="avatar" class="notification-img">
                        <section class="media-body pr-1">
                            <section class="d-flex justify-content-between">
                                <h5 class="comment-user">علی پورفریدون</h5>
                                <span>
                                    <i class="fas fa-circle text-success comment-user-status"></i>
                                </span>
                            </section>

                        </section>

                    </section>

                </li>
            </ul>
        </section>

    </section>

</span>
<span class="ml-3 ml-md-5 position-relative">
    <span id="header-profile-toggle" class="pointer">
        <img class="header-avatar" src="asset/images/avatar-2.jpg" alt="avarar">
        <span class="header-username">علی پوفریدون</span>
        <i class="fas fa-angle-down"></i>
    </span>
    <section id="header-profile1" class="header-profile rounded">
        <section class="list-group rounded">
            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                <i class="fas fa-cog"></i>تنظیمات
            </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                <i class="fas fa-user"></i>کاربر
            </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                <i class="far fa-envelope"> </i>پیام ها
            </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                <i class="fas fa-lock"> </i>قفل صفحه
            </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                <i class="fas fa-sign-out-alt"></i>خروج
            </a>

        </section>

    </section>

</span>

                </section>
            </section>

        </section>
    </header>
    <section class="body-container">
        <aside id="sidbar" class="sidbar">
            <section class="sidebar-container">
                <section class="sidebar-wrapper">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-home"></i>
                        <span>
                            خانه
                        </span>
                    </a>
                    <section class="sidbar-part-title">بخش محتوی</section>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>
                            دسته بندی ها 
                        </span>
                    </a>
                    <section class="sidbar-group-link">
                        <section class="sidbar-dropdowntoggle">
                            <i class="fas fa-chart-bar" id="icon"></i>
                            <span>نوشته ها </span>
                            <i class="fas fa-angle-left " id="angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">مقالات</a>
                            <a href="#">پست ها</a>
                            <a href="#">دوره ها</a>
                        </section>
                    </section>
                      <section class="sidbar-part-title">بخش کاربران</section>
                        <section class="sidbar-group-link">
                        <section class="sidbar-dropdowntoggle">
                            <i class="fas fa-users" id="icon"></i>
                            <span> کاربران</span> 
                            <i class="fas fa-angle-left" id="angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">ادمین</a>
                            <a href="#"> مدرس ها</a>
                            <a href="#"> دانشجو</a>
                        </section>
                    </section>
                    <section class="sidbar-part-title">تنظیمات </section>
                        <section class="sidbar-group-link">
                        <section class="sidbar-dropdowntoggle">
                            <i class="fas fa-cogs" id="icon"></i>
                            <span> تنظیمات منو</span> 
                            <i class="fas fa-angle-left" id="angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">منوی هدر</a>
                            <a href="#"> منوی فوتر </a>
                        </section>
                    </section>


                </section>

            </section>

        </aside>
        <!-- design the body of site  -->
       
        <section id="main-body" class="main-body">
            <section class="row">
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-yellow text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-green text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-pink text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-blue text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-danger text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-success text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-warning text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
                                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-primary text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5> 3200</h5>
                                        <p>مبلغ</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>

                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i>
                                بروز رسانی

                            </section>

                        </section>
    
                    </a>
                </section>
            </section>
            <section class="row">
                <section class="col-12">
                    <section class="main-body-container">
                        <section class="main-body-container-header">
                            <h5>بخش کاربران</h5>
                            <p>در این بحش اطلاعات در مورد کاربران به شما داده می شود </p>

                        </section>
                        <section class="body-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae earum fuga blanditiis veniam,
                                 illo non pariatur odio totam hic ab? Quo,
                                 ratione accusantium sequi cumque exercitationem optio blanditiis rem non.
                            </p>
                             <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae earum fuga blanditiis veniam,
                                 illo non pariatur odio totam hic ab? Quo,
                                 ratione accusantium sequi cumque exercitationem optio blanditiis rem non.
                            </p>
                             <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae earum fuga blanditiis veniam,
                                 illo non pariatur odio totam hic ab? Quo,
                                 ratione accusantium sequi cumque exercitationem optio blanditiis rem non.
                            </p> 
                             <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae earum fuga blanditiis veniam,
                                 illo non pariatur odio totam hic ab? Quo,
                                 ratione accusantium sequi cumque exercitationem optio blanditiis rem non.
                            </p>
                        </section>

                    </section>

                </section>
            </section>

        </section>

    </section>

    <!-- <script src="asset/js/jquery.js" ></script> -->
    <!-- <script src="asset/js/popper.js"></script> -->
    <!-- <script src="asset/js/bootstrap/bootstrap.min.js"></script> -->
    <script src="asset/js/grid.js"></script>
</body>
</html>