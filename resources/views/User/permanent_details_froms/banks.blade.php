<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Clients</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>SNO#</th>
              <th>Aadhaar card</th>
              <th>Aadhaar enrollment</th>
              <th>Isfc code</th>
              <th>Bank name</th>
              <th>Refund</th>
              <th>Acount no</th>
              <th>Acount type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ClientBanks as $ClientBank)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ClientBank->Aadhaar_card_number }}</td>
              <td>{{ $ClientBank->Aadhaar_enrollment_number }}</td>
              <td>{{ $ClientBank->bank_isfc_code }}</td>
              <td>{{ $ClientBank->bank_name }}</td>
              <td>{{ $ClientBank->Refund }}</td>
              <td>{{ $ClientBank->bank_acount_no }}</td>
              <td>{{ $ClientBank->bank_acount_type }}</td>
              <td class="d-flex align-items-center justify-content-center">
                <button type="button" style="width: fit-content" class="btn btn-block btn-danger btn-sm m-0">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

<form id="createbankform">
@csrf
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">
        <strong>AADHAAR Details </strong>
      </h3>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <!-- AADHAAR No -->
          <div class="form-group">
            <label class="m-0">AADHAAR NO</label>
            <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
            <input type="number" name="Aadhaar_card_number" class="form-control rounded-0 text-uppercase" placeholder="Enter Your AADHAAR NO" />
          </div>
        </div>
        <div class="col-md-6">
          <!-- AADHAAR Enrollment No -->
          <div class="form-group">
            <label class="m-0">AADHAAR ENROLLMENT NO</label>
            <input type="number" name="Aadhaar_enrollment_number" class="form-control rounded-0" placeholder="Enter Your No" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card card-success mt-3">
    <div class="card-header">
      <h3 class="card-title">
        <strong> Bank Detail Type</strong>
      </h3>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <!-- IFSC Code -->
          <div class="form-group">
            <label class="m-0">IFSC Code</label>
            <input type="text" name="bank_isfc_code" class="ifsc_code form-control rounded-0 text-uppercase" placeholder="Enter Your IFSC Code"  />
          </div>
          <!-- Bank Name -->
          <div class="form-group">
            <label class="m-0">Bank Name</label>
            <input type="text" name="bank_name" class="bankNameClass form-control rounded-0" placeholder="Enter Your Bank Name" readonly/>
          </div>
          <div class="form-group">
            <label class="m-0">Refund</label>
            <br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Refund" id="inlineRadio1" value="option1" />
              <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Refund" id="inlineRadio2" value="option2" />
              <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Refund" id="inlineRadio3" value="option3" />
              <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <!-- Bank Account No -->
          <div class="form-group">
            <label class="m-0">Bank Account No</label>
            <input type="number" name="bank_acount_no" class="form-control rounded-0" min="1" max="99999999999999999999" placeholder="Enter Your Bank Account No" />
          </div>
          <!-- Account Type -->
          <div class="form-group">
            <label class="m-0">Account Type</label>
            <select name="bank_acount_type" class="form-control rounded-0">
              <option value="SB">SB</option>
              <option value="CA">CA</option>
              <option value="CC">CC</option>
              <option value="OD">OD</option>
              <option value="NRO">NRO</option>
              <option value="OTH">OTH</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-12">
      <input type="submit" id="submit_client_bank_form" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
    </div>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
  function initializeIfscLookup(ifscClass, bankNameClass) {
    $(document).on('input', ifscClass, function() {
      const ifscCode = $(this).val();

      if (ifscCode.length > 0) { // Assuming IFSC code is non-empty
        $.ajax({
          url: `/get-bank-details/${ifscCode}`,
          method: 'GET',
          success: function(data) {
            if (data.bank_name) {
              // Update the bank name input
              $(bankNameClass).val(data.bank_name);
            } else {
              console.error('IFSC code not found');
            }
          },
          error: function(error) {
            console.error('Error fetching bank details:', error);
          }
        });
      }
    });
  }

  // Initialize the IFSC lookup
  $(document).ready(function() {
    initializeIfscLookup('.ifsc_code', '.bankNameClass');
  });
</script>


<script>
  $(document).ready(function() {
    $('#submit_client_bank_form').click(function(event) {
      event.preventDefault();
      var formData = $('#createbankform').serialize();
      $.ajax({
        url: "{{ route('store-client-bank') }}",
        type: 'get',
        data: formData,
        success: function(response) {
          // Success message ko display karein ya kuch aur karein
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Error handling
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>