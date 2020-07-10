select name, hand, age, ioc, avg(winner_rank) as avg_rank from
	((select winner_id as id, winner_name as name, winner_hand as hand, winner_age as age, winner_ioc as ioc
		from match_2015_player
		where winner_name = 'Martin Klizan')
	union
	(select loser_id as id, loser_name as name, loser_hand as hand, loser_age as age, loser_ioc as ioc
		from match_2015_player
		where loser_name = 'Martin Klizan')
	order by age desc limit 1) as i,
	match_2015_match as m
	where i.id = m.winner_id
	group by name, hand, age, ioc;
	
