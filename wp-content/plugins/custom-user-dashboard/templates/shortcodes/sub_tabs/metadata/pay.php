<style media="screen">
    .metadata_pay_tab_content .pay_tab_content_header {
        margin: 45px;
    }
    .metadata_pay_tab_content .pay_tab_content_header h2 {
        font-size: 30px;
        font-weight: 600;
    }
    .metadata_pay_tab_content .pay_tab_content_header p {
        font-size: 20px;
        color: #646464;
    }
    .metadata_pay_tab_content .add-to-cart-btn {
        border: 1px solid #dcdcdc;
        padding: 9px 95px;
        margin-left: 45px;
        border-radius: 5px;
        color: #656565;
        font-size: 18px;
        background-color: #f4f4f4;
    }    
</style>
<div class="metadata_pay_tab_content">
    <div class="pay_tab_content_header">
        <h2>Pay</h2>
        <p>Pay to use the tool and manage your runs.</p>
    </div>
    <div class="pay_tab_content">
        <a href="<?php echo site_url() . '?add-to-cart=' . CUSTOM_PRODUCT_ID .  '&quantity=1' ?>" class="add-to-cart-btn load-content">Pay with Stripe</a>
    </div>
</div>
