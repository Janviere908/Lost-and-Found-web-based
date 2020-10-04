
    <div class="col-md-8 col-lg-8">
        
                <form class="card" wire:submit.prevent="saveUser" >
                    @csrf

              <center>      <div class="alert alert-dark">Basic Account Credentials </div></center> 
                   
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email Address*</label>
                                <div class="col-sm-8">
                                    <input type="email"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Username*</label>
                                <div class="col-sm-8">
                                    <input wire:model="name" type="text" class="form-control">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                              
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <center>      <div class="alert alert-dark">Personal information </div></center> 
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Full Name*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-4 col-form-label">Gender*</label>
                                <div class="col-sm-8">
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="male" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="female" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Province</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">District</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                
                    <!-- Step 4 -->
                   
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
      

