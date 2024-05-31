@extends('admin.layouts.master')

@section('head-tag')
<title>کالاها </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a></li>

      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش </a></li>

      <li class="breadcrumb-item active font-size-12" aria-current="page">کالاها</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5> کالاها </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{route('admin.market.product.create')}}" class="btn btn-info btn-sm ">ایجاد کالای جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover h-150" >
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>نام کالا  </th>
                                <th>تصویر کالا </th>
                                <th>قیمت </th>
                                <th>وزن </th>
                                <th>دسته </th>
                                <th> فرم</th>
                                <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i> تنظیمات کلی</th>
                            </tr>

                        </thead>

                    <tbody>
                            <tr>
                                <th>1</th>
                                <td>موبایل سامسونگ</td>
                                <td><img class="logo" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""></td>
                                <td>20000 toman</td>
                                <td>1 kilogram</td>
                                <td>کالای الکترونیکی </td>
                                <td>اندازه صفحه</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button" id="dropdownmenuelink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownmenuelink">
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i> گالری </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> فرم کالا </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i> ویرایش   </a>

                                            <form action="" method="POST" >
                                                <button class="dropdown-item text-right" type="submit" >

                                                    <i class="fa fa-window-close"></i> حذف
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                                                        <tr>
                                <th>1</th>
                                <td>موبایل سامسونگ</td>
                                <td><img class="logo" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""></td>
                                <td>20000 toman</td>
                                <td>1 kilogram</td>
                                <td>کالای الکترونیکی </td>
                                <td>اندازه صفحه</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button" id="dropdownmenuelink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownmenuelink">
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i> گالری </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> فرم کالا </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i> ویرایش   </a>

                                            <form action="" method="POST" >
                                                <button class="dropdown-item text-right" type="submit" >

                                                    <i class="fa fa-window-close"></i> حذف
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                                                        <tr>
                                <th>1</th>
                                <td>موبایل سامسونگ</td>
                                <td><img class="logo" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""></td>
                                <td>20000 toman</td>
                                <td>1 kilogram</td>
                                <td>کالای الکترونیکی </td>
                                <td>اندازه صفحه</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button" id="dropdownmenuelink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownmenuelink">
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i> گالری </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> فرم کالا </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i> ویرایش   </a>

                                            <form action="" method="POST" >
                                                <button class="dropdown-item text-right" type="submit" >

                                                    <i class="fa fa-window-close"></i> حذف
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                    </tbody>
                </table>

            </section>

        </section>

    </section>
</section>

@endsection

