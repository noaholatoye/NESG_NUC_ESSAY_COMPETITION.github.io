@extends('layouts.main')

@section('content')
<div class="main-content">
    <section class="img-container">
        <div class="header">
            <div class="header-infographic"></div>
            <h1>
                "Enhancing Confidence in Nigeria for Nation Building: Towards Economic Success and Improved Quality of
                life for Nigerians"
            </h1>
            <p>
                Eligibility: Entrants must be undergraduates of Nigerian
                Universities
            </p>
        </div>
    </section>
    <!-- img container -->
    <section id="about" class="about-container">
        <h2>About the Competition!</h2>
        <p>
            The Nigerian Economic Summit Group (NESG) in partnership with the
            Nigerian Universities Commission (NUC) is pleased to announce the
            theme for the Nigerian economic summit (NES) 25th Anniversary Essay
            Competition-
        </p>
        <h1>
            "Enhancing Confidence in Nigeria for Nation Building: Towards Economic Success and Improved Quality of life
            for Nigerians"
        </h1>
        <div>
            <div class="description">
                <p>
                    The Nigerian Economic Summit Group (NESG) in partnership with the National Universities Commission
                    (NUC) is pleased to announce the theme for the Nigerian Economic Summit (NES) 25th Anniversary Essay
                    Competition - <br><br>" Enhancing Confidence in Nigeria for Nation Building: towards economic
                    success and improved quality of life for Nigerians"<br><br>

                    “Trust is the social glue that holds families, communities, organizations and societies together;
                    without it, reaching any agreement can become a fraught negotiation.” – Peggy (Rockefeller) Dulany,
                    Synergos1<br><br>

                    With a global shift towards ‘inclusive’ economic growth, it is argued that economic prosperity and
                    business success cannot be adequately explained by abundance of natural resources, brilliance of
                    intellect, or the presence of good laws and institutions. Rather, economic prosperity requires (in
                    addition to the above elements listed) a culture of trust and social capital that forms an economic
                    input (Fukuyama, 1995).
                    <br><br>
                    In the light of challenges that have constantly plagued the Nigerian economy despite being the
                    largest African economy, Nigeria has remained a low-trust country and this has resulted in a
                    slow-paced growth.
                    <br><br>
                    With an outlook of building a nation that is competitive and sustainable, Nigeria sets to embark on
                    the long march towards economic growth and improved quality of life for its people. Bearing in mind
                    the highly diverse nature of Nigeria, we cannot therefore shy away from the arduous task of
                    rebuilding trust and confidence in her people. It is on this premise that the NESG calls for
                    applicants for the essay competition.

                </p>
            </div>
        </div>
    </section>

    <!-- about-container -->
    <section class="criteria-container" id="criteria">
        <h2>Application Criteria</h2>
        <div class="criteria-info-wrapper">
            <div class="circle-1">
                <div class="inner-circle">
                    <img src="{{ asset('public/svg/light_icon.svg') }}" alt="light Illustration" />
                    <p>Entries must be written in English</p>
                </div>
            </div>
            <div class="circle-2">
                <div class="inner-circle">
                    <img src="{{ asset('public/svg/entry_icon.svg') }}" alt="Book Illustration" />
                    <p>One entry per participant</p>
                </div>
            </div>
            <div class="circle-3">
                <div class="inner-circle">
                    <img src="{{ asset('public/svg/target_icon.svg') }}" alt="Target Illustration" />
                    <p>1,500 maximum word count</p>
                </div>
            </div>
            <div class="circle-4">
                <div class="inner-circle">
                    <img src="{{ asset('public/svg/setting_icon.svg') }}" alt="Setting Illustration" />
                    <p>Plagiarism is not accepted</p>
                </div>
            </div>
            <div class="circle-5">
                <div class="inner-circle">
                    <img src="{{ asset('public/svg/time_icon.svg') }}" alt="Timeline Illustration" />
                    <p>Submitted before July 24, 2019</p>
                </div>
            </div>
        </div>
    </section>
    <!-- criteria-container -->
    <section class="prizes-container" id="prizes">
        <div class="prize-details">
            <h2>Top 3 Biggest Prizes</h2>
            <div class="prize-list">
                <div class="prize-1">
                    Internship at the NESG | Prestigious certificate of performance
                </div>
                <div class="prize-2">
                    All expense paid trip to 25th Nigerian Economic Summit in Abuja,
                    October 2019
                </div>
                <div class="prize-3">
                    Essay presentation to an audience of top public/private officials
                </div>
            </div>
            <button>Download Instruction</button>
        </div>
    </section>
    <!-- prizes container -->
    @guest
    <section class="form-container" id="form">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#home"><h1>Register here</h1></a></li>
                <li><a data-toggle="pill" href="#menu1"><h1>Already Registered? Verify your Credentials</h1></a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="form-details">
                        @if (count($errors))
                        @foreach ($errors as $error)
                        <p class="alert alert-danger alert-dismissable">{{$error}}</p>
                        @endforeach
                        @endif
                        <form method="POST">
                            @csrf
                            <fieldset class="row-1">
                                <legend><span class="number">1</span> Your basic info</legend>
                                <h3>
                                    Please make sure you have read the <strong>criteria </strong>
                                    before proceeding to apply
                                </h3>
                                <div class="input-wrapper">
                                    <div class="name-col col-md-4">
                                        <label for="fullName">Full Name:</label>
                                        <input type="text" id="fullName" name="name" placeholder="Your full name.."
                                            required />
                                    </div>
                                    <div class="email-col col-md-4">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" placeholder="name@example.com.."
                                            required />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="gender">Gender:</label>
                                        <select name="gender" class="form-control" style="height: 50px!important;"
                                            required>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>

                                    <div class="phone-col col-md-4">
                                        <label for="phone">Phone:</label>
                                        <input type="number" id="phone" name="phone" placeholder="080.." required />
                                    </div>
                                    <div class="date-col col-md-4">
                                        <label for="date">Date of Birth:</label>
                                        <input type="date" id="date" name="dob" placeholder="dd/mm/yy" min="11/31/2002"
                                            required />
                                    </div>
                                    <div class="university-col col-md-4">
                                        <label for="university">University:</label>
                                        <input type="text" id="university" name="university"
                                            placeholder="Full name (University of Lagos).." required />
                                    </div>
                                    <div class="department-col col-md-4">
                                        <label for="department">Department:</label>
                                        <input type="text" id="department" name="department"
                                            placeholder="Computer Science.." required />
                                    </div>
                                    <div class="level-col col-md-4">
                                        <label for="level">Level:</label>
                                        <select name="level" class="form-control" style="height: 50px!important;"
                                            required>
                                            <option value="1">100</option>
                                            <option value="2">200</option>
                                            <option value="3">300</option>
                                            <option value="4">400</option>
                                            <option value="5">500</option>
                                            <option value="6">600</option>
                                            <option value="7">700</option>
                                        </select>

                                    </div>
                                    <div class="matric-col col-md-4">
                                        <label for="matric">Matric Number:</label>
                                        <input type="text" id="matric" name="matric_no" placeholder="1210.."
                                            requiredpweb />
                                    </div>
                                </div>
                                <!-- input-wrapper -->
                            </fieldset>
                            <!-- row-1 -->
                            <fieldset>
                                <legend>Upload your Profile Picture</legend>
                                <input type="file" name="image" class="form-control" required>
                            </fieldset>
                            <button type="submit">{{ __('Register') }}</button>

                        </form>


                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <center>
                        <div class="container">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Registeration
                                        Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Registeration
                                        Phone number</label>

                                    <div class="col-md-6">
                                        <input id="password" type="text"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Proceed to Submit entry
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </center>
                </div>

            </div>
        </div>

        <!-- form details -->
    </section>
    @else
        @if ($has_user_submitted == 0)
            <h1>{{$current_user->name}}, Kindly <a href="{{route('submit_entry')}}">proceed to submit your entry!</a></h1>
        @else
            <div class="container text-center">
                <h3>Dear <strong>{{$current_user->name}}</strong>, It would seem that you have already submitted an entry! Multiple entries are not allowed, You will be notified when the shortlist is made available, remain optimistic!</h3>
            </div>
        @endif
    @endguest
    <!-- form container -->
</div>
@endsection
