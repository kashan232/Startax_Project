<div class="tabel_main" style="height: auto!important;">
  <div class="table-responsive text-nowrap">
    <table id="userTable">
      <thead>
        <tr>
          <th>Occupancy House</th>
          <th>OwnerOfProperty</th>
          <th>Name</th>
          <th>Pan</th>
          <th>percentage</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($HousePropertyData as $HouseProperty)
        <tr style="cursor:pointer;" class="odd">
          <td>{{ $HouseProperty['occupancyOfHouse'] ?? 'N/A' }}</td>
          <td>{{ $HouseProperty['ownerOfProperty'] ?? 'N/A' }}</td>
          <td>{{ $HouseProperty['name'] ?? 'N/A' }}</td>
          <td>{{ $HouseProperty['pan'] ?? 'N/A' }}</td>
          <td>{{ $HouseProperty['percentage'] ?? 'N/A' }}</td>
          <td>
            <div class="button-wrapper">
              <button type="button" class="btn btn-danger btn-sm delete-house" data-id="{{ $HouseProperty['id'] }}">
                <i class="fa-solid fa-trash"></i>
              </button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.delete-house').click(function(e) {
      e.preventDefault();
      var bankId = $(this).data('id');
      $.ajax({
        url: '{{ route("delete-store-house-property") }}',
        type: 'GET',
        data: {
          id: bankId
        },
        success: function(response) {
          location.reload();
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>