@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>تعویض باتری</h6>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('service.battery.post')}}">
                    @csrf
                    <input type="hidden" name="plate_id" value="{{$id}}">
                    <div class="form-group">
                        <label class="form-label" for="title">برند محصول</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="مثال: صبا باتری"
                               value="{{old('title')}}" required>
                    </div>
                    @if ($errors->has('title'))
                        <p>
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="km_now">کیلومتر زمان تعویض</label>
                        <input class="form-control" id="km_now" name="km_now" type="number"
                               value="{{old('km_now')}}" required
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    @if ($errors->has('km_now'))
                        <p>
                            <small class="text-danger">{{ $errors->first('km_now') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="km_next">کیلومتر تعویض بعدی</label>
                        <input class="form-control" id="km_next" name="km_next" type="number"
                               value="{{old('km_next')}}" required
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    @if ($errors->has('km_next'))
                        <p>
                            <small class="text-danger">{{ $errors->first('km_next') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="workshop">نام تعمیرگاه<small>
                                (اختیاری) </small></label>
                        <input class="form-control" id="workshop" name="workshop" type="text"
                               value="{{old('workshop')}}">
                    </div>
                    @if ($errors->has('workshop'))
                        <p>
                            <small class="text-danger">{{ $errors->first('workshop') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="price">هزینه <small>
                                (اختیاری) </small></label>
                        <input class="form-control" id="price" name="price" type="number"
                               value="{{old('price')}}"
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    @if ($errors->has('price'))
                        <p>
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                        </p>
                    @endif

                    <button class="btn btn-success w-100 d-flex align-items-center justify-content-center"
                            type="submit">
                        ذخیره
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
