@extends('Odontocare.layouts.main')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="Odontocare/assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Por um sorriso mais bonito e saudável</h5>
                            <h2 class="display-1 text-white mb-md-4 animated zoomIn">A Melhor Clinica Odontológica para Você</h2>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Agende sua Consulta</a>
                            <a href="/contato" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contato</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="Odontocare/assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Por um sorriso mais bonito e saudável</h5>
                            <h2 class="display-1 text-white mb-md-4 animated zoomIn">Os Melhores Profissionais a Sua Disposição</h2>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Agende sua Consulta</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5 center">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Horário de Funcionamento</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Segunda - Sexta</h6>
                            <p class="mb-0"> 08:00 - 17:00</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sábados</h6>
                            <p class="mb-0"> 08:00 - 10:00</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Domingos e Feriados</h6>
                            <p class="mb-0"> Fechado </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Agende pelo Whatsapp</h3>
                        <p class="text-white">Agende sua consulta com um de nossos dentistas pelo nosso Whatsapp</p>
                        <h2 class="text-white mb-0">(14)99999-9999</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection