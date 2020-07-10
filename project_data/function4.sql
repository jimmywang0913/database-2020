select distinct(p.winner_name)
from match_2015_match as m, match_2015_player as p
where p.winner_ioc = 'AUS'
and m.winner_id = p.winner_id
group by p.winner_name
order by sum(m.winner_rank)/count(p.winner_name) asc limit 10;