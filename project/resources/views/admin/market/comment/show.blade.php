@extends('admin.layouts.master')

@section('head-tag')
<title>برند </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه </a></li>

      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش </a></li>
     <li class="breadcrumb-item font-size-12"> <a href="#">نظرات </a></li>
      <li class="breadcrumb-item active font-size-12" aria-current="page">نمایش نظرات  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>نمایش نظرات </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{route('admin.market.comment.index')}}" class="btn btn-info btn-sm">بازگشت  </a>
            </section>
            <section class="card mb-3">
                <section class="card-header text-white bg-custom-pink">
                    علی پوفریدون -2298637611

                </section>
                <section class="card-body">
                    <h5 class="card-title">
                        مشخصات کالا: ساعت هوشمند
                    </h5>
                    <p class="card-text">
                        تلفن خوبی نیست
                    </p>

                </section>

            </section>

            <section >
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 ">
                            <div class="form-group">
                                <label for="">پاسخ ادمین </label>
                                <textarea class="form-control form-control-sm" >

                                </textarea>
                            </div>

                        </section>
                        <section class="pt-4 col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>

                    </section>


                </form>

            </section>

        </section>

    </section>
</section>

@endsection

