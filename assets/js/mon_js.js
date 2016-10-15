$(document).ready(function() {
	$('ul.nav.nav-pills.tabs li').click(function() 
    { 
	    var id_tab = this.id;
	    console.log(id_tab);
	    
	    showOnlyTabContent(id_tab);
	    	    
	});
	
	var checkedLang = $("input[name='lang']:checked").val();
	$('#' + checkedLang).addClass("active");
	
});


function showOnlyTabContent(id_tab) {
	$('#orderTabContent').addClass("hidden");
	$('#installTabContent').addClass("hidden");
	$('#uninstallTabContent').addClass("hidden");
	
	console.log("Je retire hidden à mon id");
	console.log(id_tab);
	
	$('#'+id_tab+"Content").removeClass("hidden");
}

$(document).ready(function() {
	$('#collapseStep1').collapse('show'); 
	
	$('ul.nav.nav-pills.radio li').click(function() 
    { 
	    var id_tab = this.id;
	    console.log(id_tab);
	    $('#'+id_tab+'radio').prop("checked", true);
	    console.log(id_tab + 'radio' + "checked");
     
	    if (this.id == 't45') { // Si selection Twizy 45
		    resetActiveConfig(); // Supprime le active de tous les LI de config
		    resetCheckConfig(); // Supprime les check de tous les radio de config
		    showOnlyList('t45'); // On montre seulement la liste de config 45
	    }
     
	    if (this.id == 't80') { // Si selection Twizy 80
		    resetActiveConfig(); // Supprime le active de tous les LI de config
		    resetCheckConfig(); // Supprime les check de tous les radio de config
		    showOnlyList('t80'); // On montre seulement la liste de config 80
	    }
	    
	    if (this.id == 'tx45') { // Si selection TwizyX45
	    	forceSelectModel('t45'); // On force la selection du modele 45 (au cas où)
	    }
	    
	    if (this.id == 'tx80' || this.id == 'tx80s') { // Si selection TwizyX45
	    	forceSelectModel('t80'); // On force la selection du modele 45 (au cas où)
	    }
	    
	});
	
	var checkedLang = $("input[name='lang']:checked").val();
	$('#' + checkedLang).addClass("active");
	
});

function resetActiveConfig() {
	$('#tx45').removeClass("active");
	$('#tx80').removeClass("active");
	$('#tx80s').removeClass("active");
}

function resetCheckConfig() {
	$('#tx45radio').prop("checked", false);
	$('#tx80radio').prop("checked", false);
	$('#tx80sradio').prop("checked", false);
}

function showOnlyList(n) {
	$('#txlist').addClass("hidden");  // On cache la modif 45+80
	
	if (n == 't45') {
		$('#tx45list').removeClass("hidden");  // On montre la modif 80
		$('#tx80list').addClass("hidden"); // On cache la modif 45
	}
	
	if (n == 't80') {
		$('#tx80list').removeClass("hidden");  // On montre la modif 80
		$('#tx45list').addClass("hidden"); // On cache la modif 45
	}
	
}

function forceSelectModel(n) {
	$('#'+n+'radio').prop("checked", true);
	
	if (n=='t45') {
		$('#t45').addClass("active");
		$('#t80').removeClass("active");
	}
	
	if (n=='t80') {
		$('#t80').addClass("active");
		$('#t45').removeClass("active");
	}
	
}

function nextStep(n) {
	
	// Fonction vérification à l'issue de quoi on exécute ce qui suit
	
	$('#doneIcon'+n).addClass("done")
	
	$('#collapseStep'+n).collapse('hide');
	$('#collapseStep'+(n+1)).collapse('show');
}

function prevStep(n) {
	$('#collapseStep'+n).collapse('hide');
	$('#collapseStep'+(n-1)).collapse('show');
}