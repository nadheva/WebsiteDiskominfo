<x-guest-layout>
    <section id="contact" class="contact mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mt-4 text-center">
                        <h1>SOP</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <div class="info">
                                {{-- <i class="bi bi-envelope"></i> --}}
                                <h4>
                                    <ul>
                                        @foreach ($PPID as $item)
                                        <li>
                                            <a href="{{$item->link}}">{{$item->judul}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->
</x-guest-layout>