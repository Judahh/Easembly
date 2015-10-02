<script src="../../../../../JavaScript/Framework/angular-1.2.22/ui-utils/modules/mask/mask.js"></script>
<form id="FormIdBasicSingUp" name="FormNameBasicSingUp" method="post">
    <fieldset>
        <legend>Dados Pessoais</legend>
        <ol>
            <li id="LiIdFirstName">
                <label for="InputIdTextFirstName" id="LabelIdtFirstName">
                    Nome:
                    <em>*</em>
                </label>
                <input type="text" id="InputIdTextFirstName" size="25"
                       onclick="
                                    this.style.background = '#F5F5F5',
                                    this.style.borderColor = '#FFF'

                                    if(this.value == 'Campo Obrigatório!'){
                                        this.value = ''
                                    }
                               "

                       onblur="
                                    if(this.value == ''){
                                        this.value = 'Campo Obrigatório!',
                                        this.style.background = '#FFA6A6',
                                        this.style.borderColor = 'red'
                                    }
                                "

                       onchange="
                                if(this.value.length > 1){
                                  this.style.background = '#97FFB1',
                                  this.style.borderColor = 'green'
                                  }

                                ">
            </li>

            <li id="LiIdSecondName">
                <label for="InputIdTextSecondName" id="LabelIdSecondName">
                    Sobrenome:
                    <em>*</em>
                </label>
                <input type="text" id="InputIdTextSecondName" size="25"
                       onclick="
                                    this.style.background = '#F5F5F5',
                                    this.style.borderColor = '#FFF'

                                    if(this.value == 'Campo Obrigatório!'){
                                        this.value = ''
                                    }
                               "

                       onblur="
                                    if(this.value == ''){
                                        this.value = 'Campo Obrigatório!',
                                        this.style.background = '#FFA6A6',
                                        this.style.borderColor = 'red'
                                    }
                                "

                       onchange="
                                if(this.value.length > 1){
                                  this.style.background = '#97FFB1',
                                  this.style.borderColor = 'green'
                                  }

                                ">
            </li>

            <li id="LiIdEmail">
                <label for="InputIdTextEmail" id="LabelIdEmail">
                    E-mail:
                    <em>*</em>
                </label>
                <input type="text" id="InputIdTextEmail" size="25"
                       onclick="
                                    this.style.background = '#F5F5F5',
                                    this.style.borderColor = '#FFF'

                                    if(this.value == 'Campo Obrigatório!'){
                                        this.value = ''
                                    }
                               "

                       onblur="
                                    if(this.value == ''){
                                        this.value = 'Campo Obrigatório!',
                                        this.style.background = '#FFA6A6',
                                        this.style.borderColor = 'red'
                                    }
                                "

                       onchange="
                                if(this.value.length > 1){
                                  this.style.background = '#97FFB1',
                                  this.style.borderColor = 'green'
                                  }

                                ">@
                <input type="text" list="DatalistIdEmailProvider" onclick="
                                    this.style.background = '#F5F5F5',
                                    this.style.borderColor = '#FFF'

                                    if(this.value == 'Campo Obrigatório!'){
                                        this.value = ''
                                    }
                               "

                       onblur="
                                    if(this.value == ''){
                                        this.value = 'Campo Obrigatório!',
                                        this.style.background = '#FFA6A6',
                                        this.style.borderColor = 'red'
                                    }
                                "

                       onchange="
                                if(this.value.length > 1){
                                  this.style.background = '#97FFB1',
                                  this.style.borderColor = 'green'
                                  }

                                ">
                <datalist id="DatalistIdEmailProvider">
                    <option>gmail.com</option>
                    <option>hotmail.com</option>
                    <option>yahoo.com</option>
                    <option>live.com</option>
                    <option>unifor.com</option>
                </datalist>
            </li>

            <li id="LiIdRepeatEmail">
                <label for="InputIdTextRepeatEmail">
                    Repetir e-mail:
                    <em>*</em>
                </label>
                <input type="text" id="InputIdTextRepeatEmail" size="25"
                       onclick="
                                    this.style.background = '#F5F5F5',
                                    this.style.borderColor = '#FFF'

                                    if(this.value == 'Campo Obrigatório!'){
                                        this.value = ''
                                    }
                               "

                       onblur="
                                    if(this.value == ''){
                                        this.value = 'Campo Obrigatório!',
                                        this.style.background = '#FFA6A6',
                                        this.style.borderColor = 'red'
                                    }
                                "

                       onchange="
                                if(this.value.length > 1){
                                  this.style.background = '#97FFB1',
                                  this.style.borderColor = 'green'
                                  }

                                ">@
                <input type="text" readonly />
            </li>

            <li id="LiIdPassword">
                <label for="InputIdPassword">
                    Definir senha:
                    <em>*</em>
                </label>
                <input type="password" id="InputIdPassword" size="25">
                <span>Senha deve conter de 6 a 20 caracteres</span>
            </li>

            <li id="LiIdUserCPF">
                <label for="inputTextIdentificationUserCPF" id="LabelIdUserCPF">
                    CPF:
                    <em>*</em>
                </label>
                <input type="text" id="inputTextIdentificationUserCPF" size="14" ui-mask="999.999.999-99">
            </li>

            <li id="LiIdGeneralRegister">
                <label for="InputTextIdGeneralRegister" id="LabelIdGeneralRegister">
                    RG:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdGeneralRegister">
            </li>

            <li id="LiIdIssuerOrgan">
                <label for="InputTextIdIssuerOrgan" id="LabelIdIssuerOrgan">
                    Orgão Emissor:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdIssuerOrgan">
            </li>

            <li id="LiIdDateExpedition">
                <label for="InputDateIdExpedition" id="LabelIdDateExpedition">
                    Data de Expedição:
                    <em>*</em>
                </label>
                <input type="date" id="InputDateIdExpedition">
            </li>

            <li id="LiIdDateIdBirth">
                <label for="InputDateIdBirth" id="LabelIdDateIdBirth">
                    Data Nascimento:
                    <em>*</em>
                </label>
                <input type="date" id="InputDateIdBirth">
            </li>

            <li id="LiIdGender">
                <label id="LabelIdGender">
                    Sexo:
                    <em>*</em>
                </label>

                <label for="InputRadioGenderMan" id="LabelIdGenderMan" class="LabelClassGender">
                    M
                </label>
                <input type="radio" name="Sexo" id="InputRadioGenderMan" class="InputRadioClass" value="1" />

                <label for="InputRadioGenderWoman" id="LabelIdGenderMan" class="LabelClassGender">
                    F
                </label>
                <input type="radio" name="Sexo" id="InputRadioGenderWoman" class="InputRadioClass" value="2" />
            </li>

            <li id="LiIdMaritalStatus">
                <label for="SelectIdMaritalStatus" id="LabelIdMaritalStatus">
                    Estado Civil:
                    <em>*</em>
                </label>
                <select id="SelectIdMaritalStatus">
                    <option selected>Solteiro(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viuvo(a)</option>
                </select>
            </li>

            <li id="LiIdPasture">
                <label for="InputIdPasture" id="LabelIdPasture">
                    Logradouro:
                    <em>*</em>
                </label>
                <select id="SelectIdPasture">
                    <option selected>Rua</option>
                    <option>Avenida</option>
                    <option>Condominio</option>
                </select>
                <input type="text"  size="60" id="InputIdPasture" placeholder="ex: 537"/>
            </li>

            <li id="LiIdNumber">
                <label for="InputTextIdNumber" id="LabelIdNumber">
                    Número:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdNumber" size="6"/>
            </li>

            <li id="LiIdNeighborhood">
                <label for="InputTextIdNeighborhood" id="LabelIdNeighborhood">
                    Bairro:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdNeighborhood" size="40">
            </li>

            <li id="LiIdPostalCode">
                <label for="InputTextIdPostalCode" id="LabelIdPostalCode">
                    CEP:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdPostalCode" size="9" placeholder="ex: 99999-999">
            </li id="LiId">

            <li>
                <label for="InputTextIdComplement" id="LabelIdComplement">
                    Complemento:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdComplement" size="40" placeholder="ex: 2ª etapa">
            </li>

            <li id="LiId">
                <label for="InputTextIdCity" id="LabelIdCity">
                    Municipio:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdCity" size="50" placeholder="ex: Fortaleza">
            </li>

            <li id="LiId">
                <label for="SelectIdState" id="LabelIdState">
                    Estado:
                    <em>*</em>
                </label>
                <select id="SelectIdState">
                    <option selected>CE</option>
                    <option>RJ</option>
                    <option>SP</option>
                </select>
            </li>

            <li id="LiIdCountry">
                <label for="SelectIdCountry" id="LabelIdCountry">
                    País:
                    <em>*</em>
                </label>
                <select id="SelectIdCountry">
                    <option selected>United States of America</option>
                    <option>Brasil</option>
                    <option>China</option>
                    <option>Suécia</option>
                    <option>Africa do Sul</option>
                </select>

            <li ng-repeat="phone in phones" id="LiIdPhone">
                <label for="InputTextPhone" id="LabelIdPhone">
                    Telefone:
                    <em>*</em>
                </label>

                <select id="SelectedIdPhone">
                    <option selected>Fixo</option>
                    <option>Celular</option>
                    <option>Comercial</option>
                    <option>Fax</option>
                </select>
                <input type="text" id="InputTextPhone" size="15">
                <button id="ButtonIdPlusPhone" ng-submit="addTodo()" >Plus</button>
            </li>
        </ol>