1. SELECT COUNT(VideoTitre) FROM video
	
59


2. SELECT`VideoTitre`,GROUP_CONCAT(DISTINCT`ThemeLib`,' ')FROM video JOIN thematic ON `VideoNum` = `ThematicVideoNum` JOIN theme ON `ThematicthemeNum` = `ThemeNum` WHERE (VideoNum)=3


VideoTitre
GROUP_CONCAT(DISTINCT`ThemeLib`,' ')
Aux Yeux De Tous
Thriller


