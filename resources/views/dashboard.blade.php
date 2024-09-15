@extends('layouts.app')
@section('title', 'Dashboard')

@section('styles')

@endsection

@section('content')
    <div class="container-fluid">
        <!-- end page title -->

        <div class="row">
            <!-- start chat users-->
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-start mb-3">
                            <img src="{{ $user->avatar }}" class="me-2 rounded-circle" height="42" alt="Brandon Smith">
                            <div class="w-100">
                                <h5 class="mt-0 mb-0 font-15">
                                    <a href="contacts-profile.html" class="text-reset">{{ $user->name }}</a>
                                </h5>
                                <p class="mt-1 mb-0 text-muted font-14">
                                    @if ($user->active)
                                        <small class="mdi mdi-circle text-success"></small> Online
                                    @else
                                        <small class="mdi mdi-circle text-danger"></small> Offline
                                    @endif
                                </p>
                            </div>
                            <a href="javascript: void(0);" class="text-reset font-20">
                                <i class="mdi mdi-cog-outline"></i>
                            </a>
                        </div>

                        <!-- start search box -->
                        <form class="search-bar mb-3">
                            <div class="position-relative">
                                <input type="text" class="form-control form-control-light"
                                    placeholder="People, groups & messages..." name="search" id="search">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="font-13 text-muted text-uppercase mb-2">Contacts</h6>

                        <!-- users -->
                        <div class="row">
                            <div class="col">
                                <div data-simplebar style="max-height: 500px;" id="chats">
                                    @forelse ($chats as $chat)
                                        <a href="javascript:void(0);" class="text-body user-chat"
                                            data-chat="{{ $chat->id }}">
                                            <div class="d-flex align-items-start p-2">
                                                <img src="{{ $chat->logo ? $chat->logo : '/assets/images/users/user-2.jpg' }} "
                                                    class="me-2 rounded-circle" height="42" alt="Brandon Smith" />
                                                <div class="w-100">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted fw-normal font-12">
                                                            {{ $chat->getlastMessageTime() }}
                                                        </span>
                                                        {{ $chat->name }}
                                                        <small class="text-sm text-muted">
                                                            ({{ $chat->is_group ? 'Group' : 'Individual' }})
                                                        </small>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end">
                                                            {{-- get the messages with unread statuses --}}
                                                            <span
                                                                class="badge badge-soft-danger">{{ $chat->messages_count }}</span>
                                                        </span>
                                                        <span class="w-75">{{ limitString($chat->getlastMessage(), 25) }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat users-->

            <!-- chat area -->
            <div class="col-xl-9 col-lg-8">

                <div class="card" id="chat-wrapper">
                    <div class="card-body py-2 px-3 border-bottom border-light d-none" id="chat-header">
                        {{-- set dynamic header --}}
                    </div>
                    <div class="card-body d-none" id="conversation">
                        {{-- set dynamic conversation --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var authUser = @json($user);

        function debounce(func, delay) {
            let timeout;
            return function() {
                const context = this;
                const args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(context, args), delay);
            };
        }


        $(document).ready(function() {
            $('#search').on('keyup', debounce(function() {
                var value = $(this).val().toLowerCase();
                value = value.trim();
                getUsers(value);
            }, 300));

            $('.user-chat').click(function(e) {
                e.preventDefault();
                var chatId = $(this).data('chat');
                createScene(chatId);
            });
        });

        // function to search users
        function searchUsers(value) {
            $.ajax({
                type: "POST",
                url: "{{ route('search.user') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    search: value
                },
                dataType: 'json',
                success: function(response) {},
                error: function(error) {
                    console.error(error);
                }
            });
        }

        // function to get the conversations
        function createScene(id) {
            toggleLoader(true);
            $.ajax({
                type: "GET",
                url: "{{ route('create.chat.scene', ':id') }}".replace(':id', id),
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        toggleLoader(false);
                        createChatHeader(response.data);
                        createChatMessage(response.data);
                    } else {
                        toggleLoader(false);
                        console.error(response.message);
                    }
                },
                error: function(error) {
                    toggleLoader(false);
                    console.error(error);
                }
            });
        }

        // function to create chat box header
        function createChatHeader(chat) {

            // Create the status as a span
            let statusClass = chat.active ? 'text-success' : 'text-danger';
            let statusText = chat.active ? 'Online' : 'Offline';
            let chatType = chat.is_group ? 'Group' : 'Individual';
            let showgroup = ` <p class="mt-1 mb-0 text-muted font-12">
                                    <span class="mdi mdi-circle ${statusClass}"></span> ${statusText}
                                </p>
                            `;

            // Check if it's a group chat
            if (chat.is_group) {
                // Get participants' names and join them into a comma-separated string
                let participants = chat.participants.map(participant => participant.name).join(', ');
                // we have to limit the participants string to 100 characters
                limitString(participants, 10);

                // Update showgroup to display the comma-separated participants
                showgroup = `
                    <p class="mt-1 mb-0 text-muted font-12">
                        Participants: ${participants}
                    </p>
                `;
            }

            let html = `
                <div class="row justify-content-between py-1">
                    <div class="col-sm-7">
                        <div class="d-flex align-items-start">
                            <img src="${chat.logo}" class="me-2 rounded-circle" height="36" alt="${chat.name}">
                            <div>
                                <h5 class="mt-0 mb-0 font-15">
                                    <a href="javascript:void(0)" class="text-reset">${chat.name} <small class="text-muted"> (${chatType}) </small>  </a>
                                </h5>
                                ${showgroup}
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div id="tooltips-container">
                            <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                <i class="fe-phone-call" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Voice Call"></i>
                            </a>
                            <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                <i class="fe-video" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Video Call"></i>
                            </a>
                            <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                <i class="fe-user-plus" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Users"></i>
                            </a>
                            <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                <i class="fe-trash-2" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Chat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            // Set the header
            $('#chat-header').html(html);
            // show the header
            $('#chat-header').removeClass('d-none');
        }

        function createChatMessage(data) {

            let messages = data.messages;

            let html = `<ul class="conversation-list" data-simplebar style="max-height: 460px;">`;
            messages.forEach((message, index) => {
                if (index == 0) {
                    console.log(message);
                }
                // let isOdd = index % 2 === 1 ? 'odd' : '';
                let isOdd = (message.user.id === authUser.id) ? 'odd' : '';
                console.log(isOdd);

                let avatar = message.user.avatar ||
                    '/assets/images/users/default.jpg'; // Default avatar if not provided
                let timestamp = message.created_at; // Assuming this is in a format like '10:00'
                let userName = message.user.name || 'Unknown User';
                let messageText = message.message || '';
                let time = message.created_at_human ?? message.created_at;
                html += `
                    <li class="clearfix ${isOdd}">
                        <div class="chat-avatar">
                            <img src="${avatar}" class="rounded"
                                alt="${userName}" />
                            <i>${time}</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>${userName} (${message.id})</i>
                                <p>
                                ${messageText}
                                </p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical font-16"></i></button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>`;
            });
            html += `
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="/assets/images/users/user-5.jpg" class="rounded"
                                alt="James Z" />
                            <i>10:00</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>James Z</i>
                                <p>
                                    Hello!
                                </p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical font-16"></i></button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="/assets/images/users/user-2.jpg" class="rounded"
                                alt="User Name" />
                            <i>10:01</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>User Name</i>
                                <p>
                                    Hi, How are you? What about our next meeting?
                                </p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical font-16"></i></button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="/assets/images/users/user-5.jpg" alt="James Z"
                                class="rounded" />
                            <i>10:04</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>James Z</i>
                                <p>
                                    We can also discuss about the presentation talk format if you
                                    have some extra mins
                                </p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical font-16"></i></button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="/assets/images/users/user-2.jpg" alt="User Name"
                                class="rounded" />
                            <i>10:05</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>User Name</i>
                                <p>
                                    3pm it is. Sure, let's discuss about presentation format, it
                                    would be great to finalize today. I am attaching the last year
                                    format and assets here...
                                </p>
                            </div>
                            <div class="card mt-2 mb-1 shadow-none border text-start">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-primary rounded">
                                                    .ZIP
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);"
                                                class="text-muted fw-bold">UBold-sketch.zip</a>
                                            <p class="mb-0">2.3 MB</p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="javascript:void(0);"
                                                class="btn btn-link btn-lg text-muted">
                                                <i class="dripicons-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical font-16"></i></button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                    `;
            html += `;
                </ul>
                <div class="row">
                    <div class="col">
                        <div class="mt-2 bg-light p-3 rounded">
                            <form class="needs-validation" novalidate="" name="chat-form"
                                id="chat-form">
                                <div class="row">
                                    <div class="col mb-2 mb-sm-0">
                                        <input type="text" class="form-control border-0"
                                            placeholder="Enter your text" required="" />
                                        <div class="invalid-feedback">
                                            Please enter your messsage
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-light"><i
                                                    class="fe-paperclip"></i></a>
                                            <button type="submit"
                                                class="btn btn-success chat-send w-100"><i
                                                    class="fe-send"></i></button>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row-->
                            </form>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
            `;

            $('#conversation').html(html);
            $('#conversation').removeClass('d-none');
        }
        // function createChatMessage(data) {

        //     let messages = data.messages;
        //     let html = `
    //         <ul class="conversation-list" data-simplebar style="max-height: 460px;">
    //             <li class="clearfix">
    //                 <div class="chat-avatar">
    //                     <img src="/assets/images/users/user-5.jpg" class="rounded"
    //                         alt="James Z" />
    //                     <i>10:00</i>
    //                 </div>
    //                 <div class="conversation-text">
    //                     <div class="ctext-wrap">
    //                         <i>James Z</i>
    //                         <p>
    //                             Hello!
    //                         </p>
    //                     </div>
    //                 </div>
    //                 <div class="conversation-actions dropdown">
    //                     <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
    //                         aria-expanded="false"><i
    //                             class="mdi mdi-dots-vertical font-16"></i></button>

    //                     <div class="dropdown-menu dropdown-menu-end">
    //                         <a class="dropdown-item" href="#">Copy Message</a>
    //                         <a class="dropdown-item" href="#">Edit</a>
    //                         <a class="dropdown-item" href="#">Delete</a>
    //                     </div>
    //                 </div>
    //             </li>
    //             <li class="clearfix odd">
    //                 <div class="chat-avatar">
    //                     <img src="/assets/images/users/user-2.jpg" class="rounded"
    //                         alt="User Name" />
    //                     <i>10:01</i>
    //                 </div>
    //                 <div class="conversation-text">
    //                     <div class="ctext-wrap">
    //                         <i>User Name</i>
    //                         <p>
    //                             Hi, How are you? What about our next meeting?
    //                         </p>
    //                     </div>
    //                 </div>
    //                 <div class="conversation-actions dropdown">
    //                     <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
    //                         aria-expanded="false"><i
    //                             class="mdi mdi-dots-vertical font-16"></i></button>

    //                     <div class="dropdown-menu">
    //                         <a class="dropdown-item" href="#">Copy Message</a>
    //                         <a class="dropdown-item" href="#">Edit</a>
    //                         <a class="dropdown-item" href="#">Delete</a>
    //                     </div>
    //                 </div>
    //             </li>
    //             <li class="clearfix">
    //                 <div class="chat-avatar">
    //                     <img src="/assets/images/users/user-5.jpg" alt="James Z"
    //                         class="rounded" />
    //                     <i>10:04</i>
    //                 </div>
    //                 <div class="conversation-text">
    //                     <div class="ctext-wrap">
    //                         <i>James Z</i>
    //                         <p>
    //                             We can also discuss about the presentation talk format if you
    //                             have some extra mins
    //                         </p>
    //                     </div>
    //                 </div>
    //                 <div class="conversation-actions dropdown">
    //                     <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
    //                         aria-expanded="false"><i
    //                             class="mdi mdi-dots-vertical font-16"></i></button>

    //                     <div class="dropdown-menu dropdown-menu-end">
    //                         <a class="dropdown-item" href="#">Copy Message</a>
    //                         <a class="dropdown-item" href="#">Edit</a>
    //                         <a class="dropdown-item" href="#">Delete</a>
    //                     </div>
    //                 </div>
    //             </li>
    //             <li class="clearfix odd">
    //                 <div class="chat-avatar">
    //                     <img src="/assets/images/users/user-2.jpg" alt="User Name"
    //                         class="rounded" />
    //                     <i>10:05</i>
    //                 </div>
    //                 <div class="conversation-text">
    //                     <div class="ctext-wrap">
    //                         <i>User Name</i>
    //                         <p>
    //                             3pm it is. Sure, let's discuss about presentation format, it
    //                             would be great to finalize today. I am attaching the last year
    //                             format and assets here...
    //                         </p>
    //                     </div>
    //                     <div class="card mt-2 mb-1 shadow-none border text-start">
    //                         <div class="p-2">
    //                             <div class="row align-items-center">
    //                                 <div class="col-auto">
    //                                     <div class="avatar-sm">
    //                                         <span class="avatar-title bg-primary rounded">
    //                                             .ZIP
    //                                         </span>
    //                                     </div>
    //                                 </div>
    //                                 <div class="col ps-0">
    //                                     <a href="javascript:void(0);"
    //                                         class="text-muted fw-bold">UBold-sketch.zip</a>
    //                                     <p class="mb-0">2.3 MB</p>
    //                                 </div>
    //                                 <div class="col-auto">
    //                                     <!-- Button -->
    //                                     <a href="javascript:void(0);"
    //                                         class="btn btn-link btn-lg text-muted">
    //                                         <i class="dripicons-download"></i>
    //                                     </a>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 <div class="conversation-actions dropdown">
    //                     <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
    //                         aria-expanded="false"><i
    //                             class="mdi mdi-dots-vertical font-16"></i></button>

    //                     <div class="dropdown-menu">
    //                         <a class="dropdown-item" href="#">Copy Message</a>
    //                         <a class="dropdown-item" href="#">Edit</a>
    //                         <a class="dropdown-item" href="#">Delete</a>
    //                     </div>
    //                 </div>
    //             </li>
    //         </ul>

    //         <div class="row">
    //             <div class="col">
    //                 <div class="mt-2 bg-light p-3 rounded">
    //                     <form class="needs-validation" novalidate="" name="chat-form"
    //                         id="chat-form">
    //                         <div class="row">
    //                             <div class="col mb-2 mb-sm-0">
    //                                 <input type="text" class="form-control border-0"
    //                                     placeholder="Enter your text" required="" />
    //                                 <div class="invalid-feedback">
    //                                     Please enter your messsage
    //                                 </div>
    //                             </div>
    //                             <div class="col-sm-auto">
    //                                 <div class="btn-group">
    //                                     <a href="#" class="btn btn-light"><i
    //                                             class="fe-paperclip"></i></a>
    //                                     <button type="submit"
    //                                         class="btn btn-success chat-send w-100"><i
    //                                             class="fe-send"></i></button>
    //                                 </div>
    //                             </div>
    //                             <!-- end col -->
    //                         </div>
    //                         <!-- end row-->
    //                     </form>
    //                 </div>
    //             </div>
    //             <!-- end col-->
    //         </div>
    //     `;

        //     $('#conversation').html(html);
        //     $('#conversation').removeClass('d-none');
        // }

        // function to get the chat messages

        // function to set the seen of the chat with last 20 messages

        // function to send the message

        // function to get the messages

        // function to read messages

        // getUsers();

        function limitString(str, limit, ending = '...') {
            // Check if the string length exceeds the limit
            if (str.length > limit) {
                // Return the limited string with the ending
                return str.substring(0, limit) + ending;
            }
            // Return the original string if it's within the limit
            return str;
        }
    </script>

@endsection
