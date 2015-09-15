<?php
/**
 * Created by PhpStorm.
 * User: Tarciso Torres
 * Date: 18/08/14
 * Time: 19:00
 */
?>

<div id="DivIdFormDealership">
    <ol>
        <li id="LiIdFantasyName">
            <label for="InputIdFantasyName" id="LabelIdFantasyName">
                Nome Fantasia:
                <em>*</em>
            </label>
            <input type="text" id="InputIdFantasyName" size="50">
        </li>

        <li id="LiIdCorporateName">
            <label for="InputIdCorporateName" id="LabelIdCorporateName">
                Razão Social:
                <em>*</em>
            </label>
            <input type="text" id="InputIdCorporateName" size="30">
        </li>

        <li id="LiIdCompanyIdentification">
            <label for="InputIdCompanyIdentification" id="LabelIdCompanyIdentification">
                CNPJ:
                <em>*</em>
            </label>
            <input type="text" id="InputIdCompanyIdentification" size="30">
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
            <input type="button" id="InputButtonPhone" ng-submit="addTodo() value="Add">
        </li>

        <li id="LiIdEmail">
            <label for="InputIdEmail" id="LabelIdEmail">
                E-Mail:
                <em>*</em>
            </label>
            <input type="email" id="InputIdEmail">
        </li>
    </ol>