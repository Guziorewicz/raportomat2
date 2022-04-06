@extends('layouts.app')
@section('content')
    
        <!-- Contact Section-->
        <section class="page-section masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Klienta{{$customer->id}}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7"> 

                        <form action="{{route('customers.update', ['klienci' => $customer->id])}}" method="POST" id="contactForm" novalidate="novalidate" > <!-- akcja formularza z wysłaniem danych do bazu-->
                            @csrf
                            @method('PUT')
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="{{$customer->name}}" class="form-control" id="name" type="text" name="name" placeholder="Enter your numer faktury..." data-sb-validations="required" />
                                <label for="name">Nazwa Klienta </label>
                                <div class="invalid-feedback" data-sb-feedback="numer:required">A numer is required.</div>
                            </div>
                            <!--  address input-->
                            <div class="form-floating mb-3">
                                <input value="{{$customer->adress}}" class="form-control" id="adress" type="text" name="adress" placeholder="np tu kurwa" data-sb-validations="required" />
                                <label for="adres">Adres</label>
                                <div class="invalid-feedback" data-sb-feedback="data:required">An adres is required.</div>
                            </div>
                            <!-- NIP input-->
                            <div class="form-floating mb-3">
                                <input value="{{$customer->nip}}" class="form-control" id="nip" type="text" name="nip" placeholder="Np nip " data-sb-validations="required" />
                                <label for="nip">NIP </label>
                                <div class="invalid-feedback" data-sb-feedback="usluga:required">A nip is required.</div>
                            </div>

                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Faktura wstawiona byku!</div>
                                   
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Zapisz</button>
                        
                        </form>



                    </div>
                </div>
            </div>
        </section>
    @endsection 