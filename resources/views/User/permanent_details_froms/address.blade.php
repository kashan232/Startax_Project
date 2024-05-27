<div class="for-heading">
  <h5>Address</h5>
</div>
<form id="editClientaddressForm">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
      <label>Flat/Door/Block Number * </label>
      <input type="text" name="flat_door" placeholder="Enter Your Block Number" value="{{ $ClientAddreses->flat_door }}" />
    </div>
    <div class="form_input_grp">
      <label>Premise Name This field is optional.</label>
      <input type="text" name="Premise_name" placeholder="Enter Your Name" value="{{ $ClientAddreses->Premise_name }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Road / Street This field is
        optional.</label>
      <input type="text" name="road_street" placeholder="Enter Your Road" value="{{ $ClientAddreses->road_street }}" />
    </div>
    <div class="form_input_grp">
      <label>Pincode</label>
      <input type="number" name="pin_code" placeholder="Enter Your Pincode" value="{{ $ClientAddreses->pin_code }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Area / Locality * </label>
      <input type="text" name="Area_locality" placeholder="Enter Your Area / Locality *
                                    " value="{{ $ClientAddreses->Area_locality }}" />
    </div>
    <div class="form_input_grp">
        <label>District</label>
        <input type="text" name="district" placeholder="Enter Your Town" value="{{ $ClientAddreses->district }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>State </label>
      <select name="State" class="form-control" id="">
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
    <div class="form_input_grp">
      <label>Country *</label>
      <select name="Country" class="form-control" id="">
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
        <option value="ALBANIA">ALBANIA</option>
        <option value="ALGERIA">ALGERIA</option>
        <option value="AMERICAN_SAMOA">
          AMERICAN SAMOA
        </option>
        <option value="ANDORRA">ANDORRA</option>
        <option value="ANGOLA">ANGOLA</option>
        <option value="ANGUILLA">ANGUILLA</option>
        <option value="ANTARCTICA">
          ANTARCTICA
        </option>
        <option value="ANTIGUA_AND_BARBUDA">
          ANTIGUA AND BARBUDA
        </option>
        <option value="ARGENTINA">ARGENTINA</option>
        <option value="ARMENIA">ARMENIA</option>
        <option value="ARUBA">ARUBA</option>
      </select>
    </div>
    <div class="form_input_grp">
      <label>Mobile Phone number </label>
      <input type="number" name="mobile_phone" placeholder="Enter Your Number" value="{{ $ClientAddreses->mobile_phone }}" />
    </div>
    <div class="form_input_grp">
      <label>Email Address * </label>
      <input type="email" name="email_address" placeholder="Enter Your Email" value="{{ $ClientAddreses->email_address }}" />
    </div>
    <div class="form_input_grp">
      <label>Email Address (secondary) </label>
      <input type="email" name="email_address_secondary" placeholder="Enter Your Email Address" value="{{ $ClientAddreses->email_address_secondary }}" />
    </div>
  </div>
  <input id="Client_address_form" class="submit_btton" type="submit" value="Submit" />
</form>

<script>
    document.querySelector('input[name="pin_code"]').addEventListener('input', function () {
        const pincode = this.value;

        if (pincode.length === 6) { // Assuming pincodes are 6 digits long
            fetch(`/get-location-details/${pincode}`)
                .then(response => response.json())
                .then(data => {
                    if (data.state && data.district) {
                        // Update the state dropdown
                        const stateSelect = document.querySelector('select[name="State"]');
                        for (let option of stateSelect.options) {
                            if (option.value === data.state) {
                                option.selected = true;
                                break;
                            }
                        }

                        // Update the district input
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
