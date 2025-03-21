@extends('chat.layouts.master')
@section('title', 'Cài đặt')
@section('content')

<!-- Start settings tab-pane -->
<div class="tab-pane fade show active" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
    <!-- Start Settings content -->
    <div>
        <div class="px-4 pt-4">
            <h4 class="mb-0">Cài đặt</h4>
        </div>

        <div class="text-center border-bottom p-4">
            <div class="mb-4 profile-user">
                <img src="{{asset('assets/chat/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" alt="">
                <button type="button" class="btn btn-light bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                    <i class="ri-pencil-fill"></i>
                </button>
            </div>

            <h5 class="font-size-16 mb-1 text-truncate">Trần Văn A</h5>
            <div class="dropdown d-inline-block mb-1">
                <a class="text-muted dropdown-toggle pb-1 d-block" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Available <i class="mdi mdi-chevron-down"></i>
                </a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Available</a>
                  <a class="dropdown-item" href="#">Busy</a>
                </div>
            </div>
        </div>
        <!-- End profile user -->

        <!-- Start User profile description -->
        <div class="p-4 user-profile-desc" data-simplebar>
            <div id="settingprofile" class="accordion">
                <div class="accordion-item card border mb-2">
                    <div class="accordion-header" id="personalinfo1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalinfo" aria-expanded="true" aria-controls="personalinfo">
                            <h5 class="font-size-14 m-0">Thông tin cá nhân</h5>
                        </button>
                    </div>
                    <div id="personalinfo" class="accordion-collapse collapse show" aria-labelledby="personalinfo1" data-bs-parent="#settingprofile">
                        <div class="accordion-body">
                            <div class="float-end">
                                <button type="button" class="btn btn-light btn-sm"><i class="ri-edit-fill me-1 ms-0 align-middle"></i> Sửa</button>
                            </div>

                            <div>
                                <p class="text-muted mb-1">Tên</p>
                                <h5 class="font-size-14">Patricia Smith</h5>
                            </div>

                            <div class="mt-4">
                                <p class="text-muted mb-1">Email</p>
                                <h5 class="font-size-14">adc@123.com</h5>
                            </div>

                            <div class="mt-4">
                                <p class="text-muted mb-1">Thời gian</p>
                                <h5 class="font-size-14">11:40 AM</h5>
                            </div>

                            <div class="mt-4">
                                <p class="text-muted mb-1">Địa chỉ</p>
                                <h5 class="font-size-14 mb-0">Cần Thơ, Việt Nam</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end personal info card -->

                <div class="accordion-item card border mb-2">
                    <div class="accordion-header" id="privacy1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy" aria-expanded="false" aria-controls="privacy">
                            <h5 class="font-size-14 m-0">Quyền riêng tư</h5>
                        </button>
                    </div>
                    <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1" data-bs-parent="#settingprofile">
                        <div class="accordion-body">
                            <div class="py-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 mb-0 text-truncate">Ảnh hồ sơ</h5>
                                    </div>
                                    <div class="dropdown ms-2 me-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Mọi người <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Mọi người</a>
                                            <a class="dropdown-item" href="#">Được chọn</a>
                                            <a class="dropdown-item" href="#">Không ai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 mb-0 text-truncate">Lần truy cập cuối</h5>

                                    </div>
                                    <div class="ms-2 me-0">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="privacy-lastseenSwitch" checked>
                                            <label class="form-check-label" for="privacy-lastseenSwitch"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 mb-0 text-truncate">Trạng thái</h5>
                                    </div>
                                    <div class="dropdown ms-2 me-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Mọi người <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Mọi người</a>
                                            <a class="dropdown-item" href="#">Được chọn</a>
                                            <a class="dropdown-item" href="#">Không ai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 mb-0 text-truncate">Thông báo đã đọc</h5>
                                    </div>
                                    <div class="ms-2 me-0">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="privacy-readreceiptSwitch" checked>
                                            <label class="form-check-label" for="privacy-readreceiptSwitch"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-3 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 mb-0 text-truncate">Nhóm</h5>

                                    </div>
                                    <div class="dropdown ms-2 me-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Mọi người <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Mọi người</a>
                                            <a class="dropdown-item" href="#">Được chọn</a>
                                            <a class="dropdown-item" href="#">Không ai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end privacy card -->

                <div class="accordion-item card border mb-2">
                    <div class="accordion-header" id="security1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#security" aria-expanded="false" aria-controls="security">
                            <h5 class="font-size-14 m-0"></i> Bảo mật</h5>
                        </button>
                    </div>
                    <div id="security" class="accordion-collapse collapse" aria-labelledby="security1" data-bs-parent="#settingprofile">
                        <div class="accordion-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-13 mb-0 text-truncate">Hiển thị thông báo bảo mật</h5>

                                </div>
                                <div class="ms-2 me-0">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="security-notificationswitch">
                                        <label class="form-check-label" for="security-notificationswitch"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end security card -->

                <div class="accordion-item card border mb-2">
                    <div class="accordion-header" id="help1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h5 class="font-size-14 m-0"></i> Trợ giúp</h5>
                        </button>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="help1" data-bs-parent="#settingprofile">
                        <div class="accordion-body">
                            <div class="py-3">
                                <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Câu hỏi thường gặp</a></h5>
                            </div>
                            <div class="py-3 border-top">
                                <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Liên hệ</a></h5>
                            </div>
                            <div class="py-3 border-top">
                                <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Điều khoản & Chính sách bảo mật</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end profile-setting-accordion -->
        </div>
        <!-- End User profile description -->
    </div>
    <!-- Start Settings content -->
</div>
<!-- End settings tab-pane -->

@endsection
