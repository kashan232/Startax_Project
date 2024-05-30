<div class="tabel_main" style="height: auto!important;">
  <div class="table-responsive text-nowrap">
    <table id="userTable">
      <thead>
        <tr>
          <th>IFSC Code</th>
          <th>Account No</th>
          <th>Bank Name</th>
          <th>Account Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @if(!empty($bankDetails) && is_array($bankDetails))
        <tr>
          <td>{{ $bankDetails['IFSC_Code'] ?? 'N/A' }}</td>
          <td>{{ $bankDetails['Bank_Account_No'] ?? 'N/A' }}</td>
          <td>{{ $bankDetails['Bank_Name'] ?? 'N/A' }}</td>
          <td>{{ $bankDetails['Account_Type'] ?? 'N/A' }}</td>
          <td>
            <div class="button-wrapper">
              <button type="button" class="btn btn-danger btn-sm delete-bank" data-id="{{ $bankDetails['client_id'] ?? 'N/A' }}">
                <i class="fa-solid fa-trash"></i> 
              </button>
            </div>
          </td>
        </tr>
        @else
        <tr>
          <td colspan="5">No bank details found.</td>
        </tr>
        @endif
      </tbody>
    </table>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.delete-bank').click(function(e) {
      e.preventDefault(); // Prevent default anchor behavior
      // Get the bank ID from the data-id attribute
      var bankId = $(this).data('id');
      // alert(bankId);
      // Send an AJAX request to delete the bank record
      $.ajax({
        url: '{{ route("delete-store-client-bank") }}',
        type: 'GET',
        data: {
          id: bankId
        },
        success: function(response) {
          // Reload the page or update the UI as needed
          location.reload();
        },
        error: function(xhr, status, error) {
          // Handle errors
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>