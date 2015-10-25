var players = [];

$('#add-player').click(function(){
	addPlayer();
});

$('#randomize').click(function(){	
	var total_players = $('.player').length; 
	var total_count = chance.integer({min: 30, max: 100});
	var current_count = 0;
	makeInterval(current_count, total_count, total_players);
});

$('#player-container').on('click', '.player', function(){
	var self = $(this);
	var index = self.index();
	
	var player = players[index];
	var str = "name: " + player['name'] + "\nage: " + player['age'] + "\nspecies: " + player['species']; 
	alert(str);

	if(self.hasClass('active')){	
		self.remove();
		players.splice(index, 1);
	}

});

function addPlayer(){
	var name = $('#name').val();
	var age = $('#age').val();
	var species = $('#species').val();

	$("<div class='player'>" + name + "</div>").appendTo('#player-container');
	$('#name, #age, #species').val('');

	players.push({
		'name': name,
		'age': age,
		'species': species
	});
}

function makeInterval(current_count, total_count, total_players){
	var index = 0;
	var interval = setInterval(function(){
		$('.player').removeClass('active');
		$('.player').eq(index).addClass('active');
		if(current_count === total_count){
			clearInterval(interval);
		}

		current_count += 1;
		index += 1;
		if(index === total_players){
			index = 0;
		}
		
	}, 100);
}