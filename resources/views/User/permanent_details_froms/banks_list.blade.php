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