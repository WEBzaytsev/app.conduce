<style>
    #dashboard_home_outer_wrapper_ID{
        width:100%;
		padding: 40px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div{
        padding-top:40px;
    }
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div a{
		text-decoration:none;
	}
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row{
        display:grid;
        grid-template-columns: repeat(2, 1fr);
        gap:20px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
        display:flex;
        justify-content:space-between;
		gap:20px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec{
        width:500px;
/*         height:170px; */
        /* border:1px solid lightgrey; */
        margin-bottom:20px;
        border-radius:5px;
        padding: 20px 15px;
		
    }
    #dashboard_home_inner_wrapper_ID .dashboard_inside_four_sec{
        display:flex;
        justify-content: space-between;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_heading{
        font-size: 30px;
        line-height: 1;
		margin-bottom:20px;
        font-weight: 600;
        color: #040404;
        position:relative;      
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
        font-size: 20px;
    	color: #646464;
    	margin-bottom: 0;
    	line-height: 1;
    	font-weight: 400;
    }
    #dashboard_home_inner_wrapper_ID .first_row_sec_same_color{
        background-color:#F5F5F5;
		width:100%;
		min-height:130px;
		padding: 20px 20px 20px 20px;
    }
    #dashboard_home_inner_wrapper_ID .blue_color_div{
        background-color:#eaf9ff;
		width:100%;
		min-height:130px;
		padding: 20px 20px 20px 20px;
    }

    #dashboard_home_inner_wrapper_ID .white_color_div{
        background-color:#fff!important;
        border:1px solid #D8D8D8;
    }
    #dashboard_home_inner_wrapper_ID .hsl_color_div_last{
      background-color:#F5F5F5;
		width:calc(100% - 10px);
        border-radius:5px;
		min-height:130px;        
		padding: 20px 20px 20px 20px;
	}
    #dashboard_home_inner_wrapper_ID .p_insideFour_sec_head{
        margin:0px;
        font-size: 14px;
        color: #000;
        font-weight: 500;
    }
    #dashboard_home_inner_wrapper_ID .p_description{
        font-size:14px;
		color:#646464;
		line-height:1px;
		word-spacing: 1px;
        margin-top:20px;
    }
    #dashboard_home_inner_wrapper_ID .fontIcon_color{
        color:hsl(217deg 77% 52%);
    }
	@media(max-width:768px){
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row,
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
			flex-direction:column;
		}
		#dashboard_home_inner_wrapper_ID .first_row_sec_same_color,
		#dashboard_home_inner_wrapper_ID .blue_color_div,
		#dashboard_home_inner_wrapper_ID .hsl_color_div_last{
			width:100%;
			min-height:150px;
		}
		#dashboard_home_outer_wrapper_ID{
			padding:10px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_heading{
			font-size:20px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
			font-size:18px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div{
            padding-bottom: 20px;
			padding-top:11px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec{
			margin-bottom:0;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row,
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
			gap:15px;
			margin-top: 15px;
		}
		#dashboard_home_inner_wrapper_ID .p_description{
			font-size:14px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
			margin-bottom:0;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
			margin-bottom:50px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row a,
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row a{
		width:100% !important;
	}
	}
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row a,
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row a{
		width:100%;
	}
	
</style>
<div class='dashboard_home_outer_wrapper' id='dashboard_home_outer_wrapper_ID'>
    <div class='dashboard_home_inner_wrapper' id='dashboard_home_inner_wrapper_ID'>
        <div class='dashboard_home_welcome_div' id='dashboard_home_welcome_div_ID'>
            <p class='dashboard_home_heading'>Welcome, <?php global $wpdb; $current_user = wp_get_current_user(); echo $current_user->display_name?> <span class="breadcrumps">Dashboard &gt; Home</span></p>
            <p class='dashboard_home_welcome'>Dashboard home.</p>
        </div>
        <div class='dashboard_home_four_sec_div'>
            <div class='dashboard_home_four_sec_div_first_row'>
				<a href="<?php echo site_url() . "/my-account?tab=dashboard&current=my_account"; ?>">
                <div class="dashboard_home_four_sec first_row_sec_same_color">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>My account</p>
                        <span class='fontIcon_color'><img src="<?php echo UD_ASSETS_PATH . 'icons/dir.svg'; ?>"></span>
                    </div>
                    <p class='p_description'>
                        Manage your account.
                    </p>
                </div>
				</a>
				<a href="<?php echo site_url() . "/my-account/?tab=analysis"; ?>">
                <div class="dashboard_home_four_sec first_row_sec_same_color">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>Settings</p>
                        <span class='fontIcon_color'><img src="<?php echo UD_ASSETS_PATH . 'icons/tools.svg'; ?>"></span>
                        
                    </div>
                    <p class='p_description'>
                        Organize the dashboard settings.
                    </p>
                </div>
				</a>
            </div>
            <div class='dashboard_home_four_sec_div_second_row'>
				<a href="<?php  ?>">
                <div class="dashboard_home_four_sec first_row_sec_same_color">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>Shop</p>
                        <span class='fontIcon_color'><img src="<?php echo UD_ASSETS_PATH . 'icons/shop-blue.svg'; ?>"></span>
                    </div>
                    <p class='p_description'>
                       Add to your dashboard.
                    </p>    
                </div>
				</a>
				<a href="<?php echo site_url() . "/my-account?tab=dashboard&current=my_account"; ?>">
                <div class="dashboard_home_four_sec blue_color_div">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>Guide</p>
                        <span class='fontIcon_color'><img src="<?php echo UD_ASSETS_PATH . 'icons/puzzle.svg'; ?>"></span>
                    </div>
                    <p class='p_description'>
                        Learn how to use the dashboard.
                    </p>
                </div>
				</a>
               </div>
               <div class='dashboard_home_four_sec_div_second_row'> 
                <a href="<?php  ?>">
                <div class="dashboard_home_four_sec white_color_div hsl_color_div_last">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>Landing</p>
                        <span class='fontIcon_color'><img src="<?php echo UD_ASSETS_PATH . 'icons/shop-blue.svg'; ?>"></span>
                    </div>
                    <p class='p_description'>
                       Go to the main site.
                    </p>    
                </div>
				</a>
            </div>
        </div>
    </div>
</div>