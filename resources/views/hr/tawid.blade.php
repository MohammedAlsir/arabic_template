@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">طلب معاش</h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الإسم ثلاثي</label>
                                            <input type="text" class="form-control" placeholder="Company" value="محمد سراج الدين">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>إسم الوالدة</label>
                                            <input type="text" class="form-control" placeholder="Company" value="محمد سراج الدين">                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">النوع</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>ذكر</option>
                                                <option value="2">أنثي</option>
                                              </select>                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">تاريخ الميلاد</label>
                                            <input type="date" name="date">
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نوع الشهادة</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>ميلاد</option>
                                                <option value="3">تسنين</option>
                                              </select>                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رقم التأمين</label>
                                            <input type="text" class="form-control" placeholder="نام" value="248277287">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الرقم الوطني</label>
                                            <input type="text" class="form-control" placeholder="نام خانوادگی" value="0127673483">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ الإشتراك</label>
                                            <input type="date" class="form-control" placeholder="آدرس خانه" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ الإنتهاء</label>
                                            <input type="date" class="form-control" placeholder="آدرس خانه" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>الوظيفه</label>
                                            <input type="text" class="form-control" placeholder="شهر" value="مهندس">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>الأجر</label>
                                            <input type="text" class="form-control" placeholder="کشور" value="100000$">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>کد پستی</label>
                                            <input type="number" class="form-control" placeholder="کد پستی">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">إرسال الطلب</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                        </div>
                        <div class="content">
                            <div class="author">
                                 <a href="#">
                                <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="...">

                                  <h4 class="title">محمد سراج<br>
                                     <small>Programmer</small>
                                  </h4>
                                </a>
                            </div>
                            <p class="description text-center"> Software Tester<br>  جوجه خود را او  تا تشنه <br>من در آن لامبورگینی دو صندلی هستم "
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

