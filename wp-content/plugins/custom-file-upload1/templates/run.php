<style media="screen">
    .table_vertical_col {
        width: 60px;
        text-align: center;
    }
    .file_table_row .table_vertical_col,
    .char_abc_row th {
        background-color: #EAECEE !important;
    }
    table:not( .has-background ) th {
        background-color: #fff;
    }
    table td, table th {
        padding: 0.6em 0.5em;
    }
    .file_table_row_th:focus {
        outline: 2px solid #2372ff !important;
    }

    .file_table_row_th:focus-visible {
        outline: 2px solid #2372ff !important;
    }
    .run_execution_heading {
        font-size: 20px;
        margin-bottom: 5px;
        font-weight: 700;
        color: #040404;
    }
    p.run_execution_text {
        font-size: 14px;
        color: #646464;
        margin-bottom: 0;
    }
    .run_execution_row {
        margin-top:40px;
        margin-left:40px
    }
</style>
<?php
global $wpdb;
$user_id = get_current_user_id();
$pending_executions = $wpdb->get_var("SELECT SUM(`quantity`) FROM `{$wpdb->prefix}user_executions_record`
                                    WHERE `user_id` = {$user_id} AND `completed` = 0");?>
<div class="run_execution_row">
    <div class="run_execution_heading">Template</div>
    <p class="run_execution_text">Your have only <?php echo $pending_executions ?? 0 ?> execution(s) left.</p>
</div>
<div id="template_page_id" class="template_page menu_pages_equal">
	 <div class="custom_loader_myaccount">
                <span></span>
            </div>
                <form class="csv_form" action='' method="post" enctype="multipart/form-data" >
                    <label><a href="<?php echo get_bloginfo('url')?>/wp-content/uploads/2022/08/Template.csv">Click here to download standard template.</a></label>                    
                    <div class="upload_file_container" id="upload_file_container_ID">     
                    <input id='file' type='file' name='user_csv_file' class="csv_file" accept=".csv">               
                    <span><span>Drag & Drop</span> your file here or <span>Click</span> to browse.</span>                    
                    </div>
                    <input class="select_csv_button" type='submit' name='select_csv' value='Select' class="update_csv_button">
                </form>
                <div class="table_data_csv">
                    <div class="outer_div_csv_table">
                    <?php
                       if(isset($_POST['select_csv'])){
                        $name = $_FILES['user_csv_file']['name'];
                        $tmpName = $_FILES['user_csv_file']['tmp_name'];
                        echo "<input class='file_name_csv' type='hidden' value='$name'>";
                        ?>
                            <table  class="show_csv_file">
                            <?php
                            $file = fopen("$tmpName", "r");
                            $count =0;
                            $table="";
                                while (($data = fgetcsv($file)) !== false) {
                                    $count++;
                                    if($count==1){
                                        $char="A";
                                        $char_num=1;
                                        $table_row_count = count($data);
                                        $table .= "<tr class='char_abc_row'>";
                                        $table .= "<th class=''></th>";
                                        for($x=1;$x<=$table_row_count;$x++){
											if($x==3){
                                                $checked="checked";
                                                $active_class="active_attr_class";
                                                $disp = "";
                                            }else{
                                                $checked="";
                                                $active_class="";
                                                $disp = "display:none";
                                            }
                                            $table .= "<th class='char_head$char_num $active_class' data-new='$char_num'>$char<input style='$disp;' class='value_checked_attribute' name='attributre_start' type='radio' value='$x' $checked></th>";
                                            $char++;
                                            $char_num++;
                                        }
                                        $table .= "<th class='char_head{$char_num}' data-new='$char_num'>$char</th>";
                                        $table .= "</tr> ";
                                        $table .= "<tr class='file_table_row main_row_head_th' data-row='$count' >";
                                        $table .= "<td class='table_vertical_col'>$count</td>";
                                        $uni_count = 1;
                                        foreach ($data as $i) {
											$i =preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $i);
                                            if($uni_count>=3){
                                                $contenteditable="contenteditable";
                                            }
                                            else{
                                                $contenteditable="";
                                            }
                                            $table .= "<th $contenteditable class='file_table_row_th heading_unique_$uni_count' data-id='$uni_count'>" . $i . "</th>";
                                            $uni_count++;
                                        }
//                                         $table .= "<th contenteditable class=' heading_unique_$uni_count' data-id='$uni_count'></th>";
                                        $table .= "<th  class='new_column_add_on_key_up heading_unique_$uni_count' data-id='$uni_count'></th>";
                                        $table .= "</tr> ";
                                        }
                                        else{
                                            $table .= "<tr class='file_table_row main_row_head_td' data-row='$count'>";
                                            $uni_count2=0;
                                            $table .= "<td  class='table_vertical_col'>$count</td>";
                                            foreach ($data as $i) {
												$i =preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $i);
                                                $uni_count2++;
                                                $table .= "<td contenteditable class='file_table_row_th td_unique_$uni_count2' data-id='$uni_count2'>" . "$i" . "</td>";
                                            }
//                                             $uni_count2++;
//                                             $table .= "<td contenteditable class=' td_unique_$uni_count2' data-id='$uni_count2'></td>";
                                            $table .= "</tr> ";
                                        }
                                    }
                                    $count++;
                                    $table .= "<tr class='file_table_row' data-row='$count'>";
                                    $table .="<td class='table_vertical_col act'>$count</td>";
									$table .= "<td  class='new_row_add_on_key_up td_unique_1 act' data-id='1'></td>";
//                                     for($x=1; $x<=$table_row_count+1; $x++){
//                                         $table .= "<td contenteditable='' class='td_unique_$x act' data-id='$x'></td>";
//                                         $uni_count2++;
//                                     }
                                    $table .= "</tr>";
                                    echo $table;
                                    fclose($file);
                            ?>
                            </table>
                                <?php
                                }
								else{
                                    ?>
									<table  class="show_csv_file">
                                        <?php
                                        $count =0;
                                        $table="";
										$data_header=['name','image','attributes A'];
                                          while ($count !="3") {
                                            $count++;
                                              if($count==1){
                                                $char="A";
                                                $char_num=1;
                                                $table_row_count = 3;
                                                $table .= "<tr class='char_abc_row'>";
                                                $table .= "<th class=''></th>";
                                                for($x=1;$x<=$table_row_count;$x++){
                                                    if($x==3){
                                                        $checked="checked";
                                                        $active_class="active_attr_class";
                                                        $disp = "";
                                                    }else{
                                                        $checked="";
                                                        $active_class="";
                                                        $disp = "display:none";
                                                    }
                                                    $table .= "<th class='char_head$char_num $active_class' data-new='$char_num'>$char<input style='$disp;' class='value_checked_attribute' name='attributre_start' type='radio' value='$x' $checked></th>";
                                                    $char++;
                                                    $char_num++;
                                                }
                                                $table .= "<th class='char_head{$char_num}' data-new='$char_num'>$char</th>";
                                                $table .= "</tr> ";
                                                $table .= "<tr class='file_table_row main_row_head_th' data-row='$count'>";
                                                $table .= "<td class='table_vertical_col'>$count</td>";
                                                $uni_count = 1;
                                                for ($i=0;$i<$table_row_count;$i++) {
													if($uni_count>=3){
                                                        $contenteditable="contenteditable";
                                                    }
                                                    else{
                                                        $contenteditable="";
                                                    }
                                                    $table .= "<th $contenteditable class='file_table_row_th heading_unique_$uni_count' data-id='$uni_count'>" . $data_header[$i] . "</th>";
                                                    $uni_count++;
                                                }
                                                $table .= "<th  class='new_column_add_on_key_up heading_unique_$uni_count' data-id='$uni_count'></th>";
                                                $table .= "</tr> ";
                                                }
                                                else{
                                                    $table .= "<tr class='file_table_row main_row_head_td' data-row='$count'>";
                                                    $uni_count2=0;
                                                    $table .= "<td  class='table_vertical_col'>$count</td>";
                                                    for ($i=0;$i<$table_row_count;$i++) {
                                                        $uni_count2++;
                                                        $table .= "<td contenteditable class='file_table_row_th td_unique_$uni_count2' data-id='$uni_count2'>" . "" . "</td>";
                                                    }
                                                    $table .= "</tr> ";
												$count++;
                                                $table .= "<tr class='file_table_row ' data-row='$count'>";
                                                $table .="<td class='table_vertical_col '>$count</td>";
                                                $table .= "<td class='new_row_add_on_key_up td_unique_1 act' data-id='1'></td>";
                                                $table .= "</tr>";
                                                }
                                                }
                                                $table .= "</table> ";
                                                echo $table;
                                }
                                ?>

                </div>
            </div>
            <div class="buttons_csv_file">
				<?php
                if( $pending_executions != 0 ){
                    echo '<button class="process_csv_file">Execute</button>';
                }
              ?>
			</div>
</div>
