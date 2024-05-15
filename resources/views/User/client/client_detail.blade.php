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

                  <div class="inerr_taabs-tab-btns">
                    <ul>
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
                    </ul>
                  </div>

                  <div class="inerr_taabs_content">
                    <!-- Salary Form -->
                    <div class="inerr-tab-cntnt active inner_tabs_collec">
                      <div class="Form_customer">
                        <form action="#">
                          <div class="form_heading">
                            <h5>Employer Details</h5>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Name of the Employer *</label>
                              <input type="text" placeholder="Enter Your Employer" />
                            </div>
                            <div class="form_input_grp">
                              <label>Employer Type/Category *</label>
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
                          </div>
                          <div class="form_heading">
                            <h5>Salary Information</h5>
                          </div>
                          <div class="form_heading-sub">
                            <span>01 Gross Salary</span>
                          </div>
                          <div class="form_heading-sub">
                            <span>1(a) - Salary as per section 17(1) </span>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Basic Salary</label>
                              <input type="text" placeholder="Enter Your Basic Salary" />
                            </div>
                            <div class="form_input_grp">
                              <label>House Rent Allowance</label>
                              <input type="text" placeholder="Enter Your House Rent Allowance" />
                            </div>
                          </div>
                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Leave Travel Allowance</label>
                              <input type="text" placeholder="Enter Your Leave Travel Allowance" />
                            </div>
                          </div>

                          <div class="form_heading-sub">
                            <span>‒ 1(b) - Value of perquisites under section
                              17(2)</span>
                          </div>

                          <div class="heading-pera">
                            <p>
                              Please enter break down for 1(b) - Value of
                              perquisites under section 17(2). You can refer
                              to your Form-16 for the data. For more help,
                              click the sample button.
                            </p>
                            <button type="button" class="btn-simple" data-toggle="modal" data-target="#staticBackdrop">
                              Simple Button
                            </button>
                          </div>
                          <div class="form_heading-sub">
                            <span>‒ 1(c) - Profits in lieu of salary under
                              section 17(3)</span>
                          </div>

                          <div class="heading-pera">
                            <p>
                              Please enter break down for 1(c) - Profits in
                              lieu of salary under section 17(3). You can
                              refer to your Form-16 for the data. For more
                              help, click the sample button.
                            </p>
                            <button type="button" class="btn-simple" data-toggle="modal" data-target="#staticBackdrop">
                              Simple Button
                            </button>
                          </div>
                          <div class="form_heading-sub">
                            <span>‒ 1(d) - Income from retirement benefits
                              account maintained in a notified country under
                              section 89A</span>
                          </div>

                          <div class="heading-pera">
                            <p>
                              Please enter break down for 1(d) - Income from
                              retirement benefits account maintained in a
                              notified country under section 89A. You can
                              refer to your Form-16 for the data. For more
                              help, click the sample button.
                            </p>
                            <button type="button" class="btn-simple" data-toggle="modal" data-target="#staticBackdrop">
                              Simple Button
                            </button>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>1(e) - Income from retirement benefits
                                account maintained in a country other than
                                notified country under section 89A</label>
                              <input type="text" placeholder="" />
                            </div>
                            <div class="form_input_grp">
                              <label>1(f) - Income taxable during the previous
                                year on which relief u/s 89A was claimed in
                                any earlier previous year.</label>
                              <input type="text" placeholder="" />
                            </div>
                          </div>

                          <div class="form_heading-sub">
                            <span>
                              2. Exempt allowances under section 10</span>
                          </div>

                          <div class="heading-pera">
                            <p>
                              Please enter break down for 2. Exempt
                              allowances under section 10. You can refer to
                              your Form-16 for the data. For more help,
                              click the sample button.
                            </p>
                            <button type="button" class="btn-simple" data-toggle="modal" data-target="#staticBackdrop">
                              Simple Button
                            </button>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>HRA Exemption</label>
                              <input type="text" placeholder="HRA Exemption" />
                            </div>
                            <div class="form_input_grp">
                              <label>LTA Exemption</label>
                              <input type="text" placeholder="LTA Exemption" />
                            </div>
                            <div class="form_input_grp">
                              <label>2(a). Income claimed for relief under
                                section 89A Note that you should submit Form
                                10EE to the Income Tax Department in order
                                to claim this relief.</label>
                              <input type="text" placeholder="" />
                            </div>
                          </div>

                          <div class="form_heading-sub">
                            <span> Balance (1 - 2 - 2a)</span>
                          </div>
                          <div class="form_heading-sub">
                            <span> 4. Deductions under section 16</span>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Standard deduction under section
                                16(ia)</label>
                              <input type="text" placeholder="Standard deduction" />
                            </div>
                            <div class="form_input_grp">
                              <label>Professional tax under section
                                16(iii)</label>
                              <input type="text" placeholder="Professional tax" />
                            </div>
                            <div class="form_input_grp">
                              <label>
                                Income Chargeable under the head
                                'Salaries'</label>
                              <input type="text" placeholder="0" />
                            </div>
                          </div>

                          <div class="form_heading">
                            <h5>TDS Details</h5>
                          </div>

                          <div class="form_grid">
                            <div class="form_input_grp">
                              <label>Tax Deducted at source on Salary</label>

                              <input type="text" placeholder="Standard deduction" />
                              <span>
                                In your Form-16, find this under Part-A:
                                Total of Amount of tax deposited / Remitted
                                <button type="button" class="btn-simple mt-2" data-toggle="modal" data-target="#staticBackdrop">
                                  CLICK TO SEE SAMPLE
                                </button>
                              </span>
                            </div>
                            <div class="form_input_grp">
                              <label>TAN of the Employer</label>

                              <input type="text" placeholder="Professional tax" />
                              <span>
                                In your Form-16, find this under Part-A -
                                TAN of Deductor
                                <button type="button" class="btn-simple mt-2" data-toggle="modal" data-target="#staticBackdrop">
                                  CLICK TO SEE SAMPLE
                                </button>
                              </span>
                            </div>
                          </div>

                          <input class="submit_btton" type="submit" value="Submit" />
                        </form>
                      </div>
                    </div>
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
                          <form action="#" class="data_show">
                            <div class="form_heading">
                              <h5>House Property Details</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Type of House Property</label>
                                <select name="" class="form-control" id="">
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
                            </div>
                            <div class="form_heading">
                              <h5>Your House Address</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Flat/Door/Block Number * </label>
                                <input type="text" placeholder="Enter Your Flat/Door/Block Number                                   " />
                              </div>
                              <div class="form_input_grp">
                                <label>Premise Name This field is optional.
                                </label>
                                <input type="text" placeholder="Enter Your Premise Name" />
                              </div>
                              <div class="form_input_grp">
                                <label>Road / Street This field is optional.
                                </label>
                                <input type="text" placeholder="Enter Your Road / Street" />
                              </div>
                              <div class="form_input_grp">
                                <label>Pincode </label>
                                <input type="number" placeholder="Enter Your Pincode " />
                              </div>
                              <div class="form_input_grp">
                                <label>Area / Locality * </label>
                                <input type="number" placeholder="Enter Your Area / Locality
                                  " />
                              </div>
                              <div class="form_input_grp">
                                <label>Town / City * </label>
                                <input type="number" placeholder="Enter Your Town / City *

                                  " />
                              </div>
                              <div class="form_input_grp">
                                <label>State * </label>
                                <select name="" class="form-control" id="">
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
                                  <option value="GUJARAT">GUJARAT</option>
                                  <option value="HARYANA">HARYANA</option>
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
                                  <option value="MANIPUR">MANIPUR</option>
                                  <option value="MEGHALAYA">
                                    MEGHALAYA
                                  </option>
                                  <option value="MIZORAM">MIZORAM</option>
                                  <option value="NAGALAND">NAGALAND</option>
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
                                  <option value="TRIPURA">TRIPURA</option>
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
                              <div class="form_input_grp">
                                <label>Country * </label>
                                <select name="" class="form-control" id="">
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
                                  <option value="ALBANIA">ALBANIA</option>
                                  <option value="ALGERIA">ALGERIA</option>
                                  <option value="AMERICAN_SAMOA">
                                    AMERICAN SAMOA
                                  </option>
                                  <option value="ANDORRA">ANDORRA</option>
                                  <option value="ANGOLA">ANGOLA</option>
                                  <option value="ANGUILLA">ANGUILLA</option>
                                  <option value="ANTARCTICA">
                                    ANTARCTICA
                                  </option>
                                  <option value="ANTIGUA_AND_BARBUDA">
                                    ANTIGUA AND BARBUDA
                                  </option>
                                  <option value="ARGENTINA">
                                    ARGENTINA
                                  </option>
                                  <option value="ARMENIA">ARMENIA</option>
                                  <option value="ARUBA">ARUBA</option>
                                  <option value="AUSTRALIA">
                                    AUSTRALIA
                                  </option>
                                  <option value="AUSTRIA">AUSTRIA</option>
                                  <option value="AZERBAIJAN">
                                    AZERBAIJAN
                                  </option>
                                  <option value="BAHAMAS">BAHAMAS</option>
                                  <option value="BAHRAIN">BAHRAIN</option>
                                  <option value="BANGLADESH">
                                    BANGLADESH
                                  </option>
                                  <option value="BARBADOS">BARBADOS</option>
                                  <option value="BELARUS">BELARUS</option>
                                  <option value="BELGIUM">BELGIUM</option>
                                  <option value="BELIZE">BELIZE</option>
                                  <option value="BENIN">BENIN</option>
                                  <option value="BERMUDA">BERMUDA</option>
                                  <option value="BHUTAN">BHUTAN</option>
                                  <option value="BOLIVIA">
                                    BOLIVIA (PLURINATIONAL STATE OF)
                                  </option>
                                  <option value="BONAIRE_SINT_EUSTATIUS_AND_SABA">
                                    BONAIRE, SINT EUSTATIUS AND SABA
                                  </option>
                                  <option value="BOSNIA_AND_HERZEGOVINA">
                                    BOSNIA AND HERZEGOVINA
                                  </option>
                                  <option value="BOTSWANA">BOTSWANA</option>
                                  <option value="BOUVET_ISLAND">
                                    BOUVET ISLAND
                                  </option>
                                  <option value="BRAZIL">BRAZIL</option>
                                  <option value="BRITISH_INDIAN_OCEAN_TERRITORY">
                                    BRITISH INDIAN OCEAN TERRITORY
                                  </option>
                                  <option value="BRUNEI_DARUSSALAM">
                                    BRUNEI DARUSSALAM
                                  </option>
                                  <option value="BULGARIA">BULGARIA</option>
                                  <option value="BURKINA_FASO">
                                    BURKINA FASO
                                  </option>
                                  <option value="BURUNDI">BURUNDI</option>
                                  <option value="CAPE_VERDE">
                                    CABO VERDE
                                  </option>
                                  <option value="CAMBODIA">CAMBODIA</option>
                                  <option value="CAMEROON">CAMEROON</option>
                                  <option value="CANADA">CANADA</option>
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
                                  <option value="COLOMBIA">COLOMBIA</option>
                                  <option value="COMOROS">COMOROS</option>
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
                                  <option value="CROATIA">CROATIA</option>
                                  <option value="CUBA">CUBA</option>
                                  <option value="CURACAO">CURAÇAO</option>
                                  <option value="CYPRUS">CYPRUS</option>
                                  <option value="CZECH_REPUBLIC">
                                    CZECHIA
                                  </option>
                                  <option value="DEMOCRATIC_PEOPLES_REPUBLIC_OF_KOREA_NORTH_KOREA">
                                    KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF
                                    (NORTH KOREA)
                                  </option>
                                  <option value="DEMOCRATIC_REPUBLIC_OF_THE_CONGO">
                                    CONGO, DEMOCRATIC REPUBLIC OF THE
                                  </option>
                                  <option value="DENMARK">DENMARK</option>
                                  <option value="DJIBOUTI">DJIBOUTI</option>
                                  <option value="DOMINICA">DOMINICA</option>
                                  <option value="DOMINICAN_REPUBLIC">
                                    DOMINICAN REPUBLIC
                                  </option>
                                  <option value="ECUADOR">ECUADOR</option>
                                  <option value="EGYPT">EGYPT</option>
                                  <option value="EL_SALVADOR">
                                    EL SALVADOR
                                  </option>
                                  <option value="EQUATORIAL_GUINEA">
                                    EQUATORIAL GUINEA
                                  </option>
                                  <option value="ERITREA">ERITREA</option>
                                  <option value="ESTONIA">ESTONIA</option>
                                  <option value="ETHIOPIA">ETHIOPIA</option>
                                  <option value="FALKLAND_ISLANDS_MALVINAS">
                                    FALKLAND ISLANDS (MALVINAS)
                                  </option>
                                  <option value="FAROE_ISLANDS">
                                    FAROE ISLANDS
                                  </option>
                                  <option value="FIJI_ISLANDS">FIJI</option>
                                  <option value="FINLAND">FINLAND</option>
                                  <option value="FRANCE">FRANCE</option>
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
                                  <option value="GAMBIA">GAMBIA</option>
                                  <option value="GEORGIA">GEORGIA</option>
                                  <option value="GERMANY">GERMANY</option>
                                  <option value="GHANA">GHANA</option>
                                  <option value="GIBRALTAR">
                                    GIBRALTAR
                                  </option>
                                  <option value="GREECE">GREECE</option>
                                  <option value="GREENLAND">
                                    GREENLAND
                                  </option>
                                  <option value="GRENADA">GRENADA</option>
                                  <option value="GUADELOUPE">
                                    GUADELOUPE
                                  </option>
                                  <option value="GUAM">GUAM</option>
                                  <option value="GUATEMALA">
                                    GUATEMALA
                                  </option>
                                  <option value="GUERNSEY">GUERNSEY</option>
                                  <option value="GUINEA">GUINEA</option>
                                  <option value="GUINEABISSAU">
                                    GUINEA-BISSAU
                                  </option>
                                  <option value="GUYANA">GUYANA</option>
                                  <option value="HAITI">HAITI</option>
                                  <option value="HEARD_ISLAND_AND_MCDONALD_ISLANDS">
                                    HEARD ISLAND AND MCDONALD ISLANDS
                                  </option>
                                  <option value="HOLY_SEE">HOLY SEE</option>
                                  <option value="HONDURAS">HONDURAS</option>
                                  <option value="HONG_KONG">
                                    HONG KONG
                                  </option>
                                  <option value="HUNGARY">HUNGARY</option>
                                  <option value="ICELAND">ICELAND</option>
                                  <option value="INDONESIA">
                                    INDONESIA
                                  </option>
                                  <option value="IRAN">
                                    IRAN, ISLAMIC REPUBLIC OF
                                  </option>
                                  <option value="IRAQ">IRAQ</option>
                                  <option value="IRELAND">IRELAND</option>
                                  <option value="ISLE_OF_MAN">
                                    ISLE_OF_MAN
                                  </option>
                                  <option value="ISRAEL">ISRAEL</option>
                                  <option value="ITALY">ITALY</option>
                                  <option value="JAMAICA">JAMAICA</option>
                                  <option value="JAPAN">JAPAN</option>
                                  <option value="JERSEY">JERSEY</option>
                                  <option value="JORDAN">JORDAN</option>
                                  <option value="KAZAKHSTAN">
                                    KAZAKHSTAN
                                  </option>
                                  <option value="KENYA">KENYA</option>
                                  <option value="KIRIBATI">KIRIBATI</option>
                                  <option value="KUWAIT">KUWAIT</option>
                                  <option value="KYRGYZSTAN">
                                    KYRGYZSTAN
                                  </option>
                                  <option value="LAO_PEOPLES_DEMOCRATIC_REPUBLIC">
                                    LAO PEOPLE'S DEMOCRATIC REPUBLIC
                                  </option>
                                  <option value="LATVIA">LATVIA</option>
                                  <option value="LEBANON">LEBANON</option>
                                  <option value="LESOTHO">LESOTHO</option>
                                  <option value="LIBERIA">LIBERIA</option>
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
                                  <option value="MALAWI">MALAWI</option>
                                  <option value="MALAYSIA">MALAYSIA</option>
                                  <option value="MALDIVES">MALDIVES</option>
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
                                  <option value="MAYOTTE">MAYOTTE</option>
                                  <option value="MEXICO">MEXICO</option>
                                  <option value="MICRONESIA_FEDERATED_STATES_OF">
                                    MICRONESIA, FEDERATED STATES OF
                                  </option>
                                  <option value="MONACO">MONACO</option>
                                  <option value="MONGOLIA">MONGOLIA</option>
                                  <option value="MONTENEGRO">
                                    MONTENEGRO
                                  </option>
                                  <option value="MONTSERRAT">
                                    MONTSERRAT
                                  </option>
                                  <option value="MOROCCO">MOROCCO</option>
                                  <option value="MOZAMBIQUE">
                                    MOZAMBIQUE
                                  </option>
                                  <option value="MYANMAR">MYANMAR</option>
                                  <option value="NAMIBIA">NAMIBIA</option>
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
                                  <option value="NIGERIA">NIGERIA</option>
                                  <option value="NIUE">NIUE</option>
                                  <option value="NORFOLK_ISLAND">
                                    NORFOLK ISLAND
                                  </option>
                                  <option value="NORTHERN_MARIANA_ISLANDS">
                                    NORTHERN MARIANA ISLANDS
                                  </option>
                                  <option value="NORWAY">NORWAY</option>
                                  <option value="OMAN">OMAN</option>
                                  <option value="PAKISTAN">PAKISTAN</option>
                                  <option value="PALAU">PALAU</option>
                                  <option value="PALESTINE_STATE_OF">
                                    PALESTINE, STATE_OF
                                  </option>
                                  <option value="PANAMA">PANAMA</option>
                                  <option value="PAPUA_NEW_GUINEA">
                                    PAPUA NEW GUINEA
                                  </option>
                                  <option value="PARAGUAY">PARAGUAY</option>
                                  <option value="PERU">PERU</option>
                                  <option value="PHILIPPINES">
                                    PHILIPPINES
                                  </option>
                                  <option value="PITCAIRN">PITCAIRN</option>
                                  <option value="POLAND">POLAND</option>
                                  <option value="PORTUGAL">PORTUGAL</option>
                                  <option value="PUERTO_RICO">
                                    PUERTO RICO
                                  </option>
                                  <option value="QATAR">QATAR</option>
                                  <option value="REUNION">RÉUNION</option>
                                  <option value="REPUBLIC_OF_KOREA_SOUTH_KOREA">
                                    KOREA, REPUBLIC OF (SOUTH KOREA)
                                  </option>
                                  <option value="REPUBLIC_OF_MOLDOVA">
                                    MOLDOVA, REPUBLIC OF
                                  </option>
                                  <option value="ROMANIA">ROMANIA</option>
                                  <option value="RUSSIAN_FEDERATION">
                                    RUSSIAN FEDERATION
                                  </option>
                                  <option value="RWANDA">RWANDA</option>
                                  <option value="SAINT_BARTHELEMY">
                                    SAINT BARTHÉLEMY
                                  </option>
                                  <option value="SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA">
                                    SAINT HELENA, ASCENSION AND TRISTAN DA
                                    CUNHA
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
                                  <option value="SENEGAL">SENEGAL</option>
                                  <option value="SERBIA">SERBIA</option>
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
                                  <option value="SLOVAKIA">SLOVAKIA</option>
                                  <option value="SLOVENIA">SLOVENIA</option>
                                  <option value="SOLOMON_ISLANDS">
                                    SOLOMON ISLANDS
                                  </option>
                                  <option value="SOMALIA">SOMALIA</option>
                                  <option value="SOUTH_AFRICA">
                                    SOUTH AFRICA
                                  </option>
                                  <option value="SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS">
                                    SOUTH GEORGIA AND THE SOUTH SANDWICH
                                    ISLANDS
                                  </option>
                                  <option value="SOUTH_SUDAN">
                                    SOUTH SUDAN
                                  </option>
                                  <option value="SPAIN">SPAIN</option>
                                  <option value="SRI_LANKA">
                                    SRI LANKA
                                  </option>
                                  <option value="SUDAN">SUDAN</option>
                                  <option value="SURINAME">SURINAME</option>
                                  <option value="SVALBARD_AND_JAN_MAYEN">
                                    SVALBARD AND JAN MAYEN
                                  </option>
                                  <option value="SWAZILAND">
                                    SWAZILAND
                                  </option>
                                  <option value="SWEDEN">SWEDEN</option>
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
                                  <option value="THAILAND">THAILAND</option>
                                  <option value="TIMORLESTE">
                                    TIMOR-LESTE
                                  </option>
                                  <option value="TOGO">TOGO</option>
                                  <option value="TOKELAU">TOKELAU</option>
                                  <option value="TONGA">TONGA</option>
                                  <option value="TRINIDAD_AND_TOBAGO">
                                    TRINIDAD AND TOBAGO
                                  </option>
                                  <option value="TUNISIA">TUNISIA</option>
                                  <option value="TURKEY">TURKEY</option>
                                  <option value="TURKMENISTAN">
                                    TURKMENISTAN
                                  </option>
                                  <option value="TURKS_AND_CAICOS_ISLANDS">
                                    TURKS AND CAICOS ISLANDS
                                  </option>
                                  <option value="TUVALU">TUVALU</option>
                                  <option value="UGANDA">UGANDA</option>
                                  <option value="UKRAINE">UKRAINE</option>
                                  <option value="UNITED_ARAB_EMIRATES">
                                    UNITED ARAB EMIRATES
                                  </option>
                                  <option value="UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND">
                                    UNITED KINGDOM OF GREAT BRITAIN AND
                                    NORTHERN IRELAND
                                  </option>
                                  <option value="UNITED_REPUBLIC_OF_TANZANIA">
                                    TANZANIA, UNITED REPUBLIC OF
                                  </option>
                                  <option value="UNITED_STATES_OF_AMERICA">
                                    UNITED STATES OF AMERICA
                                  </option>
                                  <option value="UNITED_STATES_MINOR_OUTLYING_ISLANDS">
                                    UNITED STATES MINOR OUTLYING ISLANDS
                                  </option>
                                  <option value="URUGUAY">URUGUAY</option>
                                  <option value="UZBEKISTAN">
                                    UZBEKISTAN
                                  </option>
                                  <option value="VANUATU">VANUATU</option>
                                  <option value="VENEZUELA_BOLIVARIAN_REPUBLIC_OF">
                                    VENEZUELA, BOLIVARIAN REPUBLIC OF
                                  </option>
                                  <option value="VIETNAM">VIETNAM</option>
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
                                  <option value="ZAMBIA">ZAMBIA</option>
                                  <option value="ZIMBABWE">ZIMBABWE</option>
                                  <option value="OTHERS">OTHERS</option>
                                  <option value="NotInit"></option>
                                </select>
                              </div>
                            </div>
                            <div class="form_heading">
                              <h5>Property Ownersip</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Owner of the property</label>
                                <select name="" class="form-control" id="">
                                  <option>Select Option</option>
                                  <option value="Self">Self</option>
                                  <option value="Minor">Minor</option>
                                  <option value="Spouse">Spouse</option>
                                  <option value="Others">Others</option>
                                </select>
                              </div>
                              <div class="form_input_grp">
                                <label>Name of Owner</label>
                                <input type="text" placeholder="Enter Your Name of Owner" />
                              </div>
                              <div class="form_input_grp">
                                <label>PAN of Owner</label>
                                <input type="text" placeholder="Enter Your PAN of Owner" />
                              </div>
                              <div class="form_input_grp">
                                <label>Percentage Share </label>
                                <input type="text" placeholder="Enter Your Percentage Share" />
                              </div>
                            </div>
                            <div class="form_heading">
                              <h5>Co-Owners Details</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Name of Co-Owners</label>
                                <input type="text" placeholder="Enter Your Name of Co-Owners" />
                              </div>
                              <div class="form_input_grp">
                                <label>PAN of Co-Owners</label>
                                <input type="text" placeholder="Enter Your PAN of Co-Owners" />
                              </div>
                              <div class="form_input_grp">
                                <label>Percentage Share </label>
                                <input type="text" placeholder="Enter Your Percentage Share" />
                              </div>
                            </div>
                            <div class="form_heading">
                              <h5>Interest Paid</h5>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Financial year prior to completion of
                                  construction
                                </label>
                                <select name="" class="form-control" id="">
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

                            <div class="form_heading-sub">
                              <span>A. Interest paid during pre construction
                                period
                              </span>
                            </div>
                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Gross Value</label>
                                <input type="text" placeholder="Enter Your Gross Value" />
                              </div>
                              <div class="form_input_grp">
                                <label>Percentage Share </label>
                                <input type="number" placeholder="Enter Your Percentage" />
                              </div>
                            </div>

                            <div class="form_heading-sub">
                              <span>B. Interest paid post construction (Section
                                24B deduction)
                              </span>
                            </div>

                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Gross Value</label>
                                <input type="text" placeholder="Enter Your Gross Value" />
                              </div>
                              <div class="form_input_grp">
                                <label>Percentage Share </label>
                                <input type="number" placeholder="Enter Your Percentage" />
                              </div>
                            </div>

                            <div class="form_heading-sub">
                              <span>C. Total Deduction(20%A + B) </span>
                            </div>

                            <div class="form_grid">
                              <div class="form_input_grp">
                                <label>Gross Value</label>
                                <input type="text" placeholder="Enter Your Gross Value" />
                              </div>
                              <div class="form_input_grp">
                                <label>Percentage Share </label>
                                <input type="number" placeholder="Enter Your Percentage" />
                              </div>
                            </div>
                            <input class="submit_btton" type="submit" value="Submit" />
                          </form>
                        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#editClientForm').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log(response);
          alert('Client details updated successfully!');
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
          alert('Error: ' + xhr.responseText);
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



</body>

</html>