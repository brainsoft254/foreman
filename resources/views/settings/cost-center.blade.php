@extends('fore-main') 
@section('title','Cost Center')
 @section('content')              
  <hr>
    <div class="content-wrapper">
        <section class="content">
        <div class="container-fluid">
            <div>
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="small-box bg-primary"><strong><i
                                class='bx bxs-user-detail bx-fw bx-md'></i>
                            Cost Centers Set-up</Center> </strong> </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{route('projects.create')}}" class="btn btn-warning glow pull-left" id="btnNew"><i
                                class="fa fas fa-plus fw-fa"></i></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 table-responsive" id="tbl-div">
                        <table id="tbl-tenants" class="table table-striped" style="width:100%">
                            <thead class="text-success bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>#</th>
                                    <th>#</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
        </section>  
    </div>  
 @stop   