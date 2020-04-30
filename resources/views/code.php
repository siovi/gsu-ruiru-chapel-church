<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Gender</label>
                                  <div class="col-md-6">
                                      <select class="form-control" name="gender"  required="required" type="text">
  <option value="Select Gender">Select Gender</option>
  <option value="male">male</option>
  <option value="Female">Female</option>

</select>  </div></div>
                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Date Of Birth</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="birthday"  type="date" placeholder = "Birthday" required> 
                                  
                                 </div>
                                 </div></div>
                        <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Place Of Birth</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="pob"  type="text" placeholder = "place of birth" required>
                                  
                                 </div></div>


                                 <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Residence</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="residence"  type="text" placeholder = "Residence" required>  
                                  
                                 </div>
                               </div>


                                  
                                 </div>
                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Select Event Attended</label>
                                  <div class="col-md-6">
                                      <select class="form-control" name="ministry"  required="required" type="text">
  <option value="">Select Event Attended</option>
  <option value="Sunday Service">Sunday Service</option>
  <option value="Extreme Worship">Extreme Worship</option>
  <option value="Prayer Kesha">Prayer Kesha</option>
  <option value="Others">Others</option>
 
</select>  
                                  
                                 </div></div>
                                  <div class="form-group">
                                 <label for="email" class="col-md-4 control-label">Mobile Number</label>
                                  <div class="col-md-6">
                                      <input class="form-control" name="mobile"  type="text" placeholder = "mobile number" required> 
                                  
                                 </div>
                               </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div></form></div></div></div></div></div></div></div></div>