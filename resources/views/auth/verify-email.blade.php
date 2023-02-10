@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                    A New Verification Link Has Been Send To Your Email
                </div>
            @endif
            Before Proceding, Please Check Your Email For Verification.
            or <form action="{{route('verification.send')}}" method="POST" class="d-inline">
            @csrf
            </form>
            <button class="btn btn-link p-0 align-baseline" type="submit">
                {{_('click here to request another Verification')}}
            </button>
        </div>
    </div>
</div>
@endsection
