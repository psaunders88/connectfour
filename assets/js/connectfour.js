/**
 * This function executes when entire page is loaded
 */
$(document).ready(function(){
    
    /**
     * Is the next move red?
     * 
     * @type Boolean
     */
    var isRed = true;
    
    /**
     * Function to run when anything with class='drop' is clicked
     */
    $('.drop').click(function(event){
        // don't follow the link
        event.preventDefault();
        
        // which column?
        var col = $(this).data('col');
        
        if (isRed == true) {
            color = 'red';
            isRed = false;
        } else {
            color = 'yellow';
            isRed = true;
        }
        
        // 
        $("td[data-col=" + col +"].empty").last().addClass(color);
        $("td[data-col=" + col +"].empty").last().removeClass('empty');
        
        // check for winners
        hasSomeOneWon();
    });
    
    
    function hasSomeOneWon()
    {
        
    }
});