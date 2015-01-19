<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="../../../../../CascadingStyleSheets/Common/Common/Common/Window/Common/Form.css" rel="stylesheet" />
    <link href="../../../../../CascadingStyleSheets/Mobile/Window/Common/Form.css" rel="stylesheet" media="screen and (max-width: 620px "/>
</head>
<div id="DivIdScopo">
    <div id="DivInformation">
        <h1>Logo 4Carrus</h1>
        <h5>Cadastre-se em uma conta pessoal ou uma <a href="#">conta comercial</a></h5>
        <p id="Hint-Text"><em>*</em> Dados obrigatórios</p>
    </div>

    <div id="DivIdBasicSingUp">
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

                    <li>
                        <button id="ButtonIdOlus">Plus</button>
                    </li>
                </ol>

                <ul>
                    <li>
                        <input type="checkbox" id="InputCheckBox" class="InputCheckboxClass">
                        <label for="InputCheckBox" id="Label">Li e aceito o <a href="#">Contrato do Usuário</a> e a <a href="#">Política de Privacidade</a>.</label>
                    </li>
                    <li>
                        <input type="checkbox" id="InputCheckBoxNewsLetter" class="InputCheckboxClass">
                        <label for="InputCheckBoxNewsLetter">Concordo em receber comunicações do 4Carrus e posso mudar minhas preferências de notificação em Meu 4Carrus.</label>
                    </li>
                </ul>
            </fieldset>

        </form>
    </div>
</div>

</html>