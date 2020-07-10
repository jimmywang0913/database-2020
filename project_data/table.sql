create table match_2015_player(
	tourney_id  varchar(50) not null,
	tourney_name varchar(50) not null,
	surface  varchar(15) not null,
	draw_size  int not null,
	tourney_level char(1) not null,
	tourney_date varchar(15) not null,
	match_num int not null,
	idx int not null,
	winner_id int not null,
	winner_name varchar(50) not null,
	winner_hand char(1),
	winner_ioc varchar(30) not null,
	winner_age int not null,
	loser_id int not null,
	loser_name varchar(50) not null,
	loser_hand char(1) not null,
	loser_ioc varchar(30) not null,
	loser_age int not null
);

create table match_2015_match(
	idx int not null,
	winner_id int not null,
	loser_id int not null,
	score varchar(30) not null,
	matchround varchar(5) not null,
	minutes int default '0',
	w_ace int default '0',
	w_df int default '0',
	w_1stIn int default '0',
	w_1stWon int default '0',
	w_2ndWon int default '0',
	w_bpSaved int default '0',
	w_bpFaced int default '0',
	l_ace int default '0',
	l_df int default '0',
	l_1stIn int default '0',
	l_1stWon int default '0',
	l_2ndWon int default '0',
	l_bpSaved int default '0',
	l_bpFaced int default '0',
	winner_rank int default '0',
	loser_rank int default '0'
);

create table match_2016_player(
	tourney_id  varchar(50) not null,
	tourney_name varchar(50) not null,
	surface  varchar(15) not null,
	draw_size  int not null,
	tourney_level char(1) not null,
	tourney_date varchar(15) not null,
	match_num int not null,
	idx int not null,
	winner_id int not null,
	winner_name varchar(50) not null,
	winner_hand char(1),
	winner_ioc varchar(30) not null,
	winner_age int not null,
	loser_id int not null,
	loser_name varchar(50) not null,
	loser_hand char(1) not null,
	loser_ioc varchar(30) not null,
	loser_age int not null
);

create table match_2016_match(
	idx int not null,
	winner_id int not null,
	loser_id int not null,
	score varchar(30) not null,
	matchround varchar(5) not null,
	minutes int default '0',
	w_ace int default '0',
	w_df int default '0',
	w_1stIn int default '0',
	w_1stWon int default '0',
	w_2ndWon int default '0',
	w_bpSaved int default '0',
	w_bpFaced int default '0',
	l_ace int default '0',
	l_df int default '0',
	l_1stIn int default '0',
	l_1stWon int default '0',
	l_2ndWon int default '0',
	l_bpSaved int default '0',
	l_bpFaced int default '0',
	winner_rank int default '0',
	loser_rank int default '0'
);

create table match_2017_player(
	tourney_id  varchar(50) not null,
	tourney_name varchar(50) not null,
	surface  varchar(15) not null,
	draw_size  int not null,
	tourney_level char(1) not null,
	tourney_date varchar(15) not null,
	match_num int not null,
	idx int not null,
	winner_id int not null,
	winner_name varchar(50) not null,
	winner_hand char(1),
	winner_ioc varchar(30) not null,
	winner_age int not null,
	loser_id int not null,
	loser_name varchar(50) not null,
	loser_hand char(1) not null,
	loser_ioc varchar(30) not null,
	loser_age int not null
);

create table match_2017_match(
	idx int not null,
	winner_id int not null,
	loser_id int not null,
	score varchar(30) not null,
	matchround varchar(5) not null,
	minutes int default '0',
	w_ace int default '0',
	w_df int default '0',
	w_1stIn int default '0',
	w_1stWon int default '0',
	w_2ndWon int default '0',
	w_bpSaved int default '0',
	w_bpFaced int default '0',
	l_ace int default '0',
	l_df int default '0',
	l_1stIn int default '0',
	l_1stWon int default '0',
	l_2ndWon int default '0',
	l_bpSaved int default '0',
	l_bpFaced int default '0',
	winner_rank int default '0',
	loser_rank int default '0'
);

create table match_2018_player(
	tourney_id  varchar(50) not null,
	tourney_name varchar(50) not null,
	surface  varchar(15) not null,
	draw_size  int not null,
	tourney_level char(1) not null,
	tourney_date varchar(15) not null,
	match_num int not null,
	idx int not null,
	winner_id int not null,
	winner_name varchar(50) not null,
	winner_hand char(1),
	winner_ioc varchar(30) not null,
	winner_age int not null,
	loser_id int not null,
	loser_name varchar(50) not null,
	loser_hand char(1) not null,
	loser_ioc varchar(30) not null,
	loser_age int not null
);

create table match_2018_match(
	idx int not null,
	winner_id int not null,
	loser_id int not null,
	score varchar(30) not null,
	matchround varchar(5) not null,
	minutes int default '0',
	w_ace int default '0',
	w_df int default '0',
	w_1stIn int default '0',
	w_1stWon int default '0',
	w_2ndWon int default '0',
	w_bpSaved int default '0',
	w_bpFaced int default '0',
	l_ace int default '0',
	l_df int default '0',
	l_1stIn int default '0',
	l_1stWon int default '0',
	l_2ndWon int default '0',
	l_bpSaved int default '0',
	l_bpFaced int default '0',
	winner_rank int default '0',
	loser_rank int default '0'
);

create table match_2019_player(
	tourney_id  varchar(50) not null,
	tourney_name varchar(50) not null,
	surface  varchar(15) not null,
	draw_size  int not null,
	tourney_level char(1) not null,
	tourney_date varchar(15) not null,
	match_num int not null,
	idx int not null,
	winner_id int not null,
	winner_name varchar(50) not null,
	winner_hand char(1),
	winner_ioc varchar(30) not null,
	winner_age int not null,
	loser_id int not null,
	loser_name varchar(50) not null,
	loser_hand char(1) not null,
	loser_ioc varchar(30) not null,
	loser_age int not null
);

create table match_2019_match(
	idx int not null,
	winner_id int not null,
	loser_id int not null,
	score varchar(30) not null,
	matchround varchar(5) not null,
	minutes int default '0',
	w_ace int default '0',
	w_df int default '0',
	w_1stIn int default '0',
	w_1stWon int default '0',
	w_2ndWon int default '0',
	w_bpSaved int default '0',
	w_bpFaced int default '0',
	l_ace int default '0',
	l_df int default '0',
	l_1stIn int default '0',
	l_1stWon int default '0',
	l_2ndWon int default '0',
	l_bpSaved int default '0',
	l_bpFaced int default '0',
	winner_rank int default '0',
	loser_rank int default '0'
);


load data local infile './atp_matches_2015_match.csv'
into table match_2015_match
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2015_player.csv'
into table match_2015_player
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2016_match.csv'
into table match_2016_match
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2016_player.csv'
into table match_2016_player
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2017_match.csv'
into table match_2017_match
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2017_player.csv'
into table match_2017_player
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2018_match.csv'
into table match_2018_match
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2018_player.csv'
into table match_2018_player
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2019_match.csv'
into table match_2019_match
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './atp_matches_2019_player.csv'
into table match_2019_player
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;
