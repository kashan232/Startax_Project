@include('User.include.header_include')

<div class="wrapper">
  <style>
    .income-content {
      display: none;
    }

    .income-content.active {
      display: block;
    }
  </style>
  <!-- Navbar -->
  @include('User.include.navbar_include')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('User.include.sidebar_include')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details 2024</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!--  EXAMPLE -->
        <div class="card card-default">
          <div class="row align-items-center card-header toP_br">
            <div class="col-md-3 col-sm-12">
              <h3 class="card-title">Abdul Harvey I v2</h3>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
              <!-- SEARCH FORM -->
              <form>
                <div class="input-group shadow-sm input-group-sm">
                  <input class="form-control bg-light border-0" type="search" placeholder="Search" style="height: 40px !important" aria-label="Search" />
                  <div class="input-group-append bg-light border-0" style="height: 40px !important">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
              <a href="#"><button class="btn btn-primary w-100" data-toggle="modal" data-target="#staticBackdrop">
                  Change Income Type
                </button></a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Income Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <form id="incomeTypeForm">
                        <div class="col-md-12">
                          <input type="hidden" name="client_id" value="{{ $clients_details->id }}">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="salary" id="Salary" @if (in_array('salary', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="Salary">
                              Salary
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="business" id="Business" @if (in_array('business', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="Business">
                              Business
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="house_property" id="House-Property" @if (in_array('house_property', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="House-Property">
                              House Property
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="capital_gain" id="Capital-Gain" @if (in_array('capital_gain', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="Capital-Gain">
                              Capital Gain
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="other_income" id="Other-Income" @if (in_array('other_income', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="Other-Income">
                              Other Income
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="VDAincome" id="VDA-Income" @if (in_array('VDAincome', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="VDA-Income">
                              VDA Income
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="income_type[]" value="exempt_income" id="Exempt-Income" @if (in_array('exempt_income', $selectedIncomeTypes)) checked @endif>
                            <label class="form-check-label" for="Exempt-Income">
                              Exempt Income
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-3 col-md-12 col-sm-12">
              <div class="form-group m-0 p-0">
                <select class="form-control rounded-0" style="width: 100%">
                  <option selected="selected">Select Years</option>
                  <option value="2024">2024-2025</option>
                  <option value="2023">2023-2024</option>
                  <option value="2022">2022-2023</option>
                  <option value="2021">2021-2022</option>
                  <option value="2020">2020-2021</option>
                  <option value="2019">2019-2020</option>
                  <option value="2018">2018-2019</option>
                  <option value="2017">2017-2018</option>
                  <option value="2016">2016-2017</option>
                  <option value="2015">2015-2016</option>
                  <option value="2014">2014-2015</option>
                  <option value="2013">2013-2014</option>
                  <option value="2012">2012-2013</option>
                  <option value="2011">2011-2012</option>
                </select>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="process-sec-cntnt">
                  <!-- Tops Menu Tabs Start -->
                  <div class="process-tab-btns">
                    <ul>
                      <li class="btn btn-block bg-gradient-primary btn-flat">
                        <span><i class="far fa-address-book"></i></span>
                        <span>Permanent Details</span>
                      </li>
                      <li class="btn btn-block bg-gradient-primary btn-flat">
                        <span><i class="fas fa-calculator"></i></span>
                        <span>Income</span>
                      </li>
                      <li class="btn btn-block bg-gradient-primary btn-flat">
                        <span><i class="far fa-minus-square"></i></span>
                        <span>Deduction</span>
                      </li>
                      <li class="btn btn-block bg-gradient-primary btn-flat">
                        <span><i class="fas fa-file-invoice"></i></span>
                        <span>TDS/Taxes</span>
                      </li>
                      <li class="btn btn-block bg-gradient-primary btn-flat">
                        <span><i class="fas fa-calculator"></i></span>
                        <span>Final</span>
                      </li>
                    </ul>
                  </div>
                  <!-- Tops Menu Tabs Start -->

                  <!-- Tops Menu content -->
                  <div class="process-tabs-cntnt">
                    <div class="p-tab-cntnt inner_tabs_collec">
                      <div class="p-tab-c1">
                        <span>01 Permanent Details</span>
                        <div class="inerr_taabs-tab-btns mb-4">
                          <ul>
                            <li class="btn btn-block btn-outline-primary btn-flat active">
                              <span><i class="far fa-address-card"></i></span>
                              <span>Basic Details</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span><i class="far fa-address-card"></i></span>
                              <span>Address</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span><i class="fas fa-list-ol"></i></span>
                              <span>Bank</span>
                            </li>
                          </ul>
                        </div>

                        <div class="mt-3 inerr-tab-cntnt active">
                          @include('User.permanent_details_froms.basic_details')
                        </div>

                        <div class="mt-3 inerr-tab-cntnt">
                          @include('User.permanent_details_froms.address')
                        </div>

                        <div class="mt-3 inerr-tab-cntnt">
                          @include('User.permanent_details_froms.banks')
                        </div>
                      </div>
                    </div>

                    <div class="p-tab-cntnt inner_tabs_collec">
                      <div class="p-tab-c1">
                        <span>02 Income</span>
                        <div class="inerr_taabs-tab-btns mb-4">
                          <ul id="incomeTabs">
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('salary', $selectedIncomeTypes)) active @endif" data-tab="salary">
                              <span><i class="fas fa-list-ol"></i></span>
                              <span>Salary</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('business', $selectedIncomeTypes)) active @endif" data-tab="business">
                              <span><i class="fas fa-handshake"></i></span>
                              <span>Business</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('house_property', $selectedIncomeTypes)) active @endif" data-tab="house_property">
                              <span><i class="fas fa-home"></i></span>
                              <span>House Property</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('capital_gain', $selectedIncomeTypes)) active @endif" data-tab="capital_gain">
                              <span><i class="fab fa-creative-commons-share"></i></span>
                              <span>Capital Gain</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('VDAincome', $selectedIncomeTypes)) active @endif" data-tab="VDAincome">
                              <span><i class="fab fa-creative-commons-share"></i></span>
                              <span>VDA Forms</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('exempt_income', $selectedIncomeTypes)) active @endif" data-tab="exempt_income">
                              <span><i class="fab fa-creative-commons-share"></i></span>
                              <span>Exempt Income</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat income-tab @if (in_array('other_income', $selectedIncomeTypes)) active @endif" data-tab="other_income">
                              <span><i class="far fa-window-restore"></i></span>
                              <span>Other Income</span>
                            </li>
                          </ul>
                        </div>

                        <!-- salary area Start -->
                        <div class="mt-3 inerr-tab-cntnt active">
                          <h5 class="pt-3">
                            <strong> Employer Wise Salary</strong>
                          </h5>
                          <form action="#">
                            <div class="card card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <!-- Employer Type/Category -->
                                  <div class="form-group">
                                    <label class="m-0">Employer Type/Category *</label>
                                    <select class="form-control rounded-0">
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
                                        Pensioners - Public sector
                                        undertaking
                                      </option>
                                      <option value="PEO">
                                        Pensioners - Others
                                      </option>
                                    </select>
                                  </div>
                                  <!-- Name of the Employer -->
                                  <div class="form-group">
                                    <label class="m-0">Name of the Employer *</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <!-- Name of the Category -->
                                  <div class="form-group">
                                    <label class="m-0">Name of the Category *</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Category" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <h5 class="pt-3 pb-3">
                                <strong> Gross Salary</strong>
                              </h5>

                              <div class="row">
                                <div class="accordion">
                                  <div class="accordion-item form">
                                    <div class="accordion-item-header">
                                      <span>sallary Details As per 17(1)</span>
                                      <input type="text" class="form-control w-auto rounded-0" readonly />
                                    </div>
                                    <div class="accordion-item-description-wrapper">
                                      <div class="accordion-item-description">
                                        <div class="form_grid_acor">
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>

                                          <div class="form_input_grp slec">
                                            <label>Employer Type/Category
                                              *</label>
                                            <select class="form-control employerTypeSelect">
                                              <option value="">
                                                Select Option
                                              </option>
                                              <option value="CGovt">
                                                Central Government
                                              </option>
                                              <option value="SGovt">
                                                State Government
                                              </option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item form">
                                    <div class="accordion-item-header">
                                      <span>sallary Details As per 17(1)</span>
                                      <input type="text" class="form-control w-auto rounded-0" readonly />
                                    </div>
                                    <div class="accordion-item-description-wrapper">
                                      <div class="accordion-item-description">
                                        <div class="form_grid_acor">
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>

                                          <div class="form_input_grp slec">
                                            <label>Employer Type/Category
                                              *</label>
                                            <select class="form-control employerTypeSelect">
                                              <option value="">
                                                Select Option
                                              </option>
                                              <option value="CGovt">
                                                Central Government
                                              </option>
                                              <option value="SGovt">
                                                State Government
                                              </option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <h5 class="pt-3 pb-3">
                                <strong>
                                  Over All Exempation Deduction</strong>
                              </h5>

                              <div class="row">
                                <div class="accordion">
                                  <div class="accordion-item form">
                                    <div class="accordion-item-header">
                                      <span>sallary Details As per 17(1)</span>
                                      <input type="text" class="form-control w-auto rounded-0" readonly />
                                    </div>
                                    <div class="accordion-item-description-wrapper">
                                      <div class="accordion-item-description">
                                        <div class="form_grid_acor">
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>

                                          <div class="form_input_grp slec">
                                            <label>Employer Type/Category
                                              *</label>
                                            <select class="form-control employerTypeSelect">
                                              <option value="">
                                                Select Option
                                              </option>
                                              <option value="CGovt">
                                                Central Government
                                              </option>
                                              <option value="SGovt">
                                                State Government
                                              </option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item form">
                                    <div class="accordion-item-header">
                                      <span>sallary Details As per 17(1)</span>
                                      <input type="text" class="form-control w-auto rounded-0" readonly />
                                    </div>
                                    <div class="accordion-item-description-wrapper">
                                      <div class="accordion-item-description">
                                        <div class="form_grid_acor">
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>
                                          <!-- Name of the Employer -->
                                          <div class="form-group">
                                            <label class="m-0">Name of the input</label>
                                            <input type="text" class="form-control rounded-0" placeholder="Enter Your Employer" />
                                          </div>

                                          <div class="form_input_grp slec">
                                            <label>Employer Type/Category
                                              *</label>
                                            <select class="form-control employerTypeSelect">
                                              <option value="">
                                                Select Option
                                              </option>
                                              <option value="CGovt">
                                                Central Government
                                              </option>
                                              <option value="SGovt">
                                                State Government
                                              </option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card card-body">
                              <h5 class="pt-3 pb-3">
                                <strong>Address</strong>
                              </h5>
                              <div class="row">
                                <div class="col-md-6">
                                  <!-- Name of the Employer -->
                                  <div class="form-group">
                                    <label class="m-0">Tan Number</label>
                                    <input type="Number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                  </div>
                                  <div class="form-group">
                                    <label class="m-0">Address full Line</label>
                                    <input type="Address" class="form-control rounded-0" placeholder="Enter Your Address" />
                                  </div>
                                  <div class="form-group">
                                    <label class="m-0">Pincode</label>
                                    <input type="number" class="form-control rounded-0" placeholder="Enter Your Pincode" />
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <!-- Name of the Category -->
                                  <div class="form-group">
                                    <label class="m-0">TDF Detective</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Detective" />
                                  </div>
                                  <div class="form-group">
                                    <label class="m-0">City / Town / District</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Town" />
                                  </div>
                                  <div class="form-group">
                                    <label class="m-0">State Code</label>
                                    <select class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="ANDHRAPRADESH">
                                        ANDHRA PRADESH
                                      </option>
                                      <option value="ARUNACHALPRADESH">
                                        ARUNACHAL PRADESH
                                      </option>
                                      <option value="ASSAM">ASSAM</option>
                                      <option value="BIHAR">BIHAR</option>
                                      <option value="CHANDIGARH">
                                        CHANDIGARH
                                      </option>
                                      <option value="CHHATISHGARH">
                                        CHHATISHGARH
                                      </option>
                                      <option value="DADRANAGARHAVELI">
                                        DADRA &amp; NAGAR HAVELI
                                      </option>
                                      <option value="DAMANDIU">
                                        DAMAN &amp; DIU
                                      </option>
                                      <option selected="selected" value="DELHI">
                                        DELHI
                                      </option>
                                      <option value="GOA">GOA</option>
                                      <option value="GUJARAT">
                                        GUJARAT
                                      </option>
                                      <option value="HARYANA">
                                        HARYANA
                                      </option>
                                      <option value="HIMACHALPRADESH">
                                        HIMACHAL PRADESH
                                      </option>
                                      <option value="JAMMUKASHMIR">
                                        JAMMU &amp; KASHMIR
                                      </option>
                                      <option value="JHARKHAND">
                                        JHARKHAND
                                      </option>
                                      <option value="KARNATAKA">
                                        KARNATAKA
                                      </option>
                                      <option value="KERALA">KERALA</option>
                                      <option value="LAKHSWADEEP">
                                        LAKHSWADEEP
                                      </option>
                                      <option value="LADAKH">LADAKH</option>
                                      <option value="MADHYAPRADESH">
                                        MADHYA PRADESH
                                      </option>
                                      <option value="MAHARASHTRA">
                                        MAHARASHTRA
                                      </option>
                                      <option value="MANIPUR">
                                        MANIPUR
                                      </option>
                                      <option value="MEGHALAYA">
                                        MEGHALAYA
                                      </option>
                                      <option value="MIZORAM">
                                        MIZORAM
                                      </option>
                                      <option value="NAGALAND">
                                        NAGALAND
                                      </option>
                                      <option value="ORISSA">ORISSA</option>
                                      <option value="PONDICHERRY">
                                        PONDICHERRY
                                      </option>
                                      <option value="PUNJAB">PUNJAB</option>
                                      <option value="RAJASTHAN">
                                        RAJASTHAN
                                      </option>
                                      <option value="SIKKIM">SIKKIM</option>
                                      <option value="TAMILNADU">
                                        TAMIL NADU
                                      </option>
                                      <option value="TELANGANA">
                                        TELANGANA
                                      </option>
                                      <option value="TRIPURA">
                                        TRIPURA
                                      </option>
                                      <option value="UTTARANCHAL">
                                        UTTARAKHAND
                                      </option>
                                      <option value="UTTARPRADESH">
                                        UTTAR PRADESH
                                      </option>
                                      <option value="WESTBENGAL">
                                        WEST BENGAL
                                      </option>
                                      <option value="StateoutsideIndia">
                                        State outside India
                                      </option>
                                      <option value="NotInit"></option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- salary area Start -->
                        <!-- bussiness area Start -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <div class="row top_up_hide">
                            <div class="col-md-4 mt-5 text-center ml-auto mr-auto">
                              <h4>
                                <strong>Income from Business and
                                  Profession</strong>
                              </h4>
                              <p>
                                Do you have income from a business or a
                                professional practice? Freelancers,
                                Proprietorship or Partner's Income is also
                                considered under this section. Note:
                                Intra-day trading and F&O trading is also
                                considered as business income.
                              </p>
                              <button class="btn btn-block ic_bus_main bg-gradient-info btn-flat">
                                Add Income from Business
                              </button>
                            </div>
                          </div>

                          <div class="main_row">
                            <div class="row inr_tabs_button">
                              <div class="col-md-12">
                                <h5><strong>Add a Business</strong></h5>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>01</strong></h5>
                                    <h5>
                                      Remuneration from Partnership Firms
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Add Remuneration
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>02</strong></h5>
                                    <h5>
                                      Presumptive Income under Section 44AD
                                      (For Businesses)
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add Income under 44AD
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>03</strong></h5>
                                    <h5>
                                      Presumptive Income Under Section 44ADA
                                      (For Professionals)
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add Income under 44ADA
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>04</strong></h5>
                                    <h5>
                                      Presumptive Income Under Section 44AE
                                      (For Goods Carrier)
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add Income under 44AE
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>05</strong></h5>
                                    <h5>
                                      Balance Sheet with Profit & Loss
                                      Account
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add BSPL Income
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>06</strong></h5>
                                    <h5>
                                      Books of Account are Not Maintained
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add No Books of Account Income
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>07</strong></h5>
                                    <h5>Speculative Income</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add Speculative Income
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-5 inr_tabs_button">
                              <div class="col-md-12">
                                <h5>
                                  <strong>Financial Statements &
                                    Schedules</strong>
                                </h5>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>01</strong></h5>
                                    <h5>GST Details</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Add GST Details
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>02</strong></h5>
                                    <h5>Schedule BP</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Schedule BP
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>03</strong></h5>
                                    <h5>Schedule OI (Other Information)</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Schedule OI
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-5 inr_tabs_button">
                              <div class="col-md-12">
                                <h5><strong>Audit Information</strong></h5>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>01</strong></h5>
                                    <h5>Auditor Details</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Auditor Details
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>02</strong></h5>
                                    <h5>Form 3CA/3CB - 3CD</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Form 3CA/3CB - 3CD
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-5 inr_tabs_button">
                              <div class="col-md-12">
                                <h5>
                                  <strong>Quantitative Details</strong>
                                </h5>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>01</strong></h5>
                                    <h5>Details of Trading Concern</h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Details
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>02</strong></h5>
                                    <h5>
                                      Details of Manufacturing Concern (Raw
                                      Materials)
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Details
                                  </button>
                                </div>
                              </div>

                              <div class="col-md-8 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="headin_iner">
                                    <h5><strong>03</strong></h5>
                                    <h5>
                                      Details of Manufacturing Concern
                                      (Finished Products)
                                    </h5>
                                  </div>
                                  <button class="buton_tabs_ac btn mt-3 w-auto btn-block bg-gradient-info btn-flat">
                                    Fill Details
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>
                                      Edit Remuneration received From
                                      Partnership Firm</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Name of Partnership Firm -->
                                    <div class="form-group">
                                      <label class="m-0">Name of Partnership Firm *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Partnership Firm" />
                                    </div>
                                    <!-- Share percentage in Partnership Firm -->
                                    <div class="form-group">
                                      <label class="m-0">Share percentage in Partnership
                                        Firm *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your percentage in Partnership" />
                                    </div>
                                    <!-- PAN of Partnership Firm -->
                                    <div class="form-group">
                                      <label class="m-0">PAN of Partnership Firm *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your PAN of Partnership" />
                                    </div>
                                    <!-- Remuneration from Firm -->
                                    <div class="form-group">
                                      <label class="m-0">Remuneration from Firm *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Remuneration from Firm" />
                                    </div>
                                    <!-- Interest Received -->
                                    <div class="form-group">
                                      <label class="m-0">Interest Received *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Interest Received" />
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <!-- Profit amount received from Firm -->
                                    <div class="form-group">
                                      <label class="m-0">Profit amount received from Firm
                                        (Rs.) *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit amount received" />
                                    </div>
                                    <!-- Capital Balance in Firm as of 31st March 2024 -->
                                    <div class="form-group">
                                      <label class="m-0">Capital Balance in Firm as of 31st
                                        March 2024 *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Capital Balance" />
                                    </div>
                                    <!-- Any other amount allowable as deduction -->
                                    <div class="form-group">
                                      <label class="m-0">Any other amount allowable as
                                        deduction *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your other amount allowable" />
                                    </div>
                                    <!-- Is the firm liable for Audit? -->
                                    <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" />
                                      <label class="form-check-label">Is the firm liable for
                                        Audit?</label>
                                    </div>
                                    <!-- Is the firm liable to furnish report under 92E? -->
                                    <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" />
                                      <label class="form-check-label">Is the firm liable to furnish
                                        report under 92E?</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Nature of Business
                                          Details</strong>
                                      </h5>
                                    </div>
                                    <!-- Nature of Business -->
                                    <div class="form-group">
                                      <label class="m-0">Nature of Business</label>
                                      <select class="form-control rounded-0">
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
                                          Pensioners - Public sector
                                          undertaking
                                        </option>
                                        <option value="PEO">
                                          Pensioners - Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">Trade Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Description</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Total Revenue/Turnover</strong>
                                      </h5>
                                    </div>
                                    <!-- Revenue via Cash -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via Cash</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via Cash" />
                                    </div>
                                    <!-- Revenue via any other mode -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via any other mode</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via any other mode" />
                                    </div>
                                    <!-- Revenue via banking modes -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via banking modes</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via banking modes" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Total Income/Profit as per your
                                          calculation</strong>
                                      </h5>
                                    </div>
                                    <!-- Profit via Cash -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via Cash</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via Cash" />
                                    </div>
                                    <!-- Profit via any other mode -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via any other mode</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via any other mode" />
                                    </div>
                                    <!-- Profit via banking modes -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via banking modes</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via banking modes" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Nature of Business
                                          Details</strong>
                                      </h5>
                                    </div>
                                    <!-- Nature of Business -->
                                    <div class="form-group">
                                      <label class="m-0">Nature of Business</label>
                                      <select class="form-control rounded-0">
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
                                          Pensioners - Public sector
                                          undertaking
                                        </option>
                                        <option value="PEO">
                                          Pensioners - Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">Trade Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Description</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Total Revenue/Turnover</strong>
                                      </h5>
                                    </div>
                                    <!-- Revenue via Cash -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via Cash</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via Cash" />
                                    </div>
                                    <!-- Revenue via any other mode -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via any other mode</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via any other mode" />
                                    </div>
                                    <!-- Revenue via banking modes -->
                                    <div class="form-group">
                                      <label class="m-0">Revenue via banking modes</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Revenue via banking modes" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form_heading">
                                      <h5 class="mt-3">
                                        <strong>Total Income/Profit as per your
                                          calculation</strong>
                                      </h5>
                                    </div>
                                    <!-- Profit via Cash -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via Cash</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via Cash" />
                                    </div>
                                    <!-- Profit via any other mode -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via any other mode</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via any other mode" />
                                    </div>
                                    <!-- Profit via banking modes -->
                                    <div class="form-group">
                                      <label class="m-0">Profit via banking modes</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Profit via banking modes" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" class="btn btn-primary" value="Submit" />
                                  <button class="Back_button btn bg-gradient-warning text-white ml-4">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>Edit Presumptive Income Under Section
                                      44AE</strong>
                                  </h5>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Nature of Business -->
                                    <div class="form-group">
                                      <label class="m-0">Nature of Business</label>
                                      <select class="form-control rounded-0">
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
                                          Pensioners - Public sector
                                          undertaking
                                        </option>
                                        <option value="PEO">
                                          Pensioners - Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">Trade Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Description</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>Regular Business for ITR-3 (Books of
                                      Account Maintained)</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Nature of Business -->
                                    <div class="form-group">
                                      <label class="m-0">Nature of Business</label>
                                      <select class="form-control rounded-0">
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
                                          Pensioners - Public sector
                                          undertaking
                                        </option>
                                        <option value="PEO">
                                          Pensioners - Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">Trade Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Description</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>Regular Business for ITR-3 (No Books
                                      of Account Maintained)</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Nature of Business -->
                                    <div class="form-group">
                                      <label class="m-0">Nature of Business</label>
                                      <select class="form-control rounded-0">
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
                                          Pensioners - Public sector
                                          undertaking
                                        </option>
                                        <option value="PEO">
                                          Pensioners - Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">Trade Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Description</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="row mt-3">
                                  <div class="form_heading">
                                    <h5 class="mt-3">
                                      <strong>Regular Business for ITR-3
                                        (Speculative Income)</strong>
                                    </h5>
                                    <span>Nature of Business Details</span>
                                  </div>

                                  <div class="col-md-12">
                                    <table class="table table-responsive">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Nature of Business</label>
                                              <select class="form-control rounded-0">
                                                <option>
                                                  Select Option
                                                </option>
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
                                                  Pensioners - Central
                                                  Government
                                                </option>
                                                <option value="PESG">
                                                  Pensioners - State
                                                  Government
                                                </option>
                                                <option value="PEPS">
                                                  Pensioners - Public sector
                                                  undertaking
                                                </option>
                                                <option value="PEO">
                                                  Pensioners - Others
                                                </option>
                                              </select>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Trade Name</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter Your Trade Name" />
                                            </div>
                                          </td>
                                          <td>
                                            <!-- Description -->
                                            <div class="form-group">
                                              <label class="m-0">Description</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter Your Description" />
                                            </div>
                                          </td>
                                          <td>
                                            <!-- Cancel Icon -->
                                            <div class="form-group d-flex" style="flex-direction: column">
                                              <label class="m-0">Cancel</label>
                                              <div class="cancel btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                      Add More
                                    </button>
                                  </div>

                                  <div class="col-md-6">
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">1i: Turnover From Speculative
                                        Activity</label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">1iii: Expenditure, If Any</label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <!-- Trade Name -->
                                    <div class="form-group">
                                      <label class="m-0">1ii: Gross Profit</label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                    </div>
                                    <!-- Description -->
                                    <div class="form-group">
                                      <label class="m-0">Income From Intraday Trading -
                                        Transferred To Profit And Loss
                                        Account
                                      </label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>GST Details</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- GSTIN -->
                                    <div class="form-group">
                                      <label class="m-0">GSTIN</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your GSTIN" />
                                    </div>
                                    <!-- Gross Receipts -->
                                    <div class="form-group">
                                      <label class="m-0">Gross Receipts</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Gross Receipts" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mt-3">
                                    <strong>Schedule Business and Profession -
                                      Income from Business and
                                      Profession</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Profit before tax -->
                                    <div class="form-group">
                                      <label class="m-0">Profit before tax as per P/L
                                        Account.*</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your GSTIN" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading pb-4">
                                  <h5>
                                    <strong> Other Information </strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form_input_grp">
                                      <label>Amounts not credited to the profit
                                        and loss account *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your profit and loss" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="rows_data">
                            <form action="#">
                              <div class="card-body card">
                                <div class="form_heading pb-4">
                                  <h5>
                                    <strong> Other Information </strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>Are you liable to maintain accounts
                                        as per section 44AA? *</label>
                                    </div>
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>Are you declaring income only under
                                        section
                                        44AE/44AD/44ADA/44B/44BB/44BBA?
                                        *</label>
                                    </div>
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>Does your total
                                        sales/turnover/gross receipts of
                                        business, not profession, is between
                                        1 to 10 Crore Rupees? *</label>
                                    </div>
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>Are you liable for audit under
                                        section 44AB?</label>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Name of the auditor
                                        (proprietorship/ firm)</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Auditor" />
                                    </div>
                                    <div class="form-group">
                                      <label>Auditor Name</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Auditor" />
                                    </div>
                                    <div class="form-group">
                                      <label>Membership Number of Auditor</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your GSTIN" />
                                    </div>
                                    <div class="form-group">
                                      <label>Auditor Registration Number</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Registration Number" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Audit Firm PAN</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Registration Number" />
                                    </div>
                                    <div class="form-group">
                                      <label>Aadhar of Auditor (Optional)</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Registration Number" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of report of the Audit / Date
                                        of signing Tax Audit Report- For
                                        3CB-3CD</label>
                                      <input type="date" class="form-control rounded-0" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of furnishing the Audit
                                        Report</label>
                                      <input type="date" class="form-control rounded-0" />
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>Is Taxpayer liable to furnish a
                                        report under Section 92E?</label>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group check">
                                      <input type="checkbox" />
                                      <label>In the case of non-resident, is
                                        there a permanent establishment (PE)
                                        in India?</label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- bussiness area start -->
                        </div>
                        <!-- bussiness area end -->
                        <!-- House Property Start -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <div class="row top_up_hide">
                            <div class="col-md-6 mt-5 text-center ml-auto mr-auto">
                              <h4>
                                <strong>Income From House Property </strong>
                              </h4>
                              <p>
                                In case you paid Interest on Housing Loan
                                for house property you live in
                                (self-occupied property) or If you own a
                                house and are earning rent on it then
                                specify the details here.
                              </p>
                              <p class="pt-3">
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
                              <button class="btn btn-block ic_bus_main bg-gradient-info btn-flat">
                                Click Here To Add House Property Details
                              </button>
                            </div>
                          </div>
                          <div class="main_row">
                            <div class="col-md-12 mb-3">
                              <h5>
                                <strong>House Property Details</strong>
                              </h5>
                            </div>

                            <form action="#">
                              <div class="card card-body">
                                <div class="row">
                                  <div class="col-md-12">
                                    <!-- Type of House Property -->
                                    <div class="form-group">
                                      <label>Type of House Property</label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="SelfOccupied">
                                          Self-Occupied House Property
                                        </option>
                                        <option value="Rented">
                                          Rental Property
                                        </option>
                                        <option value="DeemedLetOut">
                                          Deemed Let Out Property
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Type of House Property -->
                                  </div>
                                </div>
                              </div>

                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mb-3">
                                    <strong>Your House Address</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Flat/Door/Block Number -->
                                    <div class="form-group">
                                      <label>Flat/Door/Block Number *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Flat/Door/Block Number" />
                                    </div>
                                    <!-- Premise Name -->
                                    <div class="form-group">
                                      <label>Premise Name (Optional)</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Premise Name" />
                                    </div>
                                    <!-- Road / Street -->
                                    <div class="form-group">
                                      <label>Road / Street (Optional)</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Road / Street" />
                                    </div>

                                    <div class="form-group">
                                      <label>State * </label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="ANDHRAPRADESH">
                                          ANDHRA PRADESH
                                        </option>
                                        <option value="ARUNACHALPRADESH">
                                          ARUNACHAL PRADESH
                                        </option>
                                        <option value="ASSAM">ASSAM</option>
                                        <option value="BIHAR">BIHAR</option>
                                        <option value="CHANDIGARH">
                                          CHANDIGARH
                                        </option>
                                        <option value="CHHATISHGARH">
                                          CHHATISHGARH
                                        </option>
                                        <option value="DADRANAGARHAVELI">
                                          DADRA &amp; NAGAR HAVELI
                                        </option>
                                        <option value="DAMANDIU">
                                          DAMAN &amp; DIU
                                        </option>
                                        <option selected="selected" value="DELHI">
                                          DELHI
                                        </option>
                                        <option value="GOA">GOA</option>
                                        <option value="GUJARAT">
                                          GUJARAT
                                        </option>
                                        <option value="HARYANA">
                                          HARYANA
                                        </option>
                                        <option value="HIMACHALPRADESH">
                                          HIMACHAL PRADESH
                                        </option>
                                        <option value="JAMMUKASHMIR">
                                          JAMMU &amp; KASHMIR
                                        </option>
                                        <option value="JHARKHAND">
                                          JHARKHAND
                                        </option>
                                        <option value="KARNATAKA">
                                          KARNATAKA
                                        </option>
                                        <option value="KERALA">
                                          KERALA
                                        </option>
                                        <option value="LAKHSWADEEP">
                                          LAKHSWADEEP
                                        </option>
                                        <option value="LADAKH">
                                          LADAKH
                                        </option>
                                        <option value="MADHYAPRADESH">
                                          MADHYA PRADESH
                                        </option>
                                        <option value="MAHARASHTRA">
                                          MAHARASHTRA
                                        </option>
                                        <option value="MANIPUR">
                                          MANIPUR
                                        </option>
                                        <option value="MEGHALAYA">
                                          MEGHALAYA
                                        </option>
                                        <option value="MIZORAM">
                                          MIZORAM
                                        </option>
                                        <option value="NAGALAND">
                                          NAGALAND
                                        </option>
                                        <option value="ORISSA">
                                          ORISSA
                                        </option>
                                        <option value="PONDICHERRY">
                                          PONDICHERRY
                                        </option>
                                        <option value="PUNJAB">
                                          PUNJAB
                                        </option>
                                        <option value="RAJASTHAN">
                                          RAJASTHAN
                                        </option>
                                        <option value="SIKKIM">
                                          SIKKIM
                                        </option>
                                        <option value="TAMILNADU">
                                          TAMIL NADU
                                        </option>
                                        <option value="TELANGANA">
                                          TELANGANA
                                        </option>
                                        <option value="TRIPURA">
                                          TRIPURA
                                        </option>
                                        <option value="UTTARANCHAL">
                                          UTTARAKHAND
                                        </option>
                                        <option value="UTTARPRADESH">
                                          UTTAR PRADESH
                                        </option>
                                        <option value="WESTBENGAL">
                                          WEST BENGAL
                                        </option>
                                        <option value="StateoutsideIndia">
                                          State outside India
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <!-- Pincode -->
                                    <div class="form-group">
                                      <label>Pincode</label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Pincode" />
                                    </div>
                                    <!-- Area / Locality -->
                                    <div class="form-group">
                                      <label>Area / Locality *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Area / Locality" />
                                    </div>
                                    <!-- Town / City -->
                                    <div class="form-group">
                                      <label>Town / City *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Town / City" />
                                    </div>

                                    <div class="form-group">
                                      <label>Country * </label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option selected="selected" value="INDIA">
                                          INDIA
                                        </option>
                                        <option value="AFGHANISTAN">
                                          AFGHANISTAN
                                        </option>
                                        <option value="ALAND_ISLANDS">
                                          ÅLAND ISLANDS
                                        </option>
                                        <option value="ALBANIA">
                                          ALBANIA
                                        </option>
                                        <option value="ALGERIA">
                                          ALGERIA
                                        </option>
                                        <option value="AMERICAN_SAMOA">
                                          AMERICAN SAMOA
                                        </option>
                                        <option value="ANDORRA">
                                          ANDORRA
                                        </option>
                                        <option value="ANGOLA">
                                          ANGOLA
                                        </option>
                                        <option value="ANGUILLA">
                                          ANGUILLA
                                        </option>
                                        <option value="ANTARCTICA">
                                          ANTARCTICA
                                        </option>
                                        <option value="ANTIGUA_AND_BARBUDA">
                                          ANTIGUA AND BARBUDA
                                        </option>
                                        <option value="ARGENTINA">
                                          ARGENTINA
                                        </option>
                                        <option value="ARMENIA">
                                          ARMENIA
                                        </option>
                                        <option value="ARUBA">ARUBA</option>
                                        <option value="AUSTRALIA">
                                          AUSTRALIA
                                        </option>
                                        <option value="AUSTRIA">
                                          AUSTRIA
                                        </option>
                                        <option value="AZERBAIJAN">
                                          AZERBAIJAN
                                        </option>
                                        <option value="BAHAMAS">
                                          BAHAMAS
                                        </option>
                                        <option value="BAHRAIN">
                                          BAHRAIN
                                        </option>
                                        <option value="BANGLADESH">
                                          BANGLADESH
                                        </option>
                                        <option value="BARBADOS">
                                          BARBADOS
                                        </option>
                                        <option value="BELARUS">
                                          BELARUS
                                        </option>
                                        <option value="BELGIUM">
                                          BELGIUM
                                        </option>
                                        <option value="BELIZE">
                                          BELIZE
                                        </option>
                                        <option value="BENIN">BENIN</option>
                                        <option value="BERMUDA">
                                          BERMUDA
                                        </option>
                                        <option value="BHUTAN">
                                          BHUTAN
                                        </option>
                                        <option value="BOLIVIA">
                                          BOLIVIA (PLURINATIONAL STATE OF)
                                        </option>
                                        <option value="BONAIRE_SINT_EUSTATIUS_AND_SABA">
                                          BONAIRE, SINT EUSTATIUS AND SABA
                                        </option>
                                        <option value="BOSNIA_AND_HERZEGOVINA">
                                          BOSNIA AND HERZEGOVINA
                                        </option>
                                        <option value="BOTSWANA">
                                          BOTSWANA
                                        </option>
                                        <option value="BOUVET_ISLAND">
                                          BOUVET ISLAND
                                        </option>
                                        <option value="BRAZIL">
                                          BRAZIL
                                        </option>
                                        <option value="BRITISH_INDIAN_OCEAN_TERRITORY">
                                          BRITISH INDIAN OCEAN TERRITORY
                                        </option>
                                        <option value="BRUNEI_DARUSSALAM">
                                          BRUNEI DARUSSALAM
                                        </option>
                                        <option value="BULGARIA">
                                          BULGARIA
                                        </option>
                                        <option value="BURKINA_FASO">
                                          BURKINA FASO
                                        </option>
                                        <option value="BURUNDI">
                                          BURUNDI
                                        </option>
                                        <option value="CAPE_VERDE">
                                          CABO VERDE
                                        </option>
                                        <option value="CAMBODIA">
                                          CAMBODIA
                                        </option>
                                        <option value="CAMEROON">
                                          CAMEROON
                                        </option>
                                        <option value="CANADA">
                                          CANADA
                                        </option>
                                        <option value="CAYMAN_ISLANDS">
                                          CAYMAN ISLANDS
                                        </option>
                                        <option value="CENTRAL_AFRICAN_REPUBLIC">
                                          CENTRAL AFRICAN REPUBLIC
                                        </option>
                                        <option value="CHAD">CHAD</option>
                                        <option value="CHILE">CHILE</option>
                                        <option value="CHINA">CHINA</option>
                                        <option value="COCOS_KEELING_ISLANDS">
                                          COCOS (KEELING) ISLANDS
                                        </option>
                                        <option value="CHRISTMAS_ISLAND">
                                          CHRISTMAS ISLAND
                                        </option>
                                        <option value="COLOMBIA">
                                          COLOMBIA
                                        </option>
                                        <option value="COMOROS">
                                          COMOROS
                                        </option>
                                        <option value="CONGO_REPUBLIC_OF_THE">
                                          CONGO
                                        </option>
                                        <option value="COOK_ISLANDS">
                                          COOK ISLANDS
                                        </option>
                                        <option value="COSTA_RICA">
                                          COSTA RICA
                                        </option>
                                        <option value="COTE_DIVOIRE_IVORY_COAST">
                                          CÔTE D'IVOIRE (IVORY COAST)
                                        </option>
                                        <option value="CROATIA">
                                          CROATIA
                                        </option>
                                        <option value="CUBA">CUBA</option>
                                        <option value="CURACAO">
                                          CURAÇAO
                                        </option>
                                        <option value="CYPRUS">
                                          CYPRUS
                                        </option>
                                        <option value="CZECH_REPUBLIC">
                                          CZECHIA
                                        </option>
                                        <option value="DEMOCRATIC_PEOPLES_REPUBLIC_OF_KOREA_NORTH_KOREA">
                                          KOREA, DEMOCRATIC PEOPLE'S
                                          REPUBLIC OF (NORTH KOREA)
                                        </option>
                                        <option value="DEMOCRATIC_REPUBLIC_OF_THE_CONGO">
                                          CONGO, DEMOCRATIC REPUBLIC OF THE
                                        </option>
                                        <option value="DENMARK">
                                          DENMARK
                                        </option>
                                        <option value="DJIBOUTI">
                                          DJIBOUTI
                                        </option>
                                        <option value="DOMINICA">
                                          DOMINICA
                                        </option>
                                        <option value="DOMINICAN_REPUBLIC">
                                          DOMINICAN REPUBLIC
                                        </option>
                                        <option value="ECUADOR">
                                          ECUADOR
                                        </option>
                                        <option value="EGYPT">EGYPT</option>
                                        <option value="EL_SALVADOR">
                                          EL SALVADOR
                                        </option>
                                        <option value="EQUATORIAL_GUINEA">
                                          EQUATORIAL GUINEA
                                        </option>
                                        <option value="ERITREA">
                                          ERITREA
                                        </option>
                                        <option value="ESTONIA">
                                          ESTONIA
                                        </option>
                                        <option value="ETHIOPIA">
                                          ETHIOPIA
                                        </option>
                                        <option value="FALKLAND_ISLANDS_MALVINAS">
                                          FALKLAND ISLANDS (MALVINAS)
                                        </option>
                                        <option value="FAROE_ISLANDS">
                                          FAROE ISLANDS
                                        </option>
                                        <option value="FIJI_ISLANDS">
                                          FIJI
                                        </option>
                                        <option value="FINLAND">
                                          FINLAND
                                        </option>
                                        <option value="FRANCE">
                                          FRANCE
                                        </option>
                                        <option value="FRENCH_GUIANA">
                                          FRENCH GUIANA
                                        </option>
                                        <option value="FRENCH_POLYNESIA">
                                          FRENCH POLYNESIA
                                        </option>
                                        <option value="FRENCH_SOUTHERN_TERRITORIES">
                                          FRENCH SOUTHERN TERRITORIES
                                        </option>
                                        <option value="GABON">GABON</option>
                                        <option value="GAMBIA">
                                          GAMBIA
                                        </option>
                                        <option value="GEORGIA">
                                          GEORGIA
                                        </option>
                                        <option value="GERMANY">
                                          GERMANY
                                        </option>
                                        <option value="GHANA">GHANA</option>
                                        <option value="GIBRALTAR">
                                          GIBRALTAR
                                        </option>
                                        <option value="GREECE">
                                          GREECE
                                        </option>
                                        <option value="GREENLAND">
                                          GREENLAND
                                        </option>
                                        <option value="GRENADA">
                                          GRENADA
                                        </option>
                                        <option value="GUADELOUPE">
                                          GUADELOUPE
                                        </option>
                                        <option value="GUAM">GUAM</option>
                                        <option value="GUATEMALA">
                                          GUATEMALA
                                        </option>
                                        <option value="GUERNSEY">
                                          GUERNSEY
                                        </option>
                                        <option value="GUINEA">
                                          GUINEA
                                        </option>
                                        <option value="GUINEABISSAU">
                                          GUINEA-BISSAU
                                        </option>
                                        <option value="GUYANA">
                                          GUYANA
                                        </option>
                                        <option value="HAITI">HAITI</option>
                                        <option value="HEARD_ISLAND_AND_MCDONALD_ISLANDS">
                                          HEARD ISLAND AND MCDONALD ISLANDS
                                        </option>
                                        <option value="HOLY_SEE">
                                          HOLY SEE
                                        </option>
                                        <option value="HONDURAS">
                                          HONDURAS
                                        </option>
                                        <option value="HONG_KONG">
                                          HONG KONG
                                        </option>
                                        <option value="HUNGARY">
                                          HUNGARY
                                        </option>
                                        <option value="ICELAND">
                                          ICELAND
                                        </option>
                                        <option value="INDONESIA">
                                          INDONESIA
                                        </option>
                                        <option value="IRAN">
                                          IRAN, ISLAMIC REPUBLIC OF
                                        </option>
                                        <option value="IRAQ">IRAQ</option>
                                        <option value="IRELAND">
                                          IRELAND
                                        </option>
                                        <option value="ISLE_OF_MAN">
                                          ISLE_OF_MAN
                                        </option>
                                        <option value="ISRAEL">
                                          ISRAEL
                                        </option>
                                        <option value="ITALY">ITALY</option>
                                        <option value="JAMAICA">
                                          JAMAICA
                                        </option>
                                        <option value="JAPAN">JAPAN</option>
                                        <option value="JERSEY">
                                          JERSEY
                                        </option>
                                        <option value="JORDAN">
                                          JORDAN
                                        </option>
                                        <option value="KAZAKHSTAN">
                                          KAZAKHSTAN
                                        </option>
                                        <option value="KENYA">KENYA</option>
                                        <option value="KIRIBATI">
                                          KIRIBATI
                                        </option>
                                        <option value="KUWAIT">
                                          KUWAIT
                                        </option>
                                        <option value="KYRGYZSTAN">
                                          KYRGYZSTAN
                                        </option>
                                        <option value="LAO_PEOPLES_DEMOCRATIC_REPUBLIC">
                                          LAO PEOPLE'S DEMOCRATIC REPUBLIC
                                        </option>
                                        <option value="LATVIA">
                                          LATVIA
                                        </option>
                                        <option value="LEBANON">
                                          LEBANON
                                        </option>
                                        <option value="LESOTHO">
                                          LESOTHO
                                        </option>
                                        <option value="LIBERIA">
                                          LIBERIA
                                        </option>
                                        <option value="LIBYA">LIBYA</option>
                                        <option value="LIECHTENSTEIN">
                                          LIECHTENSTEIN
                                        </option>
                                        <option value="LITHUANIA">
                                          LITHUANIA
                                        </option>
                                        <option value="LUXEMBOURG">
                                          LUXEMBOURG
                                        </option>
                                        <option value="MACAO">MACAO</option>
                                        <option value="MACEDONIA">
                                          MACEDONIA
                                        </option>
                                        <option value="MADAGASCAR">
                                          MADAGASCAR
                                        </option>
                                        <option value="MALAWI">
                                          MALAWI
                                        </option>
                                        <option value="MALAYSIA">
                                          MALAYSIA
                                        </option>
                                        <option value="MALDIVES">
                                          MALDIVES
                                        </option>
                                        <option value="MALI">MALI</option>
                                        <option value="MALTA">MALTA</option>
                                        <option value="MARSHALL_ISLANDS">
                                          MARSHALL ISLANDS
                                        </option>
                                        <option value="MARTINIQUE">
                                          MARTINIQUE
                                        </option>
                                        <option value="MAURITANIA">
                                          MAURITANIA
                                        </option>
                                        <option value="MAURITIUS">
                                          MAURITIUS
                                        </option>
                                        <option value="MAYOTTE">
                                          MAYOTTE
                                        </option>
                                        <option value="MEXICO">
                                          MEXICO
                                        </option>
                                        <option value="MICRONESIA_FEDERATED_STATES_OF">
                                          MICRONESIA, FEDERATED STATES OF
                                        </option>
                                        <option value="MONACO">
                                          MONACO
                                        </option>
                                        <option value="MONGOLIA">
                                          MONGOLIA
                                        </option>
                                        <option value="MONTENEGRO">
                                          MONTENEGRO
                                        </option>
                                        <option value="MONTSERRAT">
                                          MONTSERRAT
                                        </option>
                                        <option value="MOROCCO">
                                          MOROCCO
                                        </option>
                                        <option value="MOZAMBIQUE">
                                          MOZAMBIQUE
                                        </option>
                                        <option value="MYANMAR">
                                          MYANMAR
                                        </option>
                                        <option value="NAMIBIA">
                                          NAMIBIA
                                        </option>
                                        <option value="NAURU">NAURU</option>
                                        <option value="NEPAL">NEPAL</option>
                                        <option value="NETHERLANDS">
                                          NETHERLANDS
                                        </option>
                                        <option value="NEW_CALEDONIA">
                                          NEW CALEDONIA
                                        </option>
                                        <option value="NEW_ZEALAND">
                                          NEW ZEALAND
                                        </option>
                                        <option value="NICARAGUA">
                                          NICARAGUA
                                        </option>
                                        <option value="NIGER">NIGER</option>
                                        <option value="NIGERIA">
                                          NIGERIA
                                        </option>
                                        <option value="NIUE">NIUE</option>
                                        <option value="NORFOLK_ISLAND">
                                          NORFOLK ISLAND
                                        </option>
                                        <option value="NORTHERN_MARIANA_ISLANDS">
                                          NORTHERN MARIANA ISLANDS
                                        </option>
                                        <option value="NORWAY">
                                          NORWAY
                                        </option>
                                        <option value="OMAN">OMAN</option>
                                        <option value="PAKISTAN">
                                          PAKISTAN
                                        </option>
                                        <option value="PALAU">PALAU</option>
                                        <option value="PALESTINE_STATE_OF">
                                          PALESTINE, STATE_OF
                                        </option>
                                        <option value="PANAMA">
                                          PANAMA
                                        </option>
                                        <option value="PAPUA_NEW_GUINEA">
                                          PAPUA NEW GUINEA
                                        </option>
                                        <option value="PARAGUAY">
                                          PARAGUAY
                                        </option>
                                        <option value="PERU">PERU</option>
                                        <option value="PHILIPPINES">
                                          PHILIPPINES
                                        </option>
                                        <option value="PITCAIRN">
                                          PITCAIRN
                                        </option>
                                        <option value="POLAND">
                                          POLAND
                                        </option>
                                        <option value="PORTUGAL">
                                          PORTUGAL
                                        </option>
                                        <option value="PUERTO_RICO">
                                          PUERTO RICO
                                        </option>
                                        <option value="QATAR">QATAR</option>
                                        <option value="REUNION">
                                          RÉUNION
                                        </option>
                                        <option value="REPUBLIC_OF_KOREA_SOUTH_KOREA">
                                          KOREA, REPUBLIC OF (SOUTH KOREA)
                                        </option>
                                        <option value="REPUBLIC_OF_MOLDOVA">
                                          MOLDOVA, REPUBLIC OF
                                        </option>
                                        <option value="ROMANIA">
                                          ROMANIA
                                        </option>
                                        <option value="RUSSIAN_FEDERATION">
                                          RUSSIAN FEDERATION
                                        </option>
                                        <option value="RWANDA">
                                          RWANDA
                                        </option>
                                        <option value="SAINT_BARTHELEMY">
                                          SAINT BARTHÉLEMY
                                        </option>
                                        <option value="SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA">
                                          SAINT HELENA, ASCENSION AND
                                          TRISTAN DA CUNHA
                                        </option>
                                        <option value="SAINT_KITTS_AND_NEVIS">
                                          SAINT KITTS AND NEVIS
                                        </option>
                                        <option value="SAINT_LUCIA">
                                          SAINT LUCIA
                                        </option>
                                        <option value="SAINT_MARTIN_FRENCH_PART">
                                          SAINT MARTIN (FRENCH PART)
                                        </option>
                                        <option value="SAINT_PIERRE_AND_MIQUELON">
                                          SAINT PIERRE AND MIQUELON
                                        </option>
                                        <option value="SAINT_VINCENT_AND_THE_GRENADINES">
                                          SAINT VINCENT AND THE GRENADINES
                                        </option>
                                        <option value="SAMOA">SAMOA</option>
                                        <option value="SAN_MARINO">
                                          SAN MARINO
                                        </option>
                                        <option value="SAO_TOME_AND_PRINCIPE">
                                          SAO TOME AND PRINCIPE
                                        </option>
                                        <option value="SAUDI_ARABIA">
                                          SAUDI ARABIA
                                        </option>
                                        <option value="SENEGAL">
                                          SENEGAL
                                        </option>
                                        <option value="SERBIA">
                                          SERBIA
                                        </option>
                                        <option value="SEYCHELLES">
                                          SEYCHELLES
                                        </option>
                                        <option value="SIERRA_LEONE">
                                          SIERRA LEONE
                                        </option>
                                        <option value="SINGAPORE">
                                          SINGAPORE
                                        </option>
                                        <option value="SINT_MAARTEN_DUTCH_PART">
                                          SINT MAARTEN (DUTCH PART)
                                        </option>
                                        <option value="SLOVAKIA">
                                          SLOVAKIA
                                        </option>
                                        <option value="SLOVENIA">
                                          SLOVENIA
                                        </option>
                                        <option value="SOLOMON_ISLANDS">
                                          SOLOMON ISLANDS
                                        </option>
                                        <option value="SOMALIA">
                                          SOMALIA
                                        </option>
                                        <option value="SOUTH_AFRICA">
                                          SOUTH AFRICA
                                        </option>
                                        <option value="SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS">
                                          SOUTH GEORGIA AND THE SOUTH
                                          SANDWICH ISLANDS
                                        </option>
                                        <option value="SOUTH_SUDAN">
                                          SOUTH SUDAN
                                        </option>
                                        <option value="SPAIN">SPAIN</option>
                                        <option value="SRI_LANKA">
                                          SRI LANKA
                                        </option>
                                        <option value="SUDAN">SUDAN</option>
                                        <option value="SURINAME">
                                          SURINAME
                                        </option>
                                        <option value="SVALBARD_AND_JAN_MAYEN">
                                          SVALBARD AND JAN MAYEN
                                        </option>
                                        <option value="SWAZILAND">
                                          SWAZILAND
                                        </option>
                                        <option value="SWEDEN">
                                          SWEDEN
                                        </option>
                                        <option value="SWITZERLAND">
                                          SWITZERLAND
                                        </option>
                                        <option value="SYRIAN_ARAB_REPUBLIC">
                                          SYRIAN ARAB REPUBLIC
                                        </option>
                                        <option value="TAIWAN_PROVINCE_OF_CHINA">
                                          TAIWAN, PROVINCE OF CHINA
                                        </option>
                                        <option value="TAJIKISTAN">
                                          TAJIKISTAN
                                        </option>
                                        <option value="THAILAND">
                                          THAILAND
                                        </option>
                                        <option value="TIMORLESTE">
                                          TIMOR-LESTE
                                        </option>
                                        <option value="TOGO">TOGO</option>
                                        <option value="TOKELAU">
                                          TOKELAU
                                        </option>
                                        <option value="TONGA">TONGA</option>
                                        <option value="TRINIDAD_AND_TOBAGO">
                                          TRINIDAD AND TOBAGO
                                        </option>
                                        <option value="TUNISIA">
                                          TUNISIA
                                        </option>
                                        <option value="TURKEY">
                                          TURKEY
                                        </option>
                                        <option value="TURKMENISTAN">
                                          TURKMENISTAN
                                        </option>
                                        <option value="TURKS_AND_CAICOS_ISLANDS">
                                          TURKS AND CAICOS ISLANDS
                                        </option>
                                        <option value="TUVALU">
                                          TUVALU
                                        </option>
                                        <option value="UGANDA">
                                          UGANDA
                                        </option>
                                        <option value="UKRAINE">
                                          UKRAINE
                                        </option>
                                        <option value="UNITED_ARAB_EMIRATES">
                                          UNITED ARAB EMIRATES
                                        </option>
                                        <option value="UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND">
                                          UNITED KINGDOM OF GREAT BRITAIN
                                          AND NORTHERN IRELAND
                                        </option>
                                        <option value="UNITED_REPUBLIC_OF_TANZANIA">
                                          TANZANIA, UNITED REPUBLIC OF
                                        </option>
                                        <option value="UNITED_STATES_OF_AMERICA">
                                          UNITED STATES OF AMERICA
                                        </option>
                                        <option value="UNITED_STATES_MINOR_OUTLYING_ISLANDS">
                                          UNITED STATES MINOR OUTLYING
                                          ISLANDS
                                        </option>
                                        <option value="URUGUAY">
                                          URUGUAY
                                        </option>
                                        <option value="UZBEKISTAN">
                                          UZBEKISTAN
                                        </option>
                                        <option value="VANUATU">
                                          VANUATU
                                        </option>
                                        <option value="VENEZUELA_BOLIVARIAN_REPUBLIC_OF">
                                          VENEZUELA, BOLIVARIAN REPUBLIC OF
                                        </option>
                                        <option value="VIETNAM">
                                          VIETNAM
                                        </option>
                                        <option value="VIRGIN_ISLANDS_BRITISH">
                                          VIRGIN_ISLANDS (BRITISH)
                                        </option>
                                        <option value="VIRGIN_ISLANDS_US">
                                          VIRGIN ISLANDS (U.S.)
                                        </option>
                                        <option value="WALLIS_AND_FUTUNA">
                                          WALLIS AND FUTUNA
                                        </option>
                                        <option value="WESTERN_SAHARA">
                                          WESTERN SAHARA
                                        </option>
                                        <option value="YEMEN">YEMEN</option>
                                        <option value="ZAMBIA">
                                          ZAMBIA
                                        </option>
                                        <option value="ZIMBABWE">
                                          ZIMBABWE
                                        </option>
                                        <option value="OTHERS">
                                          OTHERS
                                        </option>
                                        <option value="NotInit"></option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mb-3">
                                    <strong>Property Ownersip</strong>
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <!-- Owner of the property -->
                                    <div class="form-group">
                                      <label>Owner of the property</label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="Self">Self</option>
                                        <option value="Minor">Minor</option>
                                        <option value="Spouse">
                                          Spouse
                                        </option>
                                        <option value="Others">
                                          Others
                                        </option>
                                      </select>
                                    </div>
                                    <!-- Name of Owner -->
                                    <div class="form-group">
                                      <label>Name of Owner</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Name of Owner" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <!-- PAN of Owner -->
                                    <div class="form-group">
                                      <label>PAN of Owner</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your PAN of Owner" />
                                    </div>
                                    <!-- Percentage Share -->
                                    <div class="form-group">
                                      <label>Percentage Share</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Percentage Share" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mb-3">
                                    <strong>Co-Owners Details</strong>
                                  </h5>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-md-12">
                                    <table class="table table-responsive">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <!-- Name of Co-Owners -->
                                            <div class="form-group">
                                              <label class="m-0">Name of Co-Owners</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter Your Name of Co-Owners" />
                                            </div>
                                          </td>
                                          <td>
                                            <!-- PAN of Co-Owners -->
                                            <div class="form-group">
                                              <label class="m-0">PAN of Co-Owners</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter Your PAN of Co-Owners" />
                                            </div>
                                          </td>
                                          <td>
                                            <!-- Percentage Share -->
                                            <div class="form-group">
                                              <label class="m-0">Percentage Share</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter Your Percentage Share" />
                                            </div>
                                          </td>
                                          <td>
                                            <!-- Cancel Icon -->
                                            <div class="form-group d-flex" style="flex-direction: column">
                                              <label class="m-0">Cancel</label>
                                              <div class="cancel btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                      Add More
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5 class="mb-3">
                                    <strong>Interest Paid</strong>
                                  </h5>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="m-0">Financial year prior to completion
                                        of construction</label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="2022-2023">
                                          2022-2023
                                        </option>
                                        <option value="2021-2022">
                                          2021-2022
                                        </option>
                                        <option value="2020-2021">
                                          2020-2021
                                        </option>
                                        <option value="2019-2020">
                                          2019-2020
                                        </option>
                                        <option value="2018-2019">
                                          2018-2019
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mt-3">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>A. Interest paid during
                                        pre-construction period</label>
                                      <div class="form-group">
                                        <label>Gross Value</label>
                                        <input type="text" class="form-control rounded-0" placeholder="Enter Your Gross Value" />
                                      </div>
                                      <div class="form-group">
                                        <label>Percentage Share</label>
                                        <input type="number" class="form-control rounded-0" placeholder="Enter Your Percentage" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>B. Interest paid post-construction
                                        (Section 24B deduction)</label>
                                      <div class="form-group">
                                        <label>Gross Value</label>
                                        <input type="text" class="form-control rounded-0" placeholder="Enter Your Gross Value" />
                                      </div>
                                      <div class="form-group">
                                        <label>Percentage Share</label>
                                        <input type="number" class="form-control rounded-0" placeholder="Enter Your Percentage" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>C. Total Deduction (20% of A +
                                        B)</label>
                                      <div class="form-group">
                                        <label>Gross Value</label>
                                        <input type="text" class="form-control rounded-0" placeholder="Enter Your Gross Value" />
                                      </div>
                                      <div class="form-group">
                                        <label>Percentage Share</label>
                                        <input type="number" class="form-control rounded-0" placeholder="Enter Your Percentage" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- House Property ENd -->
                        <!-- Capital Gains Sourse -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <div class="row top_up_hide">
                            <div class="col-md-4 mt-5 text-center ml-auto mr-auto">
                              <h4>
                                <strong>Income From Capital Gains</strong>
                              </h4>
                              <p>
                                Did your client sell any asset (Mutual
                                Funds, shares, property, house, land,
                                building, etc) between the period of April
                                1, 2023 to March 31, 2024?
                              </p>
                              <p class="mt-3">
                                Note: Along with capital gains, we also
                                auto-process Intra-day trading and F&O
                                trading transactions from your capital gains
                                statements. Post processing, you can go to
                                Business & Profession page to check this
                                data and edit.
                              </p>
                              <button class="btn btn-block ic_bus_main bg-gradient-info btn-flat">
                                Add Income from Business
                              </button>
                            </div>
                          </div>

                          <div class="main_row">
                            <div class="row inr_tabs_button">
                              <div class="col-md-4 mt-5 mb-5 text-center ml-auto mr-auto">
                                <h4>
                                  <strong>Upload Capital Gains Report</strong>
                                </h4>
                                <p>
                                  Upload Capital Gains statement: Go to
                                  upload option, select broker and upload
                                  the P&L file.
                                </p>
                                <p class="pt-3">
                                  Excel tool: If fund house is not
                                  supported, download ClearTax template,
                                  simply copy details of transactions in the
                                  file and upload.
                                </p>
                                <input type="file" class="btn btn-block bg-gradient-info btn-flat" value="Upload File" />
                              </div>
                              <div class="col-md-12">
                                <h5><strong>Add Sale Entry</strong></h5>
                                <span>Enter data manually to report capital
                                  gains for the given asset types.</span>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn m-0 w-auto btn-block bg-gradient-info btn-flat">
                                    Shares/Debentures
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn mt-0 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Mutual Funds
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn mt-0 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Stock Options/RSUs
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn mt-0 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Land or Building (Property)
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn mt-0 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Any Other Assets
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-3 mt-4">
                                <div class="card card-body d-flex flex-column justify-content-between">
                                  <button class="buton_tabs_ac btn mt-0 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                    Deemed Capital Gains
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="rows_data"></div>

                          <div class="rows_data"></div>

                          <div class="rows_data"></div>

                          <div class="rows_data"></div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>Add Share for Capital Gain</h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Type of Share</label>
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
                                    <div class="form-group">
                                      <label>Date of Sale *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Sale" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Purchase" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 d-flex">
                                    <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                      Back
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>Add Share for Capital Gain</h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Type of Share</label>
                                      <select name="" class="form-control" id="">
                                        <option>Select Option</option>
                                        <option value="ListedSecurities">
                                          Mutual Fund(Equity)
                                        </option>
                                        <option value="NonListedSecurities">
                                          Mutual Fund(Other than Equity)
                                        </option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Sale *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Sale" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Purchase" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 d-flex">
                                    <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                      Back
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>Add Share for Capital Gain</h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Type of Share</label>
                                      <select name="" class="form-control" id="">
                                        <option>Select Option</option>
                                        <option value="ListedSecurities">
                                          Indian Listed Shares
                                        </option>
                                        <option value="NonListedSecurities">
                                          Indian Non-Listed Shares
                                        </option>
                                        <option value="NonListedSecurities">
                                          Foreign Listed Shares
                                        </option>
                                        <option value="NonListedSecurities">
                                          Foreign Non-Listed Shares
                                        </option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Sale *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Sale" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Purchase" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 d-flex">
                                    <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                      Back
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>
                                    Add Capital Gain (Other than Shares)
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Date of Sale *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Sale" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Purchase" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 d-flex">
                                    <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                      Back
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>
                                    Add Capital Gain (Other than Shares)
                                  </h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Date of Sale *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Sale" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *</label>
                                      <input type="date" class="form-control" placeholder="Enter Your Date of Purchase" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 d-flex">
                                    <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                    <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                      Back
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="rows_data">
                            <form action="#">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>Add Deemed Capital Gains</h5>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="main__last">
                                      <div class="form-check pb-3 mt-3 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                        <label class="form-check-label" for="defaultCheck1">
                                          <strong>
                                            Short Term Capital Gain</strong>
                                        </label>
                                      </div>

                                      <p>
                                        Whether any amount of unutilized
                                        capital gain on asset transferred
                                        during the previous years shown
                                        below was deposited in the Capital
                                        Gains Accounts Scheme within due
                                        date for that year?
                                      </p>

                                      <div class="d-flex mb-4 align-items-center" style="gap: 10px">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                                          <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
                                          <label class="form-check-label" for="exampleRadios2">
                                            No
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" />
                                          <label class="form-check-label" for="exampleRadios3">
                                            Not Applicable
                                          </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label>Any other amount deemed to be
                                          short term capital gains
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your amount" />
                                      </div>
                                      <div class="form-group">
                                        <label>Total amount deemed to be short
                                          term capital gains
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your amount" />
                                      </div>
                                    </div>

                                    <div class="main__last mt-5">
                                      <div class="form-check pb-3 mt-3 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                        <label class="form-check-label" for="defaultCheck1">
                                          <strong>
                                            Long Term Capital Gain</strong>
                                        </label>
                                      </div>

                                      <p>
                                        Whether any amount of unutilized
                                        capital gain on asset transferred
                                        during the previous years shown
                                        below was deposited in the Capital
                                        Gains Accounts Scheme within due
                                        date for that year?
                                      </p>

                                      <div class="d-flex mb-4 align-items-center" style="gap: 10px">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                                          <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
                                          <label class="form-check-label" for="exampleRadios2">
                                            No
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" />
                                          <label class="form-check-label" for="exampleRadios3">
                                            Not Applicable
                                          </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label>Any other amount deemed to be
                                          long term capital gains
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your amount" />
                                      </div>
                                      <div class="form-group">
                                        <label>Total amount deemed to be long
                                          term capital gains
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your amount" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- Capital Gains Sourse -->
                        <!-- VDA FORM -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong> VDA FORM</strong>
                          </h5>
                          @include('User.income_forms.vda_income.vda_income')
                        </div>
                        <!-- VDA FORM -->

                        <!-- Exempt FORM -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong>Exempt Income</strong>
                          </h5>
                          @include('User.income_forms.exempt_income.exempt_income')
                        </div>
                        <!-- VDA FORM -->
                        <!-- Others Income Sourse -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong> Income from other sources</strong>
                          </h5>

                          <div class="card card-body">
                            <h5 class="pt-3">
                              <strong> Interest Income</strong>
                            </h5>
                            <div class="row mt-3">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Interest Income from Deposits</label>
                                  <input type="text" class="form-control rounded-0" placeholder="Enter Your Interest Income" />
                                  <span>Interest from sweep accounts converted
                                    to FDs, post-office fixed deposits also
                                    specified here</span>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Interest on PF</label>
                                  <select name="" class="form-control rounded-0">
                                    <option>Select Option</option>
                                    <option value="NotInitialized">
                                      Select Type
                                    </option>
                                    <option value="FirstProvisoSec1011">
                                      Interest on EPF Balance- 1st Proviso
                                      to sec 10(11)
                                    </option>
                                    <option value="SecondProvisoSec1011">
                                      Interest on EPF Balance- 2nd Proviso
                                      to sec 10(11)
                                    </option>
                                    <option value="FirstProvisoSec1012">
                                      Interest on RPF Balance- 1st Proviso
                                      to sec 10(12)
                                    </option>
                                    <option value="SecondProvisoSec1012">
                                      Interest on RPF Balance- 2nd Proviso
                                      to sec 10(12)
                                    </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Amount</label>
                                  <input type="text" class="form-control rounded-0" placeholder="Enter Your Amount" />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card card-body">
                            <h5 class="pt-3">
                              <strong> Other Income</strong>
                            </h5>

                            <!-- 
                                <div class="row mt-3">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Other Income</label>
                                      <input
                                        type="text"
                                        class="form-control rounded-0"
                                        placeholder="Enter Your Other Income"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Amount</label>
                                      <input
                                        type="text"
                                        class="form-control rounded-0"
                                        placeholder="Enter Your Amount"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Date</label>
                                      <input
                                        type="date"
                                        class="form-control rounded-0"
                                        placeholder="dd/mm/yyyy"
                                      />
                                    </div>
                                  </div>
                                </div> -->

                            <div class="row">
                              <div class="form_heading">
                                <h5 class="mt-3">
                                  <strong>Dividend Income from Domestic
                                    Company</strong>
                                </h5>
                              </div>
                              <div class="col-md-12">
                                <table class="table table-responsive">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Other Income</label>
                                          <input type="text" class="form-control rounded-0" placeholder="Enter Your Nutration" />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Amount</label>
                                          <input type="number" class="form-control rounded-0" placeholder="Enter your Amount" />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Date of Receipt
                                          </label>
                                          <input type="date" class="form-control rounded-0" placeholder="Enter Your Date" />
                                        </div>
                                      </td>

                                      <td>
                                        <!-- Cancel Icon -->
                                        <div class="form-group d-flex" style="flex-direction: column">
                                          <label class="m-0">Cancel</label>
                                          <div class="cancel btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                  Add More
                                </button>
                              </div>
                            </div>

                            <div class="row">
                              <div class="form_heading">
                                <h5 class="mt-3">
                                  <strong>Dividend Income from Mutual Funds
                                  </strong>
                                </h5>
                                <span>Dividend from investments in Mutual
                                  Funds, ULIPs, UTI
                                </span>
                              </div>
                              <div class="col-md-12">
                                <table class="table table-responsive">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Other Income</label>
                                          <input type="text" class="form-control rounded-0" placeholder="Enter Your Nutration" />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Amount</label>
                                          <input type="number" class="form-control rounded-0" placeholder="Enter your Amount" />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Date of Receipt
                                          </label>
                                          <input type="date" class="form-control rounded-0" placeholder="Enter Your Date" />
                                        </div>
                                      </td>

                                      <td>
                                        <!-- Cancel Icon -->
                                        <div class="form-group d-flex" style="flex-direction: column">
                                          <label class="m-0">Cancel</label>
                                          <div class="cancel btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                  Add More
                                </button>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="row align-items-center">
                                  <div class="col-md-10">
                                    <div class="form-group">
                                      <label>Any Other Income</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Interest Income" />
                                      <span>Report any other income which is
                                        not part of Income from Salary,
                                        House Property, Capital Gain or
                                        Business and Profession.
                                      </span>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="icon_throw">
                                      <i class="fas fa-list"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12 div_throw">
                                <table class="table table-responsive">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Source</label>
                                          <select class="form-control rounded-0">
                                            <option>Select Option</option>
                                            <option value="Source_RentalIncomeFromMachinery">
                                              Rental income from machinery,
                                              plants, buildings, etc., Gross
                                            </option>
                                            <option value="Source_FamilyPension">
                                              Family Pension
                                            </option>
                                            <option value="Source_Dividend_Income_taxable">
                                              56(2)(i) - Dividend Income
                                              (Taxable)
                                            </option>
                                            <option value="Source_5BB">
                                              115BB - Winnings from
                                              lotteries, puzzles, races,card
                                              games etc.
                                            </option>
                                            <option value="Source_5BBJ">
                                              115BBJ - Winnings from online
                                              gaming
                                            </option>
                                            <option value="Source_US68">
                                              Cash credits u/s 68
                                            </option>
                                            <option value="Source_US69">
                                              Unexplained investments u/s 69
                                            </option>
                                            <option value="Source_US69A">
                                              Unexplained money etc. u/s 69A
                                            </option>
                                            <option value="Source_US69B">
                                              Undisclosed investments etc.
                                              u/s 69B
                                            </option>
                                            <option value="Source_US69C">
                                              Unexplained expenditurte etc.
                                              u/s 69C
                                            </option>
                                            <option value="Source_US69D">
                                              Amount borrowed or repaid on
                                              hundi u/s 69D
                                            </option>
                                            <option value="Source_5ACA1a">
                                              115ACA(1)(a) - Income from GDR
                                              purchased in foreign currency
                                              -resident
                                            </option>
                                            <option value="Source_5BBF">
                                              115BBF - Tax on income from
                                              patent
                                            </option>
                                            <option value="Source_Others">
                                              Others
                                            </option>
                                          </select>
                                        </div>
                                      </td>

                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Narration (Any Other
                                            Miscellaneous Income)</label>
                                          <input type="text" class="form-control rounded-0" placeholder="Enter Your Nutration" />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Amount</label>
                                          <input type="number" class="form-control rounded-0" placeholder="Enter Your Amount" />
                                        </div>
                                      </td>

                                      <td>
                                        <!-- Cancel Icon -->
                                        <div class="form-group d-flex" style="flex-direction: column">
                                          <label class="m-0">Cancel</label>
                                          <div class="cancel btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                  Add More
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="card card-body">
                            <h5 class="pt-3">
                              <strong>Dividend Income from Mutual Funds Dividend
                                <br />
                                from investments in Mutual Funds, ULIPs,
                                UTI</strong>
                            </h5>
                            <div class="row mt-3">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Other Income</label>
                                  <input type="text" class="form-control rounded-0" placeholder="Enter Your Other Income" />
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Amount</label>
                                  <input type="text" class="form-control rounded-0" placeholder="Enter Your Amount" />
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Date</label>
                                  <input type="date" class="form-control rounded-0" placeholder="dd/mm/yyyy" />
                                </div>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Any Other Income</label>
                                  <input type="text" class="form-control rounded-0" placeholder="Enter Your Other Income" />
                                  <span>Report any other income which is not
                                    part of Income from Salary, House
                                    Property, Capital Gain or Business and
                                    Profession.</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card card-body">
                            <h5 class="pt-3">
                              <strong> Income from Gifts </strong>
                            </h5>
                            <div class="row">
                              <div class="col-md-12">
                                <span>
                                  Enter details of income to be reported u/s
                                  56(2)(x) Following gifts are non-taxable
                                  and need not be reported in the tax
                                  return.
                                </span>
                                <ul>
                                  <li>
                                    Gift recieved from Relative, on occasion
                                    of marriage, will, inheritance, Trust
                                    are not taxable
                                  </li>
                                  <li>
                                    Gift recieved other than listed assets
                                    below are not taxable
                                  </li>
                                  <li>
                                    Gift received upto Rs 50,000 is non
                                    taxable
                                  </li>
                                </ul>
                              </div>

                              <div class="col-md-12">
                                <table class="table table-responsive">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-group">
                                          <label>Nature of Gift Assest</label>
                                          <select name="" class="form-control rounded-0">
                                            <option selected="selected" value="WithoutConsideration">
                                              Money / Cash
                                            </option>
                                            <option value="InadequateConsideration">
                                              Land and Building
                                            </option>
                                            <option value="InadequateConsideration">
                                              Shares / Securities
                                            </option>
                                            <option value="InadequateConsideration">
                                              Jewellery / Bullion
                                            </option>
                                            <option value="InadequateConsideration">
                                              Archaeological collections
                                            </option>
                                            <option value="InadequateConsideration">
                                              Drawings / Paintings /
                                              Sculptures or any work of art
                                            </option>
                                          </select>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Taxable Amount
                                          </label>
                                          <input type="text" class="form-control rounded-0" placeholder="Enter Your Taxable Amount
                                              " />
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                          <label class="m-0">Description</label>
                                          <input type="number" class="form-control rounded-0" placeholder="Enter Your Description" />
                                        </div>
                                      </td>
                                      <td>
                                        <!-- Cancel Icon -->
                                        <div class="form-group d-flex" style="flex-direction: column">
                                          <label class="m-0">Cancel</label>
                                          <div class="cancel btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="row mt-4">
                            <div class="col-md-12 d-flex">
                              <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                            </div>
                          </div>
                        </div>
                        <!-- Others Income Sourse -->
                      </div>
                    </div>

                    <div class="p-tab-cntnt inner_tabs_collec">
                      <div class="p-tab-c1">
                        <span>03 Deduction</span>

                        <div class="inerr_taabs-tab-btns mb-4">
                          <ul>
                            <li class="btn btn-block btn-outline-primary btn-flat active">
                              <span>80C to 80G</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>MORE DEDUCTIONS</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>Other Deductions</span>
                            </li>
                          </ul>
                        </div>

                        <!-- 80C to 80G area Start -->
                        <div class="mt-3 inerr-tab-cntnt active">
                          <h5 class="pt-3">
                            <strong>Investments under Section 80C</strong>
                          </h5>
                          <form action="#" class="deducTion_form_remove">
                            <div class="row card card-body">
                              <div class="row mt-3">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <span>You can claim deductions of up to Rs.
                                      1,50,000 under Section 80C.
                                      Contributions to LIC, Fixed Deposits,
                                      NSC, PF, PPF, Mutual Funds etc. are
                                      covered in this section.</span>
                                    <label>Total 80C Investments</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Total" />
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <h6>
                                    <strong>
                                      Breakup of 80C Investments
                                      (optional)</strong>
                                  </h6>
                                  <span>Please note that this information will
                                    not be sent to the Tax Department.
                                  </span>
                                  <div class="form-group d-flex mt-4">
                                    <label class="w-50">Premium on Life Insurance</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">Fixed Deposits</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">ELSS Mutual Funds</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">PPF</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">EPF</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">School Fees</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">Principle on Home Loan</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                  <div class="form-group d-flex">
                                    <label class="w-50">Others</label>
                                    <input type="number" class="form-control rounded-0" placeholder="0" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="card card-body">
                                <div class="form_heading">
                                  <h5>
                                    <strong>
                                      Section 80G: Donations to charitable
                                      organizations</strong>
                                  </h5>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-md-12">
                                    <span>The government requires itemized
                                      details of donations for Section
                                      80G.</span>
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <button type="button" class="deducTion_button btn btn-primary">
                                        Add or Remove Donation under Section
                                        80G
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>

                          <form action="#" class="deducTion_form">
                            <div class="row card card-body">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <h3>
                                    <strong>Add Donation Entry for Section
                                      80G</strong>
                                  </h3>
                                </div>
                              </div>

                              <div class="col-md-12 card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Common 80G Organizations
                                      </label>
                                      <select name="" class="form-control rounded-0">
                                        <option value="" selected="Common 80G Organizations">
                                          Common 80G Organizations
                                        </option>
                                        <option value="AAETP3993P">
                                          PM CARES - COVID-19 RELIEF FUND
                                        </option>
                                        <option value="AAATC0294J">
                                          MAHARASHTRA CM COVID-19 RELIEF
                                          FUND
                                        </option>
                                        <option value="AAAAC6443N">
                                          WEST BENGAL STATE EMERGENCY RELIEF
                                          FUND-COVID 19
                                        </option>
                                        <option value="AAAGC0038F">
                                          TAMIL NADU CM PUBLIC RELIEF
                                          FUND-COVID 19
                                        </option>
                                        <option value="AAATL5393B">
                                          NCT DELHI LT. GOVERNER/CHIEF
                                          MINISTER RELIEF FUND-COVID 19
                                        </option>
                                        <option value="AACTP4637Q">
                                          PRIME MINISTERS NATIONAL RELIEF
                                          FUND
                                        </option>
                                        <option value="AAATI4485R">
                                          INDIAN NAVAL BENEVOLENT
                                          ASSOCIATION (INBA)
                                        </option>
                                        <option value="AAATG2587L">
                                          GUJARAT CHIEF MINISTER'S RELIEF
                                          FUND
                                        </option>
                                        <option value="AAAAB5052C">
                                          BAL RAKSHA BHARAT
                                        </option>
                                        <option value="AAAAK7721R">
                                          KALINGA INSTITUTE OF SOCIAL
                                          SCIENCES
                                        </option>
                                        <option value="AAATV4341F">
                                          VIDYARAMBHAM TRUST
                                        </option>
                                        <option value="AAATL0949F">
                                          LITTLE SISTERS OF THE POOR
                                        </option>
                                        <option value="AAAAW0007G">
                                          WORLD VISION INDIA
                                        </option>
                                        <option value="AAAGA0132Q">
                                          ANDGRAPRADESH CHIEF MINISTER
                                          RELIEF FUND
                                        </option>
                                        <option value="AAATS4990B">
                                          SHRI VINAYAKARAO SHIRGAOKAR
                                          PRATISTHAN
                                        </option>
                                        <option value="AAATC0742K">
                                          CHARITIES AID FOUNDATION OF INDIA
                                        </option>
                                        <option value="AAATC2812Q">
                                          CRY CHILD RELIEF AND YOU
                                        </option>
                                        <option value="AAAGM0036M">
                                          MUKHYA MANTRI RAHAT KOSH
                                          UTTARAKHAND
                                        </option>
                                        <option value="AABCG2322D">
                                          GIVE FOUNDATION
                                        </option>
                                        <option value="AAATC8468J">
                                          CHILD CARE FOUNDATION
                                        </option>
                                        <option value="AABTR7683M">
                                          RELIEF INDIA TRUST
                                        </option>
                                        <option value="AADTS5435N">
                                          SOS CHILDRENS VILLAGE OF INDIA
                                        </option>
                                        <option value="AABAJ0569M">
                                          JKG EDUCATIONAL AND WELFARE
                                          SOCIETY
                                        </option>
                                        <option value="AAATS6567N">
                                          SAMARTHANAM TRUST FOR DISABLED
                                        </option>
                                        <option value="AAATT1309F">
                                          THE TATA RELIEF COMMITTEE
                                        </option>
                                        <option value="AAATC4667K">
                                          ASSAM CHIEF MINISTER's RELIEF FUND
                                        </option>
                                        <option value="AAAGD0584M">
                                          KERALA CHIEF MINISTER's DISTRESS
                                          RELIEF FUND
                                        </option>
                                        <option value="GGGGG0000G">
                                          KARNATAKA CM RELIEF FUND
                                        </option>
                                        <option value="AAATO4364P">
                                          ODISHA - CHIEF MINISTER'S RELIEF
                                          FUND
                                        </option>
                                      </select>
                                    </div>
                                    <div class="py-4">
                                      <p>
                                        Once you select an option, clearTax
                                        will automatically populate details
                                        for you. If your donee is not in the
                                        above list, please enter the details
                                        below manually.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12 card card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Name of Donee</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Name of Donee" />
                                    </div>

                                    <div class="form-group">
                                      <label>Donation Amount (Cash) </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Name of Cash" />
                                    </div>

                                    <div class="form-group">
                                      <label>Donation Amount (Other modes like
                                        e-pay, cheque, DD etc)
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Donation Amount" />
                                    </div>
                                    <div class="form-group">
                                      <label>PAN of Donee </label>
                                      <br />
                                      <span>Use 'GGGGG0000G' as PAN number if
                                        you have donated to Government Funds
                                        that do not have a PAN.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your PAN of Donee" />
                                    </div>

                                    <div class="form-group">
                                      <label>Limit On Deduction * </label>
                                      <br />
                                      <span>For most people, the limit on
                                        deduction is Subject to Income.
                                      </span>
                                      <select name="" class="form-control rounded-0">
                                        <option value="">No Limit</option>
                                        <option value="AAETP3993P" selecte="Subject To Income">
                                          Subject To Income
                                        </option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Qualifying Percentage *
                                      </label>
                                      <br />
                                      <span>For most people, this percentage is
                                        50%
                                      </span>
                                      <select name="" class="form-control rounded-0">
                                        <option value="AAETP3993P" selecte="50%">
                                          50%
                                        </option>
                                        <option value="">100%</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12 card card-body">
                                <h3>
                                  <strong> Address of Donee </strong>
                                </h3>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Pincode </label>
                                      <input type="number" class="form-control rounded-0" placeholder="Enter Your Pincode " />
                                    </div>

                                    <div class="form-group">
                                      <label>Address Line * </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Address" />
                                    </div>

                                    <div class="form-group">
                                      <label>Town / City * </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Town" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-md-12 d-flex">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                <button class="Back_button_deduc btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                  Back
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- 80C to 80G area Start -->

                        <!-- MORe Deductions area -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong>
                              More deductions Under Section 80</strong>
                          </h5>

                          <form action="#">
                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80D: Deductions for Medical
                                    Insurance
                                  </strong>
                                </h5>
                                <span>
                                  Deductions for Medical Insurance or
                                  Preventive Health Check-Up fees or Medical
                                  Expenditure incurred by you.
                                </span>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>For Self and Family </label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="LandOrBuilding">
                                        Below 60 years
                                      </option>
                                      <option value="SharesOrSecurities">
                                        Above 60 years
                                      </option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>For Parents </label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="LandOrBuilding">
                                        Below 60 years
                                      </option>
                                      <option value="SharesOrSecurities">
                                        Above 60 years
                                      </option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Medical Insurance Premium
                                        </label>
                                        <br />
                                        <span>Medical insurance premium paid by
                                          you for Self, Spouse, Dependent
                                          Children and Parents.</span>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group w-100">
                                        <input type="text" class="form-control rounded-0" placeholder="Enter your" />
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group w-100">
                                        <input type="text" class="form-control rounded-0" placeholder="Enter your" />
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Preventive Health Check-Up Fees
                                        </label>
                                        <br />
                                        <span>Health check-up expenses paid by
                                          you for Self, Spouse, Dependent
                                          Children and Parents.</span>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group w-100">
                                        <input type="text" class="form-control rounded-0" placeholder="Enter your" />
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group w-100">
                                        <input type="text" class="form-control rounded-0" placeholder="Enter your" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80E - Education Loan on higher
                                    studies (Graduate or PostGraduate)
                                  </strong>
                                </h5>
                                <span>
                                  You can claim tax deduction on the
                                  interest paid on an education loan for
                                  higher studies
                                </span>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Interest on higher education loan
                                      paid this year
                                    </label>
                                    <span>Interest paid by you on loan taken
                                      out by you. Loan can be for yourself
                                      or your spouse or your children
                                    </span>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter your text" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80CCC - Contribution to Pension
                                    Plan / Annuity Fund
                                  </strong>
                                </h5>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Contribution amount to Pension Plan /
                                      Annuity Fund for Section 80CCC
                                    </label>

                                    <input type="number" class="form-control rounded-0" placeholder="Enter your number" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80CCD (1) and (1B) - Employee
                                    Contribution to New Pension Scheme
                                    (NPS).
                                  </strong>
                                </h5>
                                <span>Employee's contribution to the New
                                  Pension System (NPS).
                                </span>
                                <p>
                                  Please enter your contribution to NPS for
                                  Section 80CCD(1B).
                                </p>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Contribution towards Section
                                      80CCD(1B)
                                    </label>

                                    <input type="text" class="form-control rounded-0" placeholder="Enter your text" />
                                  </div>
                                  <div class="form-group">
                                    <p>
                                      Please enter your contribution to NPS
                                      for Section 80CCD(1).
                                    </p>
                                    <label>Contribution towards Section 80CCD(1)
                                    </label>

                                    <input type="number" class="form-control rounded-0" placeholder="Enter your number" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80CCD(2) - Employer Contribution
                                    in NPS
                                  </strong>
                                </h5>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Employers contribution towards NPS
                                      (upto 10% of Salary).
                                    </label>

                                    <input type="text" class="form-control rounded-0" placeholder="Enter your text" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-4">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- MORe Deductions area -->

                        <!-- Other Deductions area Start -->
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong>
                              More deductions Under Section 80</strong>
                            <br />
                          </h5>

                          <form action="#">
                            <div class="card card-body">
                              <h3>
                                <strong>
                                  Section 80DD - Disabled dependent
                                  deduction. (Spouse/Children/Parents)
                                </strong>
                              </h3>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Type of Disability</label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="FortyPercentDisability">
                                        40% Disability
                                      </option>
                                      <option value="SevereDisability">
                                        Severe Disability
                                      </option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>PAN of Dependent</label>
                                    <input type="number" class="form-control rounded-0" placeholder="Enter PAN of Dependent" />
                                  </div>
                                  <div class="form-group">
                                    <label>Form 10IA Filing Date</label>
                                    <input type="date" class="form-control rounded-0" placeholder="Enter Filing Date" />
                                  </div>
                                  <div class="form-group">
                                    <label>UDID No. (if available)</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter UDID No." />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Dependent Type*</label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="Spouse">Spouse</option>
                                      <option value="Son">Son</option>
                                      <option value="Daughter">
                                        Daughter
                                      </option>
                                      <option value="Father">Father</option>
                                      <option value="Mother">Mother</option>
                                      <option value="Brother">
                                        Brother
                                      </option>
                                      <option value="Sister">Sister</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Aadhaar of Dependent</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Aadhaar of Dependent" />
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Form 10IA Ack No.</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Form 10IA Ack No." />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong> Section 80U - Disability</strong>
                                </h5>
                              </div>

                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Type of Disability</label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="FortyPercentDisability">
                                        40% Disability
                                      </option>
                                      <option value="SevereDisability">
                                        Severe Disability
                                      </option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Form 10IA Filing Date</label>
                                    <input type="date" class="form-control rounded-0" placeholder="Enter Filing Date" />
                                  </div>
                                  <div class="form-group">
                                    <label>UDID No. (if available)</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter UDID No." />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Dependent Type*</label>
                                    <select name="" class="form-control rounded-0">
                                      <option>Select Option</option>
                                      <option value="Spouse">Spouse</option>
                                      <option value="Son">Son</option>
                                      <option value="Daughter">
                                        Daughter
                                      </option>
                                      <option value="Father">Father</option>
                                      <option value="Mother">Mother</option>
                                      <option value="Brother">
                                        Brother
                                      </option>
                                      <option value="Sister">Sister</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Form 10IA Ack No.</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Form 10IA Ack No." />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Section 80GGC - Contribution To
                                    Political Party
                                  </strong>
                                </h5>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Amount paid via cash</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Amount" />
                                  </div>
                                  <div class="form-group">
                                    <label>Transaction Ref No. (Optional)</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Transaction Ref No." />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Contribution Date (DD/MM/YYYY)</label>
                                    <input type="date" class="form-control rounded-0" placeholder="Enter Contribution Date" />
                                  </div>
                                  <div class="form-group">
                                    <label>FSC Code of Bank (Optional)</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter FSC Code" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-4">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- Other Deductions area Start -->
                      </div>
                    </div>

                    <div class="p-tab-cntnt inner_tabs_collec">
                      <div class="p-tab-c1">
                        <span>04 TDS/Taxes</span>

                        <div class="inerr_taabs-tab-btns mb-4">
                          <ul>
                            <li class="btn btn-block btn-outline-primary btn-flat active">
                              <span>TDS/TSC</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>Self Assessment</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>Other Details</span>
                            </li>
                          </ul>
                        </div>

                        <div class="mt-3 inerr-tab-cntnt active">
                          <div class="row tds-tsx-div">
                            <h5 class="pt-3">
                              <strong>
                                Add a TDS entry (Tax Deducted at
                                Source)</strong>
                            </h5>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>01</strong></h5>
                                  <h5>
                                    <strong>

                                      Non Salary TDS
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    In this section, add TDS entries on
                                    interest income, professional or
                                    consulting income, etc. (Other than TDS on
                                    Salary and Sale of Immovable Property).
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Entry
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>2</strong></h5>
                                  <h5>
                                    <strong>

                                      TDS on Sale/Rent of Immovable Property
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you sell/rent land, house, property or
                                    building etc (immovable property) etc, the
                                    buyer/tenant may have deducted TDS at the
                                    rate of 1% on the sale price of the
                                    property/rental and issued you a TDS
                                    certificate.You ne ed to specify those TDS
                                    deduction details here.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Entry
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>3</strong></h5>
                                  <h5>
                                    <strong>

                                      Taxes Collected at Source (TCS)
                                  </h5>
                                  </strong>
                                  <span class="w-75 d-block">
                                    In this section, you can add TCS entries
                                    (For example - on purchase of cars).
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Entry
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>4</strong></h5>
                                  <h5>
                                    <strong>
                                      Tax Deferred on ESOPs (Section 80IAC)
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    In this section, you can add deferred tax
                                    details if you have sold ESOPs in a
                                    startup. Currently, you can only add tax
                                    deffered for one employer/startup
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Entry
                                </button>
                              </div>

                              <div class="row mt-4">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>PAN of the Employer (Startup) *</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Pan Employer" />
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>DPIIT Reg. No of the Employer
                                      (Startup)</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter DPIIT Reg" />
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Add a TDS entry (Tax Deducted at Source)</strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5>
                                  <strong> Tax Deducted At Source </strong>
                                </h5>

                                <div class="row mt-3">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>TAN of Deductor *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter TAN of Deductor" />
                                    </div>
                                    <div class="form-group">
                                      <label>Name of Deductor *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Deductor" />
                                    </div>
                                    <div class="form-group">
                                      <label>Total Tax Deducted *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Total Tax Deducted" />
                                      <span>Leave it blank if not deducted in the name of assessee.</span>
                                    </div>
                                    <div class="form-group">
                                      <label>Tax Deducted claimed for this year *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Tax Deducted claimed for this year" />
                                      <span>Usually this amount is same as Total Tax Deducted.</span>
                                    </div>
                                    <div class="form-group">
                                      <label>Income against which TDS was deducted *</label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Income against which TDS was deducted" />
                                    </div>
                                    <div class="form-group">
                                      <label>Type of Income</label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="OtherSources">Other Sources</option>
                                        <option value="HouseProperty">House Property</option>
                                        <option value="BusinessAndProfession">
                                          Business &amp; Profession
                                        </option>
                                        <option value="CapitalGain">Capital Gain</option>
                                        <option value="ExemptIncome">Exempt Income</option>
                                        <option value="NotApplicableUs194N">
                                          Not Applicable - TDS us 194N
                                        </option>
                                        <option value="CryptoCg">Crypto - Capital Gain</option>
                                        <option value="CryptoBp">
                                          Crypto - Business &amp; Profession
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong>Add a TDS entry (Tax Deducted at Source) for Sale/Rent of Immovable Property
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5>
                                  <strong> Tax Deducted At Source for Sale/Rent of Immovable Property
                                  </strong>
                                </h5>
                                <span>
                                  Provide this information from TDS certificate provided by the property buyer
                                </span>

                                <div class="row mt-3">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>PAN of Property Buyer / Tenant *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter pan of Property" />
                                    </div>
                                    <div class="form-group">
                                      <label>Name of the Property Buyer / Tenant *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Property" />
                                    </div>
                                    <div class="form-group">
                                      <label>Tax Deducted claimed for this year *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Total Tax Deducted" />
                                      <span>Usually this amount is same as Total Tax Deducted.
                                      </span>
                                    </div>
                                    <div class="form-group">
                                      <label>Income against which TDS was deducted *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Income against" />
                                    </div>
                                    <div class="form-group">
                                      <label>Income against which TDS was deducted</label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="CapitalGain">Capital Gain</option>
                                        <option value="Property">
                                          House Property
                                        </option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Financial Year in which TDS was deducted
                                      </label>
                                      <br>
                                      <span>
                                        Usually this is the same as the Financial Year of the return (2023-2024).

                                      </span>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option selected="selected" value="2023">2023-2024</option>
                                        <option value="2022">2022-2023</option>
                                        <option value="2021">2021-2022</option>
                                        <option value="2020">2020-2021</option>
                                        <option value="2019">2019-2020</option>
                                        <option value="2018">2018-2019</option>
                                        <option value="2017">2017-2018</option>
                                        <option value="2016">2016-2017</option>
                                        <option value="2015">2015-2016</option>
                                        <option value="2014">2014-2015</option>
                                        <option value="2013">2013-2014</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong>Add a TCS entry (Tax Collected at Source)


                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5>
                                  <strong> Tax Collected At Source
                                  </strong>
                                </h5>
                                <span>
                                  Provide this information from TCS certificate provided by deductor
                                </span>

                                <div class="row mt-3">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>TAN of Collector *

                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter TAN of Collector" />
                                    </div>
                                    <div class="form-group">
                                      <label>Name of Collector *

                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Collector *
                                            " />
                                    </div>
                                    <div class="form-group">
                                      <label>Total Tax Collected *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Total Tax Deducted" />
                                      </span>
                                    </div>
                                    <div class="form-group">
                                      <label>Tax Collected claimed for this year *

                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Tax Collected" />
                                      <span>
                                        Usually this amount is same as Total Tax Collected.
                                      </span>
                                    </div>
                                    <div class="form-group">
                                      <label>Expenditure against which TCS was deducted *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your Expenditure" />
                                    </div>
                                    <div class="form-group">
                                      <label>Financial Year in which TCS was collected </label>
                                      <br>
                                      <span>
                                        Usually this is the same as the Financial Year of the return (2023-2024).
                                      </span>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="2023">2023-2024</option>
                                        <option value="2022">2022-2023</option>
                                        <option value="2021">2021-2022</option>
                                        <option value="2020">2020-2021</option>
                                        <option value="2019">2019-2020</option>
                                        <option value="2018">2018-2019</option>
                                        <option value="2017">2017-2018</option>
                                        <option value="2016">2016-2017</option>
                                        <option value="2015">2015-2016</option>
                                        <option value="2014">2014-2015</option>
                                        <option value="2013">2013-2014</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong>Add Deferred Tax on StartUp ESOPs
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5>
                                  <strong>Tax Deferred on StartUp ESOPs
                                  </strong>
                                </h5>
                                <div class="row mt-3">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>
                                        Amount of tax brought forward from Assessment Year
                                      </label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="2023">2023-2024</option>
                                        <option value="2022">2022-2023</option>
                                        <option value="2021">2021-2022</option>
                                        <option value="2020">2020-2021</option>
                                        <option value="2019">2019-2020</option>
                                        <option value="2018">2018-2019</option>
                                        <option value="2017">2017-2018</option>
                                        <option value="2016">2016-2017</option>
                                        <option value="2015">2015-2016</option>
                                        <option value="2014">2014-2015</option>
                                        <option value="2013">2013-2014</option>
                                      </select>
                                      <input type="text" class="form-control rounded-0 mt-3" placeholder="Enter *
                                          " />
                                    </div>
                                    <div class="form-group">
                                      <span>In Assessment Year 2024-25 did you do any of the following ?
                                      </span>
                                      <label>1. Sold security or sweat equity shares of the startup - section 80IAC *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Collector *
                                            " />
                                    </div>
                                    <div class="form-group">
                                      <label>Total Tax Collected *
                                      </label>
                                      <select name="" class="form-control rounded-0">
                                        <option>Select Option</option>
                                        <option value="0">Not Sold</option>
                                        <option value="1">Partially Sold</option>
                                        <option value="2">Fully Sold</option>
                                      </select>
                                      </span>
                                    </div>

                                    <div class="col-md-12">
                                      <table class="table table-responsive">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <div class="form-group">
                                                <label class="m-0">Company Name</label>
                                                <input type="text" class="form-control rounded-0" placeholder="Enter Your Nutration">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="form-group">
                                                <label class="m-0">Tax Attributed</label>
                                                <input type="number" class="form-control rounded-0" placeholder="Enter Your Amount">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="form-group">
                                                <label class="m-0">Date of Sale
                                                </label>
                                                <input type="date" class="form-control rounded-0" placeholder="Enter Your Date">
                                              </div>
                                            </td>
                                            <td>
                                              <!-- Cancel Icon -->
                                              <div class="form-group d-flex" style="flex-direction: column">
                                                <label class="m-0">Cancel</label>
                                                <div class="cancel btn btn-danger">
                                                  <i class="fas fa-trash"></i>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                        Add More
                                      </button>
                                    </div>


                                    <div class="form-check mt-5">
                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1">
                                        2. Stopped working at the startup that allotted or transferred security or sweat equity
                                      </label>
                                    </div>

                                    <div class="form-group">
                                      <label>Last Date of employment
                                      </label>
                                      <input type="date" class="form-control rounded-0" placeholder="Enter Your Date" />
                                    </div>

                                    <div class="form-check mt-5">
                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                      <label class="form-check-label" for="defaultCheck2">
                                        3. 48 months have expired from the end of the relevant AY in which these shares were allotted
                                      </label>
                                    </div>


                                  </div>
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>


                        </div>


                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong> Taxes Paid</strong>
                          </h5>

                          <form action="#">
                            <div class="card card-body">
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Amount Paid *</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Amount Paid" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Date of Payment *</label>
                                    <input type="date" class="form-control rounded-0" placeholder="Enter Date of Payment" />
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>BSR Code of the bank you deposited
                                      with</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter BSR Code" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Challan Serial No *</label>
                                    <input type="text" class="form-control rounded-0" placeholder="Enter Challan Serial No" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-4">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong>
                              Details of Previous Years' Losses</strong>
                          </h5>
                          <form action="#">
                            <div class="card card-body">
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Assessment Year of the Loss</label>
                                    <select name="" class="form-control rounded-0" id="">
                                      <option>Select Option</option>
                                      <option value="2021-2022">
                                        2022-2023
                                      </option>
                                      <option value="2020-2021">
                                        2021-2022
                                      </option>
                                      <option value="2019-2020">
                                        2020-2021
                                      </option>
                                      <option value="2018-2019">
                                        2019-2020
                                      </option>
                                      <option value="2017-2018">
                                        2018-2019
                                      </option>
                                      <option value="2016-2017">
                                        2017-2018
                                      </option>
                                      <option value="2015-2016">
                                        2016-2017
                                      </option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Loss Category</label>
                                    <select name="" class="form-control rounded-0" id="">
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
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Loss Amount</label>
                                    <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card card-body">
                              <div class="form_heading">
                                <h5>
                                  <strong>
                                    Depreciation Loss from Previous Years
                                  </strong>
                                </h5>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Assessment Year</label>
                                    <select name="" class="form-control rounded-0" id="">
                                      <option>Select Option</option>
                                      <option value="2021-2022">
                                        2022-2023
                                      </option>
                                      <option value="2020-2021">
                                        2021-2022
                                      </option>
                                      <option value="2019-2020">
                                        2020-2021
                                      </option>
                                      <option value="2018-2019">
                                        2019-2020
                                      </option>
                                      <option value="2017-2018">
                                        2018-2019
                                      </option>
                                      <option value="2016-2017">
                                        2017-2018
                                      </option>
                                      <option value="2015-2016">
                                        2016-2017
                                      </option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" class="form-control rounded-0" placeholder="Enter Your Number" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-4">
                              <div class="col-md-12">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="p-tab-cntnt inner_tabs_collec">
                      <div class="p-tab-c1">
                        <span>05 Final</span>

                        <div class="inerr_taabs-tab-btns mb-4">
                          <ul>
                            <li class="btn btn-block btn-outline-primary btn-flat active">
                              <span>Bank info</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>More Info</span>
                            </li>
                            <li class="btn btn-block btn-outline-primary btn-flat">
                              <span>Filing</span>
                            </li>
                          </ul>
                        </div>

                        <div class="mt-3 inerr-tab-cntnt active">
                          <h5 class="pt-3">
                            <strong>
                              Additional Information needed for Income Tax
                              Return</strong>
                          </h5>
                        </div>

                        <div class="mt-3 inerr-tab-cntnt">
                          <h5 class="pt-3">
                            <strong>
                              [Optional] Advanced Info, required only in a few cases
                            </strong>
                          </h5>

                          <div class="row tds-tsx-div">
                            <h5 class="pt-3">
                              <strong>
                                Residential Status
                              </strong>
                            </h5>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>01</strong></h5>
                                  <span class="w-75 d-block">
                                    Current residential status: Resident but not Ordinarily Resident
                                    You are a citizen of India or person of Indian origin, who comes on a visit to India, having total income, other than the income from foreign sources, exceeding Rs. 15 lakh and have been in India for 120 days or more but less than 182 days from 1 April 2023 to 31 March 2024
                                    <br>
                                    The residential status in your tax return depends on the number of days you were in India.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Change Residential Status
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>2</strong></h5>
                                  <h5>
                                    <strong>

                                      Unlisted Shares

                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you have owned shares in any unlisted company in India, you need to report the details to the tax department (unlisted company is typically a "Pvt. Ltd" instead of a "Public Ltd.").
                                    <br>
                                    Note: You do not need to report details about shares in a public company here (listed on NSE / BSE).
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Unlisted Shares Details
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>3</strong></h5>
                                  <h5>
                                    <strong>
                                      Directorship Details
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you are a director of a company, please fill these details.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Directorship Details

                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>4</strong></h5>
                                  <h5>
                                    <strong>
                                      Foreign Assets, Incomes & Taxes

                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    Do you have any Foreign Assets or Income?
                                    <br>
                                    Have you paid taxes outside India?
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Foreign Assets, Incomes, Taxes
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>5</strong></h5>
                                  <h5>
                                    <strong>
                                      Schedule SPI


                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you have income of specified person (spouse, minor child, etc.) to be included in assessee tax return, please fill the details here.
                                    <br>
                                    Income of the minor child, in excess of Rs. 1,500 per child, to be included.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Schedule SPI
                                </button>
                              </div>
                            </div>

                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>6</strong></h5>
                                  <h5>
                                    <strong>
                                      Schedule AL: Assets & Liabilities
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    It is mandatory to fill Schedule AL if your total income is more than ₹50 lakhs.
                                    Please enter your assets and liabilities at the end of financial year.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Schedule AL details
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>7</strong></h5>
                                  <h5>
                                    <strong>
                                      Current Account Deposits
                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you have deposited more than ₹1 crore aggregating to all your current accounts between 1 April 2023 to 31 March 2024, please enter the total amount deposited.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Current Account Details
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>8</strong></h5>
                                  <h5>
                                    <strong>
                                      Expenditure on Foreign Travel

                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you have incurred an expenditure of a total amount of more than ₹ 2 lakhs on Foreign Travel between 1 April 2023 to 31 March 2024, please enter the total expense amount.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Foreign Travel Expense Details
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>9</strong></h5>
                                  <h5>
                                    <strong>
                                      Expenditure on Electricity Consumption

                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    If you have incurred an expenditure of a total amount of more than ₹ 1 lakh on electricity consumption between 1 April 2023 to 31 March 2024, please enter the total expense amount.
                                  </span>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add Electricity Bill Details
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 card card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="headin_iner w-50 d-block">
                                  <h5><strong>10</strong></h5>
                                  <h5>
                                    <strong>
                                      Clause(iv), seventh proviso to 139(1)

                                    </strong>
                                  </h5>
                                  <span class="w-75 d-block">
                                    Any of the conditions in clause 4, seventh proviso to returns filed under section 139(1) apply to you:
                                  </span>
                                  <ul class="mt-4">
                                    <li>Total sales, turnover or gross receipts of the person in business is higher than Rs. 60 lakh during the previous year.
                                    </li>
                                    <li>
                                      Your total gross receipts from profession is greater than Rs. 10 lakh during the previous year
                                    </li>
                                    <li>
                                      Total of tax deducted at source and tax collected at source, in case of the person, is greater than Rs. 25 thousand during the previous year.
                                    </li>
                                    <li>
                                      You have deposited a total of Rs. 50 lakh or more in savings accounts during the previous year
                                    </li>
                                  </ul>
                                </div>
                                <button class="tds-tsx-button btn mt-3 h-auto w-auto btn-block bg-gradient-info btn-flat">
                                  Add clause(iv) details
                                </button>
                              </div>
                            </div>


                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Residential Status</strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Please select a relevant option
                                  </strong>
                                </h5>


                                <div class="row">
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      <strong>Resident:</strong> You were in India for 182 days or more from 1 April 2023 to 31 March 2024
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      <strong>Resident:</strong> You were in India for 60 days or more from 1 April 2023 to 31 March 2024, and have been in India for 365 days or more from 1 April 2019 to 31 March 2023
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                      <strong>Resident:</strong> You are a citizen of India, who left India for the purpose of employment, as a member of the crew of an Indian ship and were in India for 182 days or more from 1 April 2023 to 31 March 2024 and 365 days or more from 1 April 2019 to 31 March 2023
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                      <strong>Resident:</strong> You are a citizen of India or a person of Indian origin and have come on a visit to India during the previous year and were in India for a) 182 days or more from 1 April 2023 to 31 March 2024 and 365 days or more from 1 April 2019 to 31 March 2023; or b) 120 days or more from 1 April 2023 to 31 March 2024 and 365 days or more from 1 April 2019 to 31 March 2023 if the total income, other than income from foreign sources, exceeds Rs. 15 lakh
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                      <strong>Resident but not Ordinarily Resident:</strong> You are a citizen of India or person of Indian origin, who comes on a visit to India, having total income, other than the income from foreign sources, exceeding Rs. 15 lakh and have been in India for 120 days or more but less than 182 days from 1 April 2023 to 31 March 2024
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6">
                                    <label class="form-check-label" for="exampleRadios6">
                                      <strong>Resident but not Ordinarily Resident:</strong> You are a citizen of India having total income, other than the income from foreign sources, exceeding Rs. 15 lakh during the previous year and not liable to tax in any other country or territory by reason of your domicile or residence or any other criteria of similar nature
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7">
                                    <label class="form-check-label" for="exampleRadios7">
                                      <strong>Resident but not Ordinarily Resident:</strong> You have been non-resident in India in 9 out of 10 years from 1 April 2014 to 31 March 2023
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8">
                                    <label class="form-check-label" for="exampleRadios8">
                                      <strong>Resident but not Ordinarily Resident:</strong> You have been in India for 729 days or less from 1 April 2016 to 31 March 2023
                                    </label>
                                  </div>
                                  <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option9">
                                    <label class="form-check-label" for="exampleRadios9">
                                      <strong>Non-Resident:</strong> You were a non-resident during the period 1 April 2023 to 31 March 2024
                                    </label>
                                  </div>
                                </div>


                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong>Edit Unlisted Share</strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Company Details
                                  </strong>
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Name of Company *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Company" />
                                    </div>
                                    <div class="form-group">
                                      <label>PAN of Company *
                                      </label>
                                      <span>
                                        Use 'NNNNN0000N', in case the PAN of delisted company cannot be obtained.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Name of Company" />
                                    </div>

                                    <div class="form-group">
                                      <label>Company type *</label>
                                      <br>
                                      <select name="" class="form-control rounded-0">
                                        <option value="" selected="Select">Select</option>
                                        <option value="Domestic">Domestic</option>
                                        <option value="Foreign">Foreign</option>
                                      </select>
                                    </div>



                                  </div>
                                </div>

                              </div>

                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Opening Balance
                                  </strong>
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>No. of shares *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter No. of shares" />
                                    </div>
                                    <div class="form-group">
                                      <label>Cost of acquisition *
                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Cost of acquisition" />
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Shares acquired during the year
                                  </strong>
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>No. of shares *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter No. of shares" />
                                    </div>
                                    <div class="form-group">
                                      <label>Date of Purchase *

                                      </label>

                                      <input type="date" class="form-control rounded-0" placeholder="Enter Date of Purchase *
                                            " />
                                    </div>
                                    <div class="form-group">
                                      <label>Face Value Per Share *

                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                    <div class="form-group">
                                      <label>Issue Price Per Share (In case of fresh share) *


                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                    <div class="form-group">
                                      <label>Purchase Price Per Share (In case purchased from existing shareholder) *

                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Shares transferred during the year

                                  </strong>
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>No. of shares *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter No. of shares" />
                                    </div>
                                    <div class="form-group">
                                      <label>Sale Consideration *
                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Sale Consideration *
                                            " />
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="card card-body">
                                <h5 class="mb-4">
                                  <strong>Closing Balance


                                  </strong>
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>No. of shares *
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter No. of shares" />
                                    </div>
                                    <div class="form-group">
                                      <label>Cost of acquisition *
                                      </label>

                                      <input type="text" class="form-control rounded-0" placeholder="Enter Cost of acquisition *
                                            " />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Directorship Details
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <span class="mb-4">
                                  <strong>If you are a director of a company, please fill these details.
                                  </strong>
                                </span>

                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table table-responsive">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Name of Company</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Name of Company" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label>Company Type</label>
                                              <select name="" class="form-control rounded-0">
                                                <option>Select Option</option>
                                                <option value="Domestic">Domestic</option>
                                                <option value="Foreign">Foreign</option>
                                              </select>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">PAN of Company</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Enter your PAN of Company" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label>Listed or Unlisted Shares</label>
                                              <select name="" class="form-control rounded-0">
                                                <option selected="selected" value="Listed">Listed Share</option>
                                                <option value="Unlisted">Unlisted Share</option>
                                              </select>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Director Identification Number (DIN)
                                              </label>
                                              <input type="text" class="form-control rounded-0" placeholder="Director Identification Number (DIN)" />
                                            </div>
                                          </td>

                                          <td>
                                            <!-- Cancel Icon -->
                                            <div class="form-group d-flex" style="flex-direction: column">
                                              <label class="m-0">Cancel</label>
                                              <div class="cancel btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                      Add More
                                    </button>
                                  </div>
                                </div>




                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <div class=" card card-body">

                              <h5 class="pt-3">
                                <strong> Foreign Assets, Incomes & Taxes
                                </strong>
                              </h5>


                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h6>
                                      Schedule FSI
                                    </h6>
                                    <button class="btn btn-block bg-gradient-primary btn-flat">Details of Income accruing or arising outside India</button>
                                  </div>

                                  <div class="form-group">
                                    <h6>
                                      Schedule TR
                                    </h6>
                                    <button class="btn btn-block bg-gradient-primary btn-flat">Details of Taxes Paid outside India</button>
                                  </div>
                                  <div class="form-group">
                                    <h6>
                                      Schedule FA
                                    </h6>
                                    <span>
                                      <Strong> Instructions: </Strong>You need to fill this section if you are a resident of India and have foreign assets in any of the following categories.
                                      <br>
                                      No need to fill this if you are a 'non-resident' or 'not-ordinarily resident'
                                    </span>
                                    <button class="w-auto text-left btn btn-block mt-5 mb-3 bg-gradient-primary btn-flat">Upload File
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">A. Details of Foreign Bank Accounts
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">B. Details of Financial Interest in any Entity held
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">C. Details of Immovable Property outside India
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">D. Details of any other Asset / Investment outside India
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">E. Details of accounts in which you have signing authority and which have not been included in A to D above
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">F. Details of trusts, created under the laws of a country outside India, in which you are a trustee
                                    </button>
                                    <button class="w-auto text-left btn btn-block mb-3 bg-gradient-primary btn-flat">G. Details of any other income derived from any source outside India which is not included in,- (i) items A to F above and, (ii) income under the head business or profession
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <div class="row mt-4">
                              <div class="col-md-12 d-flex">
                                <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                  Back
                                </button>
                              </div>
                            </div>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Schedule SPI

                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <span class="mb-4">
                                  <strong>If you have income of specified person (spouse, minor child, etc.) to be included in assessee tax return, please fill the details here.
                                    <br>
                                    Income of the minor child, in excess of Rs. 1,500 per child, to be included.
                                  </strong>
                                </span>

                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table table-responsive">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">
                                                Name of Person</label>
                                              <input type="text" class="form-control rounded-0" placeholder="Name of Person" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">PAN of Person</label>
                                              <input type="text" class="form-control rounded-0" placeholder="PAN of Person" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Relationship
                                              </label>
                                              <input type="text" class="form-control rounded-0" placeholder="Relationship" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label class="m-0">Amount
                                              </label>
                                              <input type="number" class="form-control rounded-0" placeholder="Amount" />
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group">
                                              <label>Head of Income in which included
                                              </label>
                                              <select name="" class="form-control rounded-0">
                                                <option selected="selected" value="NotInit">Select</option>
                                                <option value="OS">Other Sources</option>
                                                <option value="HP">House Property</option>
                                                <option value="SA">Salary Income</option>
                                                <option value="CG">Capital Gain</option>
                                                <option value="EI">Exempt Income</option>
                                              </select>
                                            </div>
                                          </td>
                                          <td>
                                            <!-- Cancel Icon -->
                                            <div class="form-group d-flex" style="flex-direction: column">
                                              <label class="m-0">Cancel</label>
                                              <div class="cancel btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button type="button" class="mb-3 w-auto btn btn-block bg-gradient-primary btn-flat">
                                      Add More
                                    </button>
                                  </div>
                                </div>




                              </div>
                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Schedule AL: Assets and Liabilities at the end of the Financial Year
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">
                                <h3 class="mb-4">
                                  <strong>
                                    Financial assets
                                  </strong>
                                </h3>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">Deposits in Bank
                                      </label>
                                      <span>Total balance in any savings bank accounts, fixed deposits, current accounts, etc.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>

                                    <div class="form-group">
                                      <label class="m-0">Shares and securities
                                      </label>
                                      <span>Stocks, mutual funds, etc
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>

                                    <div class="form-group">
                                      <label class="m-0">Insurance Policies
                                      </label>
                                      <span>Sum Assured from any insurance policies you hold.

                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                    <div class="form-group">
                                      <label class="m-0">Cash in hand
                                      </label>
                                      <span>Enter the total amount of physical cash you have (Rupee notes, etc).
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                    <div class="form-group">
                                      <label class="m-0">Loans and Advances Given
                                      </label>
                                      <span>Fill this if you have given a loan to someone.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="card card-body">
                                <h3 class="mb-4">
                                  <strong>
                                    Other Assets
                                  </strong>
                                </h3>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">Jewellery, bullion etc.

                                      </label>
                                      <span>Includes any jewellery, precious metals (gold, silver) or precious stones (diamonds, etc) that you own.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>

                                    <div class="form-group">
                                      <label class="m-0">Vehicles
                                      </label>
                                      <span>Cars, motor vehicles, and even yachts, boats and aircrafts.

                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>

                                    <div class="form-group">
                                      <label class="m-0">Artwork
                                      </label>
                                      <span>Painting, sculptures or any work of art, including archaeological collections
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="card card-body">
                                <h3 class="mb-4">
                                  <strong>
                                    Liabilities
                                  </strong>
                                </h3>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">
                                        Liability in Relation to Assets
                                      </label>
                                      <span>Any loans you may have in relation to these assets.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter Your" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Current Account Deposits
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">If you have deposited more than ₹1 crore aggregating to all your current accounts between 1 April 2023 to 31 March 2024, please enter the total amount deposited.

                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter total Amount deposited in Current Accounts" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Expenditure on Foreign Travel
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">If you have incurred an expenditure of a total amount of more than ₹ 2 lakhs on Foreign Travel between 1 April 2023 to 31 March 2024, please enter the total expense amount.
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter total Expenses of Foreign Travel" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Expenditure on Electricity Consumption

                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="m-0">If you have incurred an expenditure of a total amount of more than ₹ 1 lakh on electricity consumption between 1 April 2023 to 31 March 2024, please enter the total expense amount.
                                      </label>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter total Electricity Bill Paid" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div class="TDS-Taxes-form">
                            <h5 class="pt-3">
                              <strong> Clause(iv), seventh proviso to 139(1)
                              </strong>
                            </h5>
                            <form action="#">
                              <div class="card card-body">

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <span class="m-0">If total sales, turnover or gross receipts of the person in business is higher than ₹ 60 lakh between 1 April 2023 to 31 March 2024, please enter the total sales, turnover or gross receipts value.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter total sales, turnover or gross receipts amount" />
                                    </div>
                                    <div class="form-group">
                                      <span class="m-0">If your total gross receipts from profession is greater than ₹ 10 lakh between 1 April 2023 to 31 March 2024, please enter the total gross receipts value.

                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter the total gross receipts amount" />
                                    </div>
                                    <div class="form-group">
                                      <span class="m-0">If total of tax deducted at source and tax collected at source, in case of the person, is greater than ₹ 25 thousand between 1 April 2023 to 31 March 2024, please enter the total of TDS and TCS amount.
                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter total of TDS and TCS amount" />
                                    </div>
                                    <div class="form-group">
                                      <span class="m-0">If you have deposited a total of ₹ 50 lakh or more in savings accounts between 1 April 2023 to 31 March 2024, please enter the total deposits amount.

                                      </span>
                                      <input type="text" class="form-control rounded-0" placeholder="Enter the total deposits amount" />
                                    </div>
                                  </div>
                                </div>

                              </div>


                              <div class="row mt-4">
                                <div class="col-md-12 d-flex">
                                  <input type="submit" style="width: fit-content" class="btn btn-block btn-primary" value="Submit" />
                                  <button class="Back_button_tds btn btn-block bg-gradient-warning btn-flat w-auto text-white mt-0 mb-0 ml-4 h-100">
                                    Back
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>

                        </div>
                        <div class="mt-3 inerr-tab-cntnt">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col-md-5 py-5 mx-auto">
                                <div class="text-center">
                                  <img src="dist/img/sub_final.png" alt="" />
                                  <h5 class="mt-4">
                                    <strong>Looks Like You Don't Have An Active
                                      Subscription
                                    </strong>
                                  </h5>
                                  <p>
                                    View our subscription plan to avail
                                    features like tax summaries and other
                                    details
                                  </p>
                                  <div class="d-flex mx-auto justify-content-center align-items-center">
                                    <button type="button" class="btn btn-block btn-primary btn-flat h-100 m-0 w-auto">
                                      Subscribe
                                    </button>
                                    <button type="button" class="btn btn-block btn-outline-primary btn-flat ml-4 w-auto my-0 h-100">
                                      View Plans
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Tops Menu content -->
                </div>
              </div>
            </div>
          </div>

          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="row Cus_Cards">
          <div class="col-md-6">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header h-auto bg-info">
                <h3 class="widget-user-username text-left">Address</h3>
              </div>
              <div class="card-footer mt-3">
                <div class="row">
                  <div class="col-sm-12 d-flex border-right">
                    <div class="box">
                      <img class="img-circle w-75 elevation-3" src="dist/img/user1-128x128.jpg" alt="User Avatar" />
                    </div>
                    <div class="description-block ml-2 text-left">
                      <h5 class="description-header">Email</h5>
                      <span class="description-text text-lowercase">Email@gamil.com</span>
                      <h5 class="description-header">location</h5>
                      <span class="description-text text-lowercase">Location Here</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <div class="col-md-6">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header d-flex h-auto justify-content-center align-items-center flex-column bg-success">
                <h3 class="widget-user-username text-left">Summary</h3>
              </div>
              <div class="card-footer mt-3">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Tax</h5>
                      <span class="description-text">0</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">Amount</h5>
                      <span class="description-text">0</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('User.include.footer_include')


  <script>
    // JavaScript to handle tab switching
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.income-tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                const selectedTab = this.getAttribute('data-tab');

                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));

                // Add active class to the clicked tab
                this.classList.add('active');

                // Show only the corresponding content
                const contentDivs = document.querySelectorAll('.income-content');
                contentDivs.forEach(div => {
                    if (div.id === selectedTab) {
                        div.classList.add('active');
                    } else {
                        div.classList.remove('active');
                    }
                });
            });
        });
    });
</script>


<script>
  // Handle form submission
  $(document).ready(function() {
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
          // Display success toast notification
          toastr.options = {
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          };
          toastr.success('Form submitted successfully!', 'Success', {
            "toastClass": "toast-custom-success"
          });
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Display error toast notification
          toastr.options = {
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          };
          toastr.error('Error occurred!', 'Error', {
            "toastClass": "toast-custom-error"
          });
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
          console.log(response);
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>