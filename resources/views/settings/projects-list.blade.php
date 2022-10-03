@extends('fore-main') 
@section('title','Project List')
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
                            Project List </strong> </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" link-url ="{{route('projects.create')}}" class="btn btn-warning glow pull-left" id="btnNew"><i
                                class="fa fas fa-plus fw-fa"></i> Add new Project</a>
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
 @section('page-scripts')
 <script type="text/javascript">
    $(function() {
        $(document).on('click', "a#btnNew", function(e) {
            e.preventDefault();
            var urli = $(this).attr('link-url');
            $.get(urli, "", function(data) {
                bootbox.dialog({
                    title: '',
                    message: data,
                    size: 'xl',
                    backdrop: true,
                    onEscape: true,
                    callback: function() {
                        location.reload();
                    }
                });
            });
        });
        $(document).on("keyup", "#takeoffcost", function() {
            console.log(parseFloat($(this).val()));
            if (parseFloat($(this).val()) < 0) {
            Swal.fire('Invalid Amount', 'Enter Amount Greater than Zero & Try Again', 'error');
            $(this).val('');
            $(this).focus();
            return;
        }
        });
        $(".datepicker,#expedate").datepicker({
            format: 'yyyy-mm-dd'
            });
    });
 </script>
 @stop