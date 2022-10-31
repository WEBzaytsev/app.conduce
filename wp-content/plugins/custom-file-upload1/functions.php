<?php

function mt_run_scripts_callback(){
    wp_enqueue_style('style' , CFU_PLUGIN_URL . "assets/css/style.css", [], '0.0.16');
    wp_enqueue_script('script' , CFU_PLUGIN_URL . "assets/js/script.js" , ['jquery'] , "0.0.36" ,true);
    wp_localize_script( 'script' , 'my_ajax_url' , [admin_url( 'admin-ajax.php' )]  );
}

function metadata_run_callback() {
    ob_start();
    require_once( CFU_PLUGIN_PATH . 'templates/run.php' );
    return ob_get_clean();
}

function wp_background_processes2(){
    global $asy_background;
    class WP_Example_Request2 extends WP_Async_Request {

        /**
         * @var string
         */
        protected $action = 'csv_file_json_data';
    
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected function handle() {
            $all_data = $_POST['data'];
            $column_names = $_POST['ColumnArray'];
            global $current_user;
            global $wpdb;
            $username = $current_user->user_login;
            $user_id = $current_user->ID;
            $folder_name = uniqid(rand(), true);
            $run_id = $folder_name;
            $main_uploads_dir =  WP_CONTENT_DIR. "/templates-files/";
            wp_mkdir_p( $main_uploads_dir );
            $user_dir =  $main_uploads_dir . $username."_".$user_id."/";
            wp_mkdir_p( $user_dir );
            $uploads_dir =  $user_dir . $folder_name;
            wp_mkdir_p( $uploads_dir );
            $zip_uploads_dir =  WP_CONTENT_DIR. "/zip-files/";
            wp_mkdir_p( $zip_uploads_dir );
            $zip_user_dir =  $zip_uploads_dir . $username."_".$user_id."/";
            wp_mkdir_p( $zip_user_dir );
            $zip_user_dir2 =  $zip_uploads_dir . $username."_".$user_id."/".$folder_name.".zip";
            $total_rows = $_POST["total_rows"];
            $user_path = $username."_".$user_id;
            $wpdb->insert(  "{$wpdb->prefix}backup_runfile",
            [
                "user_id" => $user_id,
                "run_id"=>$run_id,
                "run_content"=>serialize($all_data)
           ]
            );
			$all_data = json_decode(stripslashes($all_data),true);
            $wpdb->query($wpdb->prepare(
                "UPDATE {$wpdb->prefix}user_executions_record SET completed='1',run_id='$run_id' WHERE completed='0' AND `user_id`='$user_id' ORDER BY ID LIMIT 1"
            ));
            $order_id=$wpdb->get_var("SELECT order_id  FROM  {$wpdb->prefix}user_executions_record WHERE `run_id`='$run_id'");
            $wpdb->insert(  "{$wpdb->prefix}template_file",
            [
                "order_id"=>$order_id,
                "user_id" => $user_id,
                "status"=>"0",
                "run_id"=>$run_id,
                "path"=> $folder_name,
                "no_of_rows"=>$total_rows
           ]
            );
            $last_id = $wpdb->insert_id;
            $count=0;
            foreach($all_data as $data){
                $count++;
                $json_string = json_encode($data,JSON_PRETTY_PRINT);
                $json_string = str_replace('\\', '', $json_string);
				$json_string = preg_replace("/<.+>/sU", "", $json_string);
                $file_name = $uploads_dir."/$count";
                $fp = fopen($file_name, 'w');
                fwrite($fp, $json_string);
                fclose($fp);
                if($count==1){
                    $wpdb->update($wpdb->prefix."template_file",[ "status"=>"2"],["ID"=>$last_id] );
                }
                if($total_rows-1 == $count  ){
                    $wpdb->update($wpdb->prefix."template_file",[ "status"=>"1"],["ID"=>$last_id] );
                    $wpdb->delete($wpdb->prefix."backup_runfile",["user_id" => $user_id,"run_id"=>$run_id] );
                }
            }        
				$zip = new ZipArchive();
			    $zip->open( $zip_user_dir2, ZipArchive::CREATE);
                /** @var SplFileInfo[] $files */
				$rootPath = realpath($uploads_dir);
            	$files = new RecursiveIteratorIterator(
                	new RecursiveDirectoryIterator($rootPath),
                	RecursiveIteratorIterator::LEAVES_ONLY
            	);
            	foreach ($files as $name => $file)
            	{
                	if (!$file->isDir())
                	{
                    $filePath = $file->getRealPath();
                    $relativePath = substr($filePath, strlen($rootPath) + 1);
                    $zip->addFile($filePath, $relativePath);
                	}
            	}
                $zip->close();
        }
    }
    $asy_background= new WP_Example_Request2();
}

function get_csv_data_from_file_callback2(){
	global $wpdb;
	$user_id = get_current_user_id();    
//     $all_data = $_POST['myTableArray'];
	$all_data = json_decode(stripslashes($_POST['myTableArray']),true);
    $all_data =json_encode($all_data);
	$column_names = $_POST['ColumnArray'];
    $total_rows = $_POST["totalRows"]-1;
    $asy_background= new WP_Example_Request2();
    $asy_background->data( array( 'data' => $all_data ,'total_rows' =>$total_rows) )->dispatch();
	$pending_executions = $wpdb->get_var("SELECT SUM(`quantity`) FROM `{$wpdb->prefix}user_executions_record`
	WHERE `user_id` = {$user_id} AND `completed` = 0");
	if(!$pending_executions){
		$pending_executions="0";
	}
	$excu = "Your have only $pending_executions execution(s) left.";
	if($pending_executions>0){
		$exec_button = "<button class='process_csv_file'>Execute</button>";
	}else{
		$exec_button = "";
	}
	$response = ["executions"=>$excu,"exc_button"=>$exec_button];
    wp_send_json($response);
    }