<form id="editClientForm" action="{{ route('edit-client-basic-details') }}" method="post">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
      <label>First Name</label>
      <input type="text" name="first_name" placeholder="Enter Your Name" value="{{ $clients_details->first_name }}" />
    </div>
    <div class="form_input_grp">
      <label>Middle Name</label>
      <input type="text" name="middle_name" placeholder="Enter Your Name" value="{{ $clients_details->middle_name }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Last Name</label>
      <input type="text" name="last_name" placeholder="Enter Your Name" value="{{ $clients_details->last_name }}" />
    </div>
    <div class="form_input_grp">
      <label>Father's Name</label>
      <input type="text" name="father_name" placeholder="Enter Your Name" value="{{ $clients_details->father_name }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Date Of Birth</label>
      <input type="date" name="DOB" placeholder="Enter Your Name" value="{{ $clients_details->DOB }}" />
    </div>
    <div class="form_input_grp">
      <label>PAN number *</label>
      <input type="number" name="PAN_numbr" placeholder="Enter Your Name" value="{{ $clients_details->PAN_numbr }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Gender</label>
      <select name="gender" class="form-control">
        <option>Select Option</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="form_input_grp">
      <label>Marital Status</label>
      <select name="marital_status" class="form-control">
        <option>Select Option</option>
        <option value="Married">Married</option>
        <option value="Unmarried">Unmarried</option>
      </select>
    </div>
  </div>
  <input class="submit_btton" type="submit" value="Submit" />
</form>