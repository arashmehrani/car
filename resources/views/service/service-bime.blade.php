@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>یاد آوری بیمه</h6>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('service.battery.post')}}">
                    @csrf
                    <input type="hidden" name="plate_id" value="{{$id}}">
                    <div class="form-group">
                        <label class="form-label" for="title">شرکت بیمه کننده</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="مثال: بیمه دانا"
                               value="{{old('title')}}" required>
                    </div>
                    @if ($errors->has('title'))
                        <p>
                            <small class="text-danger">{{ $errors->first('title') }}</small>
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
                    <div class="form-check mb-3">
                        <input class="form-check-input form-check-success" name="bime_sales" id="bime_sales" type="checkbox"
                               value="on" checked>
                        <label class="form-check-label text-justify" for="bime_sales">بیمه شخص ثالت</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input form-check-success" name="bime_badane" id="bime_badane" type="checkbox"
                               value="on">
                        <label class="form-check-label text-justify" for="bime_badane">بیمه بدنه</label>
                    </div>
                    <button class="btn btn-success w-100 d-flex align-items-center justify-content-center"
                            type="submit">
                        ذخیره
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
