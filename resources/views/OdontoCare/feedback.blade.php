@extends('Odontocare.layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Feedback</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--Feedback Start-->
    <div class="container-fluid py-5 contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-55 p-5 feedback">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Feedback</h5>
                            <h1 class="display-6 mb-4">Deixe seu Feedback aqui!</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 wow slideInUp form" data-wow-delay="0.3s">
                    <form action="/feedback/salvar" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Seu Nome" name="nome" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Seu Telefone" name="telefone" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Avaliação" name="avaliacao" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Mensagem" name="mensagem"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection