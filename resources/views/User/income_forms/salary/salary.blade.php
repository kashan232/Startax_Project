  <form id="salary_form">
    @csrf
    <div class="form_heading">
      <h5>Employer Wise Salary</h5>
    </div>

    <div class="form_grid">
      <div class="form_input_grp">
        <label>Salary Type</label>
        <input type="hidden" name="client_id" value="{{ $clients_details->id }}">
        <select name="salary_type">
          <option value="type_1" style="color: #000;">type 1</option>
          <option value="type_2" style="color: #000;">type 2</option>
        </select>
      </div>
      <div class="form_input_grp">
        <label>Name of the Employer *</label>
        <input type="text" name="em_name" placeholder="Enter Your Employer" />
      </div>
      <div class="form_input_grp">
        <label>Employer Type/Category *</label>
        <select name="employer_category" class="form-control" id="employer_category">
          <option>Select Option</option>
          <option value="CGovt">Central Government</option>
          <option value="SGOV">State Government</option>
          <option value="PSU">Public Sector Undertaking</option>
          <option value="PE">Pensioners - Central Government</option>
          <option value="PESG">Pensioners - State Government</option>
          <option value="PEPS">Pensioners - Public sector undertaking</option>
          <option value="PEO">Pensioners - Others</option>
          <option value="OTH">Others</option>
          <option value="NA">Not Applicable</option>
        </select>
      </div>
      <div class="form_input_grp">
        <label>Employer Address</label>
        <input type="text" name="em_address" placeholder="Enter Your Employer Address" />
      </div>

      <div class="form_input_grp">
        <label>Pincode</label>
        <input type="number" name="pin_code_salry" placeholder="Enter Your Pincode" />
      </div>

      <div class="form_input_grp">
        <label>District</label>
        <input type="text" name="district_salary" placeholder="Enter Your Town" />
      </div>

      <div class="form_input_grp">
        <label>State </label>
        <select name="State_salary" class="form-control" id="">
          <option>Select Option</option>
          <option value="ANDHRAPRADESH">ANDHRA PRADESH</option>
          <option value="ARUNACHALPRADESH">ARUNACHAL PRADESH</option>
          <option value="ASSAM">ASSAM</option>
          <option value="BIHAR">BIHAR</option>
          <option value="CHANDIGARH">CHANDIGARH</option>
          <option value="CHHATISHGARH">CHHATISHGARH</option>
          <option value="DADRANAGARHAVELI">DADRA &amp; NAGAR HAVELI</option>
          <option value="DAMANDIU">DAMAN &amp; DIU</option>
          <option selected="selected" value="DELHI">
            DELHI
          </option>
          <option value="GOA">GOA</option>
          <option value="GUJARAT">GUJARAT</option>
          <option value="HARYANA">HARYANA</option>
          <option value="HIMACHALPRADESH">
            HIMACHAL PRADESH
          </option>
          <option value="JAMMUKASHMIR">
            JAMMU &amp; KASHMIR
          </option>
          <option value="JHARKHAND">JHARKHAND</option>
          <option value="KARNATAKA">KARNATAKA</option>
          <option value="KERALA">KERALA</option>
          <option value="LAKHSWADEEP">
            LAKHSWADEEP
          </option>
          <option value="LADAKH">LADAKH</option>
          <option value="MADHYAPRADESH">
            MADHYA PRADESH
          </option>
          <option value="MAHARASHTRA">
            MAHARASHTRA
          </option>
          <option value="MANIPUR">MANIPUR</option>
          <option value="MEGHALAYA">MEGHALAYA</option>
          <option value="MIZORAM">MIZORAM</option>
          <option value="NAGALAND">NAGALAND</option>
          <option value="ORISSA">ORISSA</option>
          <option value="PONDICHERRY">
            PONDICHERRY
          </option>
          <option value="PUNJAB">PUNJAB</option>
          <option value="RAJASTHAN">RAJASTHAN</option>
          <option value="SIKKIM">SIKKIM</option>
          <option value="TAMILNADU">
            TAMIL NADU
          </option>
          <option value="TELANGANA">TELANGANA</option>
          <option value="TRIPURA">TRIPURA</option>
          <option value="UTTARANCHAL">
            UTTARAKHAND
          </option>
          <option value="UTTARPRADESH">
            UTTAR PRADESH
          </option>
          <option value="WESTBENGAL">
            WEST BENGAL
          </option>
          <option value="StateoutsideIndia">
            State outside India
          </option>
          <option value="NotInit"></option>
        </select>
      </div>




    </div>

    <div class="form_heading">
      <h5>Gross Salary</h5>
    </div>
    <div class="accordion">
      <div class="accordion-item form">
        <div class="accordion-item-header">
          <span>Salary u/s 17(1)</span>
          <input type="text" name="Salary_1" />
        </div>
        <div class="accordion-item-description-wrapper">
          <div class="accordion-item-description">
            <div class="form_grid_acor">
              <div class="form_input_grp">
                <label>Basic Salary</label>
                <input type="text" name="basic_salary" />
              </div>
              <div class="form_input_grp">
                <label>House Rent Allowance</label>
                <input type="text" name="house_rent_allowance" />
              </div>
              <div class="form_input_grp">
                <label>Leave Travel Allowance</label>
                <input type="text" name="leave_travel" />
              </div>
              <div class="form_input_grp">
                <label>Dearness Allowance</label>
                <input type="text" name="dearness" />
              </div>
              <div class="form_input_grp">
                <label>Conveyance Allowance</label>
                <input type="text" name="conveyance" />
              </div>
              <div class="form_input_grp">
                <label>Leave Encashment on Retirement</label>
                <input type="text" name="leave_encashment" />
              </div>
              <div class="form_input_grp">
                <label>Children Education Allowance</label>
                <input type="text" name="children" />
              </div>

              <div class="form_input_grp slec">
                <label>Select Additional Detail</label>
                <select class="form-control employerTypeSelect">
                  <option disabled>Select Additional Detail</option>
                  <option value="entertainment_allowance">Entertainment Allowance</option>
                  <option value="fees_commission">Fees/Commission</option>
                  <option value="employer_contribution">Employer Contribution towards Pension</option>
                  <option value="advanceof_salary">Advance of Salary</option>
                  <option value="annuity">Annuity / Commuted Pension</option>
                  <option value="gratuity_received">Gratuity Received</option>
                  <option value="others">others</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item form">
        <div class="accordion-item-header">
          <span>Perquisites Value u/s 17(2)</span>
          <input type="text" name="perquisites_value" />
        </div>
        <div class="accordion-item-description-wrapper">
          <div class="accordion-item-description">
            <div class="form_grid_acor">
              <div class="form_input_grp">
                <label>Rent-free Accommodation</label>
                <input type="text" name="rent_free" />
              </div>
              <div class="form_input_grp">
                <label>Cars</label>
                <input type="text" name="cars" />
              </div>
              <div class="form_input_grp">
                <label>Sweeper / Gardener / Watchman / PA</label>
                <input type="text" name="sweeper" />
              </div>
              <div class="form_input_grp">
                <label>Interest Free Loans</label>
                <input type="text" name="free_loans" />
              </div>

              <div class="form_input_grp slec">
                <label>Select Additional Detail</label>
                <select class="form-control employerTypeSelect">
                  <option disabled>Select Option</option>
                  <option value="holiday_expenses">Holiday Expenses</option>
                  <option value="free_meals">free_meals</option>
                  <option value="gifts">gifts</option>
                  <option value="others">others</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item form">
        <div class="accordion-item-header">
          <span>Profits in lieu of Salary u/s 17(3)</span>
          <input type="text" name="profits_in_lieu" />
        </div>
        <div class="accordion-item-description-wrapper">
          <div class="accordion-item-description">
            <div class="form_grid_acor">
              <div class="form_input_grp slec">
                <label>Select Additional Detail</label>
                <select class="form-control employerTypeSelect">
                  <option disabled>Select Option</option>
                  <option value="compensation_received">Compensation received from Employer due to termination of his employment</option>
                  <option value="payment_received">Payment Received from employer under Key-man Insurance Policies</option>
                  <option value="any_amount_received">Any Amount received before joining or after cessation of employment</option>
                  <option value="others">others</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="form_heading">
      <h5>Over All Exempation Deduction</h5>
    </div>

    <div class="accordion">
      <div class="accordion-item form">
        <div class="accordion-item-header">
          <span>Exempt Allowance u/s 10</span>
          <input type="text" name="exempt_allowance" />
        </div>
        <div class="accordion-item-description-wrapper">
          <div class="accordion-item-description">
            <div class="form_grid_acor">
              <div class="form_input_grp">
                <label>House Rent Allowance</label>
                <input type="text" name="exempation_house_rent" />
              </div>

              <div class="form_input_grp">
                <label>Children Education Allowance</label>
                <input type="text" name="exempation_house_rent" />
              </div>

              <div class="form_input_grp">
                <label>Hostel Expenditure Allowance</label>
                <input type="text" name="exempation_house_rent" />
              </div>

              <div class="form_input_grp">
                <label>Leave Travel Concession</label>
                <input type="text" name="exempation_house_rent" />
              </div>

              <div class="form_input_grp slec">
                <label>Select Exemption Detail</label>
                <select class="form-control employerTypeSelect">
                  <option disabled>Select Option</option>
                  <option value="exemption_transport_allowance">Transport Allowance granted to physically disabled employees for commuting between place of duty and residence (Rule 2BB (2))</option>
                  <option value="exemption_tribal_area">Tribal Area/ Scheduled Area/ Agency Area Allowance available in MP, Assam, UP, Karnataka, West Bengal, Bihar, Orissa, Tamil Nadu, Tripura</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item form">
        <div class="accordion-item-header">
          <span>Deduction u/s 16</span>
          <input type="text" name="deduction_us_16" />
        </div>
        <div class="accordion-item-description-wrapper">
          <div class="accordion-item-description">
            <div class="form_grid_acor">
              <div class="form_input_grp">
                <label>Standard Deduction</label>
                <input type="text" name="standard_deduction" />
              </div>
              <div class="form_input_grp">
                <label>Entertainment Allowance</label>
                <input type="text" name="entertainment_deduction_allowance" />
              </div>
              <div class="form_input_grp">
                <label>Professional Tax</label>
                <input type="text" name="professional_deduction_tax" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />

    <div class="form_heading">
      <h5>TDS Details</h5>
    </div>

    <div class="form_grid">
      <div class="form_input_grp">
        <label>Tax Deducted at source on Salary</label>
        <input type="text" name="tds_tax" placeholder="Enter Your Employer" />
      </div>
      <div class="form_input_grp">
        <label>TAN of the Employer</label>
        <input type="text" name="tds_tan_emp" placeholder="Enter Your Category" />
      </div>
    </div>

    <input id="submit_salary" class="submit_btton" type="submit" value="Submit" />
  </form>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.querySelector('input[name="pin_code_salry"]').addEventListener('input', function() {
      const pincode = this.value;

      if (pincode.length === 6) { // Assuming pincodes are 6 digits long
        fetch(`/get-location-details/${pincode}`)
          .then(response => response.json())
          .then(data => {
            if (data.state && data.district) {
              // Update the state dropdown
              const stateSelect = document.querySelector('select[name="State_salary"]');
              for (let option of stateSelect.options) {
                if (option.value === data.state) {
                  option.selected = true;
                  break;
                }
              }

              // Update the district input
              document.querySelector('input[name="district_salary"]').value = data.district;
            } else {
              console.error('Pincode not found');
            }
          })
          .catch(error => {
            console.error('Error fetching location details:', error);
          });
      }
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#submit_salary').click(function(event) {
        event.preventDefault();
        var formData = $('#salary_form').serialize();
        $.ajax({
          url: "{{ route('store-client-salary') }}",
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