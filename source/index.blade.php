@extends('_layouts.app')

@section('content')
    <div class="container ">
        <div class="flex mb-4">
            <div class="w-1/3">
                <div id="circles">
                    <div class="circle circle_mc transparent">
                        <div class="circle_text">
                            <h4>The Materials Commons</h4>
                        </div>
                    </div>
                    <div class="circle circle_code transparent">
                        <div class="circle_text">
                            <h4 style="padding-top: 4px;">PRISMS Computational <br>Tools</h4>
                        </div>
                    </div>
                    <div class="circle circle_sci transparent">
                        <div class="circle_text">
                            <h4 style="padding-top: 4px;">Integrated Collaborative Science</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        The PRISMS Center software development is based on an integrated suite of multiscale/multiphysics
                        computational codes developed by the various research groups affiliated with the center and are
                        facilitated by the research staff and faculty in a highly collaborative environment.
                    </p>
                </div>
            </div>
            <div class="mx-8 w-2/3">
                <h3>About</h3>
                <p>
                    PRISMS is short for PRedictive Integrated Structural Materials Science.
                    Combining the efforts of experimental and computational researchers, the overarching
                    goal of the PRISMS Center is to establish a unique scientific platform that will
                    enable accelerated predictive materials science for structural metals. Our ambitious
                    vision is that the PRISMS tools and protocols will become a community-developed, extensible
                    scientific core for accelerating the development of new materials as envisioned by the
                    Materials Genome Initiative (MGI). The MGI is President Barack Obama’s plan to double the
                    speed with which American scientists and engineers discover, develop, and manufacture new
                    materials.
                </p>

                <h4 class="mt-3">Integrated, Focused, Open</h4>
                <p>
                    At the PRISMS Center integration drives everything we do. Our science is integrated with our
                    computational codes and with the results from our experimentalists who identify new phenomena
                    and fill in missing details. Our Materials Commons repository allows groups to collaborate and
                    share data and provide it to the broader technical community. And our computational software is
                    seamlessly integrating the latest multi-length scale scientific software into open source codes.
                </p>

                <p class="mt-2">
                    Developing computational codes that help to model the real world is hard. Our
                    approach teams experimental researchers with computationalists to produce models
                    and codes that address real world problems. Our teams of researchers have formed into different
                    groups we call "Use Case" groups.  These use cases represent natural ways groups of researchers
                    might use the PRISMS tools and protocols to solve important scientific and technological problems.
                    The use cases help us to link experiments with the simulations, validate the
                    models, and improve the codes.
                </p>
            </div>
        </div>
        <div class="flex mx-2">
            <h3>Get Started Managing My Data</h3>
        </div>
        <div class="flex mb-4 mx-3 my-2">
            <div class="w-1/4">
                <a href="/">Try Out MaterialsCommons</a>
            </div>

            <div class="w-1/4">
                <a href="/">Publish Your Research</a>
            </div>

        </div>
        <div class="flex mx-2 mt-8">
            <h3>Build Something New</h3>
        </div>
        <div class="flex mb-4 mx-3 my-2">
            <div class="w-1/4">
                <a href="/">Get started with DFT</a>
            </div>
            <div class="w-1/4">
                <a href="/">Download CASM</a>
            </div>
            <div class="w-1/4">
                <a href="/">Phase Field Tools</a>
            </div>
            <div class="w-1/4">
                <a href="/">Plasticity</a>
            </div>
        </div>

        <div class="flex mx-2 mt-8">
            <h3>Learn About</h3>
        </div>
        <div class="flex mb-4 mx-3 my-2">
            <div class="w-1/4">
                <a href="/">PRISMS Codes</a>
            </div>
            <div class="w-1/4">
                <a href="/">MaterialsCommons</a>
            </div>
            <div class="w-1/4">
                <a href="/">Collaborating With Us</a>
            </div>
            <div class="w-1/4">
                <a href="/">Publish Your Research</a>
            </div>
        </div>
    </div>
@endsection
