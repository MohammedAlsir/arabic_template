@extends('layouts.masteer')
@section('content')
<div class="container-fluid">
<div class="row">
                    <div class="col-md-6 grid-margin">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">معلومات العمل</h4>
                                
                            </div>
                            <div class="content table-responsive ">
                                <table class="table ">
                                    <thead>
                                        <th>صاحب العمل</th>
                                        <th>تاريخ بداء الخدمة </th>
                                        <th>تاريح الاشتراك في التامين الاجتماعي</th>
                                        <th>تاريخ انتهاء الخدمة</th>
                                        <th>سبب انتهاء الخدمة</th>
                                        <th>اجر الاشتراك الاخير</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>مصنع كوفتي </td>
                                            <td>2001/4/5</td>
                                            <td>2001/4/10</td>
                                            <td>2021/3/12</td>
                                        	<td> عجز</td>
                                        	<td>20000</td>
                                        	
                                        </tr>
                                       
                                       
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">معلومات الطلب</h4>
                                
                            </div>
                            <div class="content table-responsive ">
                                <table class="table ">
                                    <thead>
                                        <th>رقم الطلب</th>
                                    	<th>تاربخ الطلب</th>
                                    	<th>تعديل</th>
                                        <th>قبول</th>
                                        <th>رفض</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>39</td>
                                        	<td>2021/3/15</td>
                                       
                                        
                                            <td><a href="/newPensions" class="badge   badge-warning">تعديل</a></td>
                                            <td><a href="/newPensions" class="badge   badge-success ">قبول</a></td>
                                            <td><a href="/newPensions" class="badge   badge-danger">رفض</a></td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">المعلومات الشخصية</h4>
                                
                            </div>
                            <div class="content table-responsive ">
                                <table class="table ">
                                    <thead>
                                    <th>اسم العامل</th>
                                    	<th> اسم الوالدة ثلاثي</th>
                                    	<th> اسم الوالد ثلاثي</th>
                                    	<th>اسم الزوجة ثلاثي</th>
                                    	<th>النوع</th>
                                        <th>تاريخ الميلاد</th>
                                        <th>رقم اثبات الشحصية</th>
                                        <th>العنوان </th>
                                        <th>رقم الهاتف</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>احمد محمد صالح</td>
                                        	<td>امتنان بدويشيح ادريس</td>
                                        	<td>محمد صالح ميرغني عبدالله</td>
                                            <td>-</td>
                                        	<td>زكر</td>
                                            <td>1997/12/26</td>
                                            <td>12349590</td>
                                            <td>الخرطوم</td>
                                            <td>0928291026</td>
                                        </tr>
                                       
                                    
                                       
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

@endsection