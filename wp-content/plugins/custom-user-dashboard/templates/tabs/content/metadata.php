<style>
   
     #dashboard_home_outer_wrapper_ID{
        width:100%;
		padding: 40px;
    }
    #dashboard_home_outer_wrapper_ID p {
        font-size:14px;
        color:#646464;
        margin-bottom: 10px;
    }
    #dashboard_home_outer_wrapper_ID a{
        text-decoration:none;
    }
    #dashboard_home_outer_wrapper_ID a:focus,
    #dashboard_home_outer_wrapper_ID a:hover{
        outline:none;
    }
    #dashboard_home_outer_wrapper_ID button.my_account_edit{
        margin-top:20px;
    }
    #dashboard_home_outer_wrapper_ID img.control{
        max-width:420px;
        margin-top: 10px;
    }
    #dashboard_home_inner_wrapper_ID{
		width:100%;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div{
        padding-top:40px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row{
        display:flex;
        justify-content:space-between;
		gap:20px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
        display:flex;
        justify-content:space-between;
		gap:20px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec{
        width:500px;
        border-radius:5px;
        padding: 20px 15px;		
    }
     #dashboard_home_inner_wrapper_ID .white_color_div{
        background-color:#fff!important;
        border:1px solid #D8D8D8;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_inside_four_sec{
        display:flex;
        justify-content: space-between;
        margin-bottom:10px;
        line-height: 1;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_heading{
        font-size: 30px;
        margin-bottom: 20px;
        font-weight: 600;
        color: #040404;
        line-height: 1;
        position: relative;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
        font-size:20px;
		color:#646464;
       	margin-bottom:40;
        line-height: 1;
        margin-bottom: 35px;
    }
    #dashboard_home_inner_wrapper_ID .first_row_sec_same_color{
        background-color: #F5F5F5;
        width: 100%;
        min-height: 130px;
        padding: 20px 20px 20px 20px;
    }
    #dashboard_home_inner_wrapper_ID .blue_color_div{
        background-color:#eaf9ff;
		width:100%;
		min-height:200px;
		padding: 20px 20px 20px 20px;
        width: calc(100% - 10px);
    }
    #dashboard_home_inner_wrapper_ID .hsl_color_div_last{
        background-color:hsl(30deg 22% 96%);
		width:100%;
		min-height:200px;
		padding: 20px 20px 20px 20px;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #D8D8D8;
	}
    #dashboard_home_inner_wrapper_ID .p_insideFour_sec_head{
        margin:0px;
        font-size: 14px;
        color: #000;
        font-weight: 700;
    }
    #dashboard_home_inner_wrapper_ID .p_description{
        font-size:14px;
		color:#646464;
		line-height:1;
		word-spacing: 1px;
    }
    #dashboard_home_inner_wrapper_ID .fontIcon_color{
        color:hsl(217deg 77% 52%);
    }
    .hr{
        margin: 40px 0 0 0;
        border-bottom: 1px solid #D8D8D8;
    }
    .setting_subheading{
        font-size: 14px;
        color:#040404;
        font-weight:600;
        line-height:1;
        margin-top:40px;
    }
    .setting_subheading + p{
        font-size: 14px;
        color: #646464;
        margin-bottom: 0;
        line-height:1;
        margin-top: 20px;
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
		}
		#dashboard_home_outer_wrapper_ID{
			padding:15px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_heading{
			font-size:20px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
			font-size:18px;            
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec{
			margin-bottom:0;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row,
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
			gap:15px;
		}
		#dashboard_home_inner_wrapper_ID .p_description{
			font-size:14px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
			margin-bottom: 35px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row{
			margin-bottom:50px
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row a,
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row a{
		width:100% !important;
	}
	}
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row a,
	#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_second_row a{
		width:50%;
        text-decoration: none;
	}
</style>
<div class='dashboard_home_outer_wrapper' id='dashboard_home_outer_wrapper_ID'>
    <div class='dashboard_home_inner_wrapper' id='dashboard_home_inner_wrapper_ID'>
        <div class='dashboard_home_welcome_div' id='dashboard_home_welcome_div_ID'>
            <p class='dashboard_home_heading'>Metadata <span class="breadcrumps">TOOLS &gt; METADATA &gt; CONTROL</span></p>
            <p class='dashboard_home_welcome'>Turn items in a spreadsheet into individual ERC-721 metadata files.</p>
        </div>
        <p>The Metadata tool turns rows in a spreadsheet into individual ERC-721-compatible metadata files.</p>
        <p>It uses a breakpoint to differentiate key properties and attributes, so you can add as many key properties as you like.For example name, image, description, external_url, or more.</p>
        <p>Each run processes a template and outputs zipped files containing the individual metadata files in the following format:</p>
        <img class="control" src="<?php echo UD_ASSETS_PATH . 'control.svg'; ?>">
        <div class="hr"></div>        
        <div class="dashboard_home_four_sec_div">
            <div class="dashboard_home_four_sec_div_first_row">
				<a href="<?php echo get_account_subpageUrl('metadata', 'run') ?>">
                    <div class="dashboard_home_four_sec first_row_sec_same_color white_color_div">
                        <div class="dashboard_inside_four_sec">
                            <p class="p_insideFour_sec_head">Run</p>
                            <span class="fontIcon_color"><img src="https://app.conduce.io/wp-content/plugins/custom-user-dashboard/assets/icons/dir.svg"></span>
                        </div>
                        <p class="p_description">
                            Run the tool.
                        </p>
                    </div>
				</a>
				<a href="<?php echo get_account_subpageUrl('metadata', 'files') ?>">
                    <div class="dashboard_home_four_sec first_row_sec_same_color white_color_div">
                        <div class="dashboard_inside_four_sec">
                            <p class="p_insideFour_sec_head">Files</p>
                            <span class="fontIcon_color"><img src="https://app.conduce.io/wp-content/plugins/custom-user-dashboard/assets/icons/tools.svg"></span>
                        </div>
                        <p class="p_description">
                            Manage your files.
                        </p>
                    </div>
				</a>
            </div>
            <div class="hr"></div> 
        <div class="setting_subheading">Guide</div>
        <p>Learn how to use the tool.</p>
        <a href=""><button class="my_account_edit">Guide <img src="<?php echo UD_ASSETS_PATH . 'icons/pen-white.svg'; ?>"></button></a>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($){
        $.ajaxSetup({cache:false});
        $(".left_content_link li a").click(function(e){
            pageurl = $(this).attr('href');
            if(pageurl!=window.location) {
                window.history.pushState({path: pageurl}, '', pageurl);
            }
            $("#content_right_myaccount_main_ID").load(pageurl + ' #content_right_myaccount_main_inner_ID');
            return false;
        });
        console.log('on page')
    });
</script>