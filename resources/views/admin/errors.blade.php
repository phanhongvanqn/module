@if(Session::has('err'))
    <div class="alert alert-danger alert-error"> {!! Session::get('err') !!} </div>
@endif

@if(Session::has('suc'))
    <div class="alert alert-success alert-error"> {!! Session::get('suc') !!} </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="clearfix"></div>
