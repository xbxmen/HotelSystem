$(document).ready(function(){
	if (!String.prototype.format) {                                                 
		String.prototype.format = function() {                                        
		    var hash = arguments;   
		    //console.log(arguments.length);
		    return this.replace(/{(\w+)}/g, function(match, item) {  
		      return typeof hash[item] != 'undefined' ? hash[item] : match;                
		    });                                                                            
		};                                                                               
	}
});
