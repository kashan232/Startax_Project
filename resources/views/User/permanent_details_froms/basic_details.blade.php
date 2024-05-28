<form id="editClientForm">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
      <label>First Name</label>
      <input type="text" name="first_name" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['first_name'] }}" />
    </div>
    <div class="form_input_grp">
      <label>Middle Name</label>
      <input type="text" name="middel_name" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['middel_name'] }}"> 
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Last Name</label>
      <input type="text" name="last_name" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['last_name'] }}" />
    </div>
    <div class="form_input_grp">
      <label>Father's Name</label>
      <input type="text" name="father_name" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['father_name'] }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Date Of Birth</label>
      <input type="date" name="DOB" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['DOB'] }}" />
    </div>
    <div class="form_input_grp">
      <label>PAN number *</label>
      <input type="number" name="PAN_numbr" placeholder="Enter Your Name" value="{{ $clients_details->personal_details['PAN_numbr'] }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Gender</label>
      <select name="gender" class="form-control">
        <option>Select Option</option>
        <option value="Male" {{ $clients_details->personal_details['gender'] == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ $clients_details->personal_details['gender'] == 'Female' ? 'selected' : '' }}>Female</option>
      </select>
    </div>
    <div class="form_input_grp">
      <label>Marital Status</label>
      <select name="marital_status" class="form-control">
        <option>Select Option</option>
        <option value="Married" {{ $clients_details->personal_details['marital_status'] == 'Married' ? 'selected' : '' }}>Married</option>
        <option value="Unmarried" {{ $clients_details->personal_details['marital_status'] == 'Unmarried' ? 'selected' : '' }}>Unmarried</option>
      </select>
    </div>
  </div>
  <input id="submit_client_details_form" class="submit_btton" type="submit" value="Submit" />
</form>
