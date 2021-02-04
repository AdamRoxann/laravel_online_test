@extends('layouts.navbar')

@section('page1')
    <form action="{{ route('login') }}" method="POST">
        @csrf
    <section>
    <div style="background-size: 100% 150%; background-image: url({{asset('ec2.jpg')}}); background-size: cover;" data-aos="zoom-in">
				<div  data-aos="flip-left" data-aos-duration="3000" class="row justify-content-end fullscreen align-items-center" id="page1">
					<div class="col-lg-12 col-md-12" style="text-align: center;">
							<h1 class="text-white">
								<!-- Sorry... <br> -->
								LOGIN				
							</h1>
							<br>
							<div class="row-center">
							{{-- <a href="{{url('learn_more/ec')}}" class="text-uppercase header-btn">Learn More ></span></a> --}}
                            <input id="email" type="email" @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="header-btn">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<br>
							<br>
							    <input id="password" type="password" @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password" class="header-btn">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
							<br>
							<ul>
								<li><p style="color: white;">forgot password?</p></li>
								<li><button type="submit" class="header-btn">Submit</button></li>
							</ul>
							{{-- <a href="{{url('/home/register')}}" class="text-uppercase header-btn-regist">Register ></span></a> --}}
								
							</div>
					</div>
					<!-- <div class="col-lg-6 col-md-12 no-padding banner-right">
						<img class="img-fluid" src="img/header-img1.png" alt="">
					</div> -->
				</div>
			</div>
        </section>
        </form>
@endsection