@extends('frontend.layout.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                @include('frontend.components.experience-section')
                <!-- Education Section-->
                @include('frontend.components.education-section')
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            @include('frontend.components.professional-skills')
                            <!-- Languages list-->
                            @include('frontend.components.language-list')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        // active page
        document.getElementById('resume').classList.add('active');
    </script>
@endsection
