function setLikeDislike(type,id){
    jQuery.ajax({
        url:'setLikeDislike.php',
        type:'post',
        data:'type='+type+'&id='+id,
        success:function(result){
            result=jQuery.parseJSON(result);
            if(result.opertion=='like'){
                jQuery('#like_'+id).removeClass('far');
                jQuery('#like_'+id).addClass('fas');
                jQuery('#dislike_'+id).addClass('far');
                jQuery('#dislike_'+id).removeClass('fas');
            }
            if(result.opertion=='unlike'){
                jQuery('#like_'+id).addClass('far');
                jQuery('#like_'+id).removeClass('fas');
            }
            
            if(result.opertion=='dislike'){
                 jQuery('#dislike_'+id).removeClass('far');
                 jQuery('#dislike_'+id).addClass('fas');
                 jQuery('#like_'+id).addClass('far');
                 jQuery('#like_'+id).removeClass('fas');
            }
            if(result.opertion=='undislike'){
                jQuery('#dislike_'+id).addClass('far');
                jQuery('#dislike_'+id).removeClass('fas');
            }
            
            
            jQuery('#post'+id+' #like').html(result.like_count);
            jQuery('#post'+id+' #dislike').html(result.dislike_count);
        }
        
    });
}