@extends('layout.app')

@section('content')


    <!-- END THEME PANEL -->
    <!-- BEGIN PAGE BAR -->
    {{-- <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Form Stuff</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    {{-- <h3 class="page-title"> Form Validation
    <small>form validation</small>
</h3> --}}
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">?????????? ?????? ?????????????? ???????? ?????? </span>
                    </div>

                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="#" id="form_sample_1" class="form-horizontal">
                        <div class="form-body">
                            {{-- <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide"> --}}
                            {{-- <button class="close" data-close="alert"></button> Your form validation is successful! </div> --}}

                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????? ??????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3"> ?????? ???????? ??????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????? ????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????? ???????????? ????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">???????????? ????????????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>

                                        </div>

                                        <select class="form-control" name="">
                                                <option value="">??????????</option>
                                            <option value="">??????????</option>
                                            <option value="">????????</option>

                                        </select>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>

                                        </div>

                                        <select class="form-control" name="">
                                            <option value="">?????????? </option>
                                            <option value="">?????????? </option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????? ?????????? ????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">??????????????????
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????????????? ????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-3">?????? ????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="citizen_name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <div class="form-group  margin-top-20">
                                    <label class="control-label col-md-6">???? ???????????? ?????????????? ?????? ?????? ?????? ??????????????
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio6" name="radio2" class="md-radiobtn">
                                                <label for="radio6">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> ??????  </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked="">
                                                <label for="radio7">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> ????</label>
                                            </div>

                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>


    </div>
@endsection
