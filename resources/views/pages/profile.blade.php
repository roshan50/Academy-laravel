@extends('layouts.default')
@section('content')
    <div class="main">
        <div class="container-fluid d-flex justify-content-center">
            <div class="container">
               <div class="my-info row">
                   <div class="col-lg-4">
                       <div class="personal pannel d-flex">
                        <div class="personal__img">
                            <img src="{{ URL::asset('/images/author.png') }}" alt="">
                        </div>
                        <div class="personal__txt">
                           <div class="name mdi mdi-account-outline">حسین محمدزاده</div>
                            <div class="email mdi mdi-email">Hossein.mhmd@gmail.com</div>
                            <div class="logout mdi mdi-power text-secondary">خروج از کاربری</div>
                        </div>
                    </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="statistic  d-flex flex-column justify-content-between">
                           <div class="credit pannel d-flex">
                               <div class="credit__img">
                                   <img src="images/money.png" alt="">
                               </div>
                               <div class="credit__txt">
                                   <div>میزان اعتبار</div>
                                   <div class="font-weight-bold text-16 text-dark">125/000 ریال</div>
                               </div>
                           </div>
                           <div class="achivment pannel d-flex">
                               <div class="achivment__img">
                                   <img src="images/hill.png" alt="">
                               </div>
                               <div class="achivment__txt">
                                   <div>دستاورد شما</div>
                                   <div class="font-weight-bold text-16 text-dark">دستاورد شماره 1</div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-5">
                       <ul class="medals pannel list-unstyled d-flex">
                           <li>
                               <img src="images/medal-1.png" alt="">
                           </li>
                           <li>
                               <img src="images/medal-1.png" alt="">
                           </li>
                           <li>
                               <img src="images/medal-1.png" alt="">
                           </li>
                           <li>
                               <img src="images/medal-1.png" alt="">
                           </li>
                           <li>
                               <img src="images/jam.png" alt="">
                           </li>
                       </ul>
                   </div>
               </div>
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="my-dashboard list-unstyled">
                            <li class="pannel mdi mdi-account-edit flex-row">ویرایش حساب کاربری</li>
                            <li class="pannel mdi mdi-book-open-variant flex-row">دوره های خریداری شده</li>
                            <li class="pannel mdi mdi-heart-outline flex-row">لیست علاقمندی ها</li>
                            <li class="pannel mdi mdi-sale flex-row">بن های تخفیف</li>
                            <li class="pannel mdi mdi-trophy-award flex-row">امتیازات</li>
                            <li class="pannel mdi mdi-cash flex-row">اطلاعات مالی</li>
                            <li class="pannel mdi mdi-comment-question-outline flex-row">پرسش و پاسخ</li>
                            <li class="pannel mdi mdi-clipboard-text flex-row">گزارش فعالیت ها</li>
                        </ul>
                    </div>

                    <div class="col-lg-9">
                        <div class="my-courses pannel">
                            <h6 class="my-course__header mdi mdi-book-open-variant text-secondary">دوره های خریداری شده</h6>
                            <div class="my-course__body">
                                <table>
                                    <tr>
                                        <th>کد دوره</th>
                                        <th>نام دوره</th>
                                        <th>تاریخ خرید</th>
                                        <th>مبلغ کل</th>
                                        <th>وضعیت</th>
                                    </tr>
                                    <tr>
                                        <td>154558</td>
                                        <td>آموزش مقدماتی فتوشاپ</td>
                                        <td>1396/09/06</td>
                                        <td>158/296/500 ریال</td>
                                        <td class="d-flex justify-content-center"><div class="badge badge-warning">تکمیل شده</div></td>
                                    </tr>
                                    <tr>
                                        <td>510054105</td>
                                        <td>آموزش C# مقدماتی</td>
                                        <td>1396/09/06</td>
                                        <td>158/296/500 ریال</td>
                                        <td class="d-flex justify-content-center"><div class="badge badge-success">تکمیل شده</div></td>
                                    </tr>
                                    <tr>
                                        <td>45204524</td>
                                        <td>آموزش لاراول</td>
                                        <td>1396/09/06</td>
                                        <td>158/296/500 ریال</td>
                                        <td class="d-flex justify-content-center"><div class="badge badge-dark">تکمیل شده</div></td>
                                    </tr>
                                    <tr>
                                        <td>488760</td>
                                        <td>آموزش PHP</td>
                                        <td>1396/09/06</td>
                                        <td>158/296/500 ریال</td>
                                        <td class="d-flex justify-content-center"><div class="badge badge-dark">تکمیل شده</div></td>
                                    </tr>
                                    <tr>
                                        <td>87980</td>
                                        <td>آموزش JavaScript</td>
                                        <td>1396/09/06</td>
                                        <td>158/296/500 ریال</td>
                                        <td class="d-flex justify-content-center"><div class="badge badge-dark">تکمیل شده</div></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection