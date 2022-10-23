<style>
     #dashboard_home_outer_wrapper_ID{
        width:100%;
		padding: 40px;
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
/*         height:170px; */
        /* border:1px solid lightgrey; */
        margin-bottom:20px;
        border-radius:5px;
        padding: 20px 15px;
		
    }
    #dashboard_home_inner_wrapper_ID .dashboard_inside_four_sec{
        display:flex;
        justify-content: space-between;
        margin-bottom:15px;

    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_heading{
        font-size: 30px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #040404;
        line-height: 1;
        position:relative;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
        font-size:20px;
		color:#646464;
       	margin-bottom:0;
    }
    #dashboard_home_inner_wrapper_ID .first_row_sec_same_color{
        background-color:#F5F5F5;
		width:100%;
		min-height:200px;
		padding: 20px 20px 20px 20px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row.coming_soon .first_row_sec_same_color{
        background-color:#0071E3;
        min-height: 130px;
    }
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row.coming_soon .p_insideFour_sec_head,
    #dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div_first_row.coming_soon .p_description{
        color:#fff;
    }
    #dashboard_home_inner_wrapper_ID .blue_color_div{
        background-color:#eaf9ff;
		width:100%;
		min-height:200px;
		padding: 20px 20px 20px 20px;
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
			padding:15px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_heading{
			font-size:20px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_welcome{
			font-size:14px;
		}
		#dashboard_home_inner_wrapper_ID .dashboard_home_four_sec_div{
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
	}
</style>
<div class='dashboard_home_outer_wrapper' id='dashboard_home_outer_wrapper_ID'>
    <div class='dashboard_home_inner_wrapper' id='dashboard_home_inner_wrapper_ID'>
        <div class='dashboard_home_welcome_div' id='dashboard_home_welcome_div_ID'>
            <p class='dashboard_home_heading'>Coming soon <span class="breadcrumps">TOOLS &gt; ANALYSIS &gt; COMING SOON</span></p>
            <p class='dashboard_home_welcome'>Analyse a range of digital assets.</p>
        </div>
        <div class='dashboard_home_four_sec_div'>
            <div class='dashboard_home_four_sec_div_first_row coming_soon'>
				<a href="<?php echo site_url()."/my-account/?tab=metadata&current=pay" ?>">
                <div class="dashboard_home_four_sec first_row_sec_same_color">
                    <div class='dashboard_inside_four_sec'>
                        <p class='p_insideFour_sec_head'>Coming soon</p>
                        <span class='fontIcon_color'><i class="fas fa-sync"></i></span>
                    </div>
                    <p class='p_description'>
                        Analyse digital assets across platforms and more.
                    </p>
                </div>
				</a>
            </div>
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