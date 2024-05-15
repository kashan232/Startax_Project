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
        @foreach ($bankData as $bank)
        <tr style="cursor:pointer;" class="odd">
          <td>{{ $bank['IFSC_Code'] }}</td>
          <td>{{ $bank['Bank_Account_No'] }}</td>
          <td>{{ $bank['Bank_Name'] }}</td>
          <td>{{ $bank['Account_Type'] }}</td>
          <td>
            <div class="button-wrapper">
              <!-- <a href="{{ route('delete-store-client-bank', ['id' => $bank['id']]) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> -->
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>