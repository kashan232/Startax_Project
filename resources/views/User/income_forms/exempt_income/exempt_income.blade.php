<form id="exempt_income">
  @csrf
  <div class="card card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row align-items-center">
          <div class="col-md-10">
            <div class="form-group">
              <label>Interest Income from PPF</label>
              <input type="text" name="client_id" value="{{ $client_id }}" readonly>
              <input type="text" name="year" value="{{ $year }}" readonly>
              <input type="text" name="interest_income_ppf" class="form-control rounded-0" placeholder="Enter Your Interest Income" />
              <span>Example: Interest earned on PPF
              </span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="icon_throw">
              <i class="fas fa-list"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 div_throw">
        <table id="interestTable" class="table table-responsive">
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label class="m-0">Any Other Interest from PPF</label>
                  <input type="text" name="interest_income_ppf_other" class="form-control rounded-0" placeholder="Enter Your Nutration" />
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label class="m-0">Amount</label>
                  <input type="number" name="interest_income_ppf_amount" class="form-control rounded-0" placeholder="Enter Your Amount" />
                </div>
              </td>
              <td>
                <!-- Cancel Icon -->
                <div class="form-group d-flex" style="flex-direction: column">
                  <label class="m-0">Cancel</label>
                  <div class="cancel btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="button" id="addMoreInterestBtn" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
          Add More
        </button>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row align-items-center">
          <div class="col-md-10">
            <div class="form-group">
              <label>Any Other Exempt Income
              </label>
              <input type="text" name="other_exempt_income" class="form-control rounded-0" placeholder="Enter Your Interest Income" />
              <span>Specify any other exempt income
              </span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="icon_throw">
              <i class="fas fa-list"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 div_throw">
        <table id="sourceTable" class="table table-responsive">
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label class="m-0">Source</label>
                  <select class="form-control rounded-0" name="other_exempt_source">
                    <option>Select Option</option>
                    <option value="O">Details 1</option>
                    <option value="H">Details 2</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label class="m-0">Description</label>
                  <input type="text" name="other_exempt_description" class="form-control rounded-0" placeholder="Enter Your Description" />
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label class="m-0">Amount</label>
                  <input type="text" name="other_exempt_amount" class="form-control rounded-0" placeholder="Enter Your Amount" />
                </div>
              </td>
              <td>
                <!-- Cancel Icon -->
                <div class="form-group d-flex" style="flex-direction: column">
                  <label class="m-0">Cancel</label>
                  <div class="cancel btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="button" id="addMoreSourceBtn" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
          Add More
        </button>
      </div>

    </div>
  </div>

  <div class="card card-body">
    <h5 class="pt-3 pb-3">
      <strong>Agriculture Income</strong>
    </h5>
    <div class="row">
      <div class="col-md-6">
        <!-- Gross Agriculture Receipt -->
        <div class="form-group">
          <label class="m-0">Gross Agriculture Receipt</label>
          <br />
          <input type="text" name="GrossAgriRecpt" id="gross_agriculture_receipt" class="form-control rounded-0" placeholder="Enter Your Other Income" oninput="calculateNetReceipt()" />
          <span>Specify gross agricultural income</span>
        </div>
        <!-- Expenditure On Agriculture -->
        <div class="form-group">
          <label class="m-0">Expenditure On Agriculture</label>
          <input type="text" name="ExpIncAgri" id="expenditure_on_agriculture" class="form-control rounded-0" placeholder="Enter Your Amount" oninput="calculateNetReceipt()" />
          <span>Specify expenditure on agriculture sources</span>
        </div>
      </div>

      <div class="col-md-6">
        <!-- Unabsorbed Agriculture Loss -->
        <div class="form-group">
          <label class="m-0">Unabsorbed Agriculture Loss</label>
          <input type="text" name="UnabAgriLossPrev8" id="unabsorbed_agriculture_loss" class="form-control rounded-0" placeholder="Enter Your Amount" oninput="calculateNetReceipt()" />
          <span>Specify unabsorbed agriculture loss</span>
        </div>
        <!-- Net Agriculture Receipt -->
        <div class="form-group">
          <label class="m-0">Net Agriculture Receipt (Auto-calculated)</label>
          <input type="text" name="NetAgriIncOrOthrIncRule7" id="net_agriculture_receipt" class="form-control rounded-0" placeholder="Enter Your Amount" readonly />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table id="agricultureTable" class="table table-responsive">
          <thead>
            <tr>
              <th>Name Of District</th>
              <th>Pincode</th>
              <th>Measurement (Acres)</th>
              <th>Ownership Status</th>
              <th>Source of water</th>
              <th>Cancel</th>
            </tr>
          </thead>
          <tbody>
            <!-- Existing row, can be empty or filled as needed -->
            <tr>
              <td>
                <input type="text" class="form-control rounded-0" placeholder="Enter Your name" />
              </td>
              <td>
                <input type="number" class="form-control rounded-0" placeholder="Enter your Pincode" />
              </td>
              <td>
                <input type="date" class="form-control rounded-0" placeholder="Enter Your Measurement (Acres)" />
              </td>
              <td>
                <select class="form-control rounded-0">
                  <option>Select Option</option>
                  <option value="Owned">Owned</option>
                  <option value="Leased">Held on Lease</option>
                </select>
              </td>
              <td>
                <select class="form-control rounded-0">
                  <option>Select Option</option>
                  <option value="Irrigated">Irrigated</option>
                  <option value="RainFed">Rain-Fed</option>
                </select>
              </td>
              <td>
                <div class="cancel btn btn-danger">
                  <i class="fas fa-trash"></i>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="button" id="addMoreBtn" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
          Add More
        </button>
      </div>
    </div>


  </div>

  <div class="col-md-12 d-flex">
    <input type="submit" style="width: fit-content" id="submit_exmpte_income" class="btn btn-block btn-primary" value="Submit" />
    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
      Back
    </button>
  </div>
</form>

<script>
  function calculateNetReceipt() {
    const grossAgricultureReceipt = parseFloat(document.getElementById('gross_agriculture_receipt').value) || 0;
    const expenditureOnAgriculture = parseFloat(document.getElementById('expenditure_on_agriculture').value) || 0;
    const unabsorbedAgricultureLoss = parseFloat(document.getElementById('unabsorbed_agriculture_loss').value) || 0;

    const netAgricultureReceipt = grossAgricultureReceipt + expenditureOnAgriculture + unabsorbedAgricultureLoss;

    document.getElementById('net_agriculture_receipt').value = Math.round(netAgricultureReceipt);

    const agricultureLandDetailsDiv = document.getElementById('agricultureLandDetails');

    if (netAgricultureReceipt > 500000) {
      agricultureLandDetailsDiv.style.display = 'block';
    } else {
      agricultureLandDetailsDiv.style.display = 'none';
    }
  }

  document.addEventListener('DOMContentLoaded', function() {
    const addMoreSourceBtn = document.getElementById('addMoreSourceBtn');
    const sourceTableBody = document.querySelector('#sourceTable tbody');

    addMoreSourceBtn.addEventListener('click', function() {
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
            <td>
            
                <div class="form-group">
                    <label class="m-0">Source</label>
                    <select class="form-control rounded-0" name="other_exempt_source">
                        <option>Select Option</option>
                        <option value="O">Details 1</option>
                        <option value="H">Details 2</option>
                    </select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label class="m-0">Description</label>
                    <input type="text"  name="other_exempt_description" class="form-control rounded-0" placeholder="Enter Your Description" />
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label class="m-0">Amount</label>
                    <input type="text" name="other_exempt_amount" class="form-control rounded-0" placeholder="Enter Your Amount" />
                </div>
            </td>
            <td>
                <div class="form-group d-flex" style="flex-direction: column">
                    <label class="m-0">Cancel</label>
                    <div class="cancel btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            </td>
        `;
      sourceTableBody.appendChild(newRow);
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const addMoreInterestBtn = document.getElementById('addMoreInterestBtn');
    const interestTableBody = document.querySelector('#interestTable tbody');

    addMoreInterestBtn.addEventListener('click', function() {
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
            <td>
                <div class="form-group">
                    <label class="m-0">Any Other Interest from PPF</label>
                    <input type="text" name="interest_income_ppf_other" class="form-control rounded-0" placeholder="Enter Your Nutration" />
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label class="m-0">Amount</label>
                    <input type="number" name="interest_income_ppf_amount" class="form-control rounded-0" placeholder="Enter Your Amount" />
                </div>
            </td>
            <td>
                <div class="form-group d-flex" style="flex-direction: column">
                    <label class="m-0">Cancel</label>
                    <div class="cancel btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            </td>
        `;
      interestTableBody.appendChild(newRow);
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const addMoreBtn = document.getElementById('addMoreBtn');
    const tableBody = document.querySelector('#agricultureTable tbody');

    addMoreBtn.addEventListener('click', function() {
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
            <td><input type="text" class="form-control rounded-0" placeholder="Enter Your name" /></td>
            <td><input type="number" class="form-control rounded-0" placeholder="Enter your Pincode" /></td>
            <td><input type="date" class="form-control rounded-0" placeholder="Enter Your Measurement (Acres)" /></td>
            <td>
                <select class="form-control rounded-0">
                    <option>Select Option</option>
                    <option value="Owned">Owned</option>
                    <option value="Leased">Held on Lease</option>
                </select>
            </td>
            <td>
                <select class="form-control rounded-0">
                    <option>Select Option</option>
                    <option value="Irrigated">Irrigated</option>
                    <option value="RainFed">Rain-Fed</option>
                </select>
            </td>
            <td>
                <div class="cancel btn btn-danger"><i class="fas fa-trash"></i></div>
            </td>
        `;
      tableBody.appendChild(newRow);
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#submit_exmpte_income').click(function(event) {
      event.preventDefault();
      var formData = $('#exempt_income').serialize();
      $.ajax({
        url: "{{ route('store-client-exempt-income') }}",
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