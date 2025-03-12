@extends('layouts.dashboard')

@section('content')
    <div id="main-wrapper">
        <!--**********************************
              Nav header start
          ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                <img class="logo-abbr" src="{{asset('assets/images/logo.png')}}" alt="" />
                <img class="logo-compact" src="{{asset('assets/images/logo-text.png')}}" alt="" />
                <img class="brand-title" src="{{asset('assets/images/logo-text.png')}}" alt="" />
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
              Nav header end
          ***********************************-->

        <!--**********************************
              Chat box start
          ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1">
                                            </rect>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="#" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1"></rect>
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) ">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item">
                                            <i class="fa fa-user-circle text-primary me-2"></i> View
                                            profile
                                        </li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-users text-primary me-2"></i> Add to
                                            close friends
                                        </li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-plus text-primary me-2"></i> Add to
                                            group
                                        </li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-ban text-primary me-2"></i> Block
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
                                            alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-location-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">
                                                RU<i class="icon fa-birthday-cake"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">
                                                AU<i class="icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">
                                                MO<i class="icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2"
                                                rx="1"></rect>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
              Chat box End
          ***********************************-->

        <!--**********************************
              Header start
          ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">Dashboard</div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area d-xl-inline-flex d-none">
                                    <input type="text" class="form-control" placeholder="Search here"
                                        aria-label="Username" aria-describedby="header-search" />
                                    <span class="input-group-text" id="header-search">
                                        <a href="javascript:void(0);">
                                            <svg width="20" height="20" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z"
                                                    fill="#A4A4A4"></path>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewbox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z"
                                            fill="#555555"></path>
                                    </svg>
                                    <span class="badge light text-white bg-primary">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src="assets/images/avatar/1.jpg" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">KG</div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src="assets/images/avatar/1.jpg" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">KG</div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="#">
                                    <svg width="28" height="28" viewbox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.4605 3.84888H5.31688C4.64748 3.84961 4.00571 4.11586 3.53237 4.58919C3.05903 5.06253 2.79279 5.7043 2.79205 6.3737V18.1562C2.79279 18.8256 3.05903 19.4674 3.53237 19.9407C4.00571 20.4141 4.64748 20.6803 5.31688 20.6811C5.54005 20.6812 5.75404 20.7699 5.91184 20.9277C6.06964 21.0855 6.15836 21.2995 6.15849 21.5227V23.3168C6.15849 23.6215 6.24118 23.9204 6.39774 24.1818C6.5543 24.4431 6.77886 24.6571 7.04747 24.8009C7.31608 24.9446 7.61867 25.0128 7.92298 24.9981C8.22729 24.9834 8.52189 24.8863 8.77539 24.7173L14.6173 20.8224C14.7554 20.7299 14.918 20.6807 15.0842 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.4721 19.3664 21.6222 18.8359L24.8966 7.05011C24.9999 6.67481 25.0152 6.28074 24.9414 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.931 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4605 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0842C14.5856 18.9972 14.0981 19.1448 13.6837 19.4219L7.84171 23.3168V21.5227C7.84097 20.8533 7.57473 20.2115 7.10139 19.7382C6.62805 19.2648 5.98628 18.9986 5.31688 18.9978C5.09371 18.9977 4.87972 18.909 4.72192 18.7512C4.56412 18.5934 4.4754 18.3794 4.47527 18.1562V6.3737C4.4754 6.15054 4.56412 5.93655 4.72192 5.77874C4.87972 5.62094 5.09371 5.53223 5.31688 5.5321H22.4605C22.5905 5.53243 22.7188 5.56277 22.8353 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2642 6.09045 23.2887 6.21821C23.3132 6.34597 23.308 6.47766 23.2733 6.60304Z"
                                            fill="#555555"></path>
                                        <path
                                            d="M7.84173 11.4233H12.0498C12.273 11.4233 12.4871 11.3347 12.6449 11.1768C12.8027 11.019 12.8914 10.8049 12.8914 10.5817C12.8914 10.3585 12.8027 10.1444 12.6449 9.98661C12.4871 9.82878 12.273 9.74011 12.0498 9.74011H7.84173C7.61852 9.74011 7.40446 9.82878 7.24662 9.98661C7.08879 10.1444 7.00012 10.3585 7.00012 10.5817C7.00012 10.8049 7.08879 11.019 7.24662 11.1768C7.40446 11.3347 7.61852 11.4233 7.84173 11.4233Z"
                                            fill="#555555"></path>
                                        <path
                                            d="M15.4162 13.1066H7.84173C7.61852 13.1066 7.40446 13.1952 7.24662 13.3531C7.08879 13.5109 7.00012 13.725 7.00012 13.9482C7.00012 14.1714 7.08879 14.3855 7.24662 14.5433C7.40446 14.7011 7.61852 14.7898 7.84173 14.7898H15.4162C15.6394 14.7898 15.8535 14.7011 16.0113 14.5433C16.1692 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1692 13.5109 16.0113 13.3531C15.8535 13.1952 15.6394 13.1066 15.4162 13.1066Z"
                                            fill="#555555"></path>
                                    </svg>
                                    <span class="badge light text-white bg-primary">5</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewbox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.625 6.12506H22.75V2.62506C22.75 2.47268 22.7102 2.32295 22.6345 2.19068C22.5589 2.05841 22.45 1.94819 22.3186 1.87093C22.1873 1.79367 22.0381 1.75205 21.8857 1.75019C21.7333 1.74832 21.5831 1.78629 21.4499 1.86031L14 5.99915L6.55007 1.86031C6.41688 1.78629 6.26667 1.74832 6.11431 1.75019C5.96194 1.75205 5.8127 1.79367 5.68136 1.87093C5.55002 1.94819 5.44113 2.05841 5.36547 2.19068C5.28981 2.32295 5.25001 2.47268 5.25 2.62506V6.12506H4.375C3.67904 6.12582 3.01181 6.40263 2.51969 6.89475C2.02757 7.38687 1.75076 8.0541 1.75 8.75006V11.3751C1.75076 12.071 2.02757 12.7383 2.51969 13.2304C3.01181 13.7225 3.67904 13.9993 4.375 14.0001H5.25V23.6251C5.25076 24.321 5.52757 24.9882 6.01969 25.4804C6.51181 25.9725 7.17904 26.2493 7.875 26.2501H20.125C20.821 26.2493 21.4882 25.9725 21.9803 25.4804C22.4724 24.9882 22.7492 24.321 22.75 23.6251V14.0001H23.625C24.321 13.9993 24.9882 13.7225 25.4803 13.2304C25.9724 12.7383 26.2492 12.071 26.25 11.3751V8.75006C26.2492 8.0541 25.9724 7.38687 25.4803 6.89475C24.9882 6.40263 24.321 6.12582 23.625 6.12506ZM21 6.12506H17.3769L21 4.11256V6.12506ZM7 4.11256L10.6231 6.12506H7V4.11256ZM7 23.6251V14.0001H13.125V24.5001H7.875C7.64303 24.4998 7.42064 24.4075 7.25661 24.2434C7.09258 24.0794 7.0003 23.857 7 23.6251ZM21 23.6251C20.9997 23.857 20.9074 24.0794 20.7434 24.2434C20.5794 24.4075 20.357 24.4998 20.125 24.5001H14.875V14.0001H21V23.6251ZM24.5 11.3751C24.4997 11.607 24.4074 11.8294 24.2434 11.9934C24.0794 12.1575 23.857 12.2498 23.625 12.2501H4.375C4.14303 12.2498 3.92064 12.1575 3.75661 11.9934C3.59258 11.8294 3.5003 11.607 3.5 11.3751V8.75006C3.5003 8.51809 3.59258 8.2957 3.75661 8.13167C3.92064 7.96764 4.14303 7.87536 4.375 7.87506H23.625C23.857 7.87536 24.0794 7.96764 24.2434 8.13167C24.4074 8.2957 24.4997 8.51809 24.5 8.75006V11.3751Z"
                                            fill="#555555"></path>
                                    </svg>
                                    <span class="badge light text-white bg-primary">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        Youtube, a video-sharing website, goes live
                                                        <strong class="text-primary">$500</strong>.
                                                    </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        New order placed
                                                        <strong class="text-info">#XF-2356.</strong>
                                                    </h6>
                                                    <p class="mb-0">
                                                        Quisque a consequat ante Sit amet magna at
                                                        volutapt...
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        john just buy your product
                                                        <strong class="text-warning">Sell $250</strong>
                                                    </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>15 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        StumbleUpon is acquired by eBay.
                                                    </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        Mashable, a news website and blog, goes live.
                                                    </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">
                                                        Mashable, a news website and blog, goes live.
                                                    </h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="assets/images/profile/17.jpg" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.php.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.php.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="page-login.php.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
              Header end ti-comment-alt
          ***********************************-->

        <!--**********************************
              Sidebar start
          ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.php.html">Dashboard</a></li>
                            <li><a href="index-2.php.html">Dashboard Dark</a></li>
                            <li>
                                <a href="workout-statistic.php.html">Workout Statistic</a>
                            </li>
                            <li><a href="workout-plan.php.html">Workout Plan</a></li>
                            <li><a href="distance-map.php.html">Distance Map</a></li>
                            <li><a href="food-menu.php.html">Diet Food Menu</a></li>
                            <li><a href="personal-record.php.html">Personal Record</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.php.html">Profile</a></li>
                            <li><a href="post-details.php.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.php.html">Compose</a></li>
                                    <li><a href="email-inbox.php.html">Inbox</a></li>
                                    <li><a href="email-read.php.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.php.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="ecom-product-grid.php.html">Product Grid</a>
                                    </li>
                                    <li>
                                        <a href="ecom-product-list.php.html">Product List</a>
                                    </li>
                                    <li>
                                        <a href="ecom-product-detail.php.html">Product Details</a>
                                    </li>
                                    <li><a href="ecom-product-order.php.html">Order</a></li>
                                    <li><a href="ecom-checkout.php.html">Checkout</a></li>
                                    <li><a href="ecom-invoice.php.html">Invoice</a></li>
                                    <li><a href="ecom-customers.php.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.php.html">Flot</a></li>
                            <li><a href="chart-morris.php.html">Morris</a></li>
                            <li><a href="chart-chartjs.php.html">Chartjs</a></li>
                            <li><a href="chart-chartist.php.html">Chartist</a></li>
                            <li><a href="chart-sparkline.php.html">Sparkline</a></li>
                            <li><a href="chart-peity.php.html">Peity</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.php.html">Accordion</a></li>
                            <li><a href="ui-alert.php.html">Alert</a></li>
                            <li><a href="ui-badge.php.html">Badge</a></li>
                            <li><a href="ui-button.php.html">Button</a></li>
                            <li><a href="ui-modal.php.html">Modal</a></li>
                            <li><a href="ui-button-group.php.html">Button Group</a></li>
                            <li><a href="ui-list-group.php.html">List Group</a></li>
                            <li><a href="ui-media-object.php.html">Media Object</a></li>
                            <li><a href="ui-card.php.html">Cards</a></li>
                            <li><a href="ui-carousel.php.html">Carousel</a></li>
                            <li><a href="ui-dropdown.php.html">Dropdown</a></li>
                            <li><a href="ui-popover.php.html">Popover</a></li>
                            <li><a href="ui-progressbar.php.html">Progressbar</a></li>
                            <li><a href="ui-tab.php.html">Tab</a></li>
                            <li><a href="ui-typography.php.html">Typography</a></li>
                            <li><a href="ui-pagination.php.html">Pagination</a></li>
                            <li><a href="ui-grid.php.html">Grid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.php.html">Select 2</a></li>
                            <li><a href="uc-nestable.php.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.php.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.php.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.php.html">Toastr</a></li>
                            <li><a href="map-jqvmap.php.html">Jqv Map</a></li>
                            <li><a href="uc-lightgallery.php.html">Lightgallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widget-basic.php.html" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.php.html">Form Elements</a></li>
                            <li><a href="form-wizard.php.html">Wizard</a></li>
                            <li>
                                <a href="form-editor-summernote.php.html">Summernote</a>
                            </li>
                            <li><a href="form-pickers.php.html">Pickers</a></li>
                            <li>
                                <a href="form-validation-jquery.php.html">Jquery Validate</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.php.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.php.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.php.html">Register</a></li>
                            <li><a href="page-login.php.html">Login</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.php.html">Error 400</a></li>
                                    <li><a href="page-error-403.php.html">Error 403</a></li>
                                    <li><a href="page-error-404.php.html">Error 404</a></li>
                                    <li><a href="page-error-500.php.html">Error 500</a></li>
                                    <li><a href="page-error-503.php.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.php.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="drum-box">
                    <img src="assets/images/card/drump.png" alt="" />
                    <p class="fs-18 font-w500 mb-4">Start Plan Your Workout</p>
                    <a class="" href="javascript:;">Check schedule
                        <svg class="ms-3" width="6" height="12" viewbox="0 0 6 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 12L6 6L0 0" fill="#BCD7FF"></path>
                        </svg>
                    </a>
                </div>
                <div class="copyright">
                    <p>
                        <strong>Fito Fitness Admin Dashboard</strong> © 2025 All Rights
                        Reserved
                    </p>
                    <p>Made with <span class="heart"></span> by DexignZone</p>
                </div>
            </div>
        </div>
        <!--**********************************
              Sidebar end
          ***********************************-->

        <!--**********************************
              Content body start
          ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl col-md-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-inline-block mb-4 ms--12 position-relative donut-chart-sale">
                                    <span class="donut1"
                                        data-peity='{ "fill": ["rgb(192, 255, 134)", "rgba(255, 255, 255, 1)"],   "innerRadius": 45, "radius": 10}'>4/8</span>
                                    <small class="text-primary">
                                        <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M39.9353 18.3544C39.8731 18.1666 38.3337 13.75 32.5 13.75C25.9703 13.75 22.8666 17.9659 21.795 19.8719C20.6306 19.1822 19.1838 18.75 17.5 18.75C15.7922 18.75 14.35 19.1375 13.1275 19.7072C13.5697 16.695 13.6987 13.1119 13.7353 11.25H17.5C17.9175 11.25 18.3081 11.0413 18.54 10.6934L21.04 6.94344C21.4075 6.39156 21.2806 5.64813 20.7494 5.25031C18.3166 3.42531 15.1269 1.25 13.75 1.25C11.6137 1.25 6.95688 6.24344 5.16469 9.38C0.0584378 18.3153 0 31.925 0 32.5C0 32.8797 0.172188 33.2391 0.46875 33.4759C7.56469 39.1522 15.7519 40 20 40C23.3716 40 29.9756 39.4391 36.3306 35.6834C38.5938 34.3456 40 31.8706 40 29.2244V18.75C40 18.6156 39.9781 18.4822 39.9353 18.3544ZM37.5 29.2244C37.5 30.9912 36.565 32.6419 35.0584 33.5316C29.2162 36.9844 23.1166 37.5 20 37.5C16.9178 37.5 9.15156 36.9453 2.51094 31.8981C2.58406 29.19 3.14094 17.96 7.33531 10.62C9.09187 7.54813 12.7112 4.16312 13.7722 3.76562C14.4606 3.96406 16.4566 5.23219 18.2972 6.55125L16.8309 8.75H12.5C11.8091 8.75 11.25 9.30969 11.25 10C11.25 10.0822 11.2344 17.9659 10.185 21.6878C9.46375 22.3391 8.88656 22.9872 8.43125 23.4994C8.2175 23.7403 8.02969 23.9522 7.86594 24.1166C7.3775 24.605 7.3775 25.3959 7.86594 25.8841C8.35437 26.3722 9.14531 26.3725 9.63344 25.8841C9.82625 25.6913 10.0472 25.4441 10.3 25.1603C11.6003 23.6975 13.7756 21.25 17.5 21.25C20.5884 21.25 22.5 23.1966 22.5 25C22.5 25.6903 23.0591 26.25 23.75 26.25C24.4409 26.25 25 25.6903 25 25C25 23.8181 24.5506 22.6022 23.7313 21.5581C24.1503 20.66 26.5119 16.25 32.5 16.25C35.99 16.25 37.2228 18.39 37.5 18.9922V29.2244Z"
                                                fill="white"></path>
                                        </svg>
                                    </small>
                                    <span class="circle bg-primary"></span>
                                </div>
                                <h2 class="fs-24 text-black font-w600 mb-0">42%</h2>
                                <span class="fs-14">Weekly Progress</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-inline-block mb-4 ms--12 position-relative donut-chart-sale">
                                    <span class="donut1"
                                        data-peity='{ "fill": ["rgb(255, 195, 210)", "rgba(255, 255, 255, 1)"],   "innerRadius": 45, "radius": 10}'>3/8</span>
                                    <small class="text-primary">
                                        <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip1)">
                                                <path
                                                    d="M32.5972 16.2892C32.396 15.8517 32.0044 15.5314 31.5358 15.4211C31.067 15.3107 30.5737 15.4225 30.1984 15.7243C29.5264 16.2647 28.6792 16.5622 27.8126 16.5623C26.7941 16.5624 25.8366 16.1663 25.1165 15.447C24.397 14.7282 24.0006 13.7706 24.0006 12.7504C24.0006 12.346 24.063 11.9035 24.1862 11.4348C24.6802 9.55445 24.6864 7.57584 24.204 5.71301C23.7158 3.82808 22.7376 2.10392 21.3752 0.727114C21.1908 0.54055 21.09 0.442581 21.09 0.442581C20.4892 -0.141565 19.5339 -0.14844 18.9257 0.427737C18.7859 0.560082 15.4647 3.72151 12.1 8.3035C7.49236 14.5779 5.15617 20.248 5.15617 25.1562C5.15617 29.1273 6.70048 32.8566 9.50457 35.6575C12.3083 38.458 16.0359 40.0002 20.0005 40.0001C23.9651 39.9999 27.6923 38.4576 30.4955 35.6575C33.2995 32.8567 34.8438 29.1551 34.8438 25.2343C34.8438 22.5407 34.0879 19.5312 32.5972 16.2892ZM22.6961 35.4472C21.9761 36.1664 21.0186 36.5624 20.0001 36.5625C18.9816 36.5626 18.0242 36.1665 17.304 35.4472C16.5845 34.7284 16.1881 33.7707 16.1881 32.7506C16.1881 30.3061 18.3931 27.2754 19.9878 25.4753C21.589 27.3136 23.8119 30.3943 23.8119 32.7821C23.8119 33.782 23.4156 34.7285 22.6961 35.4472ZM28.2871 33.4464C27.7708 33.9621 27.2144 34.423 26.6256 34.8278C26.8301 34.1729 26.9369 33.4853 26.9369 32.7821C26.9369 30.6427 25.9326 28.1741 23.9518 25.4447C22.5457 23.5071 21.1487 22.1406 21.09 22.0835C20.4893 21.4988 19.5343 21.4922 18.9256 22.0685C18.8666 22.1245 17.4638 23.4596 16.0534 25.3804C14.0691 28.0825 13.063 30.5621 13.063 32.7506C13.063 33.4673 13.1719 34.1668 13.3795 34.8313C12.7889 34.4257 12.2308 33.9636 11.7129 33.4464C9.49988 31.236 8.28112 28.2918 8.28112 25.1562C8.28112 16.7851 16.7974 7.12224 19.9336 3.84831C21.3135 5.76778 21.7861 8.27217 21.1637 10.6406C20.9725 11.3684 20.8755 12.0782 20.8755 12.7505C20.8755 14.6061 21.5973 16.349 22.908 17.658C24.2182 18.9668 25.9601 19.6876 27.8127 19.6874C28.7132 19.6874 29.6026 19.5103 30.4282 19.1748C31.2853 21.3866 31.7186 23.419 31.7186 25.2343C31.7187 28.3195 30.5 31.2359 28.2871 33.4464Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip1">
                                                    <rect width="40" height="40" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </small>
                                    <span class="circle bg-danger"></span>
                                </div>
                                <h2 class="fs-24 text-black font-w600 mb-0">67cal</h2>
                                <span class="fs-14">Calories Burn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-inline-block mb-4 ms--12 position-relative donut-chart-sale">
                                    <span class="donut1"
                                        data-peity='{ "fill": ["rgb(255, 213, 174)", "rgba(255, 255, 255, 1)"],   "innerRadius": 45, "radius": 10}'>5/8</span>
                                    <small class="text-primary">
                                        <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip2)">
                                                <path
                                                    d="M33.82 11.4053C34.0805 11.1923 34.332 10.9653 34.5731 10.7242C36.4537 8.84367 37.4895 6.34328 37.4895 3.68359V3.68234C37.4895 3.03516 36.9636 2.51047 36.3164 2.51047C33.6567 2.51047 31.1563 3.54625 29.2757 5.42687C29.0346 5.66797 28.8076 5.91945 28.5946 6.18C27.991 2.67508 24.9298 0 21.2551 0C20.6079 0 20.0832 0.524687 20.0832 1.17188V2.81305C20.0832 4.95719 20.8022 6.99062 22.125 8.63914C19.0591 8.29398 15.869 9.29383 13.5229 11.6401C7.47433 17.6886 0.36706 37.5919 0.067451 38.4362C-0.0837209 38.8622 0.0236228 39.3371 0.343232 39.6567C0.662842 39.9763 1.13776 40.0837 1.56378 39.9325C2.40808 39.6329 22.3114 32.5255 28.3599 26.477C30.706 24.1309 31.706 20.9409 31.3608 17.8749C33.0094 19.1977 35.0428 19.9167 37.1869 19.9167H38.8281C39.4753 19.9167 40 19.392 40 18.7448C40 15.0702 37.3249 12.009 33.82 11.4053ZM30.933 7.08414C32.0653 5.9518 33.4917 5.22 35.0398 4.96008C34.78 6.50812 34.0482 7.93453 32.9157 9.06688C31.7835 10.1991 30.3575 10.9309 28.8089 11.1909C29.0689 9.64273 29.8007 8.21649 30.933 7.08414ZM22.427 2.47945C24.6784 3.01047 26.3593 5.03656 26.3593 7.44789V9.63961L24.4736 7.75398C23.1538 6.43414 22.427 4.67945 22.427 2.81305V2.47945ZM19.828 29.4677L18.3182 27.9579C17.8606 27.5002 17.1185 27.5003 16.6609 27.9579C16.2032 28.4155 16.2032 29.1575 16.6609 29.6152L17.6477 30.6019C13.2707 32.7998 7.9937 35.0181 3.15104 36.8489C4.21644 34.0308 5.54269 30.7277 6.98815 27.4736L7.87448 28.3599C8.33206 28.8175 9.07409 28.8175 9.53175 28.3599C9.9894 27.9023 9.9894 27.1603 9.53175 26.7027L8.0244 25.1953C9.59073 21.8356 10.9352 19.342 12.0686 17.4916L15.4057 20.8287C15.8633 21.2862 16.6053 21.2862 17.063 20.8287C17.5207 20.3711 17.5207 19.6291 17.063 19.1714L13.3816 15.49C14.0934 14.4868 14.6916 13.786 15.1803 13.2973C18.3578 10.1198 23.5244 10.119 26.7027 13.2973C30.1591 16.7537 29.0887 21.0277 28.1953 22.7725L24.5942 19.1713C24.1366 18.7138 23.3946 18.7138 22.9369 19.1713C22.4792 19.6289 22.4792 20.3709 22.9369 20.8286L26.8139 24.7055C25.9139 25.6407 23.9935 27.2169 19.828 29.4677ZM37.1869 17.573C35.3205 17.573 33.5657 16.8461 32.246 15.5263L30.3603 13.6406H32.5521C34.9633 13.6406 36.9895 15.3216 37.5205 17.573H37.1869Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip2">
                                                    <rect width="40" height="40" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </small>
                                    <span class="circle bg-warning"></span>
                                </div>
                                <h2 class="fs-24 text-black font-w600 mb-0">5 Left</h2>
                                <span class="fs-14">Diet Programs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-inline-block mb-4 ms--12 position-relative donut-chart-sale">
                                    <span class="donut1"
                                        data-peity='{ "fill": ["rgb(238, 252, 255)", "rgba(255, 255, 255, 1)"],   "innerRadius": 45, "radius": 10}'>8/8</span>
                                    <small class="text-primary">
                                        <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip3)">
                                                <path
                                                    d="M20 32.9688C17.4153 32.9688 15.3125 30.8659 15.3125 28.2812C15.3125 25.6966 17.4153 23.5938 20 23.5938C22.5847 23.5938 24.6875 25.6966 24.6875 28.2812C24.6875 30.8659 22.5847 32.9688 20 32.9688ZM20 26.7188C19.1384 26.7188 18.4375 27.4197 18.4375 28.2812C18.4375 29.1428 19.1384 29.8438 20 29.8438C20.8616 29.8438 21.5625 29.1428 21.5625 28.2812C21.5625 27.4197 20.8616 26.7188 20 26.7188ZM12.6373 20.7029C14.4202 20.687 16.1845 19.9548 17.8812 18.5266L15.8687 16.1359C13.593 18.0516 11.5632 18.0515 9.28742 16.1359L7.275 18.5267C8.99117 19.9711 10.775 20.7031 12.5782 20.7031C12.5979 20.7031 12.6177 20.703 12.6373 20.7029ZM32.5941 18.5994L30.6873 16.1236C28.3111 17.9535 26.259 17.9616 24.0334 16.1498L22.0605 18.5732C23.7464 19.9458 25.5029 20.632 27.2809 20.632C29.0471 20.6319 30.8346 19.9544 32.5941 18.5994ZM40 9.375H33.6466L40 2.92391V0H29.0625V3.125H35.4159L29.0625 9.57609V12.5H40V9.375ZM36.2987 15.625C36.6737 17.0209 36.875 18.4873 36.875 20C36.875 29.3049 29.3049 36.875 20 36.875C10.6951 36.875 3.125 29.3049 3.125 20C3.125 10.6951 10.6951 3.125 20 3.125C22.1183 3.125 24.146 3.51844 26.0156 4.23422V0.917344C24.0943 0.314141 22.0714 0 20 0C14.6578 0 9.63539 2.08039 5.85781 5.85781C2.08039 9.63539 0 14.6578 0 20C0 25.3422 2.08039 30.3646 5.85781 34.1422C9.63539 37.9196 14.6578 40 20 40C25.3422 40 30.3646 37.9196 34.1422 34.1422C37.9196 30.3646 40 25.3422 40 20C40 18.5101 39.8377 17.0452 39.5224 15.625H36.2987Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip3">
                                                    <rect width="40" height="40" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </small>
                                    <span class="circle bg-info"></span>
                                </div>
                                <h2 class="fs-24 text-black font-w600 mb-0">8 Hours</h2>
                                <span class="fs-14">Sleeping Potency</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-inline-block mb-4 ms--12 position-relative donut-chart-sale">
                                    <span class="donut1"
                                        data-peity='{ "fill": ["rgb(242, 255, 253)", "rgba(255, 255, 255, 1)"],   "innerRadius": 45, "radius": 10}'>8/8</span>
                                    <small class="text-primary">
                                        <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.1666 19.5283C27.8064 18.2461 29.0052 16.484 29.5958 14.4879C30.1863 12.4919 30.1393 10.3612 29.4611 8.39317C28.783 6.4251 27.5076 4.71772 25.8128 3.5091C24.118 2.30048 22.0883 1.65088 20.0066 1.65088C17.925 1.65088 15.8953 2.30048 14.2005 3.5091C12.5057 4.71772 11.2303 6.4251 10.5522 8.39317C9.87403 10.3612 9.82697 12.4919 10.4175 14.4879C11.0081 16.484 12.2069 18.2461 13.8466 19.5283C10.7486 20.761 8.09109 22.8939 6.21709 25.6517C4.34309 28.4096 3.33862 31.6657 3.33331 35V36.6667C3.33331 37.1087 3.50891 37.5326 3.82147 37.8452C4.13403 38.1577 4.55795 38.3333 4.99998 38.3333H35C35.442 38.3333 35.8659 38.1577 36.1785 37.8452C36.4911 37.5326 36.6666 37.1087 36.6666 36.6667V35C36.6624 31.6673 35.6599 28.4122 33.7884 25.6546C31.9169 22.8969 29.2622 20.7631 26.1666 19.5283ZM13.3333 11.6667C13.3333 10.3481 13.7243 9.0592 14.4569 7.96287C15.1894 6.86654 16.2306 6.01206 17.4488 5.50748C18.6669 5.00289 20.0074 4.87087 21.3006 5.12811C22.5938 5.38534 23.7817 6.02028 24.714 6.95263C25.6464 7.88498 26.2813 9.07286 26.5385 10.3661C26.7958 11.6593 26.6638 12.9997 26.1592 14.2179C25.6546 15.4361 24.8001 16.4773 23.7038 17.2098C22.6075 17.9423 21.3185 18.3333 20 18.3333C18.2319 18.3333 16.5362 17.631 15.2859 16.3807C14.0357 15.1305 13.3333 13.4348 13.3333 11.6667ZM6.66665 35C6.66665 31.4638 8.0714 28.0724 10.5719 25.5719C13.0724 23.0714 16.4638 21.6667 20 21.6667C23.5362 21.6667 26.9276 23.0714 29.4281 25.5719C31.9286 28.0724 33.3333 31.4638 33.3333 35H6.66665Z"
                                                fill="white"></path>
                                        </svg>
                                    </small>
                                    <span class="circle bg-success"></span>
                                </div>
                                <h2 class="fs-24 text-black font-w600 mb-0">974 Person</h2>
                                <span class="fs-14">Total Members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <div class="card">
                            <div class="card-header flex-wrap pb-0 border-0">
                                <div class="me-auto pe-3 mb-2">
                                    <h4 class="text-black fs-20">Workout Statistic</h4>
                                    <p class="fs-13 mb-2 mb-sm-0 text-black">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </p>
                                </div>
                                <div class="d-flex me-3 me-sm-4 mb-2">
                                    <svg class="me-2 mt-1" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip4)">
                                            <path
                                                d="M0.988941 17.074C0.32826 17.2006 -0.1046 17.8385 0.021967 18.4992C0.133346 19.0814 0.644678 19.4864 1.21676 19.4864C1.2927 19.4864 1.37117 19.4788 1.44712 19.4636L6.45918 18.5017C6.74522 18.446 7.00089 18.2916 7.18315 18.0638L9.33479 15.3502L8.61591 14.9832C8.08433 14.7148 7.71473 14.2288 7.58816 13.639L5.55802 16.1982L0.988941 17.074Z"
                                                fill="#FF9432"></path>
                                            <path
                                                d="M18.84 6.493C20.3135 6.493 21.508 5.29848 21.508 3.82496C21.508 2.35144 20.3135 1.15692 18.84 1.15692C17.3664 1.15692 16.1719 2.35144 16.1719 3.82496C16.1719 5.29848 17.3664 6.493 18.84 6.493Z"
                                                fill="#FF9432"></path>
                                            <path
                                                d="M13.0179 3.15671C12.7369 2.86813 12.4762 2.75422 12.1902 2.75422C12.0864 2.75422 11.9826 2.76941 11.8712 2.79472L7.29202 3.88067C6.65918 4.03002 6.26936 4.66539 6.4187 5.29569C6.5478 5.8374 7.02876 6.20192 7.56287 6.20192C7.65403 6.20192 7.74513 6.19179 7.83628 6.16901L11.7371 5.24507C11.9902 5.52605 13.2584 6.90057 13.4888 7.14358C11.8763 8.86996 10.2638 10.5938 8.65135 12.3202C8.62604 12.3481 8.60328 12.3759 8.58047 12.4037C8.10964 13.0036 8.25395 13.9453 8.96273 14.3022L13.9064 16.826L11.3396 20.985C10.9878 21.5571 11.165 22.3063 11.7371 22.6607C11.937 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2658L16.6732 16.9829C16.8529 16.6918 16.901 16.34 16.8073 16.0134C16.7137 15.6843 16.4884 15.411 16.1821 15.2565L12.8331 13.5529L16.3543 9.7863L19.0122 12.0392C19.2324 12.2265 19.5032 12.3176 19.7716 12.3176C20.0601 12.3176 20.3487 12.2113 20.574 12.0038L23.6243 9.16106C24.1002 8.71808 24.128 7.97386 23.685 7.49797C23.4521 7.24989 23.1382 7.12333 22.8243 7.12333C22.5383 7.12333 22.2497 7.22711 22.0244 7.43721L19.7412 9.56101C19.7386 9.56354 14.0178 4.1819 13.0179 3.15671Z"
                                                fill="#FF9432"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip4">
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                    <div>
                                        <h4 class="fs-18 text-black font-w600 mb-0">50%</h4>
                                        <span class="fs-12 text-black">Running</span>
                                    </div>
                                </div>
                                <div class="d-flex me-3 me-sm-4 mb-2">
                                    <svg class="me-2 mt-1" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8586 5.22599L5.87121 10.5543C5.50758 11.0846 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.625 13.5177 18.976V15.0013C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95836L13.8914 12.1225C14.0758 12.5442 14.4949 12.817 14.9546 12.817H19.1844C19.8207 12.817 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44824 14.7677 8.41288 14.3409 7.35228C14.1237 6.81693 14.0025 6.5846 13.6036 6.21592C13.5227 6.14016 12.9596 5.62501 12.4571 5.16541C11.995 4.74619 11.2828 4.77397 10.8586 5.22599Z"
                                            fill="#1EA7C5"></path>
                                        <path
                                            d="M15.6162 5.80681C17.0861 5.80681 18.2778 4.61517 18.2778 3.1452C18.2778 1.67523 17.0861 0.483582 15.6162 0.483582C14.1462 0.483582 12.9545 1.67523 12.9545 3.1452C12.9545 4.61517 14.1462 5.80681 15.6162 5.80681Z"
                                            fill="#1EA7C5"></path>
                                        <path
                                            d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.3231 9.79798 18.6174C9.79798 15.9118 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9118 0 18.6174C0 21.3231 2.19335 23.5164 4.89899 23.5164Z"
                                            fill="#1EA7C5"></path>
                                        <path
                                            d="M19.101 23.5164C21.8066 23.5164 24 21.3231 24 18.6174C24 15.9118 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9118 14.202 18.6174C14.202 21.3231 16.3954 23.5164 19.101 23.5164Z"
                                            fill="#1EA7C5"></path>
                                    </svg>
                                    <div>
                                        <h4 class="fs-18 text-black font-w600 mb-0">30%</h4>
                                        <span class="fs-12 text-black">Cycling</span>
                                    </div>
                                </div>
                                <div class="d-flex me-3 me-sm-4 mb-2">
                                    <svg class="me-2 mt-1" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip5)">
                                            <path
                                                d="M11.9997 5.9999C13.6566 5.9999 14.9997 4.65677 14.9997 2.99995C14.9997 1.34312 13.6566 0 11.9997 0C10.3429 0 8.9998 1.34312 8.9998 2.99995C8.9998 4.65677 10.3429 5.9999 11.9997 5.9999Z"
                                                fill="#C046D3"></path>
                                            <path
                                                d="M17.8305 21.8297L14.1361 23.2153L15.9733 23.9042C16.764 24.1978 17.6171 23.791 17.9046 23.0261C18.0577 22.618 18.0124 22.1905 17.8305 21.8297Z"
                                                fill="#C046D3"></path>
                                            <path
                                                d="M5.02677 16.5949C4.25263 16.3078 3.3869 16.6974 3.09543 17.473C2.80467 18.2486 3.19799 19.1128 3.97354 19.4043L5.5918 20.0111L9.86412 18.4088L5.02677 16.5949Z"
                                                fill="#C046D3"></path>
                                            <path
                                                d="M20.9045 17.473C20.613 16.6974 19.7473 16.3078 18.9732 16.5949L6.97345 21.0948C6.19781 21.3863 5.80453 22.2505 6.0953 23.0262C6.38278 23.7908 7.23572 24.198 8.02664 23.9043L20.0264 19.4044C20.8021 19.1129 21.1953 18.2487 20.9045 17.473Z"
                                                fill="#C046D3"></path>
                                            <path
                                                d="M22.4998 11.9998H18.9271L16.3417 6.82899C16.073 6.29213 15.5265 5.98627 14.9632 5.99991L11.9997 5.9999L9.03663 5.99991C8.47343 5.98627 7.92757 6.29217 7.65828 6.82899L5.07289 11.9998H1.50022C0.671898 11.9998 0.000274658 12.6714 0.000274658 13.4997C0.000274658 14.328 0.671898 14.9997 1.50022 14.9997H6.00012C6.56848 14.9997 7.08776 14.6789 7.34187 14.1706L9.00002 10.8543V16.483L11.9999 17.6079L14.9999 16.4827V10.8543L16.6581 14.1706C16.9122 14.6789 17.4315 14.9997 17.9998 14.9997H22.4997C23.328 14.9997 23.9997 14.328 23.9997 13.4997C23.9997 12.6714 23.3281 11.9998 22.4998 11.9998Z"
                                                fill="#C046D3"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip5">
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                    <div>
                                        <h4 class="fs-18 text-black font-w600 mb-0">20%</h4>
                                        <span class="fs-12 text-black">Yoga</span>
                                    </div>
                                </div>
                                <div class="dropdown mt-sm-0 mt-3 mb-0">
                                    <button type="button" class="btn rounded border border-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Weekly
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <div id="chartBar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="text-black fs-20 mb-0">Workout Progress</h4>
                            </div>
                            <div class="card-body text-center">
                                <div id="radialBar"></div>
                                <p class="fs-14">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do
                                </p>
                                <a href="workout-statistic.php.html" class="btn btn-outline-primary rounded">Set
                                    Target</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="text-black fs-20 mb-0">Duration Worked</h4>
                            </div>
                            <div class="card-body">
                                <div class="media align-items-center border border-warning rounded p-3 mb-md-4 mb-3">
                                    <div class="d-inline-block me-3 position-relative donut-chart-sale2">
                                        <span class="donut2"
                                            data-peity='{ "fill": ["rgb(255, 148, 50)", "rgba(255, 255, 255, 1)"],   "innerRadius": 27, "radius": 10}'>6/8</span>
                                        <small class="text-primary">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip6)">
                                                    <path
                                                        d="M0.988926 17.074C0.328245 17.2006 -0.104616 17.8385 0.0219518 18.4992C0.133331 19.0814 0.644663 19.4864 1.21675 19.4864C1.29269 19.4864 1.37116 19.4788 1.4471 19.4636L6.45917 18.5017C6.74521 18.446 7.00087 18.2916 7.18313 18.0638L9.33478 15.3502L8.6159 14.9832C8.08432 14.7148 7.71471 14.2288 7.58815 13.639L5.55801 16.1982L0.988926 17.074Z"
                                                        fill="#FF9432"></path>
                                                    <path
                                                        d="M18.84 6.493C20.3135 6.493 21.508 5.29848 21.508 3.82496C21.508 2.35144 20.3135 1.15692 18.84 1.15692C17.3664 1.15692 16.1719 2.35144 16.1719 3.82496C16.1719 5.29848 17.3664 6.493 18.84 6.493Z"
                                                        fill="#FF9432"></path>
                                                    <path
                                                        d="M13.0179 3.15671C12.7369 2.86813 12.4762 2.75422 12.1902 2.75422C12.0863 2.75422 11.9826 2.76941 11.8712 2.79472L7.292 3.88067C6.65917 4.03002 6.26934 4.66539 6.41869 5.29569C6.54779 5.8374 7.02874 6.20192 7.56286 6.20192C7.65401 6.20192 7.74511 6.19179 7.83627 6.16901L11.7371 5.24507C11.9902 5.52605 13.2584 6.90057 13.4888 7.14358C11.8763 8.86996 10.2638 10.5938 8.65134 12.3202C8.62602 12.3481 8.60326 12.3759 8.58046 12.4037C8.10963 13.0036 8.25394 13.9453 8.96272 14.3022L13.9064 16.826L11.3396 20.985C10.9878 21.5571 11.165 22.3063 11.737 22.6607C11.937 22.7848 12.1572 22.843 12.3749 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2658L16.6732 16.9829C16.8529 16.6918 16.901 16.34 16.8073 16.0134C16.7137 15.6843 16.4884 15.411 16.1821 15.2565L12.8331 13.5529L16.3542 9.7863L19.0122 12.0392C19.2324 12.2265 19.5032 12.3176 19.7716 12.3176C20.0601 12.3176 20.3487 12.2113 20.574 12.0038L23.6242 9.16106C24.1002 8.71808 24.128 7.97386 23.685 7.49797C23.4521 7.24989 23.1382 7.12333 22.8243 7.12333C22.5383 7.12333 22.2497 7.22711 22.0244 7.43721L19.7412 9.56101C19.7386 9.56354 14.0178 4.1819 13.0179 3.15671Z"
                                                        fill="#FF9432"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip6">
                                                        <rect width="24" height="24" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </small>
                                    </div>
                                    <div>
                                        <h4 class="fs-18 text-black mb-0">Running</h4>
                                        <span class="fs-14 text-warning">52 hours, 2min</span>
                                    </div>
                                </div>
                                <div class="media align-items-center border border-info rounded p-3 mb-md-4 mb-3">
                                    <div class="d-inline-block me-3 position-relative donut-chart-sale2">
                                        <span class="donut2"
                                            data-peity='{ "fill": ["rgb(30, 167, 197)", "rgba(255, 255, 255, 1)"],   "innerRadius": 27, "radius": 10}'>2/8</span>
                                        <small class="text-primary">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.8586 5.22596L5.87121 10.5542C5.50758 11.0845 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.6249 13.5177 18.976V15.0012C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95833L13.8914 12.1225C14.0758 12.5442 14.4949 12.8169 14.9546 12.8169H19.1844C19.8207 12.8169 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44821 14.7677 8.41285 14.3409 7.35225C14.1237 6.81689 14.0025 6.58457 13.6036 6.21588C13.5227 6.14013 12.9596 5.62498 12.4571 5.16538C11.995 4.74616 11.2828 4.77394 10.8586 5.22596Z"
                                                    fill="#1EA7C5"></path>
                                                <path
                                                    d="M15.6162 5.80678C17.0861 5.80678 18.2778 4.61514 18.2778 3.14517C18.2778 1.6752 17.0861 0.483551 15.6162 0.483551C14.1462 0.483551 12.9545 1.6752 12.9545 3.14517C12.9545 4.61514 14.1462 5.80678 15.6162 5.80678Z"
                                                    fill="#1EA7C5"></path>
                                                <path
                                                    d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.323 9.79798 18.6174C9.79798 15.9117 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9117 0 18.6174C0 21.323 2.19335 23.5164 4.89899 23.5164Z"
                                                    fill="#1EA7C5"></path>
                                                <path
                                                    d="M19.101 23.5164C21.8066 23.5164 24 21.323 24 18.6174C24 15.9117 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9117 14.202 18.6174C14.202 21.323 16.3954 23.5164 19.101 23.5164Z"
                                                    fill="#1EA7C5"></path>
                                            </svg>
                                        </small>
                                    </div>
                                    <div>
                                        <h4 class="fs-18 text-black mb-0">Cycling</h4>
                                        <span class="fs-14 text-info">23 hours, 45min</span>
                                    </div>
                                </div>
                                <div class="media align-items-center border border-secondary rounded p-3">
                                    <div class="d-inline-block me-3 position-relative donut-chart-sale2">
                                        <span class="donut2"
                                            data-peity='{ "fill": ["rgb(192, 70, 211)", "rgba(255, 255, 255, 1)"],   "innerRadius": 27, "radius": 10}'>2/9</span>
                                        <small class="text-primary">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip7)">
                                                    <path
                                                        d="M11.9997 5.9999C13.6566 5.9999 14.9997 4.65677 14.9997 2.99995C14.9997 1.34312 13.6566 0 11.9997 0C10.3429 0 8.9998 1.34312 8.9998 2.99995C8.9998 4.65677 10.3429 5.9999 11.9997 5.9999Z"
                                                        fill="#C046D3"></path>
                                                    <path
                                                        d="M17.8305 21.8297L14.1361 23.2153L15.9733 23.9042C16.764 24.1978 17.6171 23.791 17.9046 23.0261C18.0577 22.618 18.0124 22.1905 17.8305 21.8297Z"
                                                        fill="#C046D3"></path>
                                                    <path
                                                        d="M5.02677 16.5949C4.25263 16.3078 3.3869 16.6974 3.09543 17.473C2.80467 18.2486 3.19799 19.1128 3.97354 19.4043L5.5918 20.0111L9.86412 18.4088L5.02677 16.5949Z"
                                                        fill="#C046D3"></path>
                                                    <path
                                                        d="M20.9045 17.473C20.613 16.6974 19.7473 16.3078 18.9732 16.5949L6.97345 21.0948C6.19781 21.3863 5.80453 22.2505 6.0953 23.0262C6.38278 23.7908 7.23572 24.198 8.02664 23.9043L20.0264 19.4044C20.8021 19.1129 21.1953 18.2487 20.9045 17.473Z"
                                                        fill="#C046D3"></path>
                                                    <path
                                                        d="M22.4998 11.9998H18.9271L16.3417 6.82899C16.073 6.29213 15.5265 5.98627 14.9632 5.99991L11.9997 5.9999L9.03663 5.99991C8.47343 5.98627 7.92757 6.29217 7.65828 6.82899L5.07289 11.9998H1.50022C0.671898 11.9998 0.000274658 12.6714 0.000274658 13.4997C0.000274658 14.328 0.671898 14.9997 1.50022 14.9997H6.00012C6.56848 14.9997 7.08776 14.6789 7.34187 14.1706L9.00002 10.8543V16.483L11.9999 17.6079L14.9999 16.4827V10.8543L16.6581 14.1706C16.9122 14.6789 17.4315 14.9997 17.9998 14.9997H22.4997C23.328 14.9997 23.9997 14.328 23.9997 13.4997C23.9997 12.6714 23.3281 11.9998 22.4998 11.9998Z"
                                                        fill="#C046D3"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip7">
                                                        <rect width="24" height="24" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </small>
                                    </div>
                                    <div>
                                        <h4 class="fs-18 text-black mb-0">Yoga</h4>
                                        <span class="fs-14 text-secondary">16 hours, 2min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <div class="card">
                            <div class="card-header d-sm-flex d-block pb-0 border-0">
                                <div class="me-auto pe-3">
                                    <h4 class="text-black fs-20">Calories Chart</h4>
                                    <p class="fs-13 mb-0 text-black">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </p>
                                </div>
                                <div class="dropdown mt-sm-0 mt-3">
                                    <button type="button" class="btn rounded border border-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Weekly
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartTimeline"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-sm-flex d-block pb-0 border-0">
                                <div class="me-auto pe-3">
                                    <h4 class="text-black fs-20">Featured Diet Menus</h4>
                                    <p class="fs-13 mb-0 text-black">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </p>
                                </div>
                                <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0 me-0 me-md-5">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Breakfast"
                                                role="tab">
                                                Breakfast
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Lunch" role="tab">
                                                Lunch
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Dinner" role="tab">
                                                Dinner
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="food-menu.php.html" class="btn btn-primary rounded d-none d-md-block">View
                                    More</a>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Breakfast" role="tabpanel">
                                        <div class="featured-menus owl-carousel">
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/3.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/3.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Ilham</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Sweet Orange Fruits with Lemon</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">176 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/2.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/2.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Chintya</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Chicken Egg with fresh tomatos</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">223 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Lunch" role="tabpanel">
                                        <div class="featured-menus owl-carousel">
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/3.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/3.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Ilham</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Sweet Orange Fruits with Lemon</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">176 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/2.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/2.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Chintya</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Chicken Egg with fresh tomatos</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">223 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Dinner" role="tabpanel">
                                        <div class="featured-menus owl-carousel">
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/2.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/2.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Chintya</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Chicken Egg with fresh tomatos</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">223 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/3.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/3.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Ilham</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Sweet Orange Fruits with Lemon</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">176 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="d-sm-flex p-3 border border-light rounded">
                                                    <a href="ecom-product-detail.php.html"><img
                                                            class="me-4 food-image rounded"
                                                            src="assets/images/menus/1.png" alt=""
                                                            width="160" /></a>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img class="rounded-circle me-2 profile-image"
                                                                src="assets/images/testimonial/1.jpg" alt=""
                                                                width="30" />
                                                            <span class="fs-14 text-primary">Andrew</span>
                                                        </div>
                                                        <h6 class="fs-16 mb-4">
                                                            <a href="ecom-product-detail.php.html"
                                                                class="text-black">Fresh or Frozen (No Sugar Added)
                                                                Fruits</a>
                                                        </h6>
                                                        <ul>
                                                            <li class="mb-2">
                                                                <i class="las la-clock scale5 me-3"></i><span
                                                                    class="fs-14 text-black">4-6 mins
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star me-3 scale5 text-warning"
                                                                    aria-hidden="true"></i><span
                                                                    class="fs-14 text-black font-w500">568 Reviews</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
              Content body end
          ***********************************-->

        <!--**********************************
              Footer start
          ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    Copyright © Designed &amp; Developed by
                    <a href="#" target="_blank">HSD</a> 2025
                </p>
            </div>
        </div>
        <!--**********************************
              Footer end
          ***********************************-->

        <!--**********************************
             Support ticket button start
          ***********************************-->

        <!--**********************************
             Support ticket button end
          ***********************************-->
    </div>
    <!--**********************************
          Main wrapper end
      ***********************************-->

    <!--**********************************
          Scripts
      ***********************************-->
    <!-- Required vendors -->
    <script>
        var enableSupportButton = "1";
    </script>
    <script>
        var asset_url = "assets/";
    </script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/chart-js/chart.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/deznav-init.js')}}" type="text/javascript"></script>
    <script>
        function featuredmenus() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery(".featured-menus").owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                dots: false,
                navText: [
                    '<i class="fa fa-caret-left"></i>',
                    '<i class="fa fa-caret-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 1,
                    },
                    767: {
                        items: 1,
                    },
                    991: {
                        items: 2,
                    },
                    1200: {
                        items: 2,
                    },
                    1600: {
                        items: 3,
                    },
                },
            });
        }

        jQuery(window).on("load", function() {
            setTimeout(function() {
                featuredmenus();
            }, 1000);
        });

        jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},500)
		});
    </script>
@endsection
