@extends('admin.layouts.master')

@section('head-tag')
<title>کوپن تخفیف</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a></li>

      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش </a></li>

      <li class="breadcrumb-item active font-size-12" aria-current="page">کوپن تخفیف  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5> کوپن تخفیف </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{route('admin.market.Discount.copan.create')}}" class="btn btn-info btn-sm">ایجاد کوپن جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>کد تخفیف</th>
                                <th>درصد تخفیف</th>
                                <th>سقف تخفیف</th>
                                <th>نوع کوپن</th>
                                <th>تاریخ شروع</th>
                                <th>تاریخ پایان</th>
                                <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i> تنظیمات کلی</th>
                            </tr>

                        </thead>
                    <tbody>
                            <tr>
                                <th>1</th>
                                <th>takhfif-happy new year</th>
                                <th>30%</th>
                                <th>25.000 toman</th>
                                <th>عمومی</th>
                                <th>اردیبهشت 1403</th>
                                <th>مرداد 1403</th>
                                <td class="width-16-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>حذف</button>
                                </td>
                            </tr>
                    </tbody>
                </table>

            </section>

        </section>

    </section>
</section>

@endsection

