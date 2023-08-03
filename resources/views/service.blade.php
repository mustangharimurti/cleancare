<style>
    .enter-50{
        height:50px;
    }
</style>
@include('layout.nav')
<br>
<br>

<div class="d-flex justify-content-center p-5">

<div class="container mt-4">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 30rem;">
            <img class="card-img" src="{{ Vite::asset('resources/images/residential.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Kami memiliki keahlian dalam menyediakan pembersihan rumah secara profesional, termasuk perabotan dan furniture. Tim Kami akan membantu anda membersihkan rumah dengan efisien dan berkualitas tinggi.</p>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{ Vite::asset('resources/images/movein.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Kami memiliki keahlian dalam menyediakan layanan pindahan rumah secara profesional, termasuk perabotan. Tim kami akan membantu Anda mengurangi beban selama proses pindah rumah dengan efisien dan kualitas yang unggul.</p>
            </div>
          </div>
      </div>
    </div>
</div>
</div>



{{-- footer --}}
<div class="card bg-secondary-subtle mt-auto">
    <section class="d-flex align-items-center section-bg">
        {{-- <img class="card-img" src="{{ Vite::asset('resources/images/backgroundhome.jpg') }}" alt="img"> --}}
        <div class="card-img-overlay">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-end text-center text-lg-end"></div>

                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="text-center mt-2">
            <h2>Welcome To CleanCare</h2>
            <p>
                What do you need?
            </p>
        </div>
    </div>
</div>
@include('layout.footer')
