<form id="createhpfrom">
  @csrf
  <div class="form_heading">
    <h5>House Property Details</h5>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Chose Year</label>
      <select name="year" id="year" class="form-control">
        <option value="">Select Year</option>
        <option value="2024">2024-25</option>
        <option value="2023">2023-24</option>
        <option value="2022">2022-23</option>
      </select>
    </div>
    <div class="form_input_grp">
      <label>Type of House Property</label>
      <input type="hidden" name="client_id" value="{{ $clients_details->id }}">
      <select name="occupancyOfHouse" class="form-control" id="">
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
      <input type="text" name="address.flatDoorBlockNumber" placeholder="Enter Your Flat/Door/Block Number" />
    </div>
    <div class="form_input_grp">
      <label>Premise Name This field is optional.
      </label>
      <input type="text" name="address.premiseBuildingVillageName" placeholder="Enter Your Premise Name" />
    </div>
    <div class="form_input_grp">
      <label>Road / Street This field is optional.
      </label>
      <input type="text" name="address.roadStreetPostOffice" placeholder="Enter Your Road / Street" />
    </div>
    <div class="form_input_grp">
      <label>Pincode </label>
      <input type="number" name="address.pinCodeOrZipCode" placeholder="Enter Your Pincode " />
    </div>
    <div class="form_input_grp">
      <label>Area / Locality * </label>
      <input type="number" name="address.areaLocality" placeholder="Enter Your Area / Locality" />
    </div>
    <div class="form_input_grp">
      <label>Town / City * </label>
      <input type="number" name="address.townCityDistrict" placeholder="Enter Your Town / City *" />
    </div>
    <div class="form_input_grp">
      <label>State * </label>
      <select name="address_stateInIndia" class="form-control" id="">
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
      <select name="address.country" class="form-control" id="">
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
      <select name="ownerOfProperty" class="form-control" id="">
        <option>Select Option</option>
        <option value="Self">Self</option>
        <option value="Minor">Minor</option>
        <option value="Spouse">Spouse</option>
        <option value="Others">Others</option>
      </select>
    </div>
    <div class="form_input_grp">
      <label>Name of Owner</label>
      <input type="text" name="name" placeholder="Enter Your Name of Owner" />
    </div>
    <div class="form_input_grp">
      <label>PAN of Owner</label>
      <input type="text" name="pan" placeholder="Enter Your PAN of Owner" />
    </div>
    <div class="form_input_grp">
      <label>Percentage Share </label>
      <input type="text" name="percentage" placeholder="Enter Your Percentage Share" />
    </div>
  </div>
  <div class="form_heading">
    <h5>Co-Owners Details</h5>
  </div>
  <div class="form_grid">
    <div class="form_input_grp">
      <label>Name of Co-Owners</label>
      <input type="text" name="coownerBag.listCoowner[0].name" placeholder="Enter Your Name of Co-Owners" />
    </div>
    <div class="form_input_grp">
      <label>PAN of Co-Owners</label>
      <input type="text" name="coownerBag.listCoowner[0].pan" placeholder="Enter Your PAN of Co-Owners" />
    </div>
    <div class="form_input_grp">
      <label>Percentage Share </label>
      <input type="text" name="coownerBag.listCoowner[0].percentSharePropertyField" placeholder="Enter Your Percentage Share" />
    </div>
  </div>
  <div class="form_heading">
    <h5>Interest Paid</h5>
  </div>
  <div class="form_grid">
    <div class="form_input_grp ip_col-2">
      <label>Financial year prior to completion of
        construction
      </label>
      <select name="financialYearOfCompletion" class="form-control" id="financialYearOfCompletion">
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

  <div class="form_grid ip-col-3">
    <label>
      A. Interest paid during pre construction
      period
    </label>
    <div class="form_input_grp">
      <label>Gross Value</label>
      <input type="text" name="totalInterestPaidDuringPreConstruction" placeholder="Enter Your Gross Value" />
    </div>
    <div class="form_input_grp">
      <label>Percentage Share </label>
      <input type="number" name="totalInterestPaidDuringPreConstructionAmount" placeholder="Enter Your Percentage" />
    </div>
  </div>

  <div class="form_grid ip-col-3">
    <label>
      B. Interest paid post construction (Section
      24B deduction)
    </label>
    <div class="form_input_grp">
      <label>Gross Value</label>
      <input type="text" name="interestPaidForFinancialYear" placeholder="Enter Your Gross Value" />
    </div>
    <div class="form_input_grp">
      <label>Percentage Share </label>
      <input type="number" name="interestPaidForFinancialYearAmount" placeholder="Enter Your Percentage" />
    </div>
  </div>
  <div class="form_grid ip-col-3">
    <label>
      C. Total Deduction(20%A + B)
    </label>
    <div class="form_input_grp">
      <label>Gross Value</label>
      <input type="text" name="total_deduction" placeholder="Enter Your Gross Value" />
    </div>
    <div class="form_input_grp">
      <label>Percentage Share </label>
      <input type="number" name="total_deductionAmount" placeholder="Enter Your Percentage" />
    </div>
  </div>
  <input id="submit_hp_form" class="submit_btton" type="submit" value="Submit" />
</form>

<script>
  $(document).ready(function() {
    $('#submit_hp_form').click(function(event) {
      event.preventDefault();
      var formData = $('#createhpfrom').serialize();
      $.ajax({
        url: "{{ route('store-house-property-seprate') }}",
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
          // console.log(response);
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
          // console.error(xhr.responseText);
        }
      });
    });
  });
</script>