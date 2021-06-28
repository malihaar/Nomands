@extends('layouts.success')

@section('title')
   Checkout Success!
@endsection

@section('content')
  <main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_email.png')}}" alt="">
            <h1>Yay! Sucess</h1>
            <p>We’ve sent you email for trip <br>
                Instruction please read it as well</p>
            <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection