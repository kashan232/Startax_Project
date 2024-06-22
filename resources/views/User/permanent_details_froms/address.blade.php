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
              <th>Residence no</th>
              <th>Residence name</th>
              <th>Pin code</th>
              <th>Mobile number</th>
              <th>email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ClientAddreses as $ClientAddress)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ClientAddress->residence_no }}</td>
              <td>{{ $ClientAddress->residence_name }}</td>
              <td>{{ $ClientAddress->pin_code }}</td>
              <td>{{ $ClientAddress->mobile_number }}</td>
              <td>{{ $ClientAddress->email }}</td>
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

<form id="editClientaddressForm">
  @csrf
  <div class="card card-body">
    <h5 class="pt-3">
      <strong> Address</strong>
    </h5>

    <div class="row">
      <div class="col-md-6">
        <!-- Residence No -->
        <div class="form-group">
          <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
          <label class="m-0">Residence No</label>
          <input type="number" name="residence_no" class="form-control rounded-0" placeholder="Enter Your Number" />
        </div>
        <!-- Residence Name -->
        <div class="form-group">
          <label class="m-0">Residence Name</label>
          <input type="text" name="residence_name" class="form-control rounded-0" placeholder="Enter Your Residence Name" />
        </div>
        <!-- Road Or Street -->
        <div class="form-group">
          <label class="m-0">Road Or Street</label>
          <input type="text" name="road_street" class="form-control rounded-0" placeholder="Enter Your Road Or Street" />
        </div>
        <!-- Pincode -->
        <div class="form-group">
          <label class="m-0">Pincode</label>
          <input type="number" name="pin_code" class="form-control rounded-0" placeholder="Enter Your Pincode" />
        </div>
        <!-- Locality Or Area -->
        <div class="form-group">
          <label class="m-0">Locality Or Area</label>
          <input type="text" name="locality_or_area" class="form-control rounded-0" placeholder="Enter Your Area / Locality" />
        </div>
        <!-- City / Town / District -->
        <div class="form-group">
          <label class="m-0">City / Town / District</label>
          <input type="text" name="district" class="form-control rounded-0" placeholder="Enter Your Town" />
        </div>
      </div>

      <div class="col-md-6">
        <!-- State Code -->
        <div class="form-group">
          <label class="m-0">State Code</label>
          <select class="form-control rounded-0" name="State" id="State">
            <option>Select Option</option>
            <option value="ANDHRAPRADESH">
              ANDHRA PRADESH
            </option>
            <option value="ARUNACHALPRADESH">
              ARUNACHAL PRADESH
            </option>
            <option value="ASSAM">ASSAM</option>
            <option value="BIHAR">BIHAR</option>
            <option value="CHANDIGARH">
              CHANDIGARH
            </option>
            <option value="CHHATISHGARH">
              CHHATISHGARH
            </option>
            <option value="DADRANAGARHAVELI">
              DADRA &amp; NAGAR HAVELI
            </option>
            <option value="DAMANDIU">
              DAMAN &amp; DIU
            </option>
            <option selected="selected" value="DELHI">
              DELHI
            </option>
            <option value="GOA">GOA</option>
            <option value="GUJARAT">
              GUJARAT
            </option>
            <option value="HARYANA">
              HARYANA
            </option>
            <option value="HIMACHALPRADESH">
              HIMACHAL PRADESH
            </option>
            <option value="JAMMUKASHMIR">
              JAMMU &amp; KASHMIR
            </option>
            <option value="JHARKHAND">
              JHARKHAND
            </option>
            <option value="KARNATAKA">
              KARNATAKA
            </option>
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
            <option value="MANIPUR">
              MANIPUR
            </option>
            <option value="MEGHALAYA">
              MEGHALAYA
            </option>
            <option value="MIZORAM">
              MIZORAM
            </option>
            <option value="NAGALAND">
              NAGALAND
            </option>
            <option value="ORISSA">ORISSA</option>
            <option value="PONDICHERRY">
              PONDICHERRY
            </option>
            <option value="PUNJAB">PUNJAB</option>
            <option value="RAJASTHAN">
              RAJASTHAN
            </option>
            <option value="SIKKIM">SIKKIM</option>
            <option value="TAMILNADU">
              TAMIL NADU
            </option>
            <option value="TELANGANA">
              TELANGANA
            </option>
            <option value="TRIPURA">
              TRIPURA
            </option>
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
        <!-- Country Code -->
        <div class="form-group">
          <label class="m-0">Country Code *</label>
          <select class="form-control rounded-0" name="country_code">
            <option>Select Option</option>
            <option selected="selected" value="INDIA">
              INDIA
            </option>
            <option value="AFGHANISTAN">
              AFGHANISTAN
            </option>
            <option value="ALAND_ISLANDS">
              ÅLAND ISLANDS
            </option>
            <option value="ALBANIA">
              ALBANIA
            </option>
            <option value="ALGERIA">
              ALGERIA
            </option>
            <option value="AMERICAN_SAMOA">
              AMERICAN SAMOA
            </option>
            <option value="ANDORRA">
              ANDORRA
            </option>
            <option value="ANGOLA">ANGOLA</option>
            <option value="ANGUILLA">
              ANGUILLA
            </option>
            <option value="ANTARCTICA">
              ANTARCTICA
            </option>
            <option value="ANTIGUA_AND_BARBUDA">
              ANTIGUA AND BARBUDA
            </option>
            <option value="ARGENTINA">
              ARGENTINA
            </option>
            <option value="ARMENIA">
              ARMENIA
            </option>
            <option value="ARUBA">ARUBA</option>
          </select>
        </div>
        <!-- Country Code Mobile -->
        <div class="form-group">
          <label class="m-0">Country Code Mobile</label>
          <input type="number" name="country_code_mobile" class="form-control rounded-0" placeholder="Enter Your Code Mobile" />
        </div>
        <!-- Mobile Phone number -->
        <div class="form-group">
          <label class="m-0">Mobile Phone number</label>
          <input type="number" name="mobile_number" class="form-control rounded-0" placeholder="Enter Your Number" />
        </div>
        <!-- Zip Code -->
        <div class="form-group">
          <label class="m-0">Zip Code</label>
          <input type="number" name="zip_code" class="form-control rounded-0" placeholder="Enter Your Zip Code" />
        </div>
        <!-- Email Address -->
        <div class="form-group">
          <label class="m-0">Email Address *</label>
          <input type="email" name="email" class="form-control rounded-0" placeholder="Enter Your Email" />
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <input type="submit" id="Client_address_form" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
    </div>
  </div>
</form>


<script>
  document.querySelector('input[name="pin_code"]').addEventListener('input', function() {
    const pincode = this.value;

    if (pincode.length === 6) {
      fetch(`/get-location-details/${pincode}`)
        .then(response => response.json())
        .then(data => {
          if (data.state && data.district) {
            const stateSelect = document.querySelector('select[name="State"]');
            for (let option of stateSelect.options) {
              if (option.value === data.state) {
                option.selected = true;
                break;
              }
            }

            document.querySelector('input[name="district"]').value = data.district;
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