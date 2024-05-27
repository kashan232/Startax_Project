<div class="form_heading">
  <h5>VDA Income</h5>
</div>
<form>
  <div class="addMore-Rap" style="display: block!important;">
    <div id="formContainer" class="form_grid main5-col">
          <div class="form_input_grp">
            <label>Asset Name</label>
            <input class="form-control" name="asset_name[]" type="text" placeholder="Enter Asset Name" />
          </div>
          <div class="form_input_grp">
            <label>Buy date</label>
            <input class="form-control" name="buy_date[]" type="date" placeholder="Enter Buy Date" />
          </div>
          <div class="form_input_grp">
            <label>Sell date</label>
            <input class="form-control" name="sell_date[]" type="date" placeholder="Enter Sell Date" />
          </div>
          <div class="form_input_grp">
            <label>Buy value</label>
            <input class="form-control" name="buy_value[]" type="number" placeholder="Enter Buy Value" />
          </div>
          <div class="form_input_grp">
            <label>Sell value</label>
            <input class="form-control" name="sell_value[]" type="number" placeholder="Enter Sell Value" />
          </div>
          <div class="form_input_grp">
            <label>Income head</label>
            <select name="income_head[]" class="form-control">
              <option value="" disabled selected>Select Option</option>
              <option value="O">O - Owned</option>
              <option value="H">Held on lease</option>
            </select>
          </div>
          <div class="form_input_grp">
            <label>Gains</label>
            <select name="gains[]" class="form-control">
              <option value="" disabled selected>Select Option</option>
              <option value="IRG">Irrigated</option>
              <option value="H">Rain-fed</option>
            </select>
          </div>
          <div class="form_input_grp">
            <div class="cancel" onclick="removeRow(this)">
              <i class="fa-solid fa-xmark"></i>
            </div>
          </div>
        </div>
    <button type="button" class="btn btn-primary submit_btton" onclick="addMore()">Add more</button>

  </div>
  <div style="display: flex;">
    <input class="submit_btton" type="submit" value="Save" />
  </div>
</form>

<script>
function addMore() {
      event.preventDefault();
      const formContainer = document.getElementById("formContainer");
      const newFormGroup = formContainer.cloneNode(true);
      newFormGroup.querySelectorAll('input, select').forEach(input => input.value = '');
      document.querySelector('.addMore-Rap').insertBefore(newFormGroup, document.querySelector('.submit_btton'));
    }

    function removeRow(element) {
      element.closest('.form_grid').remove();
    }
</script>