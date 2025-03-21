<!-- Start User chat -->
<div class="user-chat w-100 overflow-hidden">
    <div class="d-lg-flex">

        <!-- start chat conversation section -->
        <div class="w-100 overflow-hidden position-relative">
            <div class="p-3 p-lg-4 border-bottom user-chat-topbar">
                <div class="row align-items-center">
                    <div class="col-sm-4 col-8">
                        <div class="d-flex align-items-center">
                            <div class="d-block d-lg-none me-2 ms-0">
                                <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i
                                        class="ri-arrow-left-s-line"></i></a>
                            </div>
                            <div class="me-3 ms-0">
                                <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" class="rounded-circle avatar-xs"
                                    alt="">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-0 text-truncate"><a href="#"
                                        class="text-reset user-profile-show">Trần Thị C</a> <i
                                        class="ri-record-circle-fill font-size-10 text-success d-inline-block ms-1"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-4">
                        <ul class="list-inline user-chat-nav text-end mb-0">
                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </button>
                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-md">
                                        <div class="search-box p-2">
                                            <input type="text" class="form-control bg-light border-0"
                                                placeholder="Tìm kiếm..">
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                    data-bs-target="#audiocallModal">
                                    <i class="ri-phone-line"></i>
                                </button>
                            </li>

                            <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                    data-bs-target="#videocallModal">
                                    <i class="ri-vidicon-line"></i>
                                </button>
                            </li>

                            <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                <button type="button" class="btn nav-btn user-profile-show">
                                    <i class="ri-user-2-line"></i>
                                </button>
                            </li>

                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-more-fill"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item d-block d-lg-none user-profile-show" href="#">Xem hồ sơ <i class="ri-user-2-line float-end text-muted"></i></a>
                                        <a class="dropdown-item d-block d-lg-none" href="#" data-bs-toggle="modal"
                                            data-bs-target="#audiocallModal">Âm thanh <i
                                                class="ri-phone-line float-end text-muted"></i></a>
                                        <a class="dropdown-item d-block d-lg-none" href="#" data-bs-toggle="modal"
                                            data-bs-target="#videocallModal">Video <i
                                                class="ri-vidicon-line float-end text-muted"></i></a>
                                        <a class="dropdown-item" href="#">Lưu trữ <i
                                                class="ri-archive-line float-end text-muted"></i></a>
                                        <a class="dropdown-item" href="#">Tắt tiếng <i
                                                class="ri-volume-mute-line float-end text-muted"></i></a>
                                        <a class="dropdown-item" href="#">Xóa <i
                                                class="ri-delete-bin-line float-end text-muted"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end chat user head -->

            <!-- start chat conversation -->
            <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
                <ul class="list-unstyled mb-0">
                    <li>
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            Chào buổi sáng
                                        </p>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:00</span></p>
                                    </div>
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation-name">Trần Thị C</div>
                            </div>
                        </div>
                    </li>

                    <li class="right">
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-1.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            Good morning, How are you? What about our next meeting?
                                        </p>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:02</span></p>
                                    </div>

                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="conversation-name">Trần Văn A</div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chat-day-title">
                            <span class="title">Hôm nay</span>
                        </div>
                    </li>

                    <li>
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('')}}assets/chat/images/users/avatar-4.jpg" alt="">
                            </div>

                            <div class="user-chat-content">

                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            Yeah everything is fine
                                        </p>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:05</span></p>
                                    </div>
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            & Next meeting tomorrow 10.00AM
                                        </p>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:05</span></p>
                                    </div>
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="conversation-name">Trần Thị C</div>
                            </div>

                        </div>
                    </li>

                    <li class="right">
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-1.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            Wow that's great
                                        </p>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:06</span></p>
                                    </div>
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="conversation-name">Trần Văn A</div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">

                                    <div class="ctext-wrap-content">
                                        <ul class="list-inline message-img  mb-0">
                                            <li class="list-inline-item message-img-list me-2 ms-0">
                                                <div>
                                                    <a class="popup-img d-inline-block m-1"
                                                        href="{{asset('assets/chat/images/small/img-1.jpg')}}" title="Project 1">
                                                        <img src="{{asset('assets/chat/images/small/img-1.jpg')}}" alt=""
                                                            class="rounded border">
                                                    </a>
                                                </div>
                                                <div class="message-img-link">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a download="img-1.jpg"
                                                                href="{{asset('assets/chat/images/small/img-1.jpg')}}"
                                                                class="fw-medium">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Sao chép <i
                                                                        class="ri-file-copy-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Lưu <i
                                                                        class="ri-save-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                                        class="ri-chat-forward-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Xóa <i
                                                                        class="ri-delete-bin-line float-end text-muted"></i></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="list-inline-item message-img-list">
                                                <div>
                                                    <a class="popup-img d-inline-block m-1"
                                                        href="{{asset('assets/chat/images/small/img-2.jpg')}}" title="Project 2">
                                                        <img src="{{asset('assets/chat/images/small/img-2.jpg')}}" alt=""
                                                            class="rounded border">
                                                    </a>
                                                </div>
                                                <div class="message-img-link">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a download="img-2.jpg"
                                                                href="{{asset('assets/chat/images/small/img-2.jpg')}}"
                                                                class="fw-medium">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Sao chép <i
                                                                        class="ri-file-copy-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Lưu <i
                                                                        class="ri-save-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                                        class="ri-chat-forward-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Xóa <i
                                                                        class="ri-delete-bin-line float-end text-muted"></i></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:09</span></p>
                                    </div>

                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>

                                </div>

                                <div class="conversation-name">Trần Thị C</div>
                            </div>

                        </div>
                    </li>

                    <li class="right">
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-1.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">

                                    <div class="ctext-wrap-content">
                                        <div class="card p-2 mb-2">
                                            <div class="d-flex flex-wrap align-items-center attached-file">
                                                <div class="avatar-sm me-3 ms-0 attached-file-avatar">
                                                    <div
                                                        class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                        <i class="ri-file-text-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <div class="text-start">
                                                        <h5 class="font-size-14 text-truncate mb-1">admin_v1.0.zip</h5>
                                                        <p class="text-muted text-truncate font-size-13 mb-0">12.5 MB
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-4 me-0">
                                                    <div class="d-flex gap-2 font-size-20 d-flex align-items-start">
                                                        <div>
                                                            <a download="admin_v1.0.zip"
                                                                href="{{asset('assets/chat/images/small/admin_v1.0.zip')}}"
                                                                class="fw-medium">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-muted" href="#"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Share <i
                                                                        class="ri-share-line float-end text-muted"></i></a>
                                                                <a class="dropdown-item" href="#">Xóa <i
                                                                        class="ri-delete-bin-line float-end text-muted"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span
                                                class="align-middle">10:16</span></p>
                                    </div>

                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Sao chép <i
                                                    class="ri-file-copy-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Lưu <i
                                                    class="ri-save-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Chuyển tiếp <i
                                                    class="ri-chat-forward-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Xóa <i
                                                    class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>

                                </div>

                                <div class="conversation-name">Trần Văn A</div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="conversation-list">
                            <div class="chat-avatar">
                                <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" alt="">
                            </div>

                            <div class="user-chat-content">
                                <div class="ctext-wrap">
                                    <div class="ctext-wrap-content">
                                        <p class="mb-0">
                                            Đang soạn tin
                                            <span class="animate-typing">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="conversation-name">Trần Thị C</div>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
            <!-- end chat conversation end -->

            <!-- start chat input section -->
            <div class="chat-input-section p-3 p-lg-4 border-top mb-0">

                <div class="row g-0">

                    <div class="col">
                        <input type="text" class="form-control form-control-lg bg-light border-light"
                            placeholder="Enter Message...">
                    </div>
                    <div class="col-auto">
                        <div class="chat-input-links ms-md-2 me-md-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Emoji">
                                    <button type="button"
                                        class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect">
                                        <i class="ri-emotion-happy-line"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Attached File">
                                    <button type="button"
                                        class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect">
                                        <i class="ri-attachment-line"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="submit"
                                        class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
                                        <i class="ri-send-plane-2-fill"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end chat input section -->
        </div>
        <!-- end chat conversation section -->

        <!-- start User profile detail sidebar -->
        <div class="user-profile-sidebar">
            <div class="px-3 px-lg-4 pt-3 pt-lg-4">
                <div class="user-chat-nav text-end">
                    <button type="button" class="btn nav-btn" id="user-profile-hide">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>

            <div class="text-center p-4 border-bottom">
                <div class="mb-4">
                    <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="user">
                </div>

                <h5 class="font-size-16 mb-1 text-truncate">Trần Thị C</h5>
                <p class="text-muted text-truncate mb-1"><i
                        class="ri-record-circle-fill font-size-10 text-success me-1 ms-0"></i> Hoạt động</p>
            </div>
            <!-- End profile user -->

            <!-- Start user-profile-desc -->
            <div class="p-4 user-profile-desc" data-simplebar>
                <div class="text-muted">
                    <p class="mb-4">
                        Nếu nhiều ngôn ngữ kết hợp lại, ngữ pháp của ngôn ngữ kết quả sẽ đơn giản và có quy tắc hơn so với ngôn ngữ riêng lẻ.
                    </p>
                </div>

                <div class="accordion" id="myprofile">

                    <div class="accordion-item card border mb-2">
                        <div class="accordion-header" id="about3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#aboutprofile" aria-expanded="true" aria-controls="aboutprofile">
                                <h5 class="font-size-14 m-0">
                                    <i class="ri-user-2-line me-2 ms-0 align-middle d-inline-block"></i> Giới thiệu
                                </h5>
                            </button>
                        </div>
                        <div id="aboutprofile" class="accordion-collapse collapse show" aria-labelledby="about3"
                            data-bs-parent="#myprofile">
                            <div class="accordion-body">
                                <div>
                                    <p class="text-muted mb-1">Tên</p>
                                    <h5 class="font-size-14">Trần Thị C</h5>
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

                    <div class="accordion-item card border">
                        <div class="accordion-header" id="attachfile3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#attachprofile" aria-expanded="false" aria-controls="attachprofile">
                                <h5 class="font-size-14 m-0">
                                    <i class="ri-attachment-line me-2 ms-0 align-middle d-inline-block"></i>
                                    Tệp đính kèm
                                </h5>
                            </button>
                        </div>
                        <div id="attachprofile" class="accordion-collapse collapse" aria-labelledby="attachfile3"
                            data-bs-parent="#myprofile">
                            <div class="accordion-body">
                                <div class="card p-2 border mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-3 ms-0">
                                            <div
                                                class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-start">
                                                <h5 class="font-size-14 mb-1">admin_v1.0.zip</h5>
                                                <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                                            </div>
                                        </div>

                                        <div class="ms-4 me-0">
                                            <ul class="list-inline mb-0 font-size-18">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="ri-download-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Xóa</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-3 ms-0">
                                            <div
                                                class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                <i class="ri-image-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-start">
                                                <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                                                <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                                            </div>
                                        </div>

                                        <div class="ms-4 me-0">
                                            <ul class="list-inline mb-0 font-size-18">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="ri-download-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Xóa</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-3 ms-0">
                                            <div
                                                class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                <i class="ri-image-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-start">
                                                <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                                                <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                                            </div>
                                        </div>

                                        <div class="ms-4 me-0">
                                            <ul class="list-inline mb-0 font-size-18">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="ri-download-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Xóa</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-3 ms-0">
                                            <div
                                                class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-start">
                                                <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                                                <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                                            </div>
                                        </div>

                                        <div class="ms-4 me-0">
                                            <ul class="list-inline mb-0 font-size-18">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="ri-download-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Xóa</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile-user-accordion -->
                </div>
                <!-- end user-profile-desc -->
            </div>
            <!-- end User profile detail sidebar -->
        </div>
    </div>
</div>
<!-- End User chat -->

<!-- audiocall Modal -->
<div class="modal fade" id="audiocallModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center p-4">
                    <div class="avatar-lg mx-auto mb-4">
                        <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                    </div>

                    <h5 class="text-truncate">Doris Brown</h5>
                    <p class="text-muted">Start Audio Call</p>

                    <div class="mt-5">
                        <ul class="list-inline mb-1">
                            <li class="list-inline-item px-2 me-2 ms-0">
                                <button type="button" class="btn btn-danger avatar-sm rounded-circle" data-bs-dismiss="modal">
                                    <span class="avatar-title bg-transparent font-size-20">
                                        <i class="ri-close-fill"></i>
                                    </span>
                                </button>
                            </li>
                            <li class="list-inline-item px-2">
                                <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                    <span class="avatar-title bg-transparent font-size-20">
                                        <i class="ri-phone-fill"></i>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>
<!-- audiocall Modal -->

<!-- videocall Modal -->
<div class="modal fade" id="videocallModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center p-4">
                    <div class="avatar-lg mx-auto mb-4">
                        <img src="{{asset('assets/chat/images/users/avatar-4.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                    </div>

                    <h5 class="text-truncate">Doris Brown</h5>
                    <p class="text-muted mb-0">Start Video Call</p>

                    <div class="mt-5">
                        <ul class="list-inline mb-1">
                            <li class="list-inline-item px-2 me-2 ms-0">
                                <button type="button" class="btn btn-danger avatar-sm rounded-circle" data-bs-dismiss="modal">
                                    <span class="avatar-title bg-transparent font-size-20">
                                        <i class="ri-close-fill"></i>
                                    </span>
                                </button>
                            </li>
                            <li class="list-inline-item px-2">
                                <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                    <span class="avatar-title bg-transparent font-size-20">
                                        <i class="ri-vidicon-fill"></i>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
