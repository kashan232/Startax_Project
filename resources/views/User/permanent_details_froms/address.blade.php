<div class="for-heading">
  <h5>Address</h5>
</div>
<form id="editClientaddressForm">
  @csrf
  <div class="form_grid">
    <div class="form_input_grp">
      <input type="hidden" name="update_id" value="{{ $clients_details->id }}">
      <label>Flat/Door/Block Number *</label>
      <input type="text" name="flat_door" placeholder="Enter Your Block Number" value="{{ $ClientAddreses->address_details['flat_door'] ?? '' }}" />
    </div>
    <div class="form_input_grp">
      <label>Premise Name (optional)</label>
      <input type="text" name="Premise_name" placeholder="Enter Your Name" value="{{ $ClientAddreses->address_details['Premise_name'] ?? '' }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Road / Street (optional)</label>
      <input type="text" name="road_street" placeholder="Enter Your Road" value="{{ $ClientAddreses->address_details['road_street'] ?? '' }}" />
    </div>
    <div class="form_input_grp">
      <label>Pincode</label>
      <input type="number" name="pin_code" placeholder="Enter Your Pincode" value="{{ $ClientAddreses->address_details['pin_code'] ?? '' }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Area / Locality *</label>
      <input type="text" name="Area_locality" placeholder="Enter Your Area / Locality" value="{{ $ClientAddreses->address_details['Area_locality'] ?? '' }}" />
    </div>
    <div class="form_input_grp">
      <label>District</label>
      <input type="text" name="district" placeholder="Enter Your District" value="{{ $ClientAddreses->address_details['district'] ?? '' }}" />
    </div>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>State</label>
      <select name="State" class="form-control">
        <option>Select option</option>
        @foreach(['AndhraPradesh', 'ArunachalPradesh', 'Assam', 'Bihar', 'Chandigarh', 'Chhattisgarh', 'DadraNagarHaveli', 'DamanDiu', 'Delhi', 'Goa', 'Gujarat', 'Haryana', 'HimachalPradesh', 'JammuKashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Lakshadweep', 'Ladakh', 'MadhyaPradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Orissa', 'Pondicherry', 'Punjab', 'Rajasthan', 'Sikkim', 'TamilNadu', 'Telangana', 'Tripura', 'Uttarakhand', 'UttarPradesh', 'WestBengal', 'StateOutsideIndia', 'NotInit'] as $state)
          <option value="{{ $state }}" {{ (isset($ClientAddreses->address_details['State']) && $ClientAddreses->address_details['State'] == $state) ? 'selected' : '' }}>
            {{ $state }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form_input_grp">
      <label>Country *</label>
      <select name="Country" class="form-control">
        <option>Select Option</option>
        @foreach(['INDIA', 'AFGHANISTAN', 'ÅLAND_ISLANDS', 'ALBANIA', 'ALGERIA', 'AMERICAN_SAMOA', 'ANDORRA', 'ANGOLA', 'ANGUILLA', 'ANTARCTICA', 'ANTIGUA_AND_BARBUDA', 'ARGENTINA', 'ARMENIA', 'ARUBA'] as $country)
          <option value="{{ $country }}" {{ (isset($ClientAddreses->address_details['Country']) && $ClientAddreses->address_details['Country'] == $country) ? 'selected' : '' }}>
            {{ $country }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form_input_grp">
      <label>Mobile Phone number</label>
      <input type="number" name="mobile_phone" placeholder="Enter Your Number" value="{{ $ClientAddreses->address_details['mobile_phone'] ?? '' }}" />
    </div>
    <div class="form_input_grp">
      <label>Email Address *</label>
      <input type="email" name="email_address" placeholder="Enter Your Email" value="{{ $ClientAddreses->address_details['email_address'] ?? '' }}" />
    </div>
  </div>
  <input id="Client_address_form" class="submit_btton" type="submit" value="Submit" />
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
