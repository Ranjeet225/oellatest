@extends('admin.include.app')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.min.css" rel="stylesheet">
@endsection
@section('main-content')
    <div class="row">
        <div class="card card-buttons">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <ol class="breadcrumb text-muted mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php"> Home</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> Manage Leads</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="student_section">
                                <div class="col-md-12">
                                    <h3 style="margin-bottom: 20px;">Student Details</h3>
                                </div>
                                <p><label>Name</label>: {{ $studentAgentData->name  ?? null}}</p>
                                <p><label>Email</label>: {{ $studentAgentData->email ?? null }} </p>
                                <p><label>Address</label>: , {{ $studentAgentData->zip ?? null }},
                                    {{ $studentAgentData->country->name ?? null }}</p>
                                <p><label>Preferred Country</label>: {{ $studentAgentData->country->name ?? null }}</p>
                                <p><label>Interested In</label>: {{ $studentAgentData->interested_in ?? null }} </p>
                                <p><label>Phone Number</label>: {{ $studentAgentData->phone_number ?? null }}</p>

                                <p><label>Allocated Franchise</label>: not know</p>
                                <p><label>Lead Status</label>: {{ $studentAgentData->lead_status ?? null }}</p>
                                <p><label>Next Calling Date</label>: {{ $studentAgentData->next_calling_date ?? null }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <form method="post" id="add_follow_up">
                                <input type="hidden" name="student_id" id="student_id" value="{{ $student_id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 style="margin-bottom: 20px;">Add Follow Up</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Next Calling Date <span class="text-danger">*</span></label>
                                        <input type="datetime-local" min="{{ now()->toDateTimeLocalString() }}" class="form-control "
                                            name="next_calling_date" id="next_calling_date"
                                            placeholder="Next Calling Date">
                                        <span class="text-danger next_calling_date"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Lead Status<span class="text-danger">*</span></label>
                                        <select name="lead_status" id="lead_status" class="form-control ">
                                            <option value="" >--Select Lead Status--</option>
                                            @foreach ($masterLeadStatus as $data)
                                              <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger lead_status"></span>
                                    </div>
                                </div>
                                <div class="col-12 vsb payment" style="display: none;">
                                    <label>Service <span class="text-danger">*</span></label>
                                    <div >
                                        <select class="form-control " name="paymentType" id="paymentType" placeholder="Type" required onchange="getSubService(this.value)">
                                        <option value="">--Select Master Service--</option>
                                        @foreach ($master_service as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                        </select>
                                        <span class="text-danger error-master-service"></span>
                                    </div>
                                </div>
                                <div class="col-12 vsb payment" style="display: none;">
                                    <label>Select Sub Service <span class="text-danger">*</span></label>
                                    <div >
                                        <select class="form-control js-select2" name="sub_service[]"  size="3" multiple id="sub_service" placeholder="Type" required>                                        <option value="">--Select Sub Service--</option>
                                        </select>
                                        <span class="text-danger error-sub-service"></span>
                                    </div>
                                </div>
                                <div class="col-12 vsb payment" style="display: none;">
                                    <label>Amount<span class="text-danger">*</span></label>
                                    <div >
                                        <input id="amount" name="amount" type="number" readonly   class="form-control" placeholder="amount" autocomplete="amount" >
                                        <span class="text-danger error-amount"></span>
                                    </div>
                                </div>
                                <div class="col-12 vsb payment" style="display: none;">
                                    <label>Select Discount<span class="text-danger">*</span></label>
                                    <div >
                                        <select class="form-control" name="is_discount" id="is_discount" onchange="discountField()">
                                            <option value="">--Select Discount--</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <span class="text-danger error-discount"></span>
                                    </div>
                                </div>
                                <div class="col-12 discount-field" style="display: none;">
                                    <label>Discount<span class="text-danger">*</span></label>
                                    <div >
                                        <input name="discount" id="discount" type="number" class="form-control" placeholder="discount" autocomplete="discount">
                                    </div>
                                </div>

                                {{-- <div class="col-md-12 vsb payment" style="display: none;">
                                    <label>Payment Type <span class="text-danger">*</span></label>
                                     <select name="paymentType" id="paymentType" class="form-control ">
                                   @foreach ($master_service as $data)
                                            <option value="{{$data->name}}">{{$data->name}}</option>
                                        @endforeach
                                            </select>
                                    <span class="text-danger payment_type_error"></span>
                                    <br>
                                    <div class="paymentTypeRemarks " style="display:none;">
                                        <input type="text" name="paymentTypeRemarks" id="paymentTypeRemarks" class="form-control "
                                            placeholder="Enter Details Here">
                                        <div class="payment_type_remarks_error text-danger"></div>
                                    </div>
                                </div> --}}
                                <div class="col-md-12 vsb payment" style="display: none;">
                                    <label>Payment Mode<span class="text-danger">*</span></label>
                                    <select name="paymentMode" class="form-control " id="paymentMode">
                                        <option value="">Select Payment Mode</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Online">Online</option>
                                        <option value="Bank">Bank</option>
                                    </select>
                                    <div class="payment-mode-error text-danger"></div>
                                    <br>
                                    <div class="paymentModeRemarks" style="display:none;">
                                        <input type="text" name="paymentModeRemarks" class="form-control "
                                            placeholder="Enter Details Here" id="paymentModeRemarks">
                                        <div class="payment-mode-remarks-error text-danger"></div>
                                    </div>
                                    {{-- for bank details  --}}
                                    <div class="bank-details" style="display:none;">
                                        <input type="text" name="bankName" class="form-control "
                                            placeholder="Enter Bank Name" id="bankName">
                                        <div class="bank-name-error text-danger"></div>
                                        <br>
                                        <input type="text" name="accountNo" class="form-control "
                                            placeholder="Enter Account No" id="accountNo">
                                        <div class="account-no-error text-danger"></div>
                                        <br>
                                        <input type="text" name="ifscCode" class="form-control "
                                            placeholder="Enter IFSC Code" id="ifscCode">
                                        <div class="ifsc-code-error text-danger"></div>
                                        <br>
                                    </div>
                                    {{-- end bank details  --}}
                                </div>
                                {{-- <div class="col-md-12 vsb payment" style="display: none;">
                                    <label>Amount (With gst)<span class="text-danger">*</span></label>
                                    <input type="number" name="amount" id="amount" min="0" class="form-control ">
                                    <div class="amount-error text-danger"></div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6 col-sm-6">
                                        <label>Intake<span class="text-danger">*</span></label>
                                        <select class="form-control sidfrmintake " name="intake" id="intake" >
                                            <option value="">Please select Intake</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <span class="text-danger intake-error"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6 col-sm-6">
                                        <label>Intake Year<span class="text-danger">*</span></label>
                                        <select class="form-control " name="intake_year" id="intake_year" >
                                            <option value="">Please select intake Year</option>
                                            @php
                                            $currentYear = date('Y');
                                            $startYear = $currentYear +10; // Adjust this if you want a different range
                                            @endphp
                                            @for ($year = $currentYear; $year <= $startYear; $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                        <span class="text-danger intake-year-error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Comment</label>
                                        <textarea class="form-control sidfrmps ps--theme_default " name="comment" id="comment" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row followup">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button"  class="btn btn-info d-lg-block m-l-15 btnDiv" >Add
                                            FollowUp</button>
                                    </div>
                                </div>
                                <div class="row payment-button"  style="display: none">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" value=""  class="btn btn-info d-lg-block m-l-15 btnDiv " id="payment" >
                                            Payment</button>
                                    </div>
                                </div>
                                <div class="row submit-amount"  style="display: none">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="button" value=""  class="btn btn-info d-lg-block m-l-15 btnDiv " id="submitData" >
                                            Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Date</th>
                            <th>User</th>
                            <th>Comment</th>
                            <th>Next Calling Date</th>
                            <th>Lead Status	</th>
                            <th>Payment Mode</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @php
                            $i=1;
                        @endphp
                        @foreach ($follow_up_list as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->email}}</td>
                           <td class="text-wrap">
                                <a  data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                    {{Str::limit($item->comment, 12, '...')}}
                                </a>
                              <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      {{$item->comment}}
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>{{$item->next_calling_date}}</td>
                            @php
                                $leadstatus = App\Models\MasterLeadStatus::where('id',$item->status)->first();
                                $payment_status = App\Models\Payment::where('fallowp_unique_id',$item->fallowp_unique_id)->first();
                            @endphp
                            <td>{{$leadstatus->name ?? null }}</td>
                            <td>{{$item->paymentMode}}</td>
                            <td>{{$item->amount}}</td>
                            <td class="text-capitalize">{{$payment_status->payment_status ?? null}}</td>
                            <td class="text-capitalize">
                                <a href="javascript:void(0)" onclick="deleteFollowUp({{ $item->id }})" class="btn btn-warning" >
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        <tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            {{-- {{ $lead_list->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery-3.7.1.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.all.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(".js-select2").select2({
        closeOnSelect: false,
        placeholder: "Select Sub Service",
        allowClear: true,
        tags: true,
    });
</script>
<script>
     function discountField() {
            if ($("#is_discount").val() == "1") {
                $(".discount-field").show();
            } else {
                $(".discount-field").hide();
            }
    }
    function getSubService(master_service_id){
        $.ajax({
            url: "{{route('get-sub-service')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "master_service_id": master_service_id
            },
            success: function(response) {
                $('#sub_service').html('');
                if (response.subservice.length > 0) {
                    $.each(response.subservice, function(key, value) {
                        $('#sub_service').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                } else {
                    $('#sub_service').html('<option value="">No records found</option>');
                    $('#amount').val('');
                }
                $('#amount').val(response.amount);
            },
            error: function(xhr, status, error) {
                console.log(xhr);
            }
        });
    }
    function deleteFollowUp(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('delete-user-follow-up', ':id') }}".replace(':id', id);
            }
        })
    }
    $(document).ready(function(){
        $('.btnDiv').on('click', function() {
            $('.btnDiv').addClass('disabled');
            var lead_status = null;
            var paymentType = null;
            var paymentTypeRemarks = null;
            var paymentMode = null;
            var paymentModeRemarks = null;
            var bankName = null;
            var accountNo = null;
            var ifscCode = null;
            var sub_service = null;
            var amount = null;
            var discount = null;
            var is_discount = null;
            var next_calling_date = $('#next_calling_date').val();
            var student_id = $('#student_id').val();
            if(!next_calling_date){
                $('.next_calling_date').html('Next Calling Date Field Required');
                $('.btnDiv').removeClass('disabled');
                return;
            }
             lead_status = $('#lead_status').val();
            if(!lead_status){
                $('.lead_status').html('Lead Status Field Required');
                $('.btnDiv').removeClass('disabled');
                return;
            }
            if ($('.payment-button').is(':visible'))
            {
                var payment_data = 'payment_form';
            }else{
                var payment_data = 'follow_up';
            }
            if ($('.payment').is(':visible')) {
                   paymentType = $('#paymentType').val();
                if(!paymentType){
                    $('.payment_type_error').html('Payment Type Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
                   paymentMode = $('#paymentMode').val();
                if(!paymentMode){
                    $('.payment-mode-error').html('Payment mode Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
                   sub_service = $('#sub_service').val();
                if(!sub_service){
                    $('.error-sub-service').html('Sub Service Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
                 is_discount = $('#is_discount').val();
                if(!is_discount){
                    $('.error-discount').html('Discount Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }else{
                    $('.error-discount').html('');
                }
                if ($('.discount-field').is(':visible'))
                {
                     discount = $('#discount').val();
                }else{
                     discount = 0;
                }
                   amount = $('#amount').val();
                if(!amount){
                    $('.error-amount').html('Amount Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
            }
            if ($('.paymentModeRemarks').is(':visible')) {
                 paymentModeRemarks = $('#paymentModeRemarks').val();
                if(!paymentModeRemarks){
                    $('.payment-mode-remarks-error').html('Payment  Mode Remarks Field Required');
                    $('.btnDiv').removeClass('disabled');
                    console.log('10');
                    return;
                }
            }
            // bank details here
            if ($('.bank-details').is(':visible')) {
                bankName = $('#bankName').val();
                accountNo = $('#accountNo').val();
                ifscCode = $('#ifscCode').val();
                if (!bankName || !accountNo || !ifscCode) {
                    console.log('12');
                    $('.bank-name-error .account-no-error .ifsc-code-error').html('Bank Name, Account No and IFSC Code are required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
            }

            if ($('.paymentTypeRemarks').is(':visible')) {
                var paymentTypeRemarks = $('#paymentTypeRemarks').val();
                if(!paymentTypeRemarks){
                    $('.payment_type_remarks_error').html('Payment Type Remarks Field Required');
                    $('.btnDiv').removeClass('disabled');
                    return;
                }
            }

            var intake = $('#intake').val();
            if(!intake){
                $('.intake-error').html('Intake Field Required');
                $('.btnDiv').removeClass('disabled');
                return;
            }
            var intake_year = $('#intake_year').val();
            if(!intake_year){
                $('.intake-year-error').html('Intake Year Field Required');
                $('.btnDiv').removeClass('disabled');
                return;
            }
            var comment = $('#comment').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('add-user-follow-up') }}',
                type: 'post',
                data: {
                    student_id:student_id,
                    lead_status:lead_status,
                    paymentType:paymentType,
                    paymentTypeRemarks:paymentTypeRemarks,
                    paymentMode:paymentMode,
                    paymentModeRemarks:paymentModeRemarks,
                    sub_service:sub_service,
                    is_discount:is_discount,
                    discount:discount,
                    amount:amount,
                    intake:intake,
                    intake_year:intake_year,
                    comment:comment,
                    next_calling_date:next_calling_date,
                    payment_data:payment_data,
                    bankName:bankName,
                    accountNo:accountNo,
                    ifscCode:ifscCode,
                },
                success: function(response) {
                    $('.btnDiv').removeClass('disabled');
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }
                    });
                },
                error: function(xhr) {
                    var response = JSON.parse(xhr.responseText);
                    $('.btnDiv').removeClass('disabled');
                    console.log(response);
                }
            });
        });
        $('#lead_status').on('change',function() {
            var selectedValue = $(this).val();
            if (selectedValue == 7) {
                $('.payment').show();
                $('.payment-button').show();
                $('.followup').hide();
            } else {
                $('.payment').hide();
            }
        });
        $('#paymentMode').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Cash' || selectedValue === 'Cheque') {
                $('.paymentModeRemarks').show();
                $('.bank-details').hide();
                $('.submit-amount').show();
                $('.payment-button').hide();
            }else if(selectedValue === 'Bank'){
                $('.bank-details').show();
                $('.paymentModeRemarks').hide();
                $('.submit-amount').show();
                $('.payment-button').hide();
            }else{
                $('.paymentModeRemarks').hide();
                $('.bank-details').hide();
                $('.submit-amount').hide();
                $('.payment-button').show();
            }
        });

        $('#paymentType').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Course Fee') {
                $('.paymentTypeRemarks').show();
            } else {
                $('.paymentTypeRemarks').hide();
            }
        });

    })
</script>
@endsection
