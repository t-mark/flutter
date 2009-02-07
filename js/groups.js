jQuery(document).ready(function(){

    //duplicate  group
    jQuery(".duplicate_button").click(function(){
        id = jQuery(this).attr("id");
        id = id.split("_");
        group = id[2];
        customGroupID =  id[3];
        GetGroupDuplicate(group,customGroupID);
    });

    //delete some duplicate group
    jQuery(".delete_duplicate_button").livequery("click",function(event){
        id = jQuery(this).attr("id");
        div = id.split("-")[1];
        deleteGroupDuplicate(div);
    }); 
});

/**
 * Add a new duplicate group
 *
 */
GetGroupDuplicate = function(div,customGroupID){
    customGroupCounter =  jQuery('#g'+customGroupID+'counter').val();
    customGroupCounter++;
    jQuery("#g"+customGroupID+"counter").val(customGroupCounter);
    
    //jQuery("#"+div).css("display","block");
    jQuery.ajax({
        type    : "POST",
        url     : flutter_path+'RCCWP_GetDuplicate.php',
        data    : "flag=group&groupId="+customGroupID+"&groupCounter="+customGroupCounter,
        success : function(msg){
            jQuery("#write_panel_wrap_"+customGroupID).append(msg);  
           // jQuery("#"+div).css("display":"none");
        }
    });
}


/**
 * Delete a Duplicate Group
 *
 */
deleteGroupDuplicate = function(div){
    jQuery("#"+div).remove();
}

