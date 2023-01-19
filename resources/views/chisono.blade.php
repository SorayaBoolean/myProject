    @extends('layout.app')


    @section('header')
        @include('partials.header')
    @endsection

    @section('content')

        <div class="container">
            <div class="row text-center mt-3 mb-5">
                <div class="col-12"><h1>Mi presento</h1></div>
            </div>

            <div class="chi-sono row mt-5">
                <div class="col-6"><h3>Chi sono</h3></div>
                <div class="col-6"> Sono una Junior Full Stack Web Developer con
                    un bagaglio di skills attitudinali provenienti dal settore della vendita e del lavoro d'ufficio. Queste rendono di me quella che sono oggi una figura sicura, professionalmente flessibile e pronta all'applicazione di nuovi linguaggi e frameworks. Cerco un ambiente lavorativo in cui poter crescere, imparare ma soprattutto dare il mio contributo in termini di creatività, capacità organizzative e di vendita.</div>
            </div>

            <div class="origini row mt-5">
                <div class="col-6"><h3>Origini</h3></div>
                <div class="col-6">
                    <p>Mia madre e mio padre non sono italiani e si sono incontrati a Roma nel 1982. 
                        Eppure la loro provenienza è così lontana geograficamente quanto storicamente e culturalmente.
                        Infatti mio padre è di origine <br>
                        iraniana<br>
                        e mia madre<br>
                        venezuelana!
                    </p>
                </div>
            </div>

            <div class="passioni row mt-5">
                <div class="col-6"><h3>Passioni</h3></div>
                <div class="col-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perspiciatis dolores voluptas optio nostrum!</p></div>
            </div>

        </div>
    @endsection
