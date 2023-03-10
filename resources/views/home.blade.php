@include('components/header')
@include('components/navbar')


<div id="buspro_carousel" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#buspro_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#buspro_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Are you a bus owner?</h5>
                <p>Register with us today to be able to track and manage your bus activities.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Are you in charge of a Sacco</h5>
                <p>Get an account with us and manage all your sacco activites in one place.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#buspro_carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#buspro_carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Features</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('images/bus_05.jpg') }}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Sacco Admin Dashboard</h3>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('images/bus_08.jpg') }}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Bus Owners Admin Dashboard</h3>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('images/bus_09.jpg') }}');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">

                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Passenger Mobile Module</h3>

              </div>
            </div>
          </div>
        </div>
      </div>
</div>


@include('components/footer')
