<form id="Vda_form">
  @csrf
  <div class="card card-body">
  <input type="text" name="client_id" value="{{ $client_id }}" readonly>
  <input type="text" name="year" value="{{ $year }}" readonly>
    <div class="form_heading">
      <h5 class="mt-3">
        <strong>Assets from Crypto wallets</strong>
      </h5>
      <span>*As per the tax laws from ITD, all the positive gains from VDA assets will be taxable</span>
    </div>

    <div class="col-md-12">
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Asset name</th>
            <th>Buy date</th>
            <th>Sell date</th>
            <th>Buy value</th>
            <th>Sell value</th>
            <th>Income head</th>
            <th>Gains*</th>
            <th>Cancel</th>
          </tr>
        </thead>
        <tbody id="vdaTableBody">
          <tr>
            <td>
              <div class="form-group">
                <input type="text" name="asset_name[]" class="form-control rounded-0" placeholder="Enter Your Asset name" />
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="date" name="buy_date[]" class="form-control rounded-0" />
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="date" name="sell_date[]" class="form-control rounded-0" />
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" name="buy_value[]" class="form-control rounded-0" placeholder="Enter your Value" />
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" name="sell_value[]" class="form-control rounded-0" placeholder="Enter your Sell value" />
              </div>
            </td>
            <td>
              <div class="form-group">
                <select name="income_head[]" class="form-control rounded-0">
                  <option>Select Option</option>
                  <option value="IRG">Capital Gains</option>
                  <option value="RF">Business Income</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" name="gains[]" class="form-control rounded-0" placeholder="Enter your Gains*" />
              </div>
            </td>
            <td>
              <div class="form-group d-flex" style="flex-direction: column">
                <div class="cancel btn btn-danger">
                  <i class="fas fa-trash"></i>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat" id="addMoreBtn">
        Add More
      </button>
    </div>
  </div>
  <div class="col-md-12 d-flex">
    <input type="submit" id="submit_VDA_form" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
      Back
    </button>
  </div>
</form>

<script>
  document.getElementById('addMoreBtn').addEventListener('click', function() {
    var tableBody = document.getElementById('vdaTableBody');
    var newRow = document.createElement('tr');

    newRow.innerHTML = `
      <td>
        <div class="form-group">
          <input type="text" name="asset_name[]" class="form-control rounded-0" placeholder="Enter Your Asset name" />
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="date" name="buy_date[]" class="form-control rounded-0" />
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="date" name="sell_date[]" class="form-control rounded-0" />
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" name="buy_value[]" class="form-control rounded-0" placeholder="Enter your Value" />
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" name="sell_value[]" class="form-control rounded-0" placeholder="Enter your Sell value" />
        </div>
      </td>
      <td>
        <div class="form-group">
          <select name="income_head[]" class="form-control rounded-0">
            <option>Select Option</option>
            <option value="IRG">Capital Gains</option>
            <option value="RF">Business Income</option>
          </select>
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" name="gains[]" class="form-control rounded-0" placeholder="Enter your Gains*" />
        </div>
      </td>
      <td>
        <div class="form-group d-flex" style="flex-direction: column">
          <div class="cancel btn btn-danger">
            <i class="fas fa-trash"></i>
          </div>
        </div>
      </td>
    `;

    tableBody.appendChild(newRow);

    // Add event listener for the new cancel button
    newRow.querySelector('.cancel').addEventListener('click', function() {
      tableBody.removeChild(newRow);
    });
  });

  // Add event listeners for the existing cancel buttons
  document.querySelectorAll('.cancel').forEach(function(cancelBtn) {
    cancelBtn.addEventListener('click', function() {
      var row = this.closest('tr');
      row.parentElement.removeChild(row);
    });
  });
</script>


<script>
  $(document).ready(function() {
    $('#submit_VDA_form').click(function(event) {
      event.preventDefault();
      var formData = $('#Vda_form').serialize();
      $.ajax({
        url: "{{ route('store-vda-form') }}",
        type: 'get',
        data: formData,
        success: function(response) {
          console.log(response);
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>