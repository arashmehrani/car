@extends('layouts.app-layout')

@section('content')
    <!-- Notifications Area -->
    <div class="notification-area">
        <div class="container">
            <!-- Single Notification --><a href="{{route('notification.detail','1')}}">
                <div class="alert unread custom-alert-3 alert-primary" role="alert"><i class="bi bi-chat-dots mt-0"></i>
                    <div class="alert-text w-75">
                        <h6 class="text-truncate">یاد آوری تعویض روغن موتور</h6><span class="text-truncate mt-1">آرش عزیز، امروز نسبت به تعویض روغن موتور پراید سفید با پلام ایران 68 - 23 ص 125 اقدام نمایید</span>
                    </div>
                </div>
            </a>

            <!-- Single Notification --><a href="{{route('notification.detail','1')}}">
                <div class="alert custom-alert-3 alert-primary" role="alert"><i class="bi bi-chat-dots mt-0"></i>
                    <div class="alert-text w-75">
                        <h6 class="text-truncate">یاد آوری تعویض روغن موتور</h6><span class="text-truncate mt-1">آرش عزیز، تا 7 روز آینده نسبت به تعویض روغن موتور پراید سفید با پلام ایران 68 - 23 ص 125 اقدام نمایید</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
