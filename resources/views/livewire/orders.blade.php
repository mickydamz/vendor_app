

<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <br />
    <div class="card card-bordered card-preview">
        
                  <table class="table table-tranx">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th class="tb-tnx-id"><span class="">User Name</span></th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span> Amount</span>
                                                            </span>
                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Coin name</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Start time</span>
                                                                     <span>End Time</span>
                                                                 </span>
                                                            </span> 
                                                        </th>
                                                       
                                                        <th class="tb-tnx-amount is-alt">
                                                            <span class="tb-tnx-total">Coin Name</span>
                                                            <!--<span class="tb-tnx-status d-none d-md-inline-block">coin option</span>-->
                                                        </th>
                                                        <!-- <th class="tb-tnx-amount is-alt">
                                                            <span class="tb-tnx-total">Total</span>
                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                        </th> -->
                                                        <th class="tb-tnx-action">
                                                            <span>&nbsp;</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($minings as $data)
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                           
                                     <a href="#"><span>
                                      <!-- <div class="nk-tnx-type-icon bg-success-dim text-success">
                                       <em class="icon ni ni-arrow-up-right"></em>
                                      </div> -->
                                      {{ $data->user->name ?? 'James' }}   {{ $data->username }}</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">{{$data->product_name }}</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                 <span class="date">{{$data->quantity }}</span> 
                                                                 <span class="date">&#8358;{{$data->net_price }}</span> 
                                                             </div> 
                                                        </td>
                                                       

                                                        <td class="tb-tnx-amount is-alt">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">Driver ID</span>
                                                            </div>
                                                            <div class="tb-tnx-status">
                                                                
                                                             
                                                            
                                                            </div>
                                                        </td>


                                                        <td class="tb-tnx-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li>
                                                                        <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm">Edit</button>
                                                                        </li>

                                                                        <li> 

                                                                        
                                                                           
                    <button  class="btn btn-danger btn-sm">Delete</button>
                </li>
                                                                        <!-- <li><a href="#">Edit</a></li>
                                                                        <li><a href="#">Remove</a></li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        

                                                        
                                                        
                                                    </tr>

                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                      
                                        </div>


    

    
</div>















                                            