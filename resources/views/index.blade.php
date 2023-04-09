@extends('template')

@section('content')
  <section class="top-container">
      <div class="text-container">
        <h1>Yuki's Portfolio</h1>
        <p>Welcome</p>
      </div>
      <div class="index-container">
        <a href="{{ url('/works') }}" class="item">
          <div>
            <p><i class="fas fa-briefcase"></i></p>
            <p>WORKS</p>
          </div>
        </a>
        <a href="{{ url('/history') }}" class="item">
          <div>
            <p><i class="fas fa-history"></i></p>
            <p>History</p>
          </div>
        </a>
        <a href="{{ url('/contact') }}" class="item">
          <div>
            <p><i class="far fa-envelope"></i></p>
            <p>CONTACT</p>
          </div>
        </a>
    </div>
  </section>
@endsection

