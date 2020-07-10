select winner_name from
	(select surface, winner_name, count(*) as cnt from match_2015_player
		group by surface, winner_name
		order by cnt desc) as tmp
	where surface='Hard'
	order by tmp.cnt desc
	limit 20;
	
