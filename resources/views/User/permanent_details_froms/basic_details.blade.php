<form action="#">
    <div class="card card-body">
        <h5 class="pt-3">
            <strong> Basic Details</strong>
        </h5>
        <div class="row">
            <div class="col-md-6">
                <!-- Hidden ID field -->
                <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
                
                <!-- First Name -->
                <div class="form-group">
                    <label class="m-0">First Name</label>
                    <input type="text" class="form-control rounded-0" placeholder="Enter First Name" value="{{ $clients_details->first_name }}" />
                </div>
                
                <!-- Middle Name -->
                <div class="form-group">
                    <label class="m-0">Middle Name</label>
                    <input type="text" class="form-control rounded-0" placeholder="Enter Middle Name" value="{{ $clients_details->middel_name }}" />
                </div>
                
                <!-- Last Name -->
                <div class="form-group">
                    <label class="m-0">Last Name</label>
                    <input type="text" class="form-control rounded-0" placeholder="Enter Last Name" value="{{ $clients_details->last_name }}" />
                </div>
                
                <!-- Father's Name -->
                <div class="form-group">
                    <label class="m-0">Father's Name</label>
                    <input type="text" class="form-control rounded-0" placeholder="Enter Father's Name" value="{{ $clients_details->father_name }}" />
                </div>
                
                <!-- PAN Number -->
                <div class="form-group">
                    <label class="m-0">PAN Number *</label>
                    <input type="number" class="form-control rounded-0" placeholder="Enter PAN Number" value="{{ $clients_details->PAN_numbr }}" />
                </div>
                
                <!-- Marital Status -->
                <div class="form-group">
                    <label class="m-0">Marital Status</label>
                    <select class="form-control rounded-0" style="width: 100%" name="marital_status">
                        <option>Select Option</option>
                        <option value="Married" {{ $clients_details->marital_status == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="UnMarried" {{ $clients_details->marital_status == 'UnMarried' ? 'selected' : '' }}>UnMarried</option>
                    </select>
                </div>
                
                <!-- Date Of Birth -->
                <div class="form-group">
                    <label class="m-0">Date Of Birth</label>
                    <input type="date" class="form-control rounded-0" placeholder="Enter Date Of Birth" value="{{ $clients_details->DOB }}" />
                </div>
                
                <!-- Gender -->
                <div class="form-group">
                    <label class="m-0">Gender</label>
                    <select class="form-control rounded-0" style="width: 100%" name="gender">
                        <option>Select Option</option>
                        <option value="Male" {{ $clients_details->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $clients_details->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 up-fixedbtn">
            <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
        </div>
    </div>
</form>
