@extends('admin.layouts.master')

@section('head-tag')
<title>سفارشات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a></li>

      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش </a></li>

      <li class="breadcrumb-item active font-size-12" aria-current="page">سفارشات</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5> سفارشات </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled">ایجاد سفارش جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>کد سفارش</th>
                                <th>مبلغ سفارش</th>
                                <th>مبلغ تخفیف</th>
                                <th>مبلغ نهایی</th>
                                <th>وضعیت پرداخت</th>
                                <th>شیوه پرداخت</th>
                                <th>بانک</th>
                                <th>وضعیت ارسال</th>
                                <th>شیوه ارسال</th>
                                <th>وضعیت سفارش</th>
                                <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i> تنظیمات کلی</th>
                            </tr>

                        </thead>
                    <tbody>
                            <tr>
                                <th>1</th>
                                <td>2298637611</td>
                                <td>3980000 toman</td>
                                <td>20000 toman</td>
                                <td>360000 toman</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>در حال ارسال</td>
                                <td>پیک موتوری</td>
                                <td>در حال ارسال</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button" id="dropdownmenuelink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownmenuelink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>مشاهده فاکتور</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>تغییر وضعیت ارسال </a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>تغییر وضعیت سفارش </a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>باطل کردن سفارش </a>

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

