@extends('layouts.app')

@section('content')













            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro" style="
    float: right;
">
                        <li class="active" onclick="menuFunc(1)">
                            <a data-toggle="tab" href="#Home"><i class="fas fa-list-ul"></i> كشف</a>
                        </li>
                        <li onclick="menuFunc(2)">
                            <a data-toggle="tab" href="#mailbox"><i class="fas fa-search"></i> بحث</a>
                        </li>
                        <li  onclick="menuFunc(3)">
                            <a data-toggle="tab" href="#Interface"><i class="fas fa-plus-square"></i> إضافة</a>
                        </li>

                    </ul>



                </div>
            </div>




<div style="margin-top: 2%;"></div>








<div id="page1" style="display: none">

    <div class="row">



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="datepicker-int mg-t-30">
                <div class="cmp-tb-hd">
                    <h2>Date Picker</h2>
                    <p>Date picker widget based on twitter bootstrap</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                            <label>Simple data input format</label>
                            <div class="input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" value="03/19/2018">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_2">
                            <label>One Year view</label>
                            <div class="input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" value="03/19/2018">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                            <label>Decade view</label>
                            <div class="input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" value="03/19/2018">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
                <div class="basic-tb-hd">
                    <h2>Basic Example</h2>
                    <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                </div>
                <div class="table-responsive">
                    <div id="data-table-basic_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="data-table-basic_length"><label>Show <select name="data-table-basic_length" aria-controls="data-table-basic" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="data-table-basic_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="data-table-basic"></label></div><table id="data-table-basic" class="table table-striped dataTable" role="grid" aria-describedby="data-table-basic_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 292px;">Position</th><th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 144px;">Office</th><th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 54px;">Age</th><th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 125px;">Start date</th><th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;">Salary</th></tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr></tbody>
                            <tfoot>
                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                            </tfoot>
                        </table><div class="dataTables_info" id="data-table-basic_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="data-table-basic_paginate"><a class="paginate_button previous disabled" aria-controls="data-table-basic" data-dt-idx="0" tabindex="0" id="data-table-basic_previous">Previous</a><span><a class="paginate_button current" aria-controls="data-table-basic" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="data-table-basic" data-dt-idx="7" tabindex="0" id="data-table-basic_next">Next</a></div></div>
                </div>
            </div>
        </div>
    </div>


</div>



<div id="page2" style="display: none">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-element-list mg-t-30">
                <div class="cmp-tb-hd">
                    <h2>Input Mask</h2>
                    <p>An input mask helps the user with the input. This can be useful for dates, numerics, phone numbers etc...</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>ISBN 1</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>IPV4</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-mail"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IPV4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Tax ID</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-tax"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="99-9999999" placeholder="Tax ID">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Phone</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-phone"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Currency</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-dollar"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="TL 999,999,999.99" placeholder="Currency">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Date</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-calendar"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Postal Code</h2>
                        </div>
                        <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-star"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="9999" placeholder="Postal Code">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>IP Address</h2>
                        </div>
                        <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-ip-locator"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IP">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>Credit Card</h2>
                        </div>
                        <div class="form-group ic-cmp-int form-elet-mg">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-credit-card"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" data-mask="999 999 999 9999" placeholder="Credit Card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




<div id="page3" style="display: block">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="
    margin: auto;
">
            <div class="form-element-list mg-t-30">
                <div class="cmp-tb-hd" style="
    direction: rtl;
">
                    <h2>إضافة معاملة جديدة</h2>
                </div>
                <div class="row" style=" text-align: right; direction: rtl; ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>عنوان المعاملة</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-tax"></i>
                            </div>
                            <div class="nk-int-st">
                                <input id="InsertTitleF" type="text" class="form-control" placeholder="عنوان المعاملة">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style=" text-align: right; direction: rtl; ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>ملاحظة</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-tax"></i>
                            </div>
                            <div class="nk-int-st">
                                <input id="InsertNoteF" type="text" class="form-control" placeholder="ملاحظة">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style=" text-align: right; direction: rtl; ">
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <div class="nk-int-mk">
                            <h2>قيمة معاملة</h2>
                        </div>
                        <div class="form-group ic-cmp-int" style="margin-left: 1%;">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-dollar"></i>
                            </div>
                            <div class="nk-int-st">
                                <input id="InsertValueF" type="number" class="form-control" data-mask="TL 999,999,999.99" placeholder="قيمة المعاملة">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style=" text-align: right; direction: rtl; ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk">
                            <h2>نوع معاملة</h2>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-dollar"></i>
                            </div>
                            <div class="nk-int-st">
                                {{--<input type="number" class="form-control" data-mask="TL 999,999,999.99" placeholder="قيمة المعاملة">--}}
                                <select id="InsertTypeF" class="form-control" style=" border: 0 #fff; border-bottom: 1px solid #e8e8e8; background-color: #fff; width: 50%; ">
                                    <option value="1">دخل</option>
                                    <option value="2">خرج</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style=" text-align: left; direction: ltr; ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <button onclick="InsertFunc()" id="InsertSubmitF" class="btn btn-success notika-btn-success waves-effect">إدخال</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>





{{--<script src="js/main.app.js"></script>--}}




@endsection