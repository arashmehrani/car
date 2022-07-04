@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>لیست سرویس های روغن گیربکس</h6>
        </div>
    </div>
    <div class="container">
    @foreach($services as $service)
        <!-- Timeline Content -->
            <div class="card timeline-card bg-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="timeline-text mb-2"><span
                                class="badge mb-2 rounded-pill">{{$service->created_at->diffForHumans()}}</span>
                            <h6>روغن مصرفی: {{$service->title}}</h6>
                        </div>
                        <div class="timeline-icon mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                 class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                                <path
                                    d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                            </svg>
                        </div>
                    </div>
                    @if(!empty($service->km_now))
                        <p class="mb-2">تعویض در کیلومتر: <strong>{{$service->km_now}}</strong></p>
                    @endif

                    @if(!empty($service->km_next))
                        <p class="mb-2">کیلومتر بعدی تعویض: <strong>{{$service->km_next}}</strong></p>
                    @endif

                    @if(!empty($service->workshop))
                        <p class="mb-1">تعمیرگاه: <strong>{{$service->workshop}}</strong></p>
                    @endif

                    @if(!empty($service->price))
                        <p class="mb-1">هزینه: <strong>{{$service->price}}</strong></p>
                    @endif

                </div>
            </div>
        @endforeach
        <div class="d-flex align-items-center justify-content-center">
            {!! $services->links() !!}
        </div>
    </div>
@endsection
