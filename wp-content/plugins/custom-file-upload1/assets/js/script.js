(function($){
    $(document).on("click",".process_csv_file",function(){
		if( $(".show_csv_file").find(".file_table_row_th").length){}
		else{
            alert("Empty Data");
            return false;
        }
        var fileName= $(".file_name_csv").val();
        var count2 = 1;
        var myTableArray = [];
        var ColumnArray =[];
        var totalRows = $(".show_csv_file .file_table_row").length;
		var attrCheck = $("input[name='attributre_start']:checked").val();
        
		$(".show_csv_file .file_table_row").each(function() {
         if(count2 == 1){
                var tableData2 = $(this).find('.file_table_row_th').length;
                for( x=1; x<=tableData2;x++){
                    var tableDataHead = $(this).find(".heading_unique_"+x).html();
                    ColumnArray.push(tableDataHead); 
                }
                count2++;
            }
            else{
                var arrayOfThisRow = {};
                var attrArray=[];
                var tableData = $(this).find('.file_table_row_th').length;
                for( x=1; x<=tableData;x++){
                    colCount2 = ColumnArray[(x-1)];
                    var tableDataTd = $(this).find(".td_unique_"+x).html();
                    if(x< attrCheck){
                        arrayOfThisRow[colCount2] =  tableDataTd;
                    }
                    else{
                       obj={
                           "trait_type":colCount2,"value":tableDataTd
                       }
                        attrArray.push(obj);
                        if(x == tableData){
                            arrayOfThisRow["attributes"] = attrArray;
                            myTableArray.push(arrayOfThisRow);

                        }
                    }
                }
            }
        })
			.promise().done( function(){ 
			myTableArray = JSON.stringify(myTableArray); 
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: my_ajax_url,
                data: {
                    action: 'get_csv_data_from_file',
                    myTableArray,
//                     fileName,
//                     ColumnArray,
                    totalRows
                },
                beforeSend: function() {
                    $(".custom_loader_myaccount").css("display","flex");
                },
                success: function(response) {
                    if (response) {
						$("p.run_execution_text").html(response.executions);
						$(".buttons_csv_file").html(response.exc_button);
                    }
                },
			    error: function (request, status, error) {
        			alert(request.responseText);
    			},
                complete: function() {
                    $(".custom_loader_myaccount").css("display","none");
                },
            })
         } );
    });
	
    $(document).ready(function () {
        var url_string = window.location.href;
        var url = new URL(url_string);
        var tab = url.searchParams.get("tab") ?? 'dashboard';
        var current = url.searchParams.get("current");
        $('.my_account_content_link').removeClass('active_nav');
        if ( ! current ) {
            switch (tab) {
                case 'dashboard':
                    $(`[data-current=home`).addClass('active_nav');
                    break;
                case 'metadata':
                    $(`[data-current=run`).addClass('active_nav');
                    break;
                case 'dashboard':
                    $(`[data-current=coming_soon`).addClass('active_nav');
                    break;
                default:

            }
        } else {
            $(`[data-current=${current}]`).addClass('active_nav');
        }
    });

// 	    $(document).on("keyup",".template_page .show_csv_file td, .template_page .show_csv_file th",function(){
//         var colCount = $(".char_abc_row th").length;
//         var dataId = $(this).attr("data-id");

//         if(colCount-1 == dataId){
//             var char_rext = $('.char_head'+dataId).html();
//             char_rext =String.fromCharCode(char_rext.charCodeAt() + 1);
//             var RowChar = `<th class="char_head`+colCount+`" data-new="`+colCount+`">`+char_rext+`</th>`;
//             var RowTh = `<th contenteditable="" class="heading_unique_`+colCount+`" data-id="`+colCount+`"></th>`;
//             var RowTd =`<td contenteditable="" class="td_unique_`+colCount+`" data-id="`+colCount+`"></td>`;
//             $(".main_row_head_th").append(RowTh);
//             $('.char_abc_row').append(RowChar);
//             $('.main_row_head_td').append(RowTd);
//         }

//         var RowId = $(this).closest(".file_table_row").attr("data-row");
//         var TotalRows =$(".file_table_row").length
//         if(RowId == TotalRows){
//             var countdDat = TotalRows+1;
//             $(this).closest(".file_table_row").find("td").removeClass("act");
//             var rowDat =$(this).closest(".file_table_row").clone();
//             rowDat.find("td").addClass("act");
//             rowDat.attr("data-row",countdDat);
//             rowDat.find("td").html("")
//             rowDat.find(".table_vertical_col").html(countdDat)
//             rowDat.find("td").removeClass("file_table_row_th")
//             $(".show_csv_file").append(rowDat)
//         }

//         if( !$(this).hasClass("file_table_row_th") ){
//             $(".heading_unique_"+dataId).addClass("file_table_row_th");
//             $(".td_unique_"+dataId).addClass("file_table_row_th");

//             var mainTr = $(this).closest(".file_table_row")
//             var lenCouRow = mainTr.find("td").length;
//             for(x=1;x<=lenCouRow-2;x++){
//                 mainTr.find(".td_unique_"+x).addClass("file_table_row_th")
//             }
//             mainTr.find(".table_vertical_col").removeClass("file_table_row_th")
//             $(".act.td_unique_"+dataId).removeClass("file_table_row_th");
//     }

//     })

	    $(document).on("click",".new_row_add_on_key_up",function(){
        $(this).addClass("file_table_row_th")
        $(this).removeClass("new_row_add_on_key_up")
        $(this).parent(".file_table_row").addClass("main_row_head_td")
        $(this).attr("contenteditable","true");
        var colCount = $(".char_abc_row th").length;
        colCount=colCount-2;
        var table;
        var table2;
        for(x=2;x<=colCount;x++){
            if(x==colCount){
                table =`<td contenteditable class='td_unique_${x}' data-id='${x}'></td>`;
            }
            else{
                table =`<td contenteditable class='file_table_row_th td_unique_${x}' data-id='${x}'></td>`;
            }
            table =`<td contenteditable class='file_table_row_th td_unique_${x}' data-id='${x}'></td>`;
            $(this).parent(".file_table_row").append(table);
        }
        var RowId = $(this).closest(".file_table_row").attr("data-row");
        RowId++;
        table2 =` <tr class='file_table_row ' data-row='${RowId}'>
        <td class='table_vertical_col '>${RowId}</td>
        <td  class='new_row_add_on_key_up td_unique_1 act' data-id='1'></td>
        </tr>`;
        $(".template_page .show_csv_file").append(table2)
    })

    $(document).on("click",".new_column_add_on_key_up",function(){
        $(this).addClass("file_table_row_th")
        $(this).removeClass("new_column_add_on_key_up")
        $(this).attr("contenteditable","true");
        var dataId = $(this).data("id")
        var dataId2=dataId+1;
        var rowInf = `<td contenteditable class="file_table_row_th td_unique_${dataId}" data-id="${dataId}"></td>`
        $(".main_row_head_td").append(rowInf)
        var dataId3=dataId2+1;
        var newBut = `<th class="new_column_add_on_key_up heading_unique_${dataId2}" data-id="${dataId2}"></th>`
        $(this).parent("tr").append(newBut)
        var charCout=$(this).parent("tr").find(".file_table_row_th").length
        var char_rext = $(".char_head"+dataId).html()
        char_rext =String.fromCharCode(char_rext.charCodeAt() + 1);
        var new_ch =`<th class="char_head${dataId2}" data-new="${dataId2}">${char_rext}</th>`;
        $(".char_abc_row").append(new_ch)
        var inputRad = `<input class='value_checked_attribute' name='attributre_start' type='radio' value='${dataId}' $checked>`;
        $(".char_head"+dataId).append(inputRad)
    })

	$(document).on("click",".char_abc_row th",function(){
        if($(this).find('input').length){
            $(".char_abc_row  th").find('input').css('display','none');
            $(".char_abc_row  th").removeClass("active_attr_class");
            $(this).addClass("active_attr_class");
            $(this).find('input').prop('checked', true);
            $(this).find('input').css('display','inline');
        }
    })

})(jQuery)