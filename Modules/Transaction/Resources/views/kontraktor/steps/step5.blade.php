<br>
<div style="margin-top: -4%">
	<div class="form-body">
			<div style="text-align: center"><h3>RAB</h3></div>
                        <br>
                        
			<form class="form-horizontal" id="form_interview" role="form" action="{{url('transaction/kontraktor/rab/create')}}" method="post" enctype="multipart/form-data">
                        <div><h3>Material</h3></div>
                        @if(isset($detail['transaction_renovasi_renovasi']['material']))
                        <table class="table table-striped table-bordered table-hover" id="kt_datatable">
                            <thead>
                            <tr>
                                <th class="text-nowrap text-center">Name Product</th>
                                <th class="text-nowrap text-center">QTY</th>
                                <th class="text-nowrap text-center">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @php $no=1; @endphp
                                    @foreach($detail['transaction_renovasi_renovasi']['material'] as $i => $step)
                                        <tr>
                                              <td class="text-nowrap text-center">{{$step['name_product']}}</td>
                                              <td class="text-nowrap text-center">{{$step['qty']}}</td>
                                              <td class="text-nowrap text-center">{{number_format($step['product_price'],0,",",".")}}</td>
                                        </tr>
                                    @php $no++; @endphp
                                    @endforeach
                            </tbody>
                        </table>
                       @endif
                       @if($detail['transaction_status_code']==4&&$detail['step_number']==4)
                        <div class="form-group">
				<label class="col-md-4 control-label">Nama Product <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control" name="name_product" >
                                </div>
			</div>
                        <div class="form-group">
				<label class="col-md-4 control-label">Harga <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control price" name="product_price" >
                                </div>
			</div>
                        <div class="form-group">
				<label class="col-md-4 control-label">Qty <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control price" name="qty" >
                                </div>
			</div>
                        <input type="hidden" name="type" value="Material">
                        <input type="hidden" name="id_transaction_renovasi" value="{{$detail['transaction_renovasi']['id_transaction_renovasi']}}">
                        @if($detail['transaction_status_code']==4&&$detail['step_number']==4)    
                        <div class="row" style="text-align: center">
                                    {{ csrf_field() }}
                                    <button type='submit' class="btn blue">Submit</button>
                            </div>
                            @endif
                            </form>
                       @endif
			
                        <form class="form-horizontal" id="form_interview" role="form" action="{{url('transaction/kontraktor/rab/create')}}" method="post" enctype="multipart/form-data">
                            <hr>
                       <div><h3>Jasa</h3></div>
                       @if(isset($detail['transaction_renovasi_renovasi']['jasa']))
                        <table class="table table-striped table-bordered table-hover" id="kt_datatable">
                            <thead>
                            <tr>
                                <th class="text-nowrap text-center">Name Product</th>
                                <th class="text-nowrap text-center">QTY</th>
                                <th class="text-nowrap text-center">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @php $no=1; @endphp
                                    @foreach($detail['transaction_renovasi_renovasi']['jasa'] as $i => $step)
                                        <tr>
                                              <td class="text-nowrap text-center">{{$step['name_product']}}</td>
                                              <td class="text-nowrap text-center">{{$step['qty']}}</td>
                                              <td class="text-nowrap text-center">{{number_format($step['product_price'],0,",",".")}}</td>
                                        </tr>
                                    @php $no++; @endphp
                                    @endforeach
                            </tbody>
                        </table>
                       @endif
                       @if($detail['transaction_status_code']==4&&$detail['step_number']==4)
                       <div class="form-group">
				<label class="col-md-4 control-label">Nama Product <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control" name="name_product" >
                                </div>
			</div>
                        <div class="form-group">
				<label class="col-md-4 control-label">Harga <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control price" name="product_price" >
                                </div>
			</div>
                        <div class="form-group">
				<label class="col-md-4 control-label">Qty <span class="required" aria-required="true"> * </span>
				</label>
				<div class="col-md-6">
                                     <input required type="text" class="form-control price" name="qty" >
                                </div>
			</div>
                        <input type="hidden" name="type" value="Jasa">
                        <input type="hidden" name="id_transaction_renovasi" value="{{$detail['transaction_renovasi']['id_transaction_renovasi']}}">
                        @if($detail['transaction_status_code']==4&&$detail['step_number']==4)    
                        <div class="row" style="text-align: center">
                                    {{ csrf_field() }}
                                    <button type='submit' class="btn blue">Submit</button>
                            </div>
                            @endif
                            </form>
                       @endif
                        <hr>
                        <br>
			
			
		</div>
            <form class="form-horizontal" id="form_interview" role="form" action="{{url('transaction/detail/kontraktor/step')}}" method="post" enctype="multipart/form-data">
		@if($detail['transaction_status_code']==4&&$detail['step_number']==4)
                    <div class="row" style="text-align: center">
                        <input type="hidden" name="step_number" value="5">
                        <input type="hidden" name="id_transaction" value="{{$detail['id_transaction']}}">
                        <input type="hidden" name="id_transaction_renovasi" value="{{$detail['transaction_renovasi']['id_transaction_renovasi']}}">
                        {{ csrf_field() }}
                        <button type='submit' class="btn blue">Pengajuan RAB </button>
                    </div>
		@endif
            </form>
</div>