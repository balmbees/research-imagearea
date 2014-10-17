CREATE TABLE `images` (
	 `idx` int(11) NOT NULL AUTO_INCREMENT,
	 `url` varchar(255) NOT NULL,
	 `status` int(11) NOT NULL,
	 `ori_width` int(11) NOT NULL,
	 `ori_height` int(11) NOT NULL,
	 `sel_width` int(11) NOT NULL,
	 `sel_height` int(11) NOT NULL,
	 `sel_x1` int(11) NOT NULL,
	 `sel_x2` int(11) NOT NULL,
	 `sel_y1` int(11) NOT NULL,
	 `sel_y2` int(11) NOT NULL,
	 PRIMARY KEY (`idx`),
	 KEY `url` (`url`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf-8
