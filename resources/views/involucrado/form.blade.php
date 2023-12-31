<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombrePersona', $involucrado->nombrePersona, ['class' => 'form-control' . ($errors->has('nombrePersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombrePersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $involucrado->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $involucrado->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::select('codigo', [ 
                '+1907' => 'ALASKA ',
                '+355' => 'ALBANIA ', 
                '+213' => 'ALGERIA ', 
                '+376' => 'ANDORRA ', 
                '+244' => 'ANGOLA ', 
                '+1264' => 'ANGUILLA ', 
                '+1268' => 'ANTIGUA AND BARBUDA', 
                '+54' => 'ARGENTINA ', 
                '+374' => 'ARMENIA ', 
                '+297' => 'ARUBA ', 
                '+247' => 'ASCENSION ', 
                '+61' => 'AUSTRALIA ', 
                '+43' => 'AUSTRIA ', 
                '+994' => 'AZERBAIJAN REPUBLIC', 
                '+351' => 'AZORES ', 
                '+1242' => 'BAHAMAS ', 
                '+973' => 'BAHRAIN ', 
                '+880' => 'BANGLADESH ', 
                '+1246' => 'BARBADOS (W.I)', 
                '+375' => 'BELARUS ', 
                '+32' => 'BELGIUM', 
                '+501' => 'BELIZE ', 
                '+229' => 'BENIN ', 
                '+1441' => 'BERMUDA ', 
                '+975' => 'BHUTAN ', 
                '+591' => 'BOLIVIA ', 
                '+27' => 'BOPUTATSWANA ', 
                '+387' => 'BOSNIA & HERZEGOVINA', 
                '+267' => 'BOTSWANA, REPUBLIC OF', 
                '+55' => 'BRAZIL ', 
                '+673' => 'BRUNEI DARUSSALAM', 
                '+359' => 'BULGARIA ', 
                '+226' => 'BURKINA FASO', 
                '+257' => 'BURUNDI ', 
                '+855' => 'CAMBODIA ', 
                '+237' => 'CAMEROON ', 
                '+1' => 'CANADA ', 
                '+34' => 'CANARY ISLAND', 
                '+238' => 'CAPE VERDE', 
                '+1345' => 'CAYMAN ISLAND', 
                '+236' => 'CENTRAL AFRICAN REP', 
                '+235' => 'CHAD ', 
                '+56' => 'CHILE ', 
                '+86' => 'CHINA ', 
                '+9103' => 'CHRISTMAS ISLAND', 
                '+27' => 'CISKEI ', 
                '+672' => 'COCOS KEELING ISLAND', 
                '+57' => 'COLOMBIA ', 
                '+269' => 'COMOROS ', 
                '+242' => 'CONGO ', 
                '+682' => 'COOK ISLAND', 
                '+506' => 'COSTA RICA', 
                '+255' => 'COTE D IVOIRE', 
                '+385' => 'CROATIA ', 
                '+53' => 'CUBA ', 
                '+357' => 'CYPRUS ', 
                '+420' => 'CZECH REPUBLIC', 
                '+45' => 'DENMARK ', 
                '+246' => 'DIEGO GARCIA', 
                '+253' => 'DJIBOUTI ', 
                '+-766' => 'DOMINICAN REPUBLIC', 
                '+-766' => 'DOMNICA ISLAND', 
                '+593' => 'ECUADOR ', 
                '+20' => 'EGYPT ', 
                '+503' => 'EL SALVADOR', 
                '+240' => 'EQUATORIAL GUINEA', 
                '+291' => 'ERITREA ', 
                '+372' => 'ESTONIA ', 
                '+251' => 'ETHIOPIA ', 
                '+500' => 'FALKLAND ISLAND', 
                '+298' => 'FAROE ISLAND', 
                '+679' => 'FIJI REPUBLIC', 
                '+358' => 'FINLAND ', 
                '+594' => 'FR.GUINEA', 
                '+689' => 'FR.POLYNESIA', 
                '+33' => 'FRANCE ', 
                '+241' => 'GABONESE REPUBLIC', 
                '+220' => 'GAMBIA ', 
                '+995' => 'GEORGIA ', 
                '+49' => 'GERMANY ', 
                '+233' => 'GHANA ', 
                '+350' => 'GIBRALTAR ', 
                '+30' => 'GREECE ', 
                '+299' => 'GREENLAND ', 
                '+472' => 'GRENADA ', 
                '+590' => 'GUADELOUPE ', 
                '+671' => 'GUAM ', 
                '+502' => 'GUATEMALA ', 
                '+224' => 'GUINEA ', 
                '+245' => 'GUINEA BISSAU', 
                '+592' => 'GUYANA ', 
                '+509' => 'HAITI ', 
                '+807' => 'HAWAII', 
                '+504' => 'HONDURAS ', 
                '+852' => 'HONG KONG', 
                '+36' => 'HUNGARY ', 
                '+354' => 'ICELAND ', 
                '+62' => 'INDONESIA ', 
                '+98' => 'IRAN ', 
                '+964' => 'IRAQ ', 
                '+353' => 'IRELAND ', 
                '+972' => 'ISRAEL ', 
                '+39' => 'ITALY ', 
                '+875' => 'JAMAICA ', 
                '+81' => 'JAPAN ', 
                '+962' => 'JORDAN HASHEMITE', 
                '+7' => 'KAZAKHSTAN ', 
                '+254' => 'KENYA ', 
                '+996' => 'KYRGYZSTAN ', 
                '+686' => 'KIRIBATI ', 
                '+850' => 'KOREA (NORTH)', 
                '+82' => 'KOREA (SOUTH)', 
                '+965' => 'KUWAIT, STATE OF', 
                '+856' => 'LAOS ', 
                '+371' => 'LATVIA ', 
                '+961' => 'LEBANON ', 
                '+266' => 'LESOTHO ', 
                '+231' => 'LIBERIA ', 
                '+218' => 'LIBYA ', 
                '+423' => 'LICHTENSTEIN ', 
                '+370' => 'LITHUANIA ', 
                '+352' => 'LUXEMBORG ', 
                '+853' => 'MACAO ', 
                '+389' => 'MACEDONIA ', 
                '+261' => 'MADAGASCAR ', 
                '+351' => 'MADEIRA ISLAND', 
                '+265' => 'MALAWI ', 
                '+60' => 'MALAYSIA ', 
                '+960' => 'MALDIVES ', 
                '+223' => 'MALI ', 
                '+356' => 'MALTA ', 
                '+670' => 'MARIANA ISLAND', 
                '+692' => 'MARSHAL ISLAND', 
                '+596' => 'MARTINIQUE ', 
                '+222' => 'MAURITANIA ', 
                '+230' => 'MAURITIUS ', 
                '+269' => 'MAYOTTE ', 
                '+52' => 'MEXICO ', 
                '+691' => 'MICRONESIA ', 
                '+373' => 'MOLDOVA ', 
                '+377' => 'MONACO ', 
                '+976' => 'MONGOLIA ', 
                '+1664' => 'MONTSERRAT ', 
                '+212' => 'MOROCCO ', 
                '+258' => 'MOZAMBIQUE ', 
                '+95' => 'MYANMAR ', 
                '+264' => 'NAMIBIA ', 
                '+674' => 'NAURU ', 
                '+977' => 'NEPAL ', 
                '+31' => 'NETHERLANDS ', 
                '+599' => 'NETHERLANDS ANTILLES', 
                '+687' => 'NEW CALEDONIA', 
                '+64' => 'NEW ZEALAND', 
                '+505' => 'NICARAGUA ', 
                '+227' => 'NIGER ', 
                '+234' => 'NIGERIA ', 
                '+683' => 'NIUE ISLAND', 
                '+47' => 'NORWAY ', 
                '+968' => 'OMAN ', 
                '+92' => 'PAKISTAN ', 
                '+680' => 'PALAU ', 
                '+970' => 'PALESTINE ', 
                '+507' => 'PANAMA ', 
                '+675' => 'PAPUA NEW GUINEA ', 
                '+595' => 'PARAGUAY ', 
                '+51' => 'PERU ', 
                '+63' => 'PHILIPPINES ', 
                '+48' => 'POLAND ', 
                '+351' => 'PORTUGAL ', 
                '+1787' => 'PUERTO RICO', 
                '+974' => 'QATAR ', 
                '+262' => 'REUNION ', 
                '+230' => 'RODRIGUES ISLAND', 
                '+40' => 'ROMANIA ', 
                '+7' => 'RUSSIAN FEDERATION', 
                '+250' => 'RWANDESE REPUBLIC', 
                '+684' => 'SAMOA AMERICAN', 
                '+685' => 'SAMOA WESTERN', 
                '+378' => 'SAN MARINO', 
                '+239' => 'SAO TOME & PRINCIPE', 
                '+966' => 'SAUDI ARABIA', 
                '+221' => 'SENEGAL ', 
                '+248' => 'SEYCHELLES ', 
                '+232' => 'SIERRA LEONE', 
                '+65' => 'SINGAPORE ', 
                '+421' => 'SLOVAK REPUBLIC', 
                '+386' => 'SLOVENIA ', 
                '+677' => 'SOLOMON ISLAND', 
                '+252' => 'SOMALIA DEMOCRATIC REP', 
                '+27' => 'SOUTH AFRICA', 
                '+34' => 'SPAIN ', 
                '+94' => 'SRI LANKA', 
                '+290' => 'ST.HELENA', 
                '+1869' => 'ST.KITTS - NEVIS', 
                '+1758' => 'ST.LUCIA', 
                '+508' => 'ST.PIERRE & MIQUELON', 
                '+1809' => 'ST.VINCENT & THE GRENADINES', 
                '+249' => 'SUDAN ', 
                '+597' => 'SURINAME ', 
                '+268' => 'SWAZILAND ', 
                '+46' => 'SWEDEN ', 
                '+41' => 'SWITZERLAND ', 
                '+963' => 'SYRIA ', 
                '+992' => 'TAJIKISTAN ', 
                '+886' => 'TAIWAN ', 
                '+255' => 'TANZANIA ', 
                '+66' => 'THAILAND ', 
                '+228' => 'TOGOLESE REPUBLIC', 
                '+676' => 'TONGA ', 
                '+27' => 'TRANSKEI ', 
                '+1868' => 'TRINIDAD & TOBAGO', 
                '+216' => 'TUNISIA ', 
                '+90' => 'TURKEY ', 
                '+993' => 'TURKMENISTAN ', 
                '+1649' => 'TURKS & CAICOS ISLAND', 
                '+688' => 'TUVALU ', 
                '+256' => 'UGANDA ', 
                '+380' => 'UKRAINE ', 
                '+971' => 'UNITED ARAB EMIRATES', 
                '+44' => 'UNITED KINGDOM', 
                '+1' => 'UNITED STATES OF AMERICA', 
                '+598' => 'URUGUAY ', 
                '+998' => 'UZBEKISTAN ', 
                '+678' => 'VANUATU ', 
                '+39' => 'VATICAN CITY STATE', 
                '+27' => 'VENDA ', 
                '+58' => 'VENEZUELA ', 
                '+84' => 'VIETNAM ', 
                '+339' => 'VIRGIN ISLAND (A)', 
                '+289' => 'VIRGIN ISLAND (B)', 
                '+681' => 'WALLIS & FUTUNA ISLAND', 
                '+967' => 'YEMEN (SANA A)', 
                '+381' => 'YUGOSLAVIA ', 
                '+243' => 'ZAIRE ', 
                '+260' => 'ZAMBIA ', 
                '+263' => 'ZIMBABWE '
                
                ], $involucrado->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('teléfono') }}
            {{ Form::text('telefonoPersona', $involucrado->telefonoPersona, ['class' => 'form-control' . ($errors->has('telefonoPersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('telefonoPersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('emailPersona', $involucrado->emailPersona, ['class' => 'form-control' . ($errors->has('emailPersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('emailPersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 
        
        <div class="form-group">
            {{ Form::label('implicación') }}
            {{ Form::select('implicacion', [ 'Directa' => 'Directa','Indirecta' => 'indirecta'], $involucrado->implicacion, ['class' => 'form-control' . ($errors->has('implicacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('implicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div> 

        <div class="form-group">
            {{ Form::label('Organizacion') }}
            {{ Form::select('organizacion_id', $Organizacions,$involucrado->organizacion_id, ['class' => 'form-control' . ($errors->has('organizacion_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('organizacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
      
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionInvolucrado', $involucrado->descripcionInvolucrado, ['class' => 'form-control' . ($errors->has('descripcionInvolucrado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionInvolucrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>