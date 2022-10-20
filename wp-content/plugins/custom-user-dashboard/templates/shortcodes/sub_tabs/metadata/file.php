<?php

global $wpdb;
global $current_user;
$username = $current_user->user_login;
$user_id = get_current_user_id();
$files_data = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}template_file WHERE `user_id`='$user_id'");
?>
<div id="file_page_id" class="menu_pages_equal">
    <div class="main_div_show_files">
        <h1 class="file_heading">Files</h1>
        <p class="download_heading">Yours Download.</p>
		  <div class="table_heading_div common_main_div">
                <div class="common_divs">
                    <h4>Date</h4>
                </div>
                <div class="common_divs">
                    <h4>Order</h4>
                    </div>
                <div class="common_divs">
                    <h4>Download</h4>
					<span class="dashicons dashicons-image-rotate"></span>
                </div>
            </div>
        <div class="file_daownload_main">
			<div class="file_data_refresh_loader">
                <span></span>
            </div>
        <?php
         foreach($files_data as $file_d){
             ?>
            <div class="table_data_div common_main_div">
                <div class="common_divs file_download_data">
                    <h3><?php echo $file_d->created_on; ?></h3>
                </div>
                <div class="common_divs file_download_data">
                    <h3><?php echo $file_d->order_id; ?></h3>
                    </div>
                <div class="common_divs file_download_data">
                     <?php if($file_d->status == 1) {?>
                            <a href="<?php echo site_url()."/wp-content/zip-files/".$username."_","$user_id/". $file_d->path.".zip"; ?>">
                                <div class="download_file_link">  
                                    Download
                                </div>
                            </a>
                        <?php }
                        else if($file_d->status == 2){
                            ?>
                           <div class="progress_main">
                               <p class="progress_bar">In Progress...
                               </p>
                            </div>
                           <?php
                        } 
                        else if($file_d->status == 0){
                            ?>
                           <div class="pending_main">
                               <p class="pending_bar">Pending...
                               </p>
                            </div>
                           <?php
                        } ?>
                </div>
            </div>

<?php } ?>
        
        </div>
    </div>
</div>

<script>
    (function($){
//         setInterval(function(){
//             $.ajax({
//                 type: 'post',
//                 dataType: 'json',
//                 url: my_ajax_url,
//                 data: {
//                     action: 'refresh_file_data',
//                 },
//                 success: function(response) {
//                     if (response) {
//                         $("#file_page_id .main_div_show_files .file_daownload_main").html(response)
//                     }
//                 },
//             })
//         }, 20000);

        $("#file_page_id .main_div_show_files .common_divs span").click(function(){
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: my_ajax_url,
                data: {
                    action: 'refresh_file_data',
                },
                beforeSend: function() {
                    $(".file_data_refresh_loader").css("display","flex")
                },
                success: function(response) {
                    if (response) {
                        $("#file_page_id .main_div_show_files .file_daownload_main").html(response)
                    }
                },
                complete: function() {
                    $(".file_data_refresh_loader").hide()
                },
            })
        })
    })(jQuery)
</script>
