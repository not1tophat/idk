<?php

use Fobe\Users\Render;

if (Render::PendingRender($user->id))
{
	echo 'pending';
}