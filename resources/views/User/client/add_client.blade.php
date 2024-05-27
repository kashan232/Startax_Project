@include('User.include.header_include')
<div class="app">
  <!-- header sections Start -->
  @include('User.include.navbar_include')
  <!-- header sections end -->

  <div class="wrapper">
    <!-- SIde Bar Start -->
    @include('User.include.sidebar_include')
    <!-- SIde Bar ENd  -->

    <div class="main-container">
      <div class="content-wrapper">
        <div class="content-section">
          <div class="heading_button">
            <div class="content-section-title">Add Client</div>
          </div>
          <div class="Form_customer">
            <form id="add_client_form">
              @csrf
              <div class="form_grid">
                <div class="form_input_grp">
                  <label>Client Type *</label>
                  <select name="client_type" class="form-control" required>
                    <option value="Individual"> Individual</option>
                    <option value="HUF"> HUF</option>
                    <option value="CompanyPublicInterested"> Company Public</option>
                    <option value="CompanyPublicNotInterested"> Company Private</option>
                    <option value="LLP"> LLP</option>
                    <option value="Firm"> Firm</option>
                    <option value="AOP"> AOP / BOI</option>
                    <option value="OtherCooperativeSociety"> Cooperative Society</option>
                  </select>
                </div>
                <div class="form_input_grp">
                  <label>Assessment Year *</label>
                  <select name="AY" class="form-control" required>
                    <option>Select Option</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2023-2024">2023-2024</option>
                  </select>
                </div>
              </div>
              <div class="form_grid">
                <div class="form_input_grp">
                  <label>First Name *</label>
                  <input type="text" name="first_name" placeholder="Enter Your Name" required />
                </div>
                <div class="form_input_grp">
                  <label>Middel Name</label>
                  <input type="text" name="middel_name" placeholder="Enter Your Name" />
                </div>
              </div>
              <div class="form_grid">
                <div class="form_input_grp">
                  <label>Last Name *</label>
                  <input type="text" name="last_name" placeholder="Enter Your Name" required />
                </div>
                <div class="form_input_grp">
                  <label>Father's Name *</label>
                  <input type="text" name="father_name" placeholder="Enter Your Name" required />
                </div>
              </div>
              <div class="form_grid">
                <div class="form_input_grp">
                  <label>Date Of Birth *</label>
                  <input type="date" name="DOB" placeholder="Enter Your Name" required />
                </div>
                <div class="form_input_grp">
                  <label>PAN number *</label>
                  <input type="number" name="PAN_numbr" placeholder="Enter Your Name" />
                </div>
              </div>
              <div class="form_grid">
                <div class="form_input_grp">
                  <label>Gender *</label>
                  <select name="gender" class="form-control" required>
                    <option>Select Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form_input_grp">
                  <label>Marital Status</label>
                  <select name="marital_status" class="form-control">
                    <option>Select Option</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                  </select>
                </div>
              </div>
              <input id="submit_client_form" class="submit_btton" type="submit" value="Submit" />
            </form>
          </div>
        </div>
      </div>
      <!-- COnetnt_wrpper Sec Start -->
    </div>
  </div>
  <div class="overlay-app"></div>
</div>
@include('User.include.footer_include')

<script>
  $(document).ready(function() {
    $('#submit_client_form').click(function(event) {
      event.preventDefault();
      var formData = $('#add_client_form').serialize();
      $.ajax({
        url: "{{ route('store-client') }}",
        type: 'get',
        data: formData,
        success: function(response) {
          console.log(response);
          alert('Client Added successfully!');
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
          alert('Error: ' + xhr.responseText);
        }
      });
    });
  });
</script>

</body>

</html>