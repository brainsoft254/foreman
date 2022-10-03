<section class="section">
    <div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <h3 class="title alert alert-primary"><i class="fa fa-file fa-fw"></i> New project </h3>
            <div class="ui-alert"></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{route('projects.store')}}" class="form-item" id="form-item" method="POST" novalidate=""
                enctype="multipart/form-data">
                {{ csrf_field() }}
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white">Project Name</span>
                                </div>
                                <input type="text" class="form-control pname" id="pname" name ="pname" value="" placeholder="enter project name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="fa fa-list fa-fw"></i> Projec Type</span>
                                </div>
                                <select name="ptype" id="ptype" class="form-control ptype">
                                    <option value="-1">--select house type--</option>
                                    <option value="0">Apartment</option>
                                    <option value="1">Town house</option>
                                    <option value="2">Commercial Block</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white">Take Off Cost</span>
                                </div>
                                <input type="text" class="form-control takeoffcost" id="takeoffcost" name ="takeoffcost" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white"><i class="fa fa-calendar fa-fw"></i> Start Date</span>
                                </div>
                                <input type="text" name="startdate" data-provide="datepicker" class=" form-control startdate" value="" data-date-format="yyyy-mm-dd" 
                                    placeholder="Ground breaking" id="startdate">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white"><i class="fa fa-calendar fa-fw"></i> End Date</span>
                                </div>
                                <input type="text" name="expedate" data-provide="datepicker" class=" form-control expedate" value="" data-date-format="yyyy-mm-dd" 
                                    placeholder="Expected finish date" id="expedate">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="fa fa-user fa-fw"></i> Contructor</span>
                                </div>
                                <input type="text" class="form-control contructor" id="contructor" name ="contructor" value ="" placeholder ="name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="fa fa-user fa-fw"></i> Engineer</span>
                                </div>
                                <input type="text" class="form-control engineer" id="engineer" name ="engineer" value ="" placeholder ="name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="fa fa-phone fa-fw"></i> Site Contacts</span>
                                </div>
                                <input type="text" class="form-control sitecontact" id="sitecontact" name ="sitecontact" value ="" placeholder ="tel. No.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="border:1px solid #DBDDE0;">
                    <label for="container-fluid"><i class="fa fa-map-marker fa-fw"></i><u>Locality</u></label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white">County</span>
                                    </div>
                                    <select name="county" id="county" class="form-control county">
                                        <option value="-1">-select county--</option>
                                        @foreach($counties as $county)
                                        <option value="{{$county->code}}-{{$county->county}}">{{$county->code}}-{{$county->county}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white">County</span>
                                    </div>
                                    <input type="text" name ="subcounty" id ="subcounty" class="form-control subcounty" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white">Ward</span>
                                    </div>
                                    <input type="text" name ="ward" id ="ward" class="form-control ward" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white">Remarks</span>
                                </div>
                                <textarea name="remarks" id="remarks" class="form-control remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                                <button class="btn btn-success btnSave" id="btnSave"><i
                                        class="fa fa-save fa-fw"></i>
                                    Save Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    </div>
</section>
<script type="text/javascript">
    $(function() {
        $('#county').select2({
          theme: 'bootstrap4',
          dropdownParent: $('.modal')
        });
    });
</script>
