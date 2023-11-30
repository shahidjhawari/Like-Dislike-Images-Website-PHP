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
            
        
    });
}