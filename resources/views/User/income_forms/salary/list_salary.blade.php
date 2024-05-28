<div class="tabel_main" style="height: auto!important;">
  <div class="table-responsive text-nowrap">
    <table id="userTable">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Employer</th>
          <th>Income from Salary</th>
          <th>TDS deducted</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($salaryData as $index => $salary)
        <tr style="cursor:pointer;" class="odd" id="salary-row-{{ $salary['id'] }}">
          <td>{{ $index + 1 }}</td>
          <td>{{ $salary['em_name'] }}</td>
          <td>{{ $salary['Salary_1'] }}</td>
          <td>{{ $salary['tds_tax'] }}</td>
          <td>
            <div class="button-wrapper">
              <button type="button" class="btn btn-danger btn-sm delete-salary" data-id="{{ $salary['id'] }}"><i class="fa-solid fa-trash"></i></button>
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
  // $(document).ready(function() {
  //   $('.delete-salary').click(function(e) {
  //     e.preventDefault();
  //     var salaryId = $(this).data('id');
  //     $.ajax({
  //       url: '{{ route("delete-store-client-income-salary") }}',
  //       type: 'GET',
  //       data: {
  //         id: salaryId
  //       },
  //       success: function(response) {
  //         // location.reload();
  //       },
  //       error: function(xhr, status, error) {
  //         console.error(xhr.responseText);
  //       }
  //     });
  //   });
  // });

  $(document).ready(function() {
    $('.delete-salary').click(function(e) {
      e.preventDefault();
      var salaryId = $(this).data('id');
      $.ajax({
        url: '{{ route("delete-store-client-income-salary") }}',
        type: 'GET',
        data: {
          id: salaryId
        },
        success: function(response) {
          if (response.success) {
            $('#salary-row-' + salaryId).remove();
          } else {
            console.error('Failed to delete salary details');
          }
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>