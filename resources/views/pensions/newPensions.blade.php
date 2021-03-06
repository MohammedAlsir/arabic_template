@extends('layouts.masteer')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">'طلبات المعاشات الجديدة</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>الرقم</th>
                                    	<th>اسم المؤامن عليه</th>
                                    	<th>رقم التامين</th>
                                    	<th>صاحب العمل</th>
                                    	<th>تفاصيل</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>احمد محمد</td>
                                        	<td>124464</td>
                                        	<td>جامعة النيليلن</td>
                                            <td><a href="/show" class="btn  btn-sm btn-outline-primary">التفاصيل</a></td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>خالد</td>
                                        	<td>1248</td>
                                        	<td>جامعة امدرمان</td>
                                            <td><a href="/show" class="btn  btn-sm btn-outline-primary">التفاصيل</a></td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>اسامة خالد</td>
                                        	<td>1234</td>
                                        	<td>شركة بيبسي</td>
                                            <td><a href="/show" class="btn  btn-sm btn-outline-primary">التفاصيل</a></td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>علي عثمان</td>
                                        	<td>1256687</td>
                                        	<td>مطعم الشايقي</td>
                                        	<td><a href="/show" class="btn  btn-sm btn-primary">التفاصيل</a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection