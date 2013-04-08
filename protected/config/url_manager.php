<?php

return array(
		
	//体育馆相关
    'sport'=>'sport/list',
    'sport/<sid:\d+>'=>'sport/view',
	'sport/<sid:\d+>/<action:\w+>'=>'sport/<action>',
		
	
	//默认url
	'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

);