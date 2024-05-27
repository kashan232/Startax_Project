<style>
  .addMore-Rap {
    display: none;
    margin-top: 20px;
  }
</style>
<div class="form_heading">
  <h5>Agriculture Income</h5>
</div>
<form id="exempt_income">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="client_id" value="{{ $clients_details->id }}">

      <label>Gross Agricultural Receipts</label>
      <input type="text" name="GrossAgriRecpt" id="GrossAgriRecpt" placeholder="Enter Your Other Income" />
      <span>Specify gross agricultural income</span>
    </div>
    <div class="form_input_grp">
      <label>Expenditure Incurred on Agriculture</label>
      <input type="text" name="ExpIncAgri" id="ExpIncAgri" placeholder="Enter Your Amount" />
      <span>Specify Expenditure incurred on agriculture sources</span>
    </div>
    <div class="form_input_grp">
      <label>Unabsorbed Agricultural Loss of Previous Eight Assessment Years</label>
      <input type="text" name="UnabAgriLossPrev8" id="UnabAgriLossPrev8" placeholder="Enter Your Amount" />
      <span>Specify Unabsorbed agricultural loss of previous eight assessment years</span>
    </div>
    <div class="form_input_grp">
      <label>Agricultural Income Portion Relating to Rule 7, 7A, 7B(1), 7B(1A) and 8 (from Sl. No. 39 of Sch. BP)</label>
      <input type="text" name="AgriIncRule7and8" id="AgriIncRule7and8" placeholder="Enter Your Amount" />
      <span>Specify Agricultural income portion relating to Rule 7, 7A, 7B(1), 7B(1A) and 8 (from Sl. No. 39 of Sch. BP)</span>
    </div>
    <div class="form_input_grp">
      <label>Net Agricultural Income for the Year</label>
      <input type="text" name="NetAgriIncOrOthrIncRule7" id="NetAgriIncOrOthrIncRule7" placeholder="Enter Your Amount" readonly />
    </div>
  </div>
  <div class="form_heading">
    <h5>Agriculture Land Details</h5>
    <span>
      These fields are optional. Enter these values
      if Net Agriculture Receipt exceeds Rs. 5
      Lakhs:
    </span>
  </div>

  <div class="addMore-Rap">
    <div id="formContainer" class="form_grid main5-col">
      <div class="form_input_grp">
        <label>Properties</label>
        <input type="text" name="properties[]" placeholder="Enter Your Employer" class="append1" />
      </div>
      <div class="form_input_grp">
        <label>PinCode</label>
        <input class="append1" name="PinCode[]" type="text" placeholder="Enter Your Category" />
      </div>
      <div class="form_input_grp">
        <label>Measurement Of Land</label>
        <input class="append1" name="MeasurementOfLand[]" type="text" placeholder="Enter Your Category" />
      </div>
      <div class="form_input_grp">
        <label>Agri Land Owned Flag</label>
        <select name="AgriLandOwnedFlag[]" class="form-control append1">
          <option disabled>Select Option</option>
          <option value="O">O - Owned</option>
          <option value="H">Held on lease</option>
        </select>
      </div>
      <div class="form_input_grp">
        <label>Agri Land Irrigated Flag</label>
        <select name="AgriLandIrrigatedFlag[]" class="append1 form-control">
          <option disabled>Select Option</option>
          <option value="IRG">Irrigated</option>
          <option value="H">- Rain-fed</option>
        </select>
      </div>
      <div class="form_input_grp">
        <div class="cancel append1">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
    </div>
    <button class="submit_btton" onclick="addMore()">
      Add more
    </button>
  </div>
  <div style="display: flex;">
    <input id="submit_exmpte_income" class="submit_btton" type="submit" value="Save" />
  </div>
</form>
<script>
  // Function to calculate Net Agricultural Income
  function calculateNetIncome() {
    // Get input values
    const grossIncome = parseFloat(document.getElementById('GrossAgriRecpt').value) || 0;
    const expenditure = parseFloat(document.getElementById('ExpIncAgri').value) || 0;
    const unabsorbedLoss = parseFloat(document.getElementById('UnabAgriLossPrev8').value) || 0;
    const agriIncomePortion = parseFloat(document.getElementById('AgriIncRule7and8').value) || 0;

    // Calculate net income
    const netIncome = Math.max(0, Math.floor(grossIncome - (expenditure + unabsorbedLoss + agriIncomePortion)));

    // Display net income
    document.getElementById('NetAgriIncOrOthrIncRule7').value = netIncome;

    // Show or hide the additional form based on the net income
    if (netIncome > 500000) {
      document.querySelector('.addMore-Rap').style.display = 'block';
    } else {
      document.querySelector('.addMore-Rap').style.display = 'none';
    }
  }

  // Add event listeners to input fields
  document.getElementById('GrossAgriRecpt').addEventListener('input', calculateNetIncome);
  document.getElementById('ExpIncAgri').addEventListener('input', calculateNetIncome);
  document.getElementById('UnabAgriLossPrev8').addEventListener('input', calculateNetIncome);
  document.getElementById('AgriIncRule7and8').addEventListener('input', calculateNetIncome);
</script>
<script>
  function addMore() {
    const formContainer = document.getElementById("formContainer");
    const inputGroups = formContainer.querySelectorAll(".form_input_grp");

    inputGroups.forEach((group) => {
      const lastInput = group.querySelector(".append1:last-of-type");

      if (lastInput) {
        const newInput = lastInput.cloneNode(true);
        newInput.value = "";
        group.appendChild(newInput);
      }
    });
  }
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
