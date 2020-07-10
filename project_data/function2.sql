select p.winner_name, sum(w_ace)/count(p.winner_name) as w_ace
from match_2019_player as p, match_2019_match as m
where p.winner_id = m.winner_id
group by p.winner_name
order by sum(w_ace)/count(p.winner_name) desc limit 20;

	
