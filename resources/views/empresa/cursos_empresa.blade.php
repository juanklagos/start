@extends('layouts.principal')
@section('content')
    <div class="mdk-drawer-layout__content">


        <!--   <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="fixed-student-dashboard.html">Home</a></li>
               <li class="breadcrumb-item active">Edit Account</li>
           </ol>-->
        @if($message=Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <h3>Bienvenido, {{Auth::user()->name}} {{Auth::user()->apellidos}}</h3>
                        <span style="text-transform: uppercase;">{{Auth::user()->rol}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                          <center>
                              <h3>CURSOS</h3>
                              <h4>20</h4>
                          </center>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <center>
                                <h3>INSCRITOS</h3>
                                <h4>35</h4>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <center>
                                <h3>DINERO</h3>
                                <h4>$9.033.990</h4>
                            </center>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
@stop
