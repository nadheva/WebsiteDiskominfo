<x-guest-layout>
    <section id="contact" class="contact mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mt-4 text-center">
                        <h1>TUGAS DAN FUNGSI</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="info">
                                <i class="bi bi-envelope"></i>
                                <h4>Tugas</h4>
                                <p>{{$Profil->tugas}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info w-100 mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Fungsi</h4>
                                <p>{{$Profil->fungsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->
</x-guest-layout>