SELECT title, summary FROM film WHERE LOWER(summary) 
LIKE LOWER('%Vincent%') ORDER BY id_film ASC;
