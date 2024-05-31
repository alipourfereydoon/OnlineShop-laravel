@extends('admin.layouts.master')

@section('head-tag')
<title> مشتریان </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a></li>

      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش کاربران </a></li>

      <li class="breadcrumb-item active font-size-12" aria-current="page">مشتریان  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>  مشتریان  </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{route('admin.user.customer.create')}}" class="btn btn-info btn-sm">ایجاد مشتری جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>
                                    ایمیل
                                </th>
                                <th>
                                    شماره موبایل
                                </th>
                                <th>
                                    نام
                                </th>
                                <th>
                                    نام خانوادگی
                                </th>
                                <th>
                                    کد ملی
                                </th>
                                <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i> تنظیمات کلی</th>
                            </tr>

                        </thead>
                    <tbody>
                            <tr>
                                <th>1</th>
                                <td>ali.pourferydoo1983@gmail.com</td>
                                <td>09178771998 </td>
                                <td>علی</td>
                                <td>پورفریدون</td>
                                <td>2298637611 </td>
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

