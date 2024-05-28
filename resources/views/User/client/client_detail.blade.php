@include('User.include.header_include')
<style>
  /* Modal container */
  .modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
  }

  /* Modal content */
  .modal-content {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #ccc;
    width: 60%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  /* Close button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
  }

  /* Form and button styling */
  form {
    display: flex;
    flex-direction: column;
  }

  form label {
    margin-bottom: 10px;
    font-weight: 500;
  }

  form .btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
  }

  form .btn:hover {
    background-color: #45a049;
  }
</style>
<div class="app">
  <!-- header sections Start -->
  @include('User.include.navbar_include')

  <!-- header sections end -->

  <div class="wrapper">
    <!-- SIde Bar Start -->
    @include('User.include.sidebar_include')

    <!-- SIde Bar ENd  -->
    <!-- The Modal -->
    <div id="incomeTypeModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Select Income Types</h2>
        <form id="incomeTypeForm">
        <input type="hidden" name="client_id" value="{{ $clients_details->id }}">
        @foreach (['salary', 'business', 'house_property', 'capital_gain', 'other_income', 'VDAincome', 'exempt_income'] as $incomeType)
          <label>
            <input type="checkbox" name="income_type[]" value="{{ $incomeType }}" 
            @if (in_array($incomeType, $selectedIncomeTypes)) checked @endif> 
            {{ ucfirst(str_replace('_', ' ', $incomeType)) }}
          </label><br>
        @endforeach
          <button type="submit" class="btn">Save</button>
        </form>
      </div>
    </div>

    <div class="main-container">
      <!-- COnetnt_wrpper Sec Start -->
      <!-- COnetnt_wrpper header Start -->
      <!-- <div class="main-header">
            <a class="menu-link-main" href="#">All Menu</a>
            <div class="header-menu">
              <a class="main-header-link is-active" href="#">Links Here</a>
              <a class="main-header-link" href="#">Links Here</a>
              <a class="main-header-link" href="#">Links Here</a>
            </div>
          </div> -->
      <!-- COnetnt_wrpper header Start -->
      <div class="content-wrapper">
        <div class="content-section">
          <div class="heading_button">
            <div class="content-section-title">{{ $clients_details->first_name}} {{ $clients_details->middel_name}} {{ $clients_details->last_name}}</div>
            <!-- <a href="#" class="dlect_btn">Year 2024</a> -->

            <div class="serch_bar">
              <input type="text" placeholder="Search Here" />
            </div>
            <div class="button_data">
              <button id="changeIncomeTypeBtn">Change Income Type</button>
            </div>

            <div class="yearSelect">
              <select name="" id="" class="form-control">
                <option>Select Year</option>
                <option>2011-12</option>
                <option>2012-12</option>
                <option>2013-12</option>
                <option>2014-12</option>
                <option>2015-12</option>
                <option>2016-12</option>
                <option>2017-12</option>
                <option>2018-12</option>
                <option>2019-12</option>
                <option>2020-12</option>
              </select>
            </div>
          </div>

          <div class="process-sec-cntnt">
            <!-- Tops Menu Tabs Start -->
            <div class="process-tab-btns">
              <ul>
                <li class="">
                  <span><i class="far fa-address-book"></i></span>
                  <span>Permanent Details</span>
                </li>
                <li>
                  <span><i class="fas fa-calculator"></i></span>
                  <span>Income</span>
                </li>
                <li>
                  <span><i class="far fa-minus-square"></i></span>
                  <span>Deduction</span>
                </li>
                <li>
                  <span><i class="fas fa-file-invoice"></i></span>
                  <span>TDS/Taxes</span>
                </li>
                <li>
                  <span><i class="fas fa-calculator"></i></span>
                  <span>Final</span>
                </li>
              </ul>
            </div>

            <!-- Tops Menu Tabs Start -->
            <div class="process-tabs-cntnt">
              <div class="p-tab-cntnt inner_tabs_collec">
                <div class="p-tab-c1">
                  <span>01 Permanent Details</span>
                  <div class="inerr_taabs-tab-btns">
                    <ul>
                      <li class="active">
                        <span><i class="far fa-address-card"></i></span>
                        <span>Basic Details</span>
                      </li>
                      <li>
                        <span><i class="far fa-address-card"></i></span>
                        <span>Address</span>
                      </li>
                      <li>
                        <span><i class="fas fa-list-ol"></i></span>
                        <span>Bank</span>
                      </li>
                    </ul>
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- Basic Form -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer">
                        @include('User.permanent_details_froms.basic_details')
                      </div>
                    </div>
                    <!-- Basic Form -->
                    <!-- address Form -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        @include('User.permanent_details_froms.address')
                      </div>
                    </div>
                    <!-- address Form -->
                    <!-- Bank Form -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer" style="margin:30px 0px !important">
                        @include('User.permanent_details_froms.banks_list')
                      </div>
                      <div class="Form_customer">
                        @include('User.permanent_details_froms.banks')
                      </div>
                    </div>
                    <!-- Bank Form -->
                  </div>
                </div>
              </div>


              <div class="p-tab-cntnt inner_tabs_collec">
                <div class="p-tab-c1">
                  <span>02 Income</span>

                  <?php
                  $allIncomeTypes = [
                    'salary' => 'Salary',
                    'business' => 'Business',
                    'house_property' => 'House Property',
                    'capital_gain' => 'Capital Gain',
                    'other_income' => 'Other Income',
                    'VDAincome' => 'VDA Income',
                    'exempt_income' => 'Exempt Income'
                  ];

                  $iconClasses = [
                    'salary' => 'fas fa-list-ol',
                    'business' => 'fas fa-handshake',
                    'house_property' => 'fas fa-home',
                    'capital_gain' => 'fab fa-creative-commons-share',
                    'other_income' => 'far fa-window-restore',
                    'VDAincome' => 'far fa-window-restore',
                    'exempt_income' => 'far fa-window-restore'
                  ];

                  $selectedIncomeTypes = empty($selectedIncomeTypes) ? array_keys($allIncomeTypes) : $selectedIncomeTypes;
                  ?>

                  <div class="inerr_taabs-tab-btns">
                    <ul>
                      <?php foreach ($selectedIncomeTypes as $index => $incomeType) : ?>
                        <?php if (array_key_exists($incomeType, $allIncomeTypes)) : ?>
                          <li class="<?= $index == 0 ? 'active' : '' ?>">
                            <span><i class="<?= $iconClasses[$incomeType] ?>"></i></span>
                            <span><?= $allIncomeTypes[$incomeType] ?></span>
                          </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>

                    <!-- <ul>
                      <li class="active">
                        <span><i class="fas fa-list-ol"></i></span>
                        <span>Salary</span>
                      </li>
                      <li>
                        <span><i class="fas fa-handshake"></i></span>
                        <span>Business</span>
                      </li>
                      <li>
                        <span><i class="fas fa-home"></i></span>
                        <span>House Property</span>
                      </li>
                      <li>
                        <span><i class="fab fa-creative-commons-share"></i></span>
                        <span>Capital Gain</span>
                      </li>
                      <li>
                        <span><i class="far fa-window-restore"></i></span>
                        <span>Other Income</span>
                      </li>
                      <li>
                        <span><i class="far fa-window-restore"></i></span>
                        <span>VDA Income</span>
                      </li>
                      <li>
                        <span><i class="far fa-window-restore"></i></span>
                        <span>Exempt Income</span>
                      </li>
                    </ul> -->
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- Salary Form -->
                    <!-- Salary Form -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer" style="margin:30px 0px !important">
                        @include('User.income_forms.salary.list_salary')
                      </div>

                      <div class="Form_customer">
                        @include('User.income_forms.salary.salary')
                      </div>
                    </div>
                    <!-- Salary Form -->
                    <!-- Salary Form -->
                    <!-- Business Form -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="module_data">
                          <div class="handel__data button_show">
                            <div class="form_heading">
                              <h5>Income from Business and Profession</h5>
                            </div>

                            <div class="pera_data">
                              <p>
                                Do you have income from a business or a
                                professional practice? Freelancers,
                                Proprietorship or Partner's Income is also
                                considered under this section. Note:
                                Intra-day trading and F&O trading is also
                                considered as business income.
                              </p>
                            </div>

                            <div class="button_data">
                              <button class="click_mod">
                                Add Income from Business
                              </button>
                            </div>
                          </div>
                          <form action="#" class="data_show">
                            <div class="form_heading">
                              <h5>Nature of Business Details</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Nature of Business</label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="CGovt">
                                    Central Government
                                  </option>
                                  <option value="SGovt">
                                    State Government
                                  </option>
                                  <option value="PSU">
                                    Public Sector Unit
                                  </option>
                                  <option value="PE">
                                    Pensioners - Central Government
                                  </option>
                                  <option value="PESG">
                                    Pensioners - State Government
                                  </option>
                                  <option value="PEPS">
                                    Pensioners - Public sector undertaking
                                  </option>
                                  <option value="PEO">
                                    Pensioners - Others
                                  </option>
                                </select>
                              </div>

                              <div class="form_input_grp">
                                <label>Trade Name</label>
                                <input type="text" placeholder="Enter Your Trade Name" />
                              </div>
                              <div class="form_input_grp">
                                <label>Description</label>
                                <input type="text" placeholder="Enter Your Description" />
                              </div>
                            </div>
                            <div class="form_heading">
                              <h5>Total Revenue/Turnover</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Revenue via Cash</label>
                                <input type="text" placeholder="Enter Your Revenue via Cash" />
                              </div>
                              <div class="form_input_grp">
                                <label>Revenue via any other mode</label>
                                <input type="text" placeholder="Enter Your Revenue via any other mode" />
                              </div>
                              <div class="form_input_grp">
                                <label>Revenue via banking modes</label>
                                <input type="text" placeholder="Enter Your Revenue via banking modes" />
                              </div>
                            </div>
                            <div class="form_heading">
                              <h5>
                                Total Income/Profit as per your calculation
                              </h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Profit via Cash</label>
                                <input type="text" placeholder="Enter Your Profit via Cash" />
                              </div>
                              <div class="form_input_grp">
                                <label>Profit via any other mode</label>
                                <input type="text" placeholder="Enter Your Profit via any other mode" />
                              </div>
                              <div class="form_input_grp">
                                <label>Profit via banking modes</label>
                                <input type="text" placeholder="Enter Your Profit via banking modes" />
                              </div>
                            </div>

                            <input class="submit_btton" type="submit" value="Submit" />
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- Business Form -->
                    <!-- House Property -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      @if(count($HousePropertyData) > 0)
                      <div class="Form_customer" style="margin:30px 0px !important">
                        @include('User.income_forms.house_property.list_house_property')
                      </div>
                      @endif

                      <div class="Form_customer">
                        <div class="module_data">
                          <div class="handel__data button_show">
                            <div class="form_heading">
                              <h5>Income From House Property</h5>
                            </div>
                            <div class="pera_data">
                              <p>
                                In case you paid Interest on Housing Loan
                                for house property you live in
                                (self-occupied property) or If you own a
                                house and are earning rent on it then
                                specify the details here.
                              </p>
                              <p>
                                Please Note: If you are paying rent to
                                someone else, you should not enter the
                                amount in this section. Instead refer to the
                                HRA exemption in the Salary Page in INCOME
                                SOURCES if you are a salaried employee or
                                refer to the section 80GG in the deductions
                                if you are non-salaried or self-employed
                                (Deductions > More Deductions > Add Special
                                Deductions > 80GG).
                              </p>
                            </div>

                            <div class="button_data">
                              <button class="click_mod">
                                Click Here To Add House Property Details
                              </button>
                            </div>
                          </div>
                        </div>
                        @include('User.income_forms.house_property.house_property')
                      </div>
                    </div>
                    <!-- House Property -->
                    <!-- Capital Gain Property -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="module_data">
                          <div class="handel__data button_show">
                            <div class="form_heading">
                              <h5>Income From Capital Gains</h5>
                            </div>

                            <div class="pera_data">
                              <p>
                                Did your client sell any asset (Mutual
                                Funds, shares, property, house, land,
                                building, etc) between the period of April
                                1, 2023 to March 31, 2024?
                              </p>
                              <p>
                                Note: Along with capital gains, we also
                                auto-process Intra-day trading and F&O
                                trading transactions from your capital gains
                                statements. Post processing, you can go to
                                Business & Profession page to check this
                                data and edit.
                              </p>
                            </div>

                            <div class="button_data">
                              <button class="click_mod">
                                Add Income from Business
                              </button>
                            </div>
                          </div>

                          <div class="handel__data data_show button_show">
                            <div class="form_heading">
                              <h5>Upload Capital Gains Report</h5>
                            </div>

                            <div class="pera_data">
                              <p>
                                Upload Capital Gains statement: Go to upload
                                option, select broker and upload the P&L
                                file.
                              </p>
                              <p>
                                Excel tool: If fund house is not supported,
                                download ClearTax template, simply copy
                                details of transactions in the file and
                                upload.
                              </p>
                            </div>

                            <div class="button_data">
                              <input type="file" value="Upload File" />
                            </div>

                            <div class="more_module">
                              <div class="form_heading">
                                <h5>Add Sale Entry</h5>
                                <span>
                                  Enter data manually to report capital
                                  gains for the given asset types.
                                </span>
                              </div>

                              <div class="grid_butmore">
                                <button class="click_mod">
                                  Shares/Debentures
                                </button>
                                <button class="click_mod">
                                  Mutual Funds
                                </button>
                                <button class="click_mod">
                                  Stock Options/RSUs
                                </button>
                                <button class="click_mod">
                                  Land or Building (Property)
                                </button>
                                <button class="click_mod">
                                  Any Other Assets
                                </button>
                                <button class="click_mod">
                                  Deemed Capital Gains
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="module_data">
                          <form action="#" class="data_show">
                            <div class="form_heading">
                              <h5>Add Share for Capital Gain</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Type of Share </label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="ListedSecurities">
                                    Listed Securities
                                  </option>
                                  <option value="NonListedSecurities">
                                    Non Listed Securities
                                  </option>
                                  <option value="ListedDebentures">
                                    Listed Debentures
                                  </option>
                                  <option value="NonListedDebentures">
                                    Non Listed Debentures
                                  </option>
                                </select>
                              </div>
                              <div class="form_input_grp">
                                <label>Date of Sale * </label>
                                <input type="date" placeholder="Enter Your Date of Sale " />
                              </div>
                              <div class="form_input_grp">
                                <label>Date of Purchase * </label>
                                <input type="date" placeholder="Enter Your Date of Purchase                                       " />
                              </div>
                            </div>
                            <input class="submit_btton" type="submit" value="Submit" />
                          </form>
                        </div>
                        <div class="module_data">
                          <form action="#" class="data_show">
                            <div class="form_heading">
                              <h5>Mutual Fund</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Type of Share </label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="ListedSecurities">
                                    Listed Securities
                                  </option>
                                  <option value="NonListedSecurities">
                                    Non Listed Securities
                                  </option>
                                  <option value="ListedDebentures">
                                    Listed Debentures
                                  </option>
                                  <option value="NonListedDebentures">
                                    Non Listed Debentures
                                  </option>
                                </select>
                              </div>
                              <div class="form_input_grp">
                                <label>Date of Sale * </label>
                                <input type="date" placeholder="Enter Your Date of Sale " />
                              </div>
                              <div class="form_input_grp">
                                <label>Date of Purchase * </label>
                                <input type="date" placeholder="Enter Your Date of Purchase                                       " />
                              </div>
                            </div>
                            <input class="submit_btton" type="submit" value="Submit" />
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- Capital Gain Property -->
                    <!-- Other Income -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>Income from other sources</h5>
                        </div>
                        <form action="#">
                          <div class="form_heading-sub">
                            <span>Interest Income</span>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Interest Income from Deposits </label>
                              <input type="text" placeholder="Enter Your Interest Income" />
                              <span>Interest from sweep accounts converted to
                                FDs, post-office fixed deposits also
                                specified here</span>
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Interest on PF</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="NotInitialized">
                                  Select Type
                                </option>
                                <option value="FirstProvisoSec1011">
                                  Interest on EPF Balance- 1st Proviso to
                                  sec 10(11)
                                </option>
                                <option value="SecondProvisoSec1011">
                                  Interest on EPF Balance- 2nd Proviso to
                                  sec 10(11)
                                </option>
                                <option value="FirstProvisoSec1012">
                                  Interest on RPF Balance- 1st Proviso to
                                  sec 10(12)
                                </option>
                                <option value="SecondProvisoSec1012">
                                  Interest on RPF Balance- 2nd Proviso to
                                  sec 10(12)
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Amount</label>
                              <input type="text" placeholder="Enter Your Amount" />
                            </div>
                          </div>

                          <div class="form_heading-sub">
                            <span>Other Income</span>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Other Income</label>
                              <input type="text" placeholder="Enter Your Other Income" />
                            </div>
                            <div class="form_input_grp">
                              <label>Amount</label>
                              <input type="text" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form_input_grp">
                              <label>Date</label>
                              <input type="date" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>

                          <div class="form_heading-sub">
                            <span>Dividend Income from Mutual Funds Dividend
                              <br />
                              from investments in Mutual Funds, ULIPs,
                              UTI</span>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Other Income</label>
                              <input type="text" placeholder="Enter Your Other Income" />
                            </div>
                            <div class="form_input_grp">
                              <label>Amount</label>
                              <input type="text" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form_input_grp">
                              <label>Date</label>
                              <input type="date" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Any Other Income</label>
                              <input type="text" placeholder="Enter Your Other Income" />
                              <span>
                                Report any other income which is not part of
                                Income from Salary, House Property, Capital
                                Gain or Business and Profession.
                              </span>
                            </div>
                          </div>

                          <div class="handel__data">
                            <div class="form_heading">
                              <h5>VDA Income</h5>
                            </div>
                            <div class="pera_data">
                              <p>
                                If you have any income from transfer of
                                Virtual Digital Assets, then report the same
                                here.
                              </p>
                            </div>

                            <div class="button_data">
                              <button>Add Income From Crypto / VDA</button>
                            </div>
                          </div>
                          <div class="handel__data">
                            <div class="form_heading">
                              <h5>
                                Pass Through Income From Business Fund/Trust
                              </h5>
                            </div>
                            <div class="pera_data">
                              <p>
                                If you have any income from a Investment
                                Fund or Business Trust, then report the same
                                here.
                              </p>
                              <p>You have specified a total of 0 entries</p>
                            </div>

                            <div class="button_data">
                              <button>
                                Income From Business Trust/Fund
                              </button>
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>Exempt Income</h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Interest Income from PPF</label>
                              <input type="text" placeholder="Enter Your Other Income" />
                              <span> Example: Interest earned on PPF </span>
                            </div>
                            <div class="form_input_grp">
                              <label>Any Other Exempt Income </label>
                              <input type="text" placeholder="Enter Your Amount" />
                              <span> Specify any other exempt income </span>
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>Agriculture Income</h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Gross Agriculture Receipt</label>
                              <input type="text" placeholder="Enter Your Other Income" />
                              <span>
                                Specify gross agricultural income
                              </span>
                            </div>
                            <div class="form_input_grp">
                              <label>Expenditure On Agriculture</label>
                              <input type="text" placeholder="Enter Your Amount" />
                              <span>
                                Specify expenditure on agriculture
                                sources</span>
                            </div>
                            <div class="form_input_grp">
                              <label>Unabsorbed Agriculture Loss</label>
                              <input type="text" placeholder="Enter Your Amount" />
                              <span>
                                Specify unabsorbed agriculture loss</span>
                            </div>
                            <div class="form_input_grp">
                              <label>Net Agriculture Receipt
                                Auto-calculated</label>
                              <input type="text" placeholder="Enter Your Amount" />
                            </div>
                          </div>
                          <div class="form_heading">
                            <h5>Agriculture Land Details</h5>
                            <span>
                              These fields are optional. Enter these values
                              if Net Agriculture Receipt exceeds Rs. 5
                              Lakhs:
                            </span>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Name Of District</label>
                              <input type="text" placeholder="Enter Your Name" />
                            </div>
                            <div class="form_input_grp">
                              <label>Pincode</label>
                              <input type="text" placeholder="Enter Your Pincode" />
                            </div>
                            <div class="form_input_grp">
                              <label>Measurement (Acres)</label>
                              <input type="text" placeholder="Enter Your Acres" />
                            </div>

                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Ownership Status</label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="Owned">Owned</option>
                                  <option value="Leased">
                                    Held on Lease
                                  </option>
                                </select>
                              </div>
                              <div class="form_input_grp">
                                <label>Source of water</label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="Irrigated">
                                    Irrigated
                                  </option>
                                  <option value="RainFed">Rain-Fed</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>Income from Gifts</h5>
                            <span>
                              Enter details of income to be reported u/s
                              56(2)(x) Following gifts are non-taxable and
                              need not be reported in the tax return.
                            </span>
                            <ul>
                              <li>
                                1. Gift recieved from Relative, on occasion
                                of marriage, will, inheritance, Trust are
                                not taxable
                              </li>
                              <li>
                                2. Gift recieved other than listed assets
                                below are not taxable
                              </li>
                              <li>
                                3. Gift received upto Rs 50,000 is non
                                taxable
                              </li>
                            </ul>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Nature of Gift Assest</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="LandOrBuilding">
                                  Land and Building
                                </option>
                                <option value="SharesOrSecurities">
                                  Shares / Securities
                                </option>
                                <option value="JewelsOrBullion">
                                  Jewellery / Bullion
                                </option>
                                <option value="Archaeological">
                                  Archaeological collections
                                </option>
                                <option value="DrawingOrWorkOfArt">
                                  Drawings / Paintings / Sculptures or any
                                  work of art
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Nature of Consideration</label>
                              <select name="" class="form-control" id="">
                                <option selected="selected" value="WithoutConsideration">
                                  Without Consideration
                                </option>
                                <option value="InadequateConsideration">
                                  Inadequate Consideration
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Description</label>
                              <input type="text" placeholder="Enter Your Description" />
                            </div>
                            <div class="form_input_grp">
                              <label>Taxable Amount</label>
                              <input type="text" placeholder="Enter Your Ammount" />
                            </div>
                          </div>

                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- Other Income -->

                    <!-- VDA Income -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        @include('User.income_forms.vda_income.vda_income')
                      </div>
                    </div>
                    <!-- VDA Income -->

                    <!-- Exempt Income -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        @include('User.income_forms.exempt_income.exempt_income')
                      </div>
                    </div>
                    <!-- Exempt Income -->

                  </div>
                </div>
              </div>

              <div class="p-tab-cntnt inner_tabs_collec">
                <div class="p-tab-c1">
                  <span>03 Deduction</span>

                  <div class="inerr_taabs-tab-btns">
                    <ul>
                      <li class="active">
                        <span>80C to 80G</span>
                      </li>
                      <li>
                        <span>Other Deductions</span>
                      </li>
                    </ul>
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- 80C to 80G -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>Investments under Section 80C</h5>
                        </div>
                        <form action="#">
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <span>You can claim deductions of upto Rs.
                                1,50,000 under Section 80C. Contributions to
                                LIC, Fixed Deposits, NSC, PF, PPF, Mutual
                                Funds etc. are covered in this
                                section.</span>
                              <label>Total 80C Investments</label>
                              <input type="text" placeholder="Enter Your Total" />
                            </div>
                          </div>
                          <div class="form_heading">
                            <h5>
                              Section 80G : Donations to charitable
                              organizations
                            </h5>
                          </div>
                          <span>The government requires itemized details of
                            donations for Section 80G.</span>

                          <div class="button_data mt-4">
                            <button>
                              Add or Remove Donation under Section 80G
                            </button>
                          </div>

                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- 80C to 80G -->
                    <!-- Other Deductions -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>More deductions Under Section 80</h5>
                        </div>
                        <form action="#">
                          <div class="form_heading-sub">
                            <span>
                              Section 80DD - Disabled dependent deduction.
                              (Spouse/Children/Parents)
                            </span>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Type of Disability</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="FortyPercentDisability">
                                  40% Disability
                                </option>
                                <option value="SevereDisability">
                                  Severe Disability
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Dependent Type*</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>PAN of Dependent</label>
                              <input type="number" placeholder="Enter Your Name" />
                            </div>
                            <div class="form_input_grp">
                              <label>Aadhaar of Dependent </label>
                              <input type="text" placeholder="Enter Your Aadhaar of Dependent
                                    " />
                            </div>
                            <div class="form_input_grp">
                              <label>Form 10IA Filing Date</label>
                              <input type="Date" placeholder="Enter Your Date" />
                            </div>
                            <div class="form_input_grp">
                              <label>Form 10IA Ack No. </label>
                              <input type="text" placeholder="Enter Your Form 10IA
                                      " />
                            </div>
                            <div class="form_input_grp">
                              <label>UDID No.(if available) </label>
                              <input type="text" placeholder="Enter Your UDID
                                      " />
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>Section 80U - Disability</h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Type of Disability </label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="FortyPercentDisability">
                                  40% Disability
                                </option>
                                <option value="SevereDisability">
                                  Severe Disability
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Dependent Type*</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                              </select>
                            </div>

                            <div class="form_input_grp">
                              <label>Form 10IA Filing Date</label>
                              <input type="Date" placeholder="Enter Your Date" />
                            </div>
                            <div class="form_input_grp">
                              <label>Form 10IA Ack No. </label>
                              <input type="text" placeholder="Enter Your Form 10IA
                                      " />
                            </div>
                            <div class="form_input_grp">
                              <label>UDID No.(if available) </label>
                              <input type="text" placeholder="Enter Your UDID
                                      " />
                            </div>
                          </div>
                          <div class="form_heading">
                            <h5>
                              Section 80GGC - Contribution To Political
                              Party
                            </h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Amount paid via cash </label>
                              <input type="text" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form_input_grp">
                              <label>Contribution Date(DD/MM/YYYY) </label>
                              <input type="date" placeholder="Enter Your Date
                                      " />
                            </div>
                            <div class="form_input_grp">
                              <label>Transaction Ref no. (Optional) </label>
                              <input type="text" placeholder="Enter Your UDID
                                      " />
                            </div>
                            <div class="form_input_grp">
                              <label>FSC Code of Bank (Optional) </label>
                              <input type="text" placeholder="Enter Your Code
                                      " />
                            </div>
                          </div>

                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- Other Deductions -->
                  </div>
                </div>
              </div>
              <div class="p-tab-cntnt inner_tabs_collec">
                <div class="p-tab-c1">
                  <span>04 TDS/Taxes</span>

                  <div class="inerr_taabs-tab-btns">
                    <ul>
                      <li class="active">
                        <span>TDS/TSC</span>
                      </li>
                      <li>
                        <span>Self Assessment</span>
                      </li>
                      <li>
                        <span>Other Details</span>
                      </li>
                    </ul>
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- TDS/TSC -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>Add a TDS entry (Tax Deducted at Source)</h5>
                        </div>
                        <div class="form_heading-sub">
                          <span> Tax Deducted At Source </span>
                        </div>
                        <form action="#">
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>TAN of Deductor *</label>
                              <input type="text" placeholder="Enter Your Name" />
                            </div>
                            <div class="form_input_grp">
                              <label>Name of Deductor *</label>
                              <input type="text" placeholder="Enter Your Name" />
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Total Tax Deducted *</label>
                              <input type="text" placeholder="Enter Your Name" />
                              <span>
                                Leave it blank if not deducted in the name
                                of assessee.
                              </span>
                            </div>
                            <div class="form_input_grp">
                              <label>Tax Deducted claimed for this year *</label>
                              <input type="text" placeholder="Enter Your Name" />
                              <span>
                                Usually this amount is same as Total Tax
                                Deducted.
                              </span>
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Income against which TDS was deducted
                                *</label>
                              <input type="text" placeholder="Enter Your Name" />
                            </div>
                            <div class="form_input_grp">
                              <label>Type of Income</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="OtherSources">
                                  Other Sources
                                </option>
                                <option value="HouseProperty">
                                  House Property
                                </option>
                                <option value="BusinessAndProfession">
                                  Business &amp; Profession
                                </option>
                                <option value="CapitalGain">
                                  Capital Gain
                                </option>
                                <option value="ExemptIncome">
                                  Exempt Income
                                </option>
                                <option value="NotApplicableUs194N">
                                  Not Applicable - TDS us 194N
                                </option>
                                <option value="CryptoCg">
                                  Crypto - Capital Gain
                                </option>
                                <option value="CryptoBp">
                                  Crypto - Business &amp; Profession
                                </option>
                              </select>
                            </div>
                          </div>
                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- TDS/TSC -->
                    <!-- Self Assessment -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <form action="#">
                          <div class="form_heading-sub">
                            <span>Taxes Paid</span>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Amount Paid *</label>
                              <input type="text" placeholder="Enter Your Name" />
                            </div>
                            <div class="form_input_grp">
                              <label>Date of Payment *</label>
                              <input type="date" placeholder="Enter Your Date" />
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>BSR Code of the bank you deposited with
                              </label>
                              <input type="text" placeholder="Enter Your Code" />
                            </div>
                            <div class="form_input_grp">
                              <label>Challan Serial No * </label>
                              <input type="text" placeholder="Enter Your No" />
                            </div>
                          </div>
                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- Self Assessment -->
                    <!-- Other Details -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>Details of Previous Years' Losses</h5>
                        </div>
                        <form action="#">
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Assessment Year of the Loss</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="2021-2022">2022-2023</option>
                                <option value="2020-2021">2021-2022</option>
                                <option value="2019-2020">2020-2021</option>
                                <option value="2018-2019">2019-2020</option>
                                <option value="2017-2018">2018-2019</option>
                                <option value="2016-2017">2017-2018</option>
                                <option value="2015-2016">2016-2017</option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Loss Category</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="BusinessAndProfession">
                                  Business Profession
                                </option>
                                <option value="HouseProperty">
                                  House Property
                                </option>
                                <option value="LongTermCapitalGain">
                                  Long Term Cap Gain
                                </option>
                                <option value="RaceHorses">
                                  Income from Race Horses
                                </option>
                                <option value="ShortTermCapitalGain">
                                  Short Term Cap Gain
                                </option>
                                <option value="Speculation">
                                  Speculation
                                </option>
                              </select>
                            </div>
                            <div class="form_input_grp">
                              <label>Loss Amount</label>
                              <input type="number" placeholder="Enter Your Number" />
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>Depreciation Loss from Previous Years</h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Assessment Year</label>
                              <select name="" class="form-control" id="">
                                <option>Select Option</option>
                                <option value="2021-2022">2022-2023</option>
                                <option value="2020-2021">2021-2022</option>
                                <option value="2019-2020">2020-2021</option>
                                <option value="2018-2019">2019-2020</option>
                                <option value="2017-2018">2018-2019</option>
                                <option value="2016-2017">2017-2018</option>
                                <option value="2015-2016">2016-2017</option>
                              </select>
                            </div>

                            <div class="form_input_grp">
                              <label>Amount</label>
                              <input type="number" placeholder="Enter Your Number" />
                            </div>
                          </div>

                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
                    <!-- Other Details -->
                  </div>
                </div>
              </div>
              <div class="p-tab-cntnt inner_tabs_collec">
                <div class="p-tab-c1">
                  <span>05 Final</span>

                  <div class="inerr_taabs-tab-btns">
                    <ul>
                      <li class="active">
                        <span>Other Provisions</span>
                      </li>
                      <li>
                        <span>Filing</span>
                      </li>
                    </ul>
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- Other Provisions -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="form_heading">
                          <h5>Other Provisions</h5>
                        </div>
                      </div>
                    </div>
                    <!-- Other Provisions -->
                    <!-- Filing -->
                    <div class="inerr-tab-cntnt inner_tabs_collec">
                      <div class="Form_customer">
                        <div class="subcribtion">
                          <img src="assets/images/_taxregime.png" alt="" />
                          <h2>
                            Looks like you don't have an active subscription
                          </h2>
                          <p>
                            View our subscription plan to avail features
                            like tax summaries and other details
                          </p>
                          <div class="sub_btn">
                            <a href="#">Subscribe</a>
                            <a href="#">View Plans</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Filing -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="apps-card">
              <div class="app-card">
                <div class="top-head">
                  <h4>Client</h4>
                  <!-- <a href="#"><i class="fa-solid fa-pencil"></i> Change</a> -->
                </div>
                <div class="clint_address">
                  <div class="avatar">
                    <img src="assets/images/avatar.png" alt="" />
                  </div>
                  <div class="avatar_conten">
                    <h6>{{ $clients_details->first_name}} {{ $clients_details->middel_name}} {{ $clients_details->last_name}}</h6>
                    <span>
                      <a href="#"><i class="fa-solid fa-envelope"></i>Email@gamil.com</a>
                    </span>
                    <span>
                      <a href="#"><i class="fa-solid fa-location-dot"></i>Location
                        Here</a></span>
                  </div>
                </div>
              </div>
              <div class="app-card">
                <div class="top-head">
                  <h4>Summary</h4>
                  <a href="#" class="order">Order Placed</a>
                </div>
                <div class="summary_data">
                  <ul>
                    <li>
                      <span class="title">Tax</span>
                      <span class="value">0000</span>
                    </li>
                    <li>
                      <span class="title">Amount</span>
                      <span class="value">0000</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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
    $('#submit_client_details_form').click(function(event) {
      event.preventDefault();
      var formData = $('#editClientForm').serialize();
      $.ajax({
        url: "{{ route('edit-client-basic-details') }}",
        type: 'get',
        data: formData,
        success: function(response) {
          // Success message ko display karein ya kuch aur karein
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Error handling
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#Client_address_form').click(function(event) {
      event.preventDefault();
      var formData = $('#editClientaddressForm').serialize();
      $.ajax({
        url: "{{ route('store-client-address') }}",
        type: 'get',
        data: formData,
        success: function(response) {
          // Success message ko display karein ya kuch aur karein
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Error handling
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#editClientaddressForm').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log(response);
          alert('Client Address updated successfully!');
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
          alert('Error: ' + xhr.responseText);
        }
      });
    });
  });
</script>
<!-- 
<script>
  function addMore() {
    const formContainer = document.getElementById("formContainer");
    const inputGroups = formContainer.querySelectorAll(".form_input_grp");

    inputGroups.forEach((group) => {
      const lastInput = group.querySelector(".append1:last-of-type");

      if (lastInput) {
        const newInput = lastInput.cloneNode(true);
        newInput.value = "";
        group.appendChild(newInput);
      }
    });
  }
</script> -->


<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById("incomeTypeModal");

    // Get the button that opens the modal
    var btn = document.getElementById("changeIncomeTypeBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    // Handle form submission
    document.getElementById('incomeTypeForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch('/save-income-types', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            modal.style.display = "none";
            // Refresh the page
            window.location.reload();
          } else {
            alert('Failed to save income types.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  });
</script>



</body>

</html>