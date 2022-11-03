<style>
    #dashboard_home_outer_wrapper_ID {
        width: 100%;
        padding: 40px;
    }

    #dashboard_home_outer_wrapper_ID p {
        font-size: 14px;
        color: #646464;
        margin-bottom: 10px;
    }

    #dashboard_home_outer_wrapper_ID a {
        text-decoration: none;
    }

    #dashboard_home_outer_wrapper_ID a:focus,
    #dashboard_home_outer_wrapper_ID a:hover {
        outline: none;
    }

    #dashboard_home_outer_wrapper_ID button.my_account_edit {
        margin-top: 20px;
        background: #fff;
        border: 1px solid #D8D8D8;
        font-size: 14px;
        color: #646464;
    }

    #dashboard_home_inner_wrapper_ID {
        /*height: calc(100vh - 199px);*/
        width: 100%;
    }

    #dashboard_home_inner_wrapper_ID .dashboard_home_heading {
        font-size: 30px;
        margin-bottom: 20px;
        font-weight: 600;
        color: #040404;
        line-height: 1;
        position: relative;
    }

    #dashboard_home_inner_wrapper_ID .dashboard_home_welcome {
        font-size: 20px;
        color: #646464;
        line-height: 1;
        margin-bottom: 35px;
    }

    .shop_heading {
        border-bottom: 1px solid #D8D8D8;
        padding-bottom: 10px;
    }

    .shop_heading button.shop_button {
        background: #F8F6F4;
        border: 1px solid #D8D8D8;
        color: #646464;
        padding: 8px 10px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 25px;
        line-height: 1;
        margin-right: 10px;
        transition: all 0.3s;
    }

    .shop_heading button.shop_button:hover,
    .shop_heading button.shop_button:focus,
    .shop_heading button.shop_button.active {
        background: #D8D8D8;
        font-size: 14px;
        color: #646464;
        outline: none;
    }

    .shop_heading button.shop_button.shop_button_support {
        float: right;
        background: #CFF5F6;
        border: none;
        color: #2EAADC;
        margin-right: 0px;
    }

    .setting_subheading {
        font-size: 14px;
        color: #040404;
        font-weight: 600;
        line-height: 1;
        margin-top: 40px;
    }

    .setting_subheading + p {
        font-size: 14px;
        color: #646464;
        margin-bottom: 0;
        line-height: 1;
        margin-top: 20px;
    }

    .shop_offer {
        display: grid;
        grid-template-columns: 35.5% repeat(3, 21.5%);
        margin-top: 30px;
    }

    .shop_offer_quick,
    .shop_offer_standard,
    .shop_offer_power {
        width: 23%;
    }

    .shop_offer ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .shop_offer ul li {
        border-bottom: 1px solid #E1D3FF;
        font-size: 14px;
        padding: 10px 0;
        line-height: 1;
        color: #646464;
    }

    .shop_offer ul li.color {
        color: #9B70D2;
    }

    .shop_offer ul li:last-child {
        border-bottom: none;
    }

    .shop_offer ul.shop_offer_labels {
        width: 31%;
        margin-top: 112px;
    }

    .shop_offer .shop_offer_quick {
        border: 1px solid #E1D3FF;
        border-radius: 5px 0px 0px 5px;
        border-right: 0;
    }

    .shop_offer .shop_offer_standard {
        border: 1px solid #E1D3FF;
        border-radius: 0px;
        border-right: 0;
    }

    .shop_offer .shop_offer_power {
        border: 1px solid #E1D3FF;
        border-radius: 0px 5px 5px 0;
    }

    .shop_offer .shop_offer_quick ul li,
    .shop_offer .shop_offer_standard ul li,
    .shop_offer .shop_offer_power ul li {
        padding-left: 10px;
    }

    .shop_offer_quick label,
    .shop_offer_standard label,
    .shop_offer_power label {
        color: #040404;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        display: block;
    }

    .shop_offer_quick span,
    .shop_offer_standard span,
    .shop_offer_power span {
        color: #2EAADC;
        font-size: 14px;
        font-weight: 600;
        display: block;
        margin: 10px 0;
    }

    .shop_price {
        background: #F8F6F4;
        padding: 10px;
        display: grid;
        row-gap: 10px;
    }

    .shop_price label {
        font-size: 14px;
        line-height: 17px;
        color: #040404;
        font-variation-settings: 'slnt' 0;
        font-weight: 600;
    }

    .shop_price > span {
        font-size: 14px;
        line-height: 17px;
        color: #2EAADC;
        font-variation-settings: 'slnt' 0;
        font-weight: 600;
    }

    .shop_price button {
        background: #2EAADC;
        font-size: 14px;
        line-height: 17px;
        color: #fff;
        padding: 9px 10px;
        display: flex;
        align-items: center;
        border-radius: 5px;
        width: fit-content;
        column-gap: 10px;
    }

    @media(max-width: 500px) {
        .shop_offer {
            grid-template-columns: repeat(4, 25%);
        }

        .shop_price button {
            font-size: 12px;
        }

        .shop_price button img {
            display: none;
        }
    }

    .shop_offer_quick button,
    .shop_offer_standard button,
    .shop_offer_power button {
        background: #2EAADC;
        color: #fff;
        border-radius: 5px;
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        padding: 10px;
        line-height: 1;
    }

    select.select-account-type {
        width: 208px;
        height: 35px;
        background: #F5F5F5;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        color: #646464;
        padding: 10px;
        display: inline-block;
        vertical-align: middle;
        margin-top: 10px;
    }

    .hr {
        margin: 40px 0 20px 0;
        border-bottom: 1px solid #D8D8D8;
    }

    .tab_shop_content {
        display: none;
    }

    .tab_shop_content.active {
        display: block;
    }

    #shop_account_form_outer_div_ID .label_block {
        display: block;
        font-size: 14px;
        line-height: 1;
        margin-bottom: 8px;
        color: #646464;
    }

    #shop_account_form_outer_div_ID .input_form_class {
        width: 100%;
        background: #fff;
        box-shadow: none;
        border: 1px solid #D8D8D8;
        border-radius: 3px;
        height: 35px;
    }

    #shop_account_form_outer_div_ID .input_form_class[disabled] {
        background: #F5F5F5;
        border-color: #F5F5F5;
    }

    #shop_account_form_outer_div_ID {
        width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 10px;
    }

    #shop_account_form_outer_div_ID form {
        width: 100%;
        display: grid;
        row-gap: 20px;
    }

    #shop_account_form_outer_div_ID form p {
        margin-bottom: 0;
    }

    .shop_account_wrapper {
        position: relative;
    }

    .my_account_controls {
        right: 0;
        top: -10px;
    }

    #dashboard_home_outer_wrapper_ID button.my_account_edit {
        margin-top: 0;
        background: #2EAADC;
        color: #fff;
    }

    .shop_offer p {
        margin-bottom: 0 !important;
    }

    .shop_offer-bb {
        border-bottom: 1px solid #E1D3FF;
    }

    .shop_offer-br {
        border-right: 1px solid #E1D3FF;
    }

    .shop_offer-brbr {
        border-bottom-right-radius: 5px;
    }

    .shop_offer-blbr {
        border-bottom-left-radius: 5px;
    }

    .shop_offer-bltr {
        border-top-left-radius: 5px;
    }

    .shop_offer-brtr {
        border-top-right-radius: 5px;
    }

    .shop_offer-lr {
        border-left: 1px solid #E1D3FF;
    }

    .shop_offer-bt {
        border-top: 1px solid #E1D3FF;
    }

    .shop_offer-p-10 {
        padding: 10px;
    }

    .shop_offer-py-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .shop_offer-pt-24 {
        padding-top: 24px;
    }

    .text-purple {
        color: #9B70D2 !important;
    }

    @media (max-width: 768px) {
        #dashboard_home_outer_wrapper_ID {
            padding: 15px;
        }

        #dashboard_home_inner_wrapper_ID .dashboard_home_heading {
            font-size: 20px;
        }

        #dashboard_home_inner_wrapper_ID .dashboard_home_welcome {
            margin-bottom: 35px;
        }
    }
</style>
<div class='dashboard_home_outer_wrapper' id='dashboard_home_outer_wrapper_ID'>
    <div class='dashboard_home_inner_wrapper' id='dashboard_home_inner_wrapper_ID'>
        <div class='dashboard_home_welcome_div' id='dashboard_home_welcome_div_ID'>
            <p class='dashboard_home_heading'>Shop <span class="breadcrumps">DASHBOARD &gt; SHOP</span></p>
            <p class='dashboard_home_welcome'>Add new resources, view purchases, and edit billing details.</p>
        </div>

        <div class="shop_heading">
            <button class="shop_button shop_button_add active" data-name="add">Add</button>
            <button class="shop_button shop_button_history" data-name="purchases">Purchases</button>
            <button class="shop_button shop_button_billing" data-name="billing">Billing</button>
            <a href="mailto:hello@conduce.io" target="_blank">
                <button class="shop_button shop_button_support">Support</button>
            </a>
        </div>

        <div class="tab_shop_content active" id="add">
            <div class="setting_subheading">Add</div>
            <p>For the beta version you can pay for three or ten runs. These account for any test runs that you may
                need.</p>

            <div class="shop_offer">

                <div></div>

                <div class="shop_price shop_offer-lr shop_offer-bt shop_offer-bltr shop_offer-br">
                    <label>Quick</label>
                    <span>$12.99</span>
                    <button class="">
                        <span>Purchase</span>
                        <img src="<?php echo UD_ASSETS_PATH . 'icons/plus-icon.png'?>" alt="icon">
                    </button>
                </div>

                <div class="shop_price shop_offer-br shop_offer-bt">
                    <label>Standard</label>
                    <span>$19.99</span>
                    <button class="">
                        <span>Purchase</span>
                        <img src="<?php echo UD_ASSETS_PATH . 'icons/plus-icon.png'?>" alt="icon">
                    </button>
                </div>

                <div class="shop_price shop_offer-br shop_offer-bt shop_offer-brtr">
                    <label>Power</label>
                    <span>$29.99</span>
                    <button class="">
                        <span>Purchase</span>
                        <img src="<?php echo UD_ASSETS_PATH . 'icons/plus-icon.png'?>" alt="icon">
                    </button>
                </div>

                <p class="shop_offer-bb shop_offer-py-10 shop_offer-pt-24">Runs</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-lr shop_offer-p-10 shop_offer-pt-24">3</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10 shop_offer-pt-24">5</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10 shop_offer-pt-24">10</p>

                <p class="shop_offer-bb shop_offer-py-10">Active run downloads</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-lr shop_offer-p-10">3</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10">3</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10">3</p>

                <p class="shop_offer-bb shop_offer-py-10">Memory usage</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-lr shop_offer-p-10 text-purple">Coming soon</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10 text-purple">Coming soon</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10 text-purple">Coming soon</p>

                <p class="shop_offer-py-10">Customization</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-lr shop_offer-blbr shop_offer-p-10 text-purple">Coming
                    soon</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-p-10 text-purple">Coming soon</p>
                <p class="shop_offer-bb shop_offer-br shop_offer-brbr shop_offer-p-10 text-purple">Coming soon</p>
            </div>

            <div class="hr"></div>

            <a href="<?php echo esc_url('https://www.conduce.io/tools/'); ?>"
               target="_blank"
               class="faq-button">
                <span>FAQ</span>
                <img src="<?php echo UD_ASSETS_PATH . 'icons/faq-icon.png'; ?>" alt="icon">
            </a>

        </div>

        <div class="tab_shop_content" id="purchases">
            <div class="setting_subheading">Invoices</div>

            <div class="">

                <style>
                    table#shopInvoices thead th {
                        font-weight: 600;
                        color: #2EAADC;
                        font-size: 12px;
                        padding: 10px;
                        background: #fff;
                        border-color: #D8D8D8;
                    }

                    table#shopInvoices tbody td {
                        font-weight: 400;
                        color: #646464;
                        font-size: 12px;
                        padding: 20px 10px;
                        background: #fff;
                        box-shadow: none;
                        border-color: #D8D8D8;
                    }

                    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
                    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                        border: 1px solid #D8D8D8;
                        border-radius: 5px;
                        background: #E1D3FF;
                        font-size: 12px;
                    }

                    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
                    .dataTables_wrapper .dataTables_paginate .paginate_button {
                        font-size: 12px;
                        border-radius: 5px;
                    }

                    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
                    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active,
                    .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
                    .dataTables_wrapper .dataTables_paginate .paginate_button:active,
                    .dataTables_wrapper .dataTables_paginate .paginate_button:focus {
                        background: #E1D3FF;
                        border-radius: 5px;
                        border: 1px solid #E1D3FF;
                    }

                    .dataTables_wrapper .dataTables_info,
                    .dataTables_wrapper .dataTables_length {
                        font-size: 12px;
                    }

                    #shopInvoices_filter label {
                        font-size: 12px;
                    }

                    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                        border: 1px solid #E1D3FF;
                        font-size: 12px;
                        color: #fff;
                    }

                    .dataTables_wrapper .dataTables_filter input {
                        border: none;
                        border-radius: 25px;
                        padding: 5px;
                        margin-left: 3px;
                        background: #F5F5F5;
                        box-shadow: none;
                        font-size: 12px;
                        height: 35px;
                    }

                    #shopInvoices_wrapper {
                        margin-top: 20px;
                    }

                    table.dataTable {
                        padding-top: 10px;
                    }
                </style>

                <table id="shopInvoices" class="display compact" style="width:100%">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Order ID</th>
                        <th>Total</th>
                        <th>Notes</th>
                        <th>Item</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Power</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Quick</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Quick</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Quick</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Power</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Power</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Power</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Quick</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Power</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>25-10-2022</td>
                        <td>564532</td>
                        <td>$250.00</td>
                        <td>Note message</td>
                        <td>Standard</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>


        <div class="tab_shop_content" id="billing">
            <div class="setting_subheading">Account type</div>
            <p>Select whether you are an individual, company, or other organisation.</p>

            <select class="select-account-type"
                    name="account_type">
                <option value="individual">Individual</option>
                <option value="company">Company</option>
                <option value="organisation">Organisation</option>
            </select>

            <div class="hr"></div>

            <div class="setting_subheading">Billing details</div>
            <p>Change your billing details.</p>

            <div class="shop_account_wrapper">
                <div id="shop_account_form_outer_div_ID">
                    <form action="" method="post" id="user_profile_form_ID">
                        <div class="my_account_controls">
                            <button class="my_account_cancel">Cancel</button>
                            <button type="submit" name="update_user_data" class="my_account_save">Save <img
                                        src="https://app.conduce.io/wp-content/plugins/custom-user-dashboard/assets/icons/check.svg">
                            </button>
                            <button class="my_account_edit">Edit <img
                                        src="https://app.conduce.io/wp-content/plugins/custom-user-dashboard/assets/icons/pen-white.svg">
                            </button>
                        </div>

                        <p class="p_first_last_name">
                    <span class="first_last_name_span">
                        <label class="label_block">Name</label>
                        <input type="text" disabled="" class="input_form_class" value="" name="form_first_name"
                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                    </span>
                        </p>
                        <p>
                            <label class="label_block">Email</label>
                            <input type="email" disabled="" class="input_form_class" value="" name="form_email"
                                   style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                        </p>
                        <p>
                            <label class="label_block">Phone</label>
                            <input type="text" disabled="" class="input_form_class" value="" name="form_displayName"
                                   style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                        </p>
                        <p>
                            <label class="label_block">Address</label>
                            <input type="email" disabled="" class="input_form_class" value="" name="form_email"
                                   style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                        </p>
                    </form>
                </div>
            </div>

        </div>


    </div>
</div>
</div>
<script>

    jQuery(document).ready(function ($) {

        $(".shop_button").click(function (e) {
            $(".shop_button").removeClass('active');
            $(this).addClass('active');

            $(".tab_shop_content").removeClass("active");
            $(".tab_shop_content#" + $(this).attr('data-name')).addClass("active");
        });
    });
</script>