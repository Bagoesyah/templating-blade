@extends('_layouts.master')

@section('title', 'Tentang kami')
@section('content')

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tentang Kami</h2>
                {{-- <ol class="breadcrumb header-bradcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ol> --}}
            </div>
        </div>
    </div>
</section>


{{-- about --}}
<section class="about-shot-info section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-20">
                <h2>Kami Membuat Desain<br> dan Teknologi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo
                    natus dolor harum voluptatibus modi dicta ducimus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
                    cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt
                    voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae
                    molestias aut, aperiam!</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('_template/images/company/company-image.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
{{-- about end --}}



{{-- company mission --}}
<section class="company-mission section-sm bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Misi kami</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
                    assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus,
                    culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum
                    mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                <img src="{{ asset('_template/images/company/company-image-2.jpg') }}" alt="" class="img-fluid mt-30">
            </div>
            <div class="col-md-6">
                <h3>Visi kami</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
                    assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus,
                    culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum
                    mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                <img src="{{ asset('_template/images/company/company-image-3.jpg') }}" alt="" class="img-fluid mt-30">
            </div>
        </div>
    </div>
</section>
{{-- company mission --}}



{{-- promo video --}}
<section class="promo-video section-sm">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Video Promo Kami</h2>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum
                        iaculis ex,
                        in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus
                        dignissim.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
            <div class="col-md-8 mx-auto">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/BD5bJLSMBw0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
{{-- end promo video --}}



<!--Start Call To Action -->
<section class="call-to-action-2 section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum
                    nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->



{{-- galery --}}
{{-- <section class="section grallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Galeri</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae
                            qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro,
                            praesentium consectetur tempore. Nulla, error eius dolorem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="company-gallery">
                        <img src="{{ asset('_template/images/company/gallery-1.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-2.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-3.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-4.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-1.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-2.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-3.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-4.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('_template/images/company/gallery-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
{{-- end galery --}}



<!-- Start Our Team -->
<section class="team" id="team">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center ">
                    <h2>Tim Kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati,
                        quis
                        similique quos.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('_template/images/team/member-1.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Michael Jonson</h3>
                        <span>Head Of Marketing</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('_template/images/team/member-2.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Carrick Mollenkamp</h3>
                        <span>Web Developer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->
                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('_template/images/team/member-3.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>David Gauthier</h3>
                        <span>Head Of Management</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->


<!-- Start Counter Section -->
<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>Agensi Pemenang Penghargaan</h2>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                        iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                        risus luctus dignissim.</p>
                </div>
            </div>
            <!-- first count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-alarm-outline"></i>
                    <div>
                        <span class="counter" data-count="150">0</span>
                    </div>
                    <h3>Happy Clients</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-analytics-outline"></i>
                    <div>
                        <span class="counter" data-count="130">0</span>
                    </div>
                    <h3>Proyek Selesai</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-compose-outline"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Kritik yang baik</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item kill-border">
                        <i class="tf-ion-ios-bolt-outline"></i>
                        <div>
                            <span class="counter" data-count="250">0</span>
                        </div>
                        <h3>Cups of Coffee</h3>
                    </div>
                </div> --}}
            <!-- end fourth count item -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end section -->

<!-- Start Call To Action -->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Mari Menciptakan Sesuatu Bersama</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                    consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                <a href="" class="btn btn-main">Hubungi kami</a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->
@endsection
