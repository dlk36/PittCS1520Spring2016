CREATE DATABASE project1_dlk36;
USE project1_dlk36;
GRANT ALL ON project1_dlk36.* TO 'administrator'@'localhost' IDENTIFIED BY 'swordfish';
CREATE TABLE contacts (
	contact_id INT NOT NULL AUTO_INCREMENT,
	contact_name VARCHAR(30),
	contact_email VARCHAR(254),
	contact_phone VARCHAR(15),
	contact_message VARCHAR(2000),
	contact_time DATETIME NOT NULL,
	PRIMARY KEY (contact_id)
);
CREATE TABLE posts (
	post_id INT NOT NULL AUTO_INCREMENT,
	post_title VARCHAR(30),
	post_content MEDIUMTEXT NOT NULL,
	post_time DATETIME NOT NULL,
	PRIMARY KEY (post_id)
);
CREATE TABLE comments (
	comment_id INT NOT NULL AUTO_INCREMENT,
	comment_post_id INT NOT NULL,
	comment_name VARCHAR(30),
	comment_email VARCHAR(254),
	comment_comment VARCHAR(2000),
	comment_time DATETIME NOT NULL,
	PRIMARY KEY (comment_id)
);
INSERT INTO posts (post_title, post_content, post_time)
VALUES (
	'Ut dolor libero',
	'Nulla facilisi. Suspendisse vel consequat felis. Fusce lectus metus, elementum at lorem 
	sed, viverra semper eros. Suspendisse et placerat eros. Mauris iaculis nulla luctus sapien 
	lacinia feugiat. Nam pharetra mauris sed pretium viverra. Ut vestibulum odio a viverra 
	sollicitudin. Proin a quam arcu. Sed lectus nisl, scelerisque vitae dolor vitae, laoreet 
	semper quam. Nunc in orci sit amet orci accumsan lobortis. Vivamus a porta odio. Sed 
	rhoncus massa ut bibendum maximus. Proin id semper lectus, id ornare libero. Cras vulputate 
	leo eget rhoncus consequat.',
	NOW()
);
INSERT INTO posts (post_title, post_content, post_time)
VALUES (
	'Vivamus volutpat ex id orci',
	'Sed volutpat, elit ut tempus consequat, nisi nunc luctus purus, sit amet fringilla orci 
	felis vel nisl. Proin eget arcu vel ipsum pretium scelerisque nec non est. Aenean nec mi eu 
	augue pulvinar malesuada at vel turpis. Suspendisse a turpis eget quam scelerisque 
	consequat a non ipsum. Nunc egestas aliquet nibh, sit amet laoreet elit feugiat nec. Fusce 
	varius, tortor ut volutpat ultrices, mauris nisl gravida nisl, in euismod justo lacus vitae 
	lorem. Mauris et sem vel ipsum mattis cursus vitae ac nisi. Maecenas eu mauris odio.',
	NOW()
);
INSERT INTO posts (post_title, post_content, post_time)
VALUES (
	'Ut luctus diam eget tempor',
	'Suspendisse vitae iaculis lacus. Cras massa arcu, lobortis eget molestie vel, tempor id 
	tellus. Sed laoreet molestie scelerisque. Vestibulum velit elit, vehicula non magna id, 
	feugiat scelerisque ipsum. Proin varius sem dignissim mauris tempor vehicula id ornare 
	augue. Sed tempus, lacus et egestas rhoncus, sem mauris feugiat diam, non maximus quam 
	justo vitae metus. Pellentesque arcu ex, ornare sit amet nisi eget, hendrerit iaculis 
	libero.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	1, 'Helvetia Liberalis', '',
	'Donec dapibus molestie tempor. Donec pharetra libero non mi varius auctor.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	2, 'anonymous', '',
	'Vivamus efficitur odio at mi semper, et vulputate justo varius. Duis nec enim interdum, 
	volutpat nisi et, bibendum felis. Ut rutrum ultricies interdum. Vestibulum malesuada, 
	sapien eget commodo euismod, elit leo auctor odio, eleifend fermentum dui mauris sed diam.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	3, 'Saturio Remigius', '',
	'Aenean sagittis erat nibh, quis faucibus arcu rhoncus at. Maecenas sit amet venenatis 
	nisi. Nam bibendum nisl at elit mattis, vitae facilisis arcu placerat.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	1, 'anonymous', '',
	'Quisque nulla sapien, efficitur sed turpis eu, luctus laoreet elit. Nullam iaculis est a 
	fringilla tincidunt.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	1, 'Sagaristio Sabellius', '',
	'Nam quis sem neque.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	3, 'anonymous', '',
	'In hac habitasse platea dictumst.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	2, 'Novia Tremorinus', '',
	'Donec eget enim et diam porttitor tempus eget non justo.',
	NOW()
);
INSERT INTO comments (comment_post_id, comment_name, comment_email, comment_comment,
                      comment_time)
VALUES (
	3, 'anonymous', '',
	'Cras rutrum risus nec odio auctor, id elementum tortor interdum. Aenean eget nunc odio.',
	NOW()
);