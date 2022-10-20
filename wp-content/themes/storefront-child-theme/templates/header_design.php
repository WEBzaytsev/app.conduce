<?php
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['my-custom-menu'];
$primaryNav = wp_get_nav_menu_items($menuID);
if( !$primaryNav ){
	$primaryNav=[];
}
?>

<style>
	#masthead{
		background: #F8F6F4;
		border:none;
		min-height: auto;
		padding:20px 0;
        border-bottom:1px solid #D8D8D8;
	}
    .main_header{
        width:100%;
    }
    .main_header .inner_wrapper_header{
        /* max-width:1400px; */
        margin:auto;
        display: flex;
        align-items: center;
    }
    .main_header .inner_wrapper_header .left_sec_header{
        width:50%;
        display: flex;
        align-items: center;
        gap: 20px;
        padding-left:20px;
        padding-top:0;
        padding-bottom:0;
    }
    .main_header .custom-logo-link img{
        width:150px;
    }
    .main_header .inner_wrapper_header .menu_button_mobile{
        color:#646464;
		 
    }
    .main_header .inner_wrapper_header .right_sec_header{
        display:flex;
        justify-content:flex-end;
        align-items:center;
        width: 50%;
        gap: 10px;
        /* padding-right: 15px; */
    }
    .main_header .nav_menu_right{
        position:relative;
        margin-right:20px;
        padding:10px;
        border-radius: 5px;
    }
/*     .main_header span{
        cursor:pointer;
        color: #646464;
        padding: 17px;
        display: flex;
        justify-content: center;
        align-items: center;
    } */
    .main_header svg{
        cursor: pointer;
        color: #646464;
        width: 20px;
        height: 20px;
        padding: 0px;
    }
    .main_header .inner_wrapper_header .right_sec_header .user_log a:hover,
    .main_header .nav_menu_right:hover {
        background-color:white;
        transition:all 0.2s;
    }
/*     .main_header span:hover{
        background:white;
        transition:all 0.2s;
    } */
    .main_header .dashicons-ellipsis{
        font-size: 30px;
    }
    .main_header .main_menu_nav{
        position: absolute;
        background: #F8F6F4;
        width: 162px;
        display: flex;
        flex-direction: column;
        right: 0;
        padding: 10px;
        border-radius: 5px;
        top: 50px;
        display:none;
        border: 1px solid #D8D8D8;
        z-index: 1;
    }
/*     .main_header .main_menu_nav:before{
        content: "";
		width: 9px;
		height: 9px;
		top: -9px;
		position: absolute;
		background-color: #f0f0f0;
		transform: rotateZ(45deg);
		right: 16px;
		border-top: 2px solid #d5d5d5;
		border-left: 2px solid #d5d5d5;
    } */
    .main_header .main_menu_nav a{
        padding: 1px 7px 1px 7px;
        margin-bottom: 10px;
        color: #646464;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
    }
    .main_header .main_menu_nav a:last-child{
        margin-bottom: 0;
    }
    .main_header .main_menu_nav a:nth-child(3){
        margin-top:20px;
        position: relative;
    }
    .main_header .main_menu_nav a:nth-child(3):before{
        content:'';
        border:1px solid #D8D8D8;        
        position: absolute;
        top: -15px;
        left: 0;
        right: 0;
    }
	.main_header .main_menu_nav a span{
		padding:0;
		font-size:15px !important;
        display: inline-block;
        vertical-align: middle;
        line-height: 21px;
	}
    .main_header .main_menu_nav a:hover{
        background-color:white;
    }    
	#mobile_view_header_image{
		display:none;
		width:40px;
        margin-left: -5px;
	}
    body.home #site_up_arrow{
        display:none;
    }

    /* fonts */
    .small{
        font-size:12px;
    }
    .medium{
        font-size:14px;

    }
    .large{
        font-size:20px;
    }
    
	@media(max-width:768px){
		#mobile_view_header_image{
			display:block !important;
		}
		#masthead .custom-logo-link{
			display:none !important;
		}
         .main_header span{
            font-size:20px !important;
        }
        .menu_toggle_cus{
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .main_header .inner_wrapper_header .right_sec_header{
            gap:0;
        }
        #masthead{
            padding-top:10px;
            padding-bottom:10px;
        }
        .main_header svg{
            width: 20px;
            height: 20px;
        }     
        .main_header .nav_menu_right{
            margin-right:0px;
        }
        .main_header .inner_wrapper_header .left_sec_header{
            padding-left:10px;
        }
        .main_header .main_menu_nav{
            display:none!important;
        } 
	}
.tooltip_custom{
    position: absolute;
    left: 50%;
    bottom: -120%;
    z-index: 1111;
    background: black;
    color: white;
    padding: 5px 5px;
    border-radius: 3px;
    font-size: 12px;
    display: none;
    width: max-content;
    text-align: center;
    line-height: 1;
    transform: translate(-50%, -50%);
}
.tooltip_custom.tooltip_side{
    right: 0;
    left: auto;
    bottom: 5px;
    transform: translate(105%, 0%);
}

.tooltip_custom.tip_top{
    transform: translate(-50%, 0);
	top:150%;
	bottom: auto;
}

.tooltip_custom.tip_right{
    right: 0;
    top: 100%;
	bottom: auto;
    transform: none;
    left: auto;
}

.footer_links:hover{
    position:relative;
}

#site_up_arrow:hover .tool_tip,
.footer_links:hover .tool_tip{
    top: -30px;
}

.footer_links:hover .tool_tip.leftside{
    transform: none;
    left: 0;
}

.tooltip_custom2{
    position: absolute;
    right: 40%;
    top: 25px;
    z-index: 1111;
    background: black;
    color: white;
    padding: 8px 12px;
    border-radius: 3px;
    font-size: 12px;
    display: none;
    max-width: 200px;
    width: max-content;
    text-align:center;
}

.main_header .inner_wrapper_header .right_sec_header .user_log{
	position: relative;
}

.main_header .nav_menu_right svg:hover ~ .tool_tip,
.main_header .inner_wrapper_header .right_sec_header .user_log a:hover ~ .tool_tip,
#site_up_arrow:hover .tool_tip,
.footer_links:hover .tool_tip{
	display: flex;
}

.main_header .inner_wrapper_header .right_sec_header .user_log a{
    position: relative;
    padding: 10px 10px;
    border-radius:5px;
}

.mobile_icon_pc_view{
    position: absolute;
    right: 20px;
    top: 20px;
    cursor:pointer;
    transition:all 0.5s;
}
.slid_left_pc_menu{
    position: absolute !important;
    z-index: 1;
    height: 100%;
    left: -400px;
}
.full_screen_for_pc{
    width:94% !important;
    transition:all 0.5s;
}
.hamburg_icon_show_slide{
    right: -105px !important;
    transition:all 0.3s;
}
.hamburg_icon_show_slide:before{
    transform: rotate(180deg);
}
</style>
<div class="main_header">
    <div class="inner_wrapper_header">
            <div class="left_sec_header">
                <!-- <div class="menu_button_mobile"></div> -->
                <img src="<?php echo STOREFRONT_THEME_BASE_URL ?>assets/images/logo.svg">
            </div>
            <div class="right_sec_header">
                <div class="menu_toggle_cus">
                    <!--<span class="menu_button_mobile dashicons dashicons-menu"></span>-->
                </div>
                <div class="user_log">
                    <!-- <span class="user dashicons dashicons-admin-users"></span> -->
					<a href="<?php echo site_url()."/my-account" ?>">
                    	 <img style="display: inline-block;vertical-align: middle;" src="<?php echo UD_ASSETS_PATH . 'icons/home.svg'; ?>">
					</a>
				<span class="tooltip_custom tool_tip tip_top">Dashboard home</span>
                </div>
                <div class="nav_menu_right menu_button_mobile">
<!--                     <span class="dashicons dashicons-ellipsis"></span> -->
                    <svg style="display:block;vertical-align:middle" class="main_menu_nav-btn" viewBox="0 0 512 512" height="50" width="50" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg>
                    <div class="main_menu_nav">
                        <?php foreach ($primaryNav as $menu_item ) { ?>
                            <a class="tool_nav_link" href="<?php echo $menu_item->url; ?>"> <?php echo $menu_item->title; ?></a>
                            <?php } ?>
                    </div>
				<span class="tooltip_custom tool_tip tip_right">Support, sign out, and more</span>
                </div>
            </div>
</div>
            <div class="my_account_sec_2">
        <ul class="my_account_menu">
            <li class="my_account_link active_menu" data-tab="dashboard">
                <a class="<?php if ( $_GET['tab'] == "dashboard" ) echo  'active_menu_item'?> " href="<?php echo get_account_pageUrl('dashboard') ?>">Dashboard</a>
            </li>
            <li class="my_account_link active_menu" data-tab="metadata">
                <a class="<?php if ( $_GET['tab'] == "metadata" ) echo  'active_menu_item'?> " href="<?php echo get_account_pageUrl('metadata') ?>">Metadata</a>
            </li>
            <li class="my_account_link" data-tab="analysis">
                <a class="<?php if ( $_GET['tab'] == "analysis" ) echo  'active_menu_item'?> " href="<?php echo get_account_pageUrl('analysis') ?>">Analysis</a>				
            </li>
			<div class="my_account_link_last">
            <li class="my_account_link con_active_menu">
            	<a class="active_menu_item" href="<?php  ?>">Shop</a>
			</li>
			</div>
        </ul>
</div>    
</div>
<script>
	(function($){
	    const isMobile = window.outerWidth <= 768;

	    if (isMobile) {
            $("#masthead  .menu_button_mobile").click(function(){
                if( $("#masthead  .menu_button_mobile").hasClass("active") ){
                    $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main").animate({ left: '-800px' }, 500);
                    $(this).removeClass("active")
                }
                else{
                    $(this).addClass("active")
                    $(".custom_my_account_main_div .outer_wrapper_myaccount .content_left_myaccount_main").animate({ left: '0px' }, 500);
                }
            })
        }

	    $(document).on('click', function (e) {
	        const target = $(e.target);
	        const dropdown = $('.main_menu_nav');

	        if (!dropdown.length || !dropdown.hasClass('show')) {
	            return;
            }

	        if (
	            target.hasClass('main_menu_nav') ||
                target.parent().hasClass('main_menu_nav') ||
                target.hasClass('main_menu_nav-btn') ||
                target.parent().hasClass('main_menu_nav-btn')
            ) {
	            return;
            }

            dropdown.slideToggle("fast");
            dropdown.removeClass("show");
            dropdown.css("display","none");
        })

        $(document).on("click",".mobile_icon_pc_view",function(){
            if( $(this).hasClass("active") ){
			    	$(this).removeClass("active")
                    $('.content_left_myaccount_main').animate({ left: 0 }, 500);
                    $('.content_left_myaccount_main').removeClass('side_icon_menu');
                    $(".custom_my_account_main_div .outer_wrapper_myaccount .content_right_myaccount_main").removeClass("full_screen_for_pc")
                    $(".menu_toggle_cus span").css("display","none"); 
                    $(this).removeClass('hamburg_icon_show_slide')
			    }
			    else{
			    	$(this).addClass("active")
                    $('.content_left_myaccount_main').animate({ left: 0 }, 500);
                    $('.content_left_myaccount_main').addClass('side_icon_menu');
                    $(this).parent(".content_left_myaccount_main").addClass("slid_left_pc_menu");
                    $(".custom_my_account_main_div .outer_wrapper_myaccount .content_right_myaccount_main").addClass("full_screen_for_pc")
                    $(this).addClass('hamburg_icon_show_slide')
			    }
    	})

        $(".main_header .nav_menu_right").click(function(){
            const svg = $(this).find('svg');
            const dropdown = svg.next();
            dropdown.slideToggle("fast")
            dropdown.addClass("show")
            dropdown.css("display","flex")
        })
	})(jQuery)
</script>

