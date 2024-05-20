function fetchLocationDetails(pincodeInputSelector, stateSelectSelector, districtInputSelector) {
  document.querySelector(pincodeInputSelector).addEventListener('input', function() {
    const pincode = this.value;

    if (pincode.length === 6) { // Assuming pincodes are 6 digits long
      fetch(`/get-location-details/${pincode}`)
        .then(response => response.json())
        .then(data => {
          if (data.state && data.district) {
            // Update the state dropdown
            const stateSelect = document.querySelector(stateSelectSelector);
            for (let option of stateSelect.options) {
              if (option.value === data.state) {
                option.selected = true;
                break;
              }
            }

            // Update the district input
            document.querySelector(districtInputSelector).value = data.district;
          } else {
            console.error('Pincode not found');
          }
        })
        .catch(error => {
          console.error('Error fetching location details:', error);
        });
    }
  });
}