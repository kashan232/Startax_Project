<div class="for-heading">
  <h5>Bank Detail Type</h5>
</div>
<form action="{{ route('store-client-bank') }}" method="post">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="client_id" value="{{ $clients_details->id }}">
      <label>IFSC Code</label>
      <input type="text" name="bank_isfc_code" class="ifsc_code" placeholder="Enter Your IFSC Code" />
    </div>

    <div class="form_input_grp">
      <label>Bank Account No</label>
      <input type="number" name="bank_acount_no" placeholder="Enter Your Bank Account No" />
    </div>

    <div class="form_input_grp">
      <label>Bank Name</label>
      <input type="text" name="bank_name" class="bank_name" placeholder="Bank Name" readonly />
    </div>
    <div class="form_input_grp">
      <label>Account Type</label>
      <select name="bank_acount_type" class="form-control" id="">
        <option>Select Option</option>
        <option value="SB">SB</option>
        <option value="CA">CA</option>
        <option value="CC">CC</option>
        <option value="OD">OD</option>
        <option value="NRO">NRO</option>
        <option value="OTH">OTH</option>
      </select>
    </div>
  </div>

  <div style="display: flex;">
    <input class="submit_btton" type="submit" value="Save" />
  </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    initializeIfscLookup('.ifsc_code', '.bank_name');
  });
</script>
<script>
  $(document).ready(function() {
    $('form').on('submit', function(e) {
      e.preventDefault();
      var formData = $(this).serialize(); // Form data ko serialize karein
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
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