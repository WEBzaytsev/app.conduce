<?php
$toggle_sidebar_button_text = $args['text'];
?>

<h5 class="toggle_sidebar_button_text">
    <span class="toggle_sidebar_button_text-text"><?php esc_html_e($toggle_sidebar_button_text); ?></span>
    <span class="toggle_sidebar_button_icon">
        <span class="tooltip_custom tool_tip">Toggle sidebar</span>
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="15" height="15" fill="url(#pattern0)"/>
            <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_823_135" transform="scale(0.0104167)"/>
            </pattern>
            <image id="image0_823_135"
                   width="96"
                   height="96"
                   xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsSAAALEgHS3X78AAAEiklEQVR4nO2dS4gcVRSGv0niQiQJ7gRf8bnRJEpBYnDIQly4zUJBTUZcnIBufQU0ARNcBFwIPoKeTWA0IAZcCJJsRCZKIGAZBXER0TAg6CJIElBBZ+Kiupsap7kzPX2q69a959sNdP9zuH+f+uveulUFjuM4juM4juM4zkSZaruAGBCR7UABbATmgS9V9Y9J/O+sDRCRh4B3qAa/zt/AMeA1Vf2zyRqyNEBENgAHgVeB9YGPngMeVdWrTdWyrinhWBGRO4E54BDhwQfYAbzXZD1ZdYCI7KM65Gwa4WvXgK2q+kMTNW1oQjQ2RGQz1TH9yTV8fQrYA7gBa0FEpoFZYMsYMvfYVLOcZA0YIWhXw+L4FQ0nSQN6QfshsMtIspHDDyR4FtQL2m+xG/wF4KSR1jKS6YAxgzbE26p60VhzQBIGGAXtMD4DXjHWXEKn5wHGQVtnAXgDOKyqC4a6y+isASJyO1XQThtLzwP7VHXOWHconQxhEXkcOI/94H8CPDCpwYeOdYCIbALeBfYaS18FXlTVD4x1V6QzBojITuAj4C5j6XPA06r6k7HuqojegF7QvgAcAa4zlF4A3gQOquo/hrojEbUBqQRtiGhDOKWgDRFdBzQYtFeAl9oI2hBRGZBq0IaIwoDUgzZE6wbkELQhWg3hXII2RCsdkFvQhpi4ATkGbYiJGZBz0IaYiAG5B22IxkPYgzZMYx3gQbs6GjHAg3b1mBrgQTs6ZgaIyBbgBHb7cfpcBPaq6tfGulFgYkDvDpNTwE0WejVOAM+r6mVj3WgY2wARuYHqLOfu8csZkFTQhrDYmPUctoN/lipofzHUjBaLecATBhpQBe1hYHcugw82HXCvgcY8VdCeMdDqFBYdcM1AAyK4NtEGFgZcMNC4DfhCRF7vzSWywcKAjw00oNpcewiYE5E7jDSjx8KAY9h0QZ9dwHcist9QM1qsJmLbgNP4RGxkTJajVfV7ql/uWQu9Gk8B50XkYWPdaPDFuJbx5eiWsbytZ0BZlr8WRXEcuBXYZih9M/BsURSXyrL8xlC3NRqf/PQuSb4P3GgsfRLYP6nn+jSFX5RvGd+W0jK+MatlGgnhEB7QS2l1BdIDOoIl4NwDunUDIO+AjsKAPjkG9MRDOESOAR1VB9TJJaCjNQDyCOioDYD0Azp6A/qkGtBRhXCIWkDfAmw3lG41oDvTAXVSCuhOGgDpBHRnDkH/pyzLy0VRzPb+nMbufrfNwExRFOuLojhTlqXVzr+hdLYD6jT42MpPqQL6L2PdAdE+L2gUVPUrqmCeXemzI7IHOGqsuYQkOqDOGt8REGIRuF9VfzTSW0ISHVBHVWeBB7HbJLYOu3sghoonh6r+DOwGDgAWs9z7DDSGkqQBAKr6r6oeBR6hutNyHK4fv6LhJGtAH6OA9vcHjIOqXlHVGWCG6g7MUfncuKQByZ0FrcQa3q5xWlUfa6qeLDqgzogBfQF4psl6suuAOiKyA3iL5d2wCBwHXlbVS03WkLUBACIyBWylWk/aCPwGnFLV31stzHEcx3Ecx3Ecx2mG/wCN0cmESpllBAAAAABJRU5ErkJggg=="/>
            </defs>
        </svg>
    </span>
</h5>

<style>
    .toggle_sidebar_button_text {
        display: flex;
        align-items: center;
        margin: 20px auto 10px;
        width: calc(100% - 40px);
        justify-content: space-between;
        color: #646464;
        font-weight: 600;
        font-size: 14px;
        line-height: 17px;
        font-variation-settings: 'slnt' 0;
    }

    .toggle_sidebar_button_icon {
        position: relative;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background-color: #F8F6F4;
        border-radius: 5px;
    }

    .toggle_sidebar_button_icon:hover .tool_tip {
        display: flex;
    }

    .outer_wrapper_myaccount.sidebar-hide .toggle_sidebar_button_icon:hover .tool_tip {
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        left: 110%;
    }

    @media(max-width: 768px) {
        .toggle_sidebar_button_icon {
            display: none!important;
        }

        .main_header .nav_menu_right svg:hover ~ .tool_tip,
        .main_header .inner_wrapper_header .right_sec_header .user_log a:hover ~ .tool_tip,
        #site_up_arrow:hover .tool_tip,
        .footer_links:hover .tool_tip {
            display: none;
        }
    }
</style>
