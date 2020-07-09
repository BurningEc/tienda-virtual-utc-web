@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Nueva Usuario</div>
                <div class="ibox-tools">
                    <a class="text-white" href="{{route('get-user')}}">
                        <i class="fa fa-arrow-left"></i>
                            Atras</a>
                </div>
            </div>
            <div class="ibox-body">
                {!! Form::open(['url' => 'store-user','files' => true]) !!}
                    @include('admin.users.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
